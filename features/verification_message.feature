Feature: Verification message
  If song being uploaded is different from original or same as original
  As a user
  I need to be able to verify which version it is

  Background:
    Given I am on "verification message"
    And Message This song sounds like "Song Title" by "Artist name"

  Scenario: Uploaded song is same as existing one
    When Uploaded "song" is the same one that exists
    Then I should click "Yes, this is the same song" button


  Scenario: Uploaded song is a remix or
    When Uploaded "song" is the same one that exists
    Then I should click "No, this is the same song" button
