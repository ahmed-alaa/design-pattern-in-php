<?php
/**
 * Created by PhpStorm.
 * User: ahmet.ibrahim
 * Date: 2020-03-29
 * Time: 17:07
 */

class HealthPolicyFactory implements InsurancePolicyFactoryInterface
{

    public function makeInsurance(): InsuranceInterface
    {
        return new HealthInsurance();
    }

    public function makePolicy(): PolicyInterface
    {
        return new GoldPolicy();
    }
}