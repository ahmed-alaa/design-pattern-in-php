<?php
/**
 * Created by PhpStorm.
 * User: ahmet.ibrahim
 * Date: 2020-03-29
 * Time: 16:54
 */

class LifeInsuranceFactory
{
    public static function makeLifeInsurance(): InsuranceInterface
    {
        return new LifeInsurance();
    }
}