Feature: TV tab
  View TV airplay performance
  As a user
  I need to be able to see my TV airplay performance

  Scenario: View radio airplay performance page
    Given I am on "Dashboard"
    When I follow "TV"
    Then I should see "Television"
    And I should see "Total Plays Today"
    And I should see "Most Played"
    And I should see "All-time Best"
    And I should see "Top Broadcaster"
    And I should see "Live TV Detections"
    And I should see "Upload Song Button"