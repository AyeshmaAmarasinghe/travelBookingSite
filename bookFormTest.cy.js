///<reference types="cypress"/>

describe('User navigation from home page to packaging booking', () => {
    it('book travelling packaghttp://localhost/WebSite/bookings.phpe', () => {
      // Visit the home page
      cy.visit('http://localhost/WebSite/home.php');
      cy.wait(2000); // Wait for the page to load
  
      // Navigate through the slider and click on the booking button
      cy.get('.swiper-button-next').click();
      cy.get('.swiper-slide-active > .content > .btn').click();
      cy.get(':nth-child(5) > .content > .btn').click();
  
      // Assert that the URL is redirected to the booking page
      cy.url().should('include', '/bookings.php');
    });
  
    it('should autofill booking form', () => {
      // Visit the booking form page
      cy.visit('');
  
      // Fill in the booking form
      cy.get('input[name="name"]').type('testuser');
      cy.get('input[name="email"]').type('testuser58@example.com');
      cy.get(':nth-child(3) > input').type('+94 757201531');
      cy.get('input[name="address"]').type('street1, colombo');
      cy.get('input[name="location"]').type('country 1');
      cy.get('input[name="guests"]').type('2');
      
      // Interact with the date picker for arrival and leaving dates
      cy.get(':nth-child(7) > input').type('2024-08-21'); // Adjust the format as needed
      cy.get(':nth-child(8) > input').type('2024-07-31'); // Adjust the format as needed
  
      // Wait and verify
    //   cy.wait(500);
      cy.get('.btn').click(); // Verify that the form submission was successful
    });
  });
  