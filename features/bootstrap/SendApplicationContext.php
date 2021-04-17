<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class SendApplicationContext implements Context
{
    /**
     * @Given /^I want to send my application$/
     */
    public function iwanttosendmyapplication()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
