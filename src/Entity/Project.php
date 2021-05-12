<?php

namespace Entity;

use Fork\Database\Query\PreparedQuery;


/**
 * Class Project
 * represent the project in database
 */
class Project
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $readme;
    /**
     * @var string
     */
    private $createdAt;
    /**
     * @var string
     */
    private $updatedAt;
    /**
     * @var string
     */
    private $link;
    /**
     * @var string
     */
    private $git;
    /**
     * @var string
     */
    private $img;

    /**
     * Project constructor.
     * @param string $name
     * @param string $description
     * @param string $readme
     * @param string $createdAt
     * @param string $updatedAt
     * @param string $link
     * @param string $git
     * @param string $img
     * @param int|null $id
     */
    public function __construct(string $name, string $description, string $readme, string $createdAt, string $updatedAt, string $link, string $git, string $img, int $id = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->readme = $readme;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->link = $link;
        $this->git = $git;
        $this->img = $img;
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Project
     */
    public function setName(string $name): Project
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Project
     */
    public function setDescription(string $description): Project
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getReadme(): string
    {
        return $this->readme;
    }

    /**
     * @param string $readme
     * @return Project
     */
    public function setReadme(string $readme): Project
    {
        $this->readme = $readme;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     * @return Project
     */
    public function setCreatedAt(string $createdAt): Project
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     * @return Project
     */
    public function setUpdatedAt(string $updatedAt): Project
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return Project
     */
    public function setLink(string $link): Project
    {
        $this->link = $link;

        return $this;
    }

    /**
     * @return string
     */
    public function getGit(): string
    {
        return $this->git;
    }

    /**
     * @param string $git
     * @return Project
     */
    public function setGit(string $git): Project
    {
        $this->git = $git;

        return $this;
    }

    /**
     * @return string
     */
    public function getImg(): string
    {
        return $this->img;
    }

    /**
     * @param string $img
     * @return Project
     */
    public function setImg(string $img): Project
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Push data into database
     */
    public function flush(): bool
    {
        if ($this->id == null) {
            return (new PreparedQuery('INSERT INTO project (name, description, readme, createdAt, updateAt, link, git, img) VALUES (?, ?, ?, ?, ?, ?, ?, ?)'))
                ->setString($this->name)
                ->setString($this->description)
                ->setString($this->readme)
                ->setString($this->createdAt)
                ->setString($this->updatedAt)
                ->setString($this->link)
                ->setString($this->git)
                ->setString($this->img)
                ->execute();
        } else {
            return (new PreparedQuery('UPDATE project SET name=?, description=?, readme=?, createdAt=?, updateAt=?, link=?, git=?, img=? WHERE id=?'))
                ->setString($this->name)
                ->setString($this->description)
                ->setString($this->readme)
                ->setString($this->createdAt)
                ->setString($this->updatedAt)
                ->setString($this->link)
                ->setString($this->git)
                ->setString($this->img)
                ->setInt($this->id)
                ->execute();
        }
    }
}