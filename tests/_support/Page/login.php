<?php
namespace Page;
class Login
{
    // include url of current page
    public static $URL = '/log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F';
    public static $usernameField = '#mainForm #username';

    public static $passwordField = '#mainForm input[name=password]';
    public static $loginButton = '#mainForm input[type=submit]';

    public static function route($param)
    {
        return static::$URL.$param;
    }
}