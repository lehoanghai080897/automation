
<?php
use Step\Acceptance\Admin as AdminTester;
class FirstCest
{

    public function tryToTest(Step\Acceptance\Admin $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsdmin('hoanghai.cntt88@gmail.com' , 'Aa25251325');
    }
    
}
