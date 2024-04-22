<?php
// CRUD => create read update delete
namespace Core\Database\Traits;
use Core\Database\DBConnection\DBConnection;
trait HasCRUD
{
    protected function setFillables()
    {
        $fillables = [];
        foreach ($this->fillabel as $attribute){
            if (isset($this->attribute)){
                $fillables[] = $attribute . " = ?";
                $this->setValue($attribute, $this->attribute);
            }
        }
        return implode(', ', $fillables);
    }
    protected function insert()
    {
        $this->setSql("INSERT INTO {$this->tabale} SET $this->setFillabels");
    }
}