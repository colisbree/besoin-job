<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class AcceptApplicationContext implements Context
{
    /**
     * @Given /^I want to accept an application$/
     */
    public function iwanttoacceptanapplication()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
