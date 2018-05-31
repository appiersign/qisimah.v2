Feature: Create User
  User account creation
  As a guest
  I need to be able create a user account

  Scenario: complete create password form
    Given I am on "users/create"
    When I fill in "name" with "Kofi Aboagye-Akyea"
    And I fill in "password" with "12312qweq2"
    And I fill in "password_confirmation" with "12312qweq2"
    And I select "artist" from "account_type"
    And I press "Create account"
    Then I should be on the homepage