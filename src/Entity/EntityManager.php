<?php

namespace Entity;

use Fork\Database\Query\PreparedQuery;
use Fork\Database\Query\Query;

abstract class EntityManager
{
    /**
     * @return Project[]
     */
    public static function get2Project(): array
    {
        $results = (new Query('SELECT * FROM project LIMIT 2'))
            ->getResult();

        return self::getProjectsFromArray($results);
    }

    /**
     * @return Project[]
     */
    public static function getAllProjects(): array
    {
        $results = (new Query('SELECT * FROM project'))
            ->getResult();

        return self::getProjectsFromArray($results);
    }

    /**
     * @param string $name
     * @return Project|null
     */
    public static function getProjectFromName(string $name): ?Project
    {
        $results = (new PreparedQuery('SELECT * FROM project WHERE link=?'))
            ->setString($name)
            ->getResult();

        return count($results) > 0 ? self::getProjectsFromArray($results)[0] : null;
    }

    /**
     * @param int $id
     * @return Project|null
     */
    public static function getProjectFromId(int $id): ?Project
    {
        $results = (new PreparedQuery('SELECT * FROM project WHERE id=?'))
            ->setString($id)
            ->getResult();

        return count($results) > 0 ? self::getProjectsFromArray($results)[0] : null;
    }

    // _.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-._.-.

    /**
     * @param array $results
     * @return Project[]
     */
    private static function getProjectsFromArray(array $results): array
    {
        $res = [];
        foreach ($results as $result) {
            $res[] = new Project(
                $result['name'],
                $result['description'],
                $result['readme'],
                $result['createdAt'],
                $result['updatedAt'] == null ? '' : $result['updatedAt'],
                $result['link'],
                $result['git'],
                $result['img'],
                $result['id']
            );
        }

        return $res;
    }
}