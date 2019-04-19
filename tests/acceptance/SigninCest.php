<?php
use Step\Acceptance\Signin as SigninTester;
class SigninCest
{

    public function hihi(Step\Acceptance\Signin $I, $scenario)
    {
        $I = new SigninTester($scenario);
        $I->SigninPAsdmin('hoanghai.cntt88@gmail.com' , 'Aa25251325');

    }

}