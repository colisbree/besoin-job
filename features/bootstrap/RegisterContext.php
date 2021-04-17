<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class RegisterContext implements Context
{
    /**
     * @Given /^I want to registry me$/
     */
    public function iwanttoregistryme()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
