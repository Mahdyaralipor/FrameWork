<?php

namespace Core\Database\ORM;
use Core\Database\Traits\HasQueryBuilder;
abstract class Model
{
    protected $table;
    protected $fillable = [];
    protected $hidden = [];
    protected $casts = [];
    protected $primaryKey = 'id';
    protected $createdAt = 'created_at';
    protected $updatedAt = 'updated_at';
    protected $deleteAt = null;
    protected $collection = [];
}