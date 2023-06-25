import SimpleBar from 'simpleBar';

export function initializeTeamMembers() {
	document.addEventListener( 'DOMContentLoaded', () => {
		TeamMember.init();
	} );
}

const TeamMember = {
	init() {
		const teamElements = document.querySelectorAll( '.isp-team' );

		if ( teamElements.length === 0 ) {
			return;
		}

		teamElements.forEach( ( teamElement ) => {
			this.initAccordion( teamElement );
		});
	},
	initAccordion( teamElement ) {
		const toggle = teamElement.querySelector( '.isp-team__toggle' );
		const body = teamElement.querySelector( '.isp-team__body' );
		const bodyScroll = teamElement.querySelector( '.isp-team__body-content .wp-block-group__inner-container' );
		new SimpleBar( bodyScroll, { scrollbarMaxSize : 80 } );
		toggle.addEventListener( 'click', ( event ) => {
			event.target.classList.toggle( 'is_active' );
			jQuery( body ).slideToggle();
		} );
	},
};

