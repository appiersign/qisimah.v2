Feature: twitter top posts dashboard
  top posts on twitter
  As a user
  I need to be able to see my top performing twitter posts

  Background:
    Given I am logged in

  Scenario: View all top post engagements
    When I visit the "dashboard"
    And I am on the "twitter" Tab
    Then I should see "top post engagements" on twitter
    And I should see details such as "image" as image/video, "caption" as caption, "likes" as likes, "number of Comments" as number of comments, "shares" as shares and "date posted" as posten on
