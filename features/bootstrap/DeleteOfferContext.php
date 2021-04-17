<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class DeleteOfferContext implements Context
{
    /**
     * @Given /^I want delete offer job$/
     */
    public function iwantdeleteofferjob()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
