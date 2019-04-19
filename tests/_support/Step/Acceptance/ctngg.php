<?php
namespace Step\Acceptance;
use Page\Continuewithgoogle as LoginPage;

class ctngg extends \AcceptanceTester
{

    public function loginAsdmin($name, $password)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->click('//*[@id="primary"]/div/main/div/div[1]/div/form/div[2]/div[2]/div/div/div/button');
        $I->wait(2);
    }
}