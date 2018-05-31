Feature: Email Verification Code
  Type in verification code after verification email is sent
  As a guest
  I need to be able type in my email verification code

  Background:
    Given I am on "email.verify"

  Scenario: Correct email verification code
    When I fill in "verification_code" with "123-456"
    And I press "verify"
    Then I should be on "users/create"


  Scenario: Wrong email verification code
    When I fill in "verification_code" with "123-456"
    And I press "verify"
    Then I should see "wrong verification code message"