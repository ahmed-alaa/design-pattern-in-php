<?php
/**
 * Created by PhpStorm.
 * User: ahmet.ibrahim
 * Date: 2020-03-29
 * Time: 17:04
 */

class LifeInsurance implements InsuranceInterface
{

    public function name(): string
    {
        return 'Life Insurance';
    }

    public function description(): string
    {
        return 'Life Insurance Description';
    }
}