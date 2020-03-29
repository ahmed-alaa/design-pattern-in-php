<?php
/**
 * Created by PhpStorm.
 * User: ahmet.ibrahim
 * Date: 2020-03-29
 * Time: 17:09
 */

class LifePolicyFactory implements InsurancePolicyFactoryInterface
{

    public function makeInsurance(): InsuranceInterface
    {
        return new LifeInsurance();
    }

    public function makePolicy(): PolicyInterface
    {
        return new SilverPolicy();
    }
}