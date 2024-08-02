///<reference types="cypress"/>

describe('User Registration and Login Test', () => {
    it('should autofill registration form and redirect to login', () => {
      // Visit the registration page
      cy.visit('http://localhost/WebSite/register.php');
      
      // Fill in the registration form
      cy.get('input[name="username"]').type('testuser');
      cy.get('input[name="email"]').type('testuser58@example.com');
      cy.get('input[name="age"]').type('25');
      cy.get('input[name="password"]').type('Password123!');
      
      // Click the register button
      cy.get('.btn1').click();
      cy.wait(3000)
      cy.get('.btn1')

      
    });
  
    it('should autofill login form and redirect to home', () => {
      // Visit the login page directly
      cy.visit('http://localhost/WebSite/index.php');
      
      // Fill in the login form
      cy.get('input[name="email"]').type('testuser58@example.com');
      cy.get('input[name="password"]').type('Password123!');
      cy.get('.btn1').click();
      cy.wait(3000)
      
      // Assert that the URL is redirected to the home page
      cy.visit('http://localhost/WebSite/home.php');
    });
  });
  