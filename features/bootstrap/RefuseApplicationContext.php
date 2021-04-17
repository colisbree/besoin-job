<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class RefuseApplicationContext implements Context
{
    /**
     * @Given /^I refuse the job$/
     */
    public function irefusethejob()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
