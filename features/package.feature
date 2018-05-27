Feature: Plan Feature
  User subscription Plan
  As an admin
  I need to be able to create plans

  Background:
    Given I am logged in as an admin

  Scenario: Create Basic Plan
    Given there is 1 "artist(s) Account(s)" feature
    And there is "real time detection dashboard" feature
    And there is "Automated Tweets" feature
    When I type "Basic" as plan name, "Monthly" as payable period
    And I add all features
    Then I should have 3 features added to the plan and be able to see "Basic" Plan has been created.

  Scenario: Create Standard Plan
    Given there is 1 "artist(s) Account(s)" feature
    And there is "real time detection dashboard" feature
    And there is "Automated Tweets" feature
    And there is "Content play Snapshot/Rank" feature
    And there is "Report Summary" feature
    When I type "Standard" as plan name, "Monthly" as payable period
    And I add all features
    Then I should have 5 features added to the plan and be able to see "Standard" Plan has been created.

  Scenario: Create Premium Plan
    Given there is 4 "artist(s) Account(s)" feature
    And there is "real time detection dashboard" feature
    And there is "Automated Tweets" feature
    And there is "Content play Snapshot/Rank" feature
    And there is "Report Summary" feature
    And there is "General report" feature
    And there is "Content Report" feature
    And there is "Compare" feature
    When I type "Premium" as plan name, "Monthly" as payable period
    And I add all features
    Then I should have 5 features added to the plan and be able to see "Premium" Plan has been created.

  Scenario: Create Enterprise Plan
    Given there is "unlimited" "artist(s) Account(s)" feature
    And there is "real time detection dashboard" feature
    And there is "Automated Tweets" feature
    And there is "Content play Snapshot/Rank" feature
    And there is "Report Summary" feature
    And there is "General report" feature
    And there is "Content Report" feature
    And there is "Compare" feature
    And there is "Pulse Report" feature
    When I type "Enterprise" as plan name, "Monthly" as payable period
    And I add all features
    Then I should have 5 features added to the plan and be able to see "Enterprise" Plan has been created.
