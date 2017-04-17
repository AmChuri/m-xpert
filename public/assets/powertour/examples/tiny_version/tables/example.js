// example: tables
// version: tiny
$(document).ready(function($){
	$.powerTour({
		tours : [
			{
				trigger            : '#powertour-demo-trigger-id',
				startWith          : 1,
				easyCancel         : true,
				escKeyCancel       : true,
				scrollHorizontal   : false,
				keyboardNavigation : true,
				highlightStartSpeed: 200,
				highlightEndSpeed  : 200,
				steps : [
					  {
						  hookTo          : '#powertour-demo-cell-1',
						  content         : '#step-id-1',
						  width           : 400,
						  position        : 'bm',
						  offsetY         : 20,
						  offsetX         : 0,
						  showStepDelay   : 0,
						  center          : 'step',
						  scrollDelay     : 0,
						  highlight       : false
					  },
					  {
						  hookTo          : '#powertour-demo-cell-2',
						  content         : '#step-id-2',
						  width           : 500,
						  position        : 'tl',
						  offsetY         : 200,
						  offsetX         : -200,
						  showStepDelay   : 0,
						  center          : 'step',
						  scrollDelay     : 0,
						  highlight       : false
					  },
					  {
						  hookTo          : '#powertour-demo-cell-3',
						  content         : '#step-id-3',
						  width           : 400,
						  position        : 'rt',
						  offsetY         : 20,
						  offsetX         : 20,
						  showStepDelay   : 0,
						  center          : 'step',
						  scrollDelay     : 0,
						  highlight       : false
					  }		
				]
			}
		]
	});	
});