<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class PublishOfferContext implements Context
{
    /**
     * @Given /^I want to publish an offer$/
     */
    public function iwanttopublishanoffer()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
