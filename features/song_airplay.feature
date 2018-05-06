Feature: Song Airplay
  Real time song detection
  As a user
  I need to be able to see live detection

  Background:
    Given I am logged in

  Scenario: View song detection
    When I visit the "dashboard"
    Then I should see "live detection"
    And I should see details such as "image", "title", "artists", "broadcaster", "time played", "plays today", "plays this week" and "duration"