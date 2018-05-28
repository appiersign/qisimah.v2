<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;

class PackageContext implements Context
{


    /**
     * @Given there is :arg2 :arg1 feature
     */
    public function thereIsFeature($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Given there is :arg1 feature
     */
    public function thereIsFeature2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I type :arg1 as plan name, :arg2 as payable period
     */
    public function iTypeAsPlanNameAsPayablePeriod($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When I add all features
     */
    public function iAddAllFeatures()
    {
        throw new PendingException();
    }

    /**
     * @Then I should have :arg1 features added to the plan
     */
    public function iShouldHaveFeaturesAddedToThePlan($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see :arg1 Plan has been created.
     */
    public function iShouldSeePlanHasBeenCreated($arg1)
    {
        throw new PendingException();
    }
}
