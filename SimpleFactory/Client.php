<?php
/**
 * Created by PhpStorm.
 * User: ahmet.ibrahim
 * Date: 2020-03-29
 * Time: 16:50
 */

class Client
{
    public function insureMe()
    {
        $lifeInsurance = LifeInsuranceFactory::makeLifeInsurance();
        $lifeInsurance->name();
    }
}
