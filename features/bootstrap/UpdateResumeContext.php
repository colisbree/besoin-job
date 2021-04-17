<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class UpdateResumeContext implements Context
{
    /**
     * @Given /^I want to update the job$/
     */
    public function iwanttoupdatethejob()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
