<?php


namespace Deemonic;

class SMS
{

    protected static function resolveFacade($name)
    {
        return app()[$name];
    }

    public static function __callStatic($name, $arguments)
    {
        return (self::resolveFacade('SMS'))->$name(...$arguments);
    }

}
