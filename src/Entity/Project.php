<?php


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
    private $git;

    /**
     * @var string
     */
    private $state;

    /**
     * Array of string
     * @var array
     */
    private $keywords;

    /**
     * Project constructor.
     * @param int $id
     * @param string $name
     * @param string $description
     * @param string $git
     * @param string $state
     * @param array $keywords Array of string
     */
    public function __construct($id, $name, $description, $git, $state, array $keywords)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->git = $git;
        $this->state = $state;
        $this->keywords = $keywords;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getGit()
    {
        return $this->git;
    }

    /**
     * @param string $git
     */
    public function setGit($git)
    {
        $this->git = $git;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return array
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param string|array $keyword
     */
    public function addKeyword($keyword)
    {
        if (is_array($keyword))
            foreach ($keyword as $key) {
                if (!in_array($key, $this->keywords))
                    $this->keywords[] = $key;
            }
        else
            if (!in_array($keyword, $this->keywords))
                $this->keywords[] = $keyword;
    }


    /**
     * @param string|array $keyword
     */
    public function removeKeyword($keyword)
    {
        if (is_array($keyword))
            foreach ($keyword as $key) {
                if (!in_array($key, $this->keywords))
                    $this->keywords[] = array_diff($this->keywords, [$key]);
            }
        else
            $this->keywords = array_diff($this->keywords, [$keyword]);
    }
}