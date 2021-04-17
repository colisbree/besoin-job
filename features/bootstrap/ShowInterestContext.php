<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class ShowInterestContext implements Context
{
    /**
     * @Given /^I m intrested$/
     */
    public function iminterested()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
