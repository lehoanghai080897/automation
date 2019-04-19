<?php
namespace Step\Acceptance;
use Page\Login as LoginPage;

class Admin extends \AcceptanceTester
{

    public function loginAsdmin( $name,$password)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
//        $I->click('Sign Up');
//        $I->click('Continue with Google');
//        $I->click('Email me a login link');
//        $I->click('Lost your password?');
//        $I->click('Back to WordPress.com');
//        $I->click('Vietnamese');
//
        $I->wait(2);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->click('Continue');
        $I->wait(2);
        $I->fillField(LoginPage::$passwordField, $password);
        $I->click('Log In');
    }



}

