<?php
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Tests\TestCase;

class UserAccountContext implements Context
{
    /**
     * @Given I am a guest and I want to sign up
     */
    public function iAmAGuestAndIWantToSignUp()
    {

    }

    /**
     * @When I click the sign up button
     */
    public function iClickTheSignUpButton()
    {
        TestCase::get('sign.up')->assertStatus(200);
    }

    /**
     * @Then I should see the :page_title
     */
    public function iShouldSeeThe($page_title)
    {
        TestCase::get('sign.up')->assertSeeText($page_title);
    }
}
