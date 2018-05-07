Feature: Music Signup Feature
  User signup
  As a User
  I need to be able to create an account

  Background:
    Given I am a new user

  Scenario: Create new Account
    When I am on "Landing page"
    And I click on "Signup"
    Then I should see a "signup form" with fields such as "Firstname", "Last Name", "Email", "Account type", "Password", "Confirm Password" to signup.

  Scenario: Verify Access to Artist
    Given I have Successfully created an "artist account"
    And I dont have any "artist" already linked to my account
    When I am Successfully "login"
    Then I should see a "verify artist form" with fields such as "select artist", "Role", "Email", "Password", "Confirm Password" to signup.
