Feature: Select artist to request
  Select artist to request access
  As a user
  I need to be able to request access to an artist

  Scenario: select artist form
    Given I am on "usres/request.artist"
    And I fill in "artisname" with "sarkodie"
    When I press "Search"
    Then I should be on "add artist managment details"
    And I should see "artist name"
    And I should not see "Your Details"