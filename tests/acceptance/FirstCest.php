
<?php
use Step\Acceptance\Admin as AdminTester;
class CrossTechCest
{

    public function tryToTest(Step\Acceptance\Admin $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('hoanghai.cntt88@gmail.com , Aa25251325');
    }
}
