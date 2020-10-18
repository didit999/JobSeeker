<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class LoginContext implements Context
{
    /**
     * @Given /^I need to log into my account$/
     */
    public function iNeedToLogIntoMyAccount()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^i fill the login form$/
     */
    public function iFillTheLoginForm()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^I can log with my account$/
     */
    public function iCanLogWithMyAccount()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
