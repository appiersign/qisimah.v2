Feature: Submit Sign Up Form
  Submit sign up form after completing form
  As a guest
  I need to be able to submit my registration form

  Scenario: Complete Sign Up form
    Given I am on "register"
    When I press "Register"
    Then I should be on "email.verify"
    And I should see "verification email sent"