Feature: Email Verification
  User email verification
  As a User
  I need to be able to create an account with my email

  Background:
    Given I am a new user

  Scenario: Create new Account
    When I am on "Landing page"
    And I click on "Signup"
    Then I should see a "Email verification Form" with field "Email" as email to verify email.
    And "Verification code" is sent to the email used.
