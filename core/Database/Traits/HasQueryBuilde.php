<?php
namespace Core\Database\Traits;
use Core\Database\DBConnection\DBConnection;
trait HasQueryBuilde
{
    private $sql = '';

    public function getSql(): string
    {
        return $this->sql;
    }

    public function setSql(string $sql): void
    {
        $this->sql = $sql;
    }
}