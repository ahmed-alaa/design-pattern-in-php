<?php

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