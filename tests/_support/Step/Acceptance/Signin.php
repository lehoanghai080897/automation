<?php
namespace Step\Acceptance;
use Page\Signin as LoginPage;

class Signin extends \AcceptanceTester
{

    public function loginAsdmin($name, $password)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        //        $I->click('Sign Up')
        $I->click('Create a new account');
//        $I->click('Sign Up');
//        $I->click('Sign Up');
//        $I->click('Sign Up');
//        $I->click('Sign Up');

        $I->wait(2);
//        $I->fillField(LoginPage::$usernameField, $name);
//        $I->click('Continue');
//        $I->wait(2);
//        $I->fillField(LoginPage::$passwordField, $password);
//        $I->click('Log In');
    }
    
}