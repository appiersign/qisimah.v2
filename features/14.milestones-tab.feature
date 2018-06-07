Feature: Milestones tab
  View key airplay milestones
  As a user
  I need to be able to see my key airplay milestones

  Scenario: View key airplay milestones
    Given I am on "Dashboard"
    When I follow "Milestones"
    Then I should see "Milestone"
    And I should see "Best Performing"
    And I should see "Longest on chart"
    And I should see "Most Radio Station Plays"
    And I should see "Most Country Plays"
    And I should see "Achievement Milestone"
    And I should see "Upload Song Button"