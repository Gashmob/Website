<?php

/**
 * Un projet
 */
class Project
{
    /**
     * @var integer Un identifiant unique
     */
    private $id;
    /**
     * @var string Le nom du projet
     */
    private $name;
    /**
     * @var string La description du projet
     */
    private $description;
    /**
     * @var string Un lien vers le git/site du projet
     */
    private $link;
    /**
     * @var Category[] Les catégories du projet
     */
    private $categories = [];
    /**
     * @var Release[] Les versions du projet
     */
    private $releases = [];

    /**
     * @param int $id
     * @param string $name
     * @param string $description
     * @param string $link
     * @param Category[] $categories
     * @param Release[] $releases
     */
    public function __construct(int $id, string $name, string $description, string $link, array $categories, array $releases)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->link = $link;
        $this->categories = $categories;
        $this->releases = $releases;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
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
     */
    public function setName(string $name): void
    {
        $this->name = $name;
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
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
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
     */
    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return Category[]
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @param Category[] $categories
     */
    public function setCategories(array $categories): void
    {
        $this->categories = $categories;
    }

    /**
     * @return Release[]
     */
    public function getReleases(): array
    {
        return $this->releases;
    }

    /**
     * @param Release[] $releases
     */
    public function setReleases(array $releases): void
    {
        $this->releases = $releases;
    }
}