<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class HireContext implements Context
{
    /**
     * @Given /^Hire job$/
     */
    public function hirejob()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
