Feature: Artist Form
    Get request artist form
    As a user
    I need to be able to see the artist request form

    Scenario: View Artist Request Form
        Given I am logged in as "user_type"
        When I visit the "dashboard"
        Then I should see "request artist access form"