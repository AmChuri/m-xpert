// example: multiple pages tour(index.html)
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
						  hookTo          : '#powertour-demo-box-1',
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
						  hookTo          : '#powertour-demo-box-2',
						  content         : '#step-id-2',
						  width           : 300,
						  position        : 'lt',
						  offsetY         : 0,
						  offsetX         : 20,
						  showStepDelay   : 0,
						  center          : 'step',
						  scrollDelay     : 0,
						  highlight       : true
					  },
					  {
						  hookTo          : '#powertour-demo-box-3',
						  content         : '#step-id-3',
						  width           : 400,
						  position        : 'tr',
						  offsetY         : -80,
						  offsetX         : 40,
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