<?php
namespace Core\Database\Traits;
use Core\Database\DBConnection\DBConnection;
trait HasQueryBuilder
{
    private $sql = '';
    private $where = [];
    private $orderby = [];
    private $limit = [];
    private $values = [];
    private $bindingValue = [];
    protected function getSql(): string
    {
        return $this->sql;
    }
    protected function setSql(string $sql): void
    {
        $this->sql = $sql;
    }
    protected function resetSql()
    {
        $this->sql = [];
    }
    protected function setWhere($operator, $condition)
    {
        $query = [
            'operator' => $operator,
            'condition' => $condition
        ];
        $this->where[] = $query;
    }
    protected function resetWhere()
    {
        $this->where = [];
    }
    protected function setOrderBy($key, $exepression)
    {
        $this->orderby[] = $key . ' ' . $exepression;
    }
    protected function resetOrderBy()
    {
        $this->orderby = [];
    }
    protected function setLimit($offset, $number)
    {
        $this->limit['offset'] = (int) $offset;
        $this->limit['number'] = (int) $number;
    }
    protected function restLimit()
    {
        unset($this->limit['from']);
        unset($this->limit['offset']);
    }
    protected function setValue($attr, $value)
    {
        $this->values[$attr] = $value;
        $this->bindingValue[] = $value;
    }
    protected function restValues()
    {
        $this->values = [];
        $this->bindingValue = [];
    }
    protected function resetQuery()
    {
        $this->restValues();
        $this->restLimit();
        $this->resetOrderBy();
        $this->resetSql();
        $this->resetWhere();
    }
    protected function executeQuery()
    {
        $query = "";
        $query .= $this->sql;
        if (!empty($this->where)){
            $whereQuery = "";
            foreach ($this->where as $where){
                $whereQuery == " " ? $whereQuery .= $where['condition'] : $whereQuery .= $where['operator']. ' '. $where['condition'];
            }
            $query .= " WHERE " . $whereQuery;
        }
        if (!empty($this->orderby)){
            $query .= ' ORDER BY '. implode(', ', $this->orderby);
        }
        if (!empty($this->limit)){
            $query .= ' LIMIT '. $this->limit['number']. ' OFFSET '. $this->limit['offset'];
        }
        $query .= " ;";
        $pdoInstance = DBConnection::getDBConnectionInstance();
        $statement = $pdoInstance->prepare($query);
        if(sizeof($this->bindingValue) > sizeof($this->values)){
            sizeof($this->bindingValue) > 0 ? $statement->execute($this->bindingValue): $statement->execute();
        }else{
            sizeof($this->values) > 0 ? $statement->execute($this->values): $statement->execute();
        }
        return $statement;
    }
}