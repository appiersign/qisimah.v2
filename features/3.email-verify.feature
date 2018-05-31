Feature: Email Verification
  Email verification using One Time Password
  As a guest
  I need to be able type in my code to verify my email

  Background:
    Given I am on "verification/email.do"

  Scenario: Correct email verification code
    When I fill in the following:
      | Email-verification-code | 1 |
      | Email-verification-code-2 | 2 |
      | Email-verification-code-3 | 3 |
      | Email-verification-code-4 | 4 |
      | Email-verification-code-5 | 5 |
      | Email-verification-code-6 | 6 |
    And I press "verify"
    Then I should be on "users/register.do"
    And I should see "Personal Details"


#  Scenario: Wrong email verification code
#    When I fill in "verification_code" with "456-789"
#    And I press "verify"
#    Then I should be on "email.verify"
#    And I should see "Verification Pin is wrong"
#    And I should see "456-789" in the "input" element