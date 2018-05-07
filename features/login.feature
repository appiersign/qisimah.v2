Feature: Login Feature
  User login
  As a User
  I need to be able to login to my account

  Background:
    Given I have already created an account

  Scenario: Create new Account
    When I am on "Landing page"
    And I click on "Login"
    Then I should see a "Login form" with fields such as "Email / username" and "Password" to login.
