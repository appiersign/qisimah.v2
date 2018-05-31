Feature: Email Verification
  Email verification using One Time Password
  As a guest
  I need to be able type in my code to verify my email

  Background:
    Given I am on "email.verify"

  Scenario: Correct email verification code
    When I fill in "verification_code" with "123-456"
    And I press "verify"
    Then I should be on "users/create"


  Scenario: Wrong email verification code
    When I fill in "verification_code" with "456-789"
    And I press "verify"
    Then I should be on "email.verify"
    And I should see "Verification Pin is wrong"
    And I should see "456-789" in the "input" element