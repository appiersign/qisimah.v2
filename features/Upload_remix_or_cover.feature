Feature: Upload remix or cover
  Upload Remix or cover
  As a user
  I need to be able to upload remix or song covers

  Background:
    Given I am on "verification Message"


  Scenario: Uploaded song is a remix or cover and original already exists
    When "original version" of Uploaded "song" exist
    And I am given "verification message"
    Then I should select "Yes, it is a remix or cover" button
    And I should see "Meta Data Form"
