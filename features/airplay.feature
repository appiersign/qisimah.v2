Feature: Song Airplay
  Real time song detection
  As a user
  I need to be able to see live detection

  Background:
    Given I am logged in

  Scenario: View song radio detection
    When I visit the "dashboard"
    And I am on the "Radio" Tab
    Then I should see "live radio detection"
    And I should see details such as "image" as image, "title" as title, "artists" as artists, "Radio Sation" as radio station, "time played" as time played, "plays today" as plays today, "plays this week"as plays this week and "duration" as duration played

  Scenario: View song TV detection
    When I visit the "dashboard"
    And I am on the "TV" Tab
    Then I should see "live TV detection"
    And I should see details such as "image" as image, "title" as title, "artists" as artists, "TV Station" as TV Station, "time played" as time played, "plays today" as plays today, "plays this week"as plays this week and "duration" as duration played
