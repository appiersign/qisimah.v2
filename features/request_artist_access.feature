Feature: Request Artist Feature
  Request Artist Access
  As a User
  I need to be able to add artist(s) to my account

  Background:
    Given I am logged in

  Scenario: Requsting Access to Artist
    Given I have Successfully logged into "artist account"
    And I don't have any "artist" already linked to my account
    When I am on "Dashboard"
    Then I should see a "request artist access form" with fields such as "select artist", "select your Role", "Label / Management Name","Label / Management Company logo", "Label / Management Contact Name", "Label / Management email Address", "Label / Management Phone Number", "Label / Management website" to request for access.
    And I should see a "Social media connections form" with fields such as "Twitter", "Facebook", "Instagram","YouTube", "Soundcloud", "iTunes", "Spotify", "deezer" to request for access

  Scenario: Adding more Artist
    Given I have Successfully logged into "Label account"
    And I want to add another "artist" to my account
    And I have not reached my limit of 4 "artist" on my account
    When I am on "Artist page" and click "Add artist"
    Then I should see a "request artist access form" with fields such as "select artist", "select your Role", "Label / Management Name","Label / Management Company logo", "Label / Management Contact Name", "Label / Management email Address", "Label / Management Phone Number", "Label / Management website" to request for access.
    And I should see a "Social media connections form" with fields such as "Twitter", "Facebook", "Instagram","YouTube", "Soundcloud", "iTunes", "Spotify", "deezer" to request for access

  Scenario: Adding extra Artist after limit
    Given I have Successfully logged into "Label account"
    And I want to add another "artist" to my account
    And I have reached my limit of 4 "artist" on my account
    When I am on "Artist page" and click "Add artist"
    Then I should see a "request artist access form" with fields such as "select artist", "select your Role", "Label / Management Name","Label / Management Company logo", "Label / Management Contact Name", "Label / Management email Address", "Label / Management Phone Number", "Label / Management website" to request for access.
    And I should see a "Social media connections form" with fields such as "Twitter", "Facebook", "Instagram","YouTube", "Soundcloud", "iTunes", "Spotify", "deezer"
    And I should see a "Payment form" to request for access
