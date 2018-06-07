Feature: Youtube tab
  View youtube performance
  As a user
  I need to be able to see my youtube performance

  Scenario: View youtube performance page
    Given I am on "Dashboard"
    When I follow "Youtube"
    Then I should see "YouTube"
    And I should see "Subscribers"
    And I should see "Likes"
    And I should see "Dislikes"
    And I should see "Favourites"
    And I should see "Top Post Engagements"
    And I should see "Upload Song Button"