<?php

/**
 * Создайте класс Log для ведения логов.
 * Этот класс должен иметь следующие методы: сохранить в лог, получить последние N записей,
 * очистить таблицу с логами.
 * Класс Log должен использовать класс Db из предыдущей задачи (именно использовать, а не наследовать).
 */
class Db
{
    private $connection;

    public function __construct($dbName, $dbUser, $dbPassword, $dbHost = "localhost", $port = 3306)
    {
        $this->connection = new mysqli($dbHost, $dbUser, $dbPassword, $dbName, $port);
        if (!$this->connection) {
            throw new Exception("Could not connect to DB");
        }
    }

    public function escape($string)
    {
        return mysqli_escape_string($this->connection, $string);
    }


    public function dbQuery($query)
    {
        if (!$this->connection) { //если соединение не установлено
            return false;
        }

        $result = $this->connection->query($query);

        if (mysqli_error($this->connection)) { //если ошибка в запросе
            throw new Exception("Ошибка в запросе"); //бросаем исключение
        }

        if (is_bool($result)) { //если запрос не связан с получением данных
            return $result;
        }

        $data = [];
        while ($row = $result->fetch_array(MYSQLI_NUM)) {
            $data[] = $row;
        }

        return $data;
    }

    public function select($column, $table, $condition = null, $order = null, $limit = null)
    {
        $query = "SELECT $column FROM $table" .
            (isset($condition) ? " WHERE $condition" : "") .
            (isset($order) ? " ORDER BY $order" : "") .
            (isset($limit) ? " LIMIT $limit" : "");

        return $this->dbQuery($query);
    }

    public function delete($table, $condition = null)
    {
        $query = isset($condition)
            ? "DELETE FROM $table WHERE $condition"
            : "DROP TABLE $table";

        return $this->dbQuery($query);
    }

    public function edit($table, $newData, $condition)
    {
        $query = "UPDATE $table SET $newData WHERE $condition";

        return $this->dbQuery($query);
    }

    public function insert($table, $values, $column = null)
    {
        $query = "INSERT INTO $table" .
            (isset($column) ? " SET $column" : "") .
            " VALUES ($values)";

        return $this->dbQuery($query);
    }

    public function count($column, $table, $condition = null, $order = null)
    {
        $column = "COUNT($column)";

        return $this->select($column, $table, $condition, $order);
    }


    public function clearTable($table)
    {
        $query = "TRUNCATE TABLE $table";

        return $this->dbQuery($query);
    }


    public function clearTables($tables)
    {
        $array = explode(",", $tables);

        array_walk($array, function ($value) {
            $this->clearTable(trim($value));
        });

    }
}

class Log
{
    private $base;

    public function __construct()
    {
        try {
            $this->base = new Db("log", "root", "12345");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function saveLog($data)
    {
        $this->base->insert("logTable", $data, "dataColumn");
    }

    public function getLog($n = null)
    {
        return $this->base->select("dataColumn", "logTable", null, "id DESC", $n);
    }

    public function clearLog()
    {
        $this->base->clearTable("logTable");
    }
}