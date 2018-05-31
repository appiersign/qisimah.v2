Feature: Create User
  create password to complete signup
  As a guest
  I need to be able create a password to create my account

  Scenario: complete create password form
    Given I am on "users/create"
    When I fill in "Name" with "Kofi Aboagye-Akyea"
    And I fill in "Create password" with "12312qweq2"
    And I fill in "confirm password" with "12312qweq2"
    And I fill in "Account tup" with "Artist"
    Then I should press "Create account button"