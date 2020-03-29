<?php
/**
 * Created by PhpStorm.
 * User: ahmet.ibrahim
 * Date: 2020-03-29
 * Time: 17:05
 */

class HealthInsurance implements InsuranceInterface
{

    public function name(): string
    {
        return 'Health Insurance';
    }

    public function description(): string
    {
        return 'Health Insurance Description';
    }
}