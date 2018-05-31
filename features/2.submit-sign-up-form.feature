Feature: Email Verification Code
  Send email verification code to user
  As a guest
  I need to be able to verify my email address

  Scenario: Complete Sign Up form
    Given I am on "sign.up"
    And I fill in "email" with "braasig@gmail.com"
    When I press "next"
    Then I should be on "verification/email.do"
    And I should see "Email Verification"