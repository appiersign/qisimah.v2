Feature: Verification code
  User verification code
  As a User
  I need to be able to verify my email with a verification code

  Background:
    Given I have submitted my email for verification
    And a verification has been sent to my email

  Scenario: input correct verification code
    When I am on "Verification code" page
    Then I should type in  "verification code" with field code from email.
    And  I should be sent to "Personal Details" page with fields "yourname" as your name, "Password" as password, "confirm password" as confrim password,
    And select role you fall in "artist" as artist, "label rep" as label rep, "manager" as manager, "composer" as composer, "producer" as producer,"writer" as writer
    And submit.

  Scenario: input wrong verification code
    When I am on "Verification code" page
    And I type in wrong "Verification code"
    Then I should see "error message"
    And asked to confirm or resend code
