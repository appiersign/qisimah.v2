Feature: Email Verification
  Email verification using One Time Password
  As a guest
  I need to be able type in my code to verify my email

  Background:
    Given I am on "verification/email.do"

  Scenario: Correct email verification code
    When I fill in the following:
      | verification_code[] | 1 |
      | verification_code[] | 2 |
      | verification_code[] | 3 |
      | verification_code[] | 4 |
      | verification_code[] | 5 |
      | verification_code[] | 6 |
    And I press "verify"
    Then the response status code should be 200


#  Scenario: Wrong email verification code
#    When I fill in "verification_code" with "456-789"
#    And I press "verify"
#    Then I should be on "email.verify"
#    And I should see "Verification Pin is wrong"
#    And I should see "456-789" in the "input" element