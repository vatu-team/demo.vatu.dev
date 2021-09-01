describe( 'Heatlh Checks', function () {

	// Check for 200 response from home page.
	it('Should return a 200 status.', function () {

		cy.request( '/' )
			.its('status')
			.should('be.equal', 200);

	});

	// Check Fresh theme is running.
	it('Should have theme active.', function () {

		cy.visit( '/' );

		cy.get( 'body' )
			.should( 'have.class', 'is-light-theme' );

	});

	// Check bottom of page is loaded.
	it('Should load footer.', function () {

		cy.visit( '/' );

		cy.get('[role=contentinfo]')
			.should( 'exist' );

		cy.percySnapshot( 'Front Page', { widths: [320, 1024] } );

	});

});
