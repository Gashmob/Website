<?php

use Fork\Database\Query\PreparedQuery;
use Fork\Database\Query\Query;

abstract class CategoryManager
{
    /**
     * @param string $name
     * @return Category|null
     */
    public static function getCategory(string $name): ?Category
    {
        $pq = new PreparedQuery('SELECT * FROM Category WHERE name = ?');
        $pq->setString($name);

        $result = $pq->getOneOrNullResult();

        return $result == null ? null : new Category($name);
    }

    /**
     * @param Category $category
     * @return bool
     */
    public static function insert(Category $category): bool
    {
        $pq = new PreparedQuery('INSERT INTO Category (name) VALUES (?)');
        $pq->setString($category->getName());

        return $pq->execute();
    }

    /**
     * @param string $name
     * @return bool
     */
    public static function delete(string $name): bool
    {
        $pq = new PreparedQuery('DELETE FROM Category WHERE name = ?');
        $pq->setString($name);

        return $pq->execute();
    }

    /**
     * @return Category[]
     */
    public static function getAllCategories(): array
    {
        $results = new Query('SELECT * FROM Category');

        $res = [];
        foreach ($results as $result) {
            $res[] = new Category($result['name']);
        }

        return $res;
    }

    /**
     * @param int $id
     * @return Category[]
     */
    public static function getFromProjectId(int $id): array
    {
        $pq = new PreparedQuery('SELECT category FROM Project_Category where project = ?');
        $pq->setInt($id);

        $results = $pq->getResult();

        $res = [];
        foreach ($results as $result) {
            $res[] = new Category($result['name']);
        }

        return $res;
    }
}