Feature:Facebook tab
  View facebook post performance
  As a user
  I need to be able to see my facebook post performance

  Scenario: View facebook performance page
    Given I am on "Dashboard"
    When I follow "Facebook"
    Then I should see "Facebook"
    And I should see "Followers"
    And I should see "Post Reach"
    And I should see "Post Engagement"
    And I should see "Comments"
    And I should see "Top Post Engagements"
    And I should see "Upload Song Button"