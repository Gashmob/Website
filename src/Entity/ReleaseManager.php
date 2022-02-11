<?php

use Fork\Database\Query\PreparedQuery;

abstract class ReleaseManager
{
    /**
     * @param int $id
     * @return Release|null
     */
    public static function getFromId(int $id): ?Release
    {
        $pq = new PreparedQuery('SELECT * FROM `Release` WHERE id = ?');
        $pq->setInt($id);

        $result = $pq->getOneOrNullResult();

        return $result == null ? null : new Release(
            $id,
            $result['version'],
            $result['title'],
            $result['description'],
            $result['link']
        );
    }

    /**
     * @param int $id
     * @return Release[]
     */
    public static function getFromProjectId(int $id): array
    {
        $pq = new PreparedQuery('SELECT * FROM `Release` WHERE project = ?');
        $pq->setInt($id);

        $results = $pq->getResult();

        $res = [];
        foreach ($results as $result) {
            $res[] = new Release(
                $result['id'],
                $result['version'],
                $result['title'],
                $result['description'],
                $result['link']
            );
        }

        return $res;
    }

    /**
     * @param Release $release
     * @param int $idProject
     * @return bool
     */
    public static function insert(Release $release, int $idProject): bool
    {
        $pq = new PreparedQuery('INSERT INTO `Release` (version, title, description, link, project) VALUES (?, ?, ?, ?, ?)');
        $pq->setString($release->getVersion());
        $pq->setString($release->getTitle());
        $pq->setString($release->getDescription());
        $pq->setString($release->getLink());
        $pq->setInt($idProject);

        return $pq->execute();
    }

    /**
     * @param Release $release
     * @return bool
     */
    public static function delete(Release $release): bool
    {
        $pq = new PreparedQuery('DELETE FROM `Release` WHERE id = ?');
        $pq->setInt($release->getId());

        return $pq->execute();
    }
}