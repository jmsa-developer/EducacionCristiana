<?php

namespace App;

use Exception;
use PDO;
use ReflectionClass;

abstract class BaseModel {

    use Query;

    /**
     * Representa una instancia de PDO
     *
     * @var object
     */
    static $db = null;

    public static function tableName(): string
    {
        return (new \ReflectionClass(get_called_class()))->getShortName();
    }


    public function __construct() {

        if (static::$db === null) {

            $conn_string = 'mysql:host=' . Database::DB_HOST . ';dbname=' . Database::DB_NAME . ';charset=utf8';
            $db = new \PDO($conn_string, Database::DB_USER, Database::DB_PASSWORD);

            // Throw an Exception when an error occurs
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            static::$db = $db;
        }

    }

    public function load($data, $formName = ''): bool
    {
        if ($formName === '' && !empty($data)) {
            $this->setAttributes($data);

            return true;
        } elseif (isset($data[$formName])) {
            $this->setAttributes($data[$formName]);

            return true;
        } else {
            return false;
        }
    }

    public function attributes(): array
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

    public function setAttributes($values): void
    {
        if (is_array($values)) {
            $attributes = array_flip($this->attributes());
            foreach ($values as $name => $value) {
                if (isset($attributes[$name])) {
                    $this->$name = $value;
                }
            }
        }
    }

    /**
     * Abstract method para obtener todos los registros de la base de datos
     *
     *
     * @return BaseModel
     * @access  public
     */
    public static function get($columns = '*') {
        $object = new static();
        $object->query = "SELECT $columns FROM ". static::tableName();
        return $object;
    }

    public static function getAll($columns = '*'): iterable {
        $object = new static();
        return $object->get($columns)->all();
    }

    public function getOne($id, $columns = '*'): iterable {
        return $this->DB()
            ->query("SELECT $columns FROM ". static::tableName() . " WHERE id = $id")
            ->fetch(\PDO::FETCH_ASSOC);
    }

    public static function getOneById($id, $columns = '*'): iterable {
        $object = new static();
        return $object->getOne($id, $columns);
    }

    public function getByConditions($conditions, $columns = '*'): iterable {
        $where = '';
        foreach ($conditions as $key => $value) {
            $where .= "$key = '$value' AND ";
        }
        $where = substr($where, 0, -4);
        return $this->DB()
            ->query("SELECT $columns FROM ". static::tableName() . " WHERE $where")
            ->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function getAllByConditions($conditions, $columns = '*'): iterable {
        $object = new static();
        return $object->getByConditions($conditions, $columns);
    }

    public function getBySql($sql): iterable {
        return $this->DB()
            ->query($sql)
            ->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insert(array $data): int {

        // Question marks
        $marks = array_fill(0, count($data), '?');
        // Fields to be added.
        $fields = array_keys($data);
        // Fields values
        $values = array_values($data);

        // Prepare statement
        $stmt = $this->DB()->prepare("
            INSERT INTO " . static::tableName() . "(" . implode(",", $fields) . ")
            VALUES(" . implode(",", $marks) . ")
        ");

        // Execute statement with values
        $stmt->execute($values);

        // Return last inserted ID.
        return $this->DB()->lastInsertId();
    }

    public function save(): int {

        $data = [];

        foreach ($this->attributes() as $attribute) {
            if ($this->$attribute !== null && $this->$attribute !== '') {
                $data[$attribute] = $this->$attribute;
            }
        }
        $marks = array_fill(0, count($data), '?');

        $fields = array_keys($data);
        // Fields values
        $values = array_values($data);

        $query = "INSERT INTO " . static::tableName() . "(" . implode(",", $fields) . ")
            VALUES(" . implode(",", $marks) . ")";

        // Prepare statement
        $stmt = $this->DB()->prepare($query);

        // Execute statement with values
        $stmt->execute($values);

        // Return last inserted ID.
        return $this->DB()->lastInsertId();
    }

    /**
     * El metodo devuelve una conexion PDO de la base de datos.
     *
     * @return object
     * @access  public
     */
    protected function DB(): PDO {

        return static::$db;
    }

}