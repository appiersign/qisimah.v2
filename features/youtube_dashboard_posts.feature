Feature: youtube top posts dashboard
  top posts on youtube
  As a user
  I need to be able to see my top performing youtube posts

  Background:
    Given I am logged in

  Scenario: View all top post engagements
    When I visit the "dashboard"
    And I am on the "youtube" Tab
    Then I should see "top post engagements" on youtube
    And I should see details such as "image" as thumbnail, "caption" as caption, "likes" as likes, "number of Comments" as number of comments, "shares" as shares and "date posted" as posten on
