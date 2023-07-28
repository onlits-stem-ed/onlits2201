<?php

final class RegexExperiment
{
    public static function isHello(string $string): bool
    {
        if (preg_match('/hello/i', $string))
            return true;
        else
            return false;
    }
    public static function isFullName(string $name): bool
    {
        $pattern = '/^\w+\s?(\w+)?\s?(\w+)?$/';
        return preg_match($pattern, $name) ? true : false;
    }
    public static function isPanValid(string $pan): bool
    {
        $pattern = '/[A-Z]{5}[0-9]{4}[A-Z]{1}/';
        if (preg_match($pattern, $pan))
            return true;
        else
            return false;
    }
    public static function validEmail(string $email): bool
    {
        $pattern = '/^([a-z0-9_.]+)([@])([a-z0-9]+)([.])([a-z]{2,3})$/';
        return preg_match($pattern, $email) ? true : false;
    }
}
