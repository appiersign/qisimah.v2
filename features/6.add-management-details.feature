Feature: Artist managment details
  Add artist management Details
  As a user
  I need to be able add artist management detail

  Scenario: complete artist management details form
    Given I am on "users/add.management"
    When I select "manager" from "Your role"
    And I fill in the following:
      | Your Name | Solomon Appier-Sign |
      | business email | Solomon@qisimah.com |
      | phone number | 0501186903 |
    And I select "Label name" from "record label"
    And I upload "record label logo"
    And I fill in the following:
      | Contact person | Solomon Appier-Sign |
      | Contact person email | SolomonAqisimah.com |
      | Contact person phone number | 0501186903 |
      | label website | www.qisimah.com |
    And I should see "connect facebook button"
    And I should see "connect twitter button"
    And I press "request"
    Then I should be on "dashboard"
    And I should see "request pending approval message"