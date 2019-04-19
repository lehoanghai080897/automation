<?php
namespace Page;
class Login
{
    // include url of current page
    public static $URL = 'https://wordpress.com/log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F';
    public static $usernameField = '//*[@id="usernameOrEmail"]';

    public static $passwordField = '//*[@id="password"]';
    public static $loginButton = '//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[2]/button';


}