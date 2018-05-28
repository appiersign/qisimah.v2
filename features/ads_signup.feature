Feature: Ads Signup Feature
  User signup
  As a User
  I need to be able to create an account

  Background:
    Given I am an Advertiser

  Scenario: Create new Account
    When I am on "Landing page"
    And I click on "Signup"
    Then I should see a "signup form" with fields such as "Firstname", "Last Name", "Email", "Account type", "Password", "Confirm Password"
    And I should see a "Company setup form" with fields such as "select your Role", "Company Name","Company logo", "Contact Name", "email Address", "Phone Number", "website"
    And I should see a "Social media connections form" with fields such as "Twitter", "Facebook", "Instagram","YouTube" to activate account.
