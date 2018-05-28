Feature: Submit Song
  Upload select song
  As a user
  I need to be able to sumbit a song

  Background:
    Given I have completed the "song upload form"

  Scenario: Upload song file
    When I click the "Upload" button
    Then I should see loader whilst upload is in progress
