<?php

namespace App;

use Exception;
use PDO;

abstract class BaseModel {

    /**
     * Representa una instancia de PDO
     *
     * @var object
     */
    static $db = null;

    /**
     * El nombre de la tabla en la base de datos del modelo
     *
     * @var string
     */
    private $_table;

    /**
     * Construccion del modelo
     *
     */
    public function __construct($table_name) {

        if (static::$db === null) {

            $conn_string = 'mysql:host=' . Database::DB_HOST . ';dbname=' . Database::DB_NAME . ';charset=utf8';
            $db = new \PDO($conn_string, Database::DB_USER, Database::DB_PASSWORD);

            // Throw an Exception when an error occurs
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            static::$db = $db;
        }

        $this->_table = $table_name;
    }

    /**
     * Abstract method para obtener todos los registros de la base de datos
     *
     *
     * @return array
     * @access  public
     */
    public function get($columns = '*'): iterable {

        return $this->DB()
            ->query("SELECT $columns FROM ". $this->_table)
            ->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function getAll($columns = '*'): iterable {
        $object = new static();
        return $object->get($columns);
    }

    public function getOne($id, $columns = '*'): iterable {
        return $this->DB()
            ->query("SELECT $columns FROM ". $this->_table . " WHERE id = $id")
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
            ->query("SELECT $columns FROM ". $this->_table . " WHERE $where")
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

        if($this->_table === ""){
            throw new Exception("Attribute _table is empty string!");
        }

        // Question marks
        $marks = array_fill(0, count($data), '?');
        // Fields to be added.
        $fields = array_keys($data);
        // Fields values
        $values = array_values($data);

        // Prepare statement
        $stmt = $this->DB()->prepare("
            INSERT INTO " . $this->_table . "(" . implode(",", $fields) . ")
            VALUES(" . implode(",", $marks) . ")
        ");

        // Execute statement with values
        $stmt->execute($values);

        // Return last inserted ID.
        return $this->DB()->lastInsertId();
    }

    /**
     * El metodo devuelve una coneccion PDO de la base de datos.
     *
     * @return object
     * @access  public
     */
    protected function DB(): PDO {

        return static::$db;
    }

}