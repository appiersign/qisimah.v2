Feature: Most Played Today
  Most played song for the day
  As a user
  I need to be able to see the most played song for the day

  Background:
    Given I am logged in

  Scenario: View song radio detection
    When I visit the "dashboard"
    And I am on the "Radio" Tab
    Then I should see "Most Played Today" card
    And I should see details such as "Number" as Number of plays, "song_title" as title of song, "card_title" as title of card

  Scenario: View song radio detection
    When I visit the "dashboard"
    And I am on the "TV" Tab
    Then I should see "Most Played Today" card
    And I should see details such as "Number" as Number of plays, "song_title" as title of song, "card_title" as title of card
