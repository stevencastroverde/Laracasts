<?php

class QueryBuilder

{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    public function insertName($table, $info) {
        $statement = $this->pdo->prepare("INSERT INTO {$table}(id, name)  VALUES (NULL ,'{$info}')");

        $statement->execute();

    }

}