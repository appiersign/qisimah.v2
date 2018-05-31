Feature: Sign Up
  User registration
  As I guest
  I need to be able to sign up

  
  Scenario: Home Page
    Given I am on "welcome"
    When I follow "Sign Up"
    Then I should see "Welcome to Qisimah"