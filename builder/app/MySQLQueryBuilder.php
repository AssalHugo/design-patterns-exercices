<?php

namespace App;

class MySQLQueryBuilder implements QueryBuilderInterface
{
    protected $query;

    public function select(string $fields): QueryBuilderInterface
    {
        $this->query['select'] = $fields;

        return $this;
    }

    public function from(string $table): QueryBuilderInterface
    {
        $this->query['from'] = $table;

        return $this;
    }

    public function where(string $condition): QueryBuilderInterface
    {
        $this->query['where'] = $condition;

        return $this;
    }

    public function orderBy(string $order): QueryBuilderInterface
    {
        $this->query['order'] = $order;

        return $this;
    }

    public function getQuery(): string
    {
        $query = 'SELECT ' . $this->query['select'] . ' FROM ' . $this->query['from'];

        if (isset($this->query['where'])) {
            $query .= ' WHERE ' . $this->query['where'];
        }

        if (isset($this->query['order'])) {
            $query .= ' ORDER BY ' . $this->query['order'];
        }

        $query .= ';';

        return $query;
    }
}