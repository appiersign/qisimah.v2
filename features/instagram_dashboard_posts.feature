Feature: instagram top posts dashboard
  top posts on instagram
  As a user
  I need to be able to see my top performing instagram posts

  Background:
    Given I am logged in

  Scenario: View all top post engagements
    When I visit the "dashboard"
    And I am on the "instagram" Tab
    Then I should see "top post engagements" on instagram
    And I should see details such as "image" as image/video, "caption" as caption, "likes" as likes, "number of Comments" as number of comments, "shares" as shares and "date posted" as posten on
