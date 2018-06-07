Feature:Instagram tab
  View Instagram performance
  As a user
  I need to be able to see my instagram performance

  Scenario: View Instagram performance page
    Given I am on "Dashboard"
    When I follow "Instagram"
    Then I should see "Instagram"
    And I should see "Posts"
    And I should see "Followers"
    And I should see "Following"
    And I should see "Unread DM"
    And I should see "Top Post Engagements"
    And I should see "Upload Song Button"