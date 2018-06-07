Feature: Create User
  User account creation
  As a guest
  I need to be able create a user account

  Scenario: complete personal details form
    Given I am on "users/register.do"
    When I fill in the following:
      | name | Solomon Appier-Sign |
      | password | secret          |
      | password_confirmation | secret |
      | nick_name | braasig |
    And I select "m" from "gender"
    And I select "artist" from "accounts"
    And I press "register"
    Then I should be on "artists/request.do"