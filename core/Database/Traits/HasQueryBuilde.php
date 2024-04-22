<?php
namespace Core\Database\Traits;
use Core\Database\DBConnection\DBConnection;
trait HasQueryBuilde
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
    protected function setLimit($from, $number)
    {
        $this->limit['from'] = (int) $from;
        $this->limit['number'] = (int) $number;
    }
    protected function restLimit()
    {
        unset($this->limit['from']);
        unset($this->limit['number']);
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

}