<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class RegisterContext implements Context
{
    /**
     * @Given /^I need to register to look for a new job$/
     */
    public function iNeedToRegisterToLookForANewJob()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^i fill the registration form$/
     */
    public function iFillTheRegistrationForm()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^I can log with my new account$/
     */
    public function iCanLogWithMyNewAccount()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Given /^I need to register to recruit new employees$/
     */
    public function iNeedToRegisterToRecruitNewEmployees()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
