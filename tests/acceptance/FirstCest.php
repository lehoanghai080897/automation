
<?php
use Step\Acceptance\Admin as Admin;
class FirstCest
{
    public function tryToTest(Admin $I, $scenario)
    {
        $I = new Admin($scenario);
        $I->loginAsdmin("hoanghai.cntt88@gmail.com" , "Aa25251325");
    }
}
