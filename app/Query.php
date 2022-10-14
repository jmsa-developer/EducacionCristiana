<?php

namespace App;

trait Query
{
    protected $query;

    protected $limit;

    protected $result;

    public static function find()
    {

        $q = new static();

        $q->query = "SELECT * FROM " . static::tableName();

        return $q;
    }

    public function where($conditions)
    {
        $where = static::buildCondition($conditions);
        $this->query .= " WHERE $where";
        return $this;
    }

    public function whereNot($conditions)
    {

        $where = static::buildCondition($conditions, '!=');
        $this->query .= " WHERE $where";
        return $this;
    }


    public static function findQuery($conditions)
    {

        $q = new static();

        $q->query = "SELECT * FROM " . static::tableName() . " WHERE " . static::tableName() . "." . static::buildCondition($conditions);

        return $q;
    }

    private static function buildCondition($conditions, $equal = '=')
    {

        $where = '';

        foreach ($conditions as $key => $value) {
            $where .= "$key $equal '$value' AND ";
        }

        $where = substr($where, 0, -4);

        return $where;
    }

    public function one()
    {
        $this->result = $this->DB()->query($this->query)->fetch(\PDO::FETCH_ASSOC);
        $modelName = get_called_class();
        $model = new $modelName;
        return static::populateRecord($model, $this->result);
    }


    public function all()
    {

        if ($this->limit) {
            $this->query .= " limit $this->limit";
        }

        $this->result = $this->DB()->query($this->query)->fetchAll(\PDO::FETCH_ASSOC);
        return $this->result;
    }

    public static function populateRecord($record, $row)
    {
        $columns = array_flip($record->attributes());

        foreach ($row as $name => $value) {

            if (isset($columns[$name])) {
                $record->$name = $value;
            }
        }
        return $record;
    }

    public static function instantiate()
    {
        return new static();
    }

    public function count()
    {
        return $this->DB()->query($this->query)->rowCount();
    }

    public function attributes()
    {
        $class = new ReflectionClass($this);
        $names = [];
        foreach ($class->getProperties(\ReflectionProperty::IS_PUBLIC) as $property) {
            if (!$property->isStatic()) {
                $names[] = $property->getName();
            }
        }

        return $names;
    }


    public function limit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

}