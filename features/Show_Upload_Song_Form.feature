Feature: Show Upload Song Form
  Show Song Upload Form
  As a user
  I need to be able to see song upload form

  Background:
    Given I am logged in

  Scenario: On Dashboard
    When I click the "upload song" button
    Then I should see "upload song" page
