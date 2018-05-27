Feature: Verify Song
  Song verification
  As a user
  I need to be able to know if I uploaded a song that already exists

  Background:
    Given I have submitted a song

  Scenario: Uploaded song does not exists
    When Uploaded "song" does not already exist
    Then I should see the "Meta Data form"
    And I should select or type "Song title" as title, "Song Version" as version, "artist name" as Main Artist, "Featured Artist(s)" as Featured Artist(s), "Song Genre" as Genre, "Song Producer" as Produced by, "Song Album" as Album, "Song art" as Cover Art, "Record label" as Label, "Release Date" as Release Date

  Scenario: Uploaded song exists
    When Uploaded "song" exists
    Then I should be taken back to the "upload song form"
    And I should see "verification message"
