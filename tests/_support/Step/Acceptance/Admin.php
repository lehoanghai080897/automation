<?php
namespace Step\Acceptance;
use Page\Login as LoginPage;

class Admin extends \AcceptanceTester
{

    public function loginAsdmin( $name,$password)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->click('Continue');
        $I->wait(2);
        $I->fillField(LoginPage::$passwordField, $password);
        $I->click('Log In');
    }

}

