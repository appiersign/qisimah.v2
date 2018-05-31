Feature: Sign Up Form
  User registration form
  As a guest
  I need to be able to see the registration form


  Scenario: Registration Page
    Given I am on "sign.up"
    Then I should see "Welcome to Qisimah"
    And I should see an "input" element