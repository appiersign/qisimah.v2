<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }


    /**
     * @Given I am logged in as an admin
     */
    public function iAmLoggedInAsAnAdmin()
    {
        throw new PendingException();
    }

    /**
     * @Given I am logged in
     */
    public function iAmLoggedIn()
    {
        throw new PendingException();
    }

    /**
     * @When I visit the :arg1
     */
    public function iVisitThe($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see :arg1
     */
    public function iShouldSee($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see details such as :arg1, :arg2, :arg3, :arg4, :arg5, :arg6, :arg7 and :arg8
     */
    public function iShouldSeeDetailsSuchAsAnd($arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7, $arg8)
    {
        throw new PendingException();
    }

}
