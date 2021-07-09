describe( 'Smoke tests', function () {

	// Check for 200 response from home page.
	it('Should return a 200 status.', function () {

		cy.request( '/' )
			.its('status')
			.should('be.equal', 200);

			//cy.percySnapshot();

	});

});
