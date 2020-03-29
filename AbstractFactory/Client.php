<?php
/**
 * Created by PhpStorm.
 * User: ahmet.ibrahim
 * Date: 2020-03-29
 * Time: 20:58
 */

class Client
{
    public function healthInsurance()
    {
        $healthPolicyInsurance = new HealthPolicyFactory();
        $insurance = $healthPolicyInsurance->makeInsurance();
        $policy = $healthPolicyInsurance->makePolicy();

        echo sprintf('My insurance is %s and it follows %s poligy', $insurance->name(), $policy->name());
    }

    public function lifeInsurance()
    {
        $lifePolicyInsurance = new LifePolicyFactory();
        $insurance = $lifePolicyInsurance->makeInsurance();
        $policy = $lifePolicyInsurance->makePolicy();

        echo sprintf('My insurance is %s and it follows %s poligy', $insurance->name(), $policy->name());
    }
}