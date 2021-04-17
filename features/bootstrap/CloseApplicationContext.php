<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class CloseApplicationContext implements Context
{
    /**
     * @Given /^I want to close application$/
     */
    public function iwanttocloseapplication()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
