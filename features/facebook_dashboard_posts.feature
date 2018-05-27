Feature: facebook top posts dashboard
  top posts on facebook
  As a user
  I need to be able to see my top performing facebook posts

  Background:
    Given I am logged in

  Scenario: View all top post engagements
    When I visit the "dashboard"
    And I am on the "facebook" Tab
    Then I should see "top post engagements" on facebook
    And I should see details such as "image" as image, "caption" as caption, "likes" as likes, "number of Comments" as number of comments, "shares" as shares and "date posted" as posten on
