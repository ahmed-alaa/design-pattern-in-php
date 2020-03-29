<?php
/**
 * Created by PhpStorm.
 * User: ahmet.ibrahim
 * Date: 2020-03-29
 * Time: 17:07
 */

interface InsurancePolicyFactoryInterface
{
    public function makeInsurance(): InsuranceInterface;

    public function makePolicy(): PolicyInterface;
}