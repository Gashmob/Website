<?php


class Article
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $subtitle;

    /**
     * Array of string
     * @var array
     */
    private $keywords;

    /**
     * Article constructor.
     * @param int $id
     * @param string $title
     * @param string $subtitle
     * @param array $keywords Array of string
     */
    public function __construct($id, $title, $subtitle, array $keywords)
    {
        $this->id = $id;
        $this->title = $title;
        $this->subtitle = $subtitle;
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * @param string $subtitle
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
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