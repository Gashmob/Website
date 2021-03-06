<?php

namespace Fork\Request;

/**
 * Class Cookie
 * Allow to set and get cookie easily
 * @package Fork
 */
class Cookie
{
    /**
     * @param string $name
     * @return mixed|null
     */
    public function get($name)
    {
        return isset($_COOKIE[$name]) ? $_COOKIE[$name] : null;
    }

    public function set($name, $value = "", $expires = 0)
    {
        setcookie($name, $value, $expires);
    }
}