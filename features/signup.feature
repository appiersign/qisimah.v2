Feature: Sign Up Form
  User registration
  As a Visitor
  I need to be able to create an account with my email

  Background:
    Given I am a guest and I want to sign up

  Scenario: On the welcome page
    When I click the sign up button
    Then I should see the "user registration form"