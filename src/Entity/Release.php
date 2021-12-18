<?php

/**
 * Une release de projet
 */
class Release
{
    /**
     * @var integer Un identifiant unique
     */
    private $id;
    /**
     * @var string Le numéro de version du projet x.y.z
     */
    private $version;
    /**
     * @var string Le titre de la version
     */
    private $title;
    /**
     * @var string La description de la version
     */
    private $description;
    /**
     * @var string Un lien vers la version
     */
    private $link;

    /**
     * @param int $id
     * @param string $version
     * @param string $title
     * @param string $description
     * @param string $link
     */
    public function __construct(int $id, string $version, string $title, string $description, string $link)
    {
        $this->id = $id;
        $this->version = $version;
        $this->title = $title;
        $this->description = $description;
        $this->link = $link;
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
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
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
}