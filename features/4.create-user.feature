Feature: Create User
  User account creation
  As a guest
  I need to be able create a user account

  Scenario: complete create password form
    Given I am on "users/register.do"
    When I fill in the following:
      | full-name | Solomon Appier-Sign |
      | password | secret          |
      | password_confirmation | secret |
    And I select "artist" from "account_type"
    And I press "register"
    Then I should be on "welcome"