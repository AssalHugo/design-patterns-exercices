<?php

namespace App;

interface QueryBuilderInterface
{
    public function select(string $fields): QueryBuilderInterface;
    public function from(string $table): QueryBuilderInterface;
    public function where(string $condition): QueryBuilderInterface;
    public function orderBy(string $order): QueryBuilderInterface;
    public function getQuery(): string;
}