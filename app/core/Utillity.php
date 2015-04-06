<?php
class Util
{
    public static function cleanInt($var)
    {
        return abs(trim(strip_tags((int)$var)));
    }

    public static function varCheck($var)
    {
        return htmlspecialchars((trim( strip_tags( $var ))));
    }

}
