Feature: Email Verification Code
  Send email verification code to user
  As a guest
  I need to be able to verify my email address

  Scenario: Complete Sign Up form
    Given I am on "sign.up"
    And I fill in "email" with "qisimah2@mailinator.com"
    When I press "next"
    Then I should receive "123-456" as my verification code
    And I should be on "verification/email.do"
    And I should see "Email Verification"