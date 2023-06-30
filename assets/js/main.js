// Import the initializeAccordions function from the accordions module
import { initializeAccordions } from './blocks/accordions.js';
import { initializeTeamMembers } from './blocks/teamMember.js';

// Call the initializeAccordions function to initialize the accordions
initializeAccordions();
initializeTeamMembers();

jQuery(document).ready(function ($) {
    let table = new DataTable( '.wp-block-table table' );
});