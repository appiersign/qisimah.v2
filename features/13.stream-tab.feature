Feature: Streams tab
  View Streams performance
  As a user
  I need to be able to see my Streams performance

  Scenario: View Stream performance page
    Given I am on "Dashboard"
    When I follow "Streams"
    Then I should see "Streams"
    And I should see "SoundCloud"
    And I should see "Deezer"
    And I should see "Spotify"
    And I should see "itunes"
    And I should see "Most streamed Songs"
    And I should see "Upload Song Button"

  Scenario: View Most streamed song performance on other platforms expansion
    Given I am on "Streams"
    When I follow "most streamed song card"
    Then I should see "card expand"
    And I should see "songs stram performance on SoundCloud"
    And I should see "songs stram performance on Deezer"
    And I should see "songs stram performance on Spotify"
    And I should see "songs stram performance on itunes"