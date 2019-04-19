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

//$I->amOnPage('/log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F');
//        $I->fillField('//*[@id="usernameOrEmail"]', 'hoanghai.cntt88@gmail.com');
//        $I->click('Continue');
//        $I->wait(2);
//
//        $I->fillField('//*[@id="password"]', 'Aa25251325');
//        $I->click('Log In');