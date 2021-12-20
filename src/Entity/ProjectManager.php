<?php

use Fork\Database\Query\PreparedQuery;

abstract class ProjectManager
{
    /**
     * @param int $id
     * @return Project|null
     */
    public static function getFromId(int $id): ?Project
    {
        $pq = new PreparedQuery('SELECT * FROM Project WHERE id = ?');
        $pq->setInt($id);

        $result = $pq->getOneOrNullResult();

        return $result == null ? null : new Project(
            $id,
            $result['name'],
            $result['description'],
            $result['link'],
            CategoryManager::getFromProjectId($id),
            ReleaseManager::getFromProjectId($id)
        );
    }

    /**
     * @param string $name
     * @return Project|null
     */
    public static function getFromName(string $name): ?Project
    {
        $pq = new PreparedQuery('SELECT * FROM Project WHERE name = ?');
        $pq->setString($name);

        $result = $pq->getOneOrNullResult();

        return $result == null ? null : new Project(
            $result['id'],
            $name,
            $result['description'],
            $result['link'],
            CategoryManager::getFromProjectId($result['id']),
            ReleaseManager::getFromProjectId($result['id'])
        );
    }

    /**
     * @param int $nb
     * @return Project[]
     */
    public static function getNb(int $nb = 1): array
    {
        $pq = new PreparedQuery('SELECT id FROM Project LIMIT ?');
        $pq->setInt($nb);

        $results = $pq->getResult();

        $res = [];
        foreach ($results as $result) {
            $res[] = self::getFromId($result['id']);
        }

        return $res;
    }

    /**
     * @param Project $project
     * @return bool
     */
    public static function insert(Project $project): bool
    {
        $pq = new PreparedQuery('INSERT INTO Project (name, description, link) VALUES (?, ?, ?)');
        $pq->setString($project->getName());
        $pq->setString($project->getDescription());
        $pq->setString($project->getLink());

        $res = $pq->execute();

        $np = self::getFromName($project->getName());
        foreach ($project->getCategories() as $category) {
            self::addCategory($np->getId(), $category);
        }
        foreach ($project->getReleases() as $release) {
            self::addRelease($np->getId(), $release);
        }

        return $res;
    }

    /**
     * @param int $id
     * @param Category $category
     * @return bool
     */
    public static function addCategory(int $id, Category $category): bool
    {
        $pq = new PreparedQuery('INSERT INTO Project_Category (project, category) VALUES (?, ?)');
        $pq->setInt($id);
        $pq->setString($category->getName());

        return $pq->execute();
    }

    /**
     * @param int $id
     * @param Release $release
     * @return bool
     */
    public static function addRelease(int $id, Release $release): bool
    {
        return ReleaseManager::insert($release, $id);
    }
}