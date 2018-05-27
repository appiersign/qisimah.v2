Feature: milestone top posts dashboard
  top posts on milestone
  As a user
  I need to be able to see my top performing milestone posts

  Background:
    Given I am logged in

  Scenario: View all top post engagements
    When I visit the "dashboard"
    And I am on the "milestone" Tab
    Then I should see "current milestones" achieved by songs airplay
    And I should see details such as "image" as song art, "Title" as title of milestone, "Description" as descripton of milestone
