Feature: Sign Up
  User registration
  As I guest
  I need to be able to sign up

  
  Scenario: Home Page
    Given I am on the homepage
    When I follow "Register"
    Then I should see "User Registration"