Feature: Stream detection table
  top streamed songs
  As a user
  I need to be able to see my most streamed songs

  Background:
    Given I am logged in

  Scenario: View all top streamed songs
    When I visit the "dashboard"
    And I am on the "Stream" Tab
    Then I should see "most stramed song" on all stream services
    And I should see details such as "image" as image, "title" as title, "artists" as artists, "stream source" as source, "streams for the day" as streams for today and "see more" link
