Feature: Register
  Scenario: As a job seeker I want to register so that i look for a new job
    Given I need to register to look for a new job
    When i fill the registration form
    Then I can log with my new account
  Scenario: As a recruiter I want to register so that i recruit new employes
    Given I need to register to recruit new employees
    When i fill the registration form
    Then I can log with my new account