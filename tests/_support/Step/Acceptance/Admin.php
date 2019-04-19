<?php
namespace Step\Acceptance;
use Page\Login as LoginPage;

class Admin extends \AcceptanceTester
{

    public function loginAsdmin()
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->click('Continue');
        $I->fillField(LoginPage::$passwordField, $password);
        $I->click('Logn In');
    }

}

