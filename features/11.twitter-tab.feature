Feature:Twitter tab
  View Twitter performance
  As a user
  I need to be able to see my Twitter performance

  Scenario: View Twitter performance page
    Given I am on "Dashboard"
    When I follow "Twitter"
    Then I should see "Twitter"
    And I should see "Tweets"
    And I should see "Followers"
    And I should see "Following"
    And I should see "Unread DM"
    And I should see "Top Twitter Post Engagements"
    And I should see "Upload Song Button"