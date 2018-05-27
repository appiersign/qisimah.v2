Feature: stream detection table expand
  Top streamed songs
  As a user
  I need to be able to see my most streamed songs

    Background:
      Given I am logged in
      And on "Stream" tab on dashboard

    Scenario: expand top streamed song
      When I click on "see more" link on streamed song
      Then I should see "expanded song stream" on other stream services
      And I should see details such as "image" as image, "title" as title, "artists" as artists, "stream source" as source, "streams for the day" as streams for today and "close" link
