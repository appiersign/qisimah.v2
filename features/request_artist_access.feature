Feature: Request Artist
  Request Artist Access
  As a user
  I need to be able to add artist to my account

  Background:
    Given I am logged in

  Scenario: Submit Artist Request Form
    When I type "artist name" as name, "select role" as role, "Company Name" as compay,"Company logo" as logo, "Contact Name" as contact, "email Address" as email, "Phone Number" as telephone, "website" as website, "Twitter" as twitter, "Facebook" as facebook, "Instagram" as instagram,"YouTube" as youtube.
    And I click request
    Then I should see "your request has been submitted!"