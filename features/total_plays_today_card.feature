Feature: Total Plays Today Card
  Real time total plays for the day
  As a user
  I need to be able to see total plays for the day

  Background:
    Given I am logged in

  Scenario: View song radio detection
    When I visit the "dashboard"
    And I am on the "Radio" Tab
    Then I should see "Total Plays Today" card
    And I should see details such as "Number" as Total number of plays, "title" as title of card

  Scenario: View song radio detection
    When I visit the "dashboard"
    And I am on the "TV" Tab
    Then I should see "Total Plays Today" card
    And I should see details such as "Number" as Total number of plays, "title" as title of card
