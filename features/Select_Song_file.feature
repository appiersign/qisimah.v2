Feature: Select Song file
  Select Song file
  As a user
  I need to be able to select song file

  Background:
    Given I am on "Upload form"

  Scenario: Select song file
    When I click the "Select Audio file" button
    Then I should see the file explorer window
    And I should select a "song" by double clicking a song file
