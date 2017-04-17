// example: multiple pages tour(index.html)
// version: full
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
				loopTour           : false,
				highlightStartSpeed: 200,
				highlightEndSpeed  : 200,
				onStartTour        : function(ui){ },
				onEndTour          : function(ui){
					
					// redirect to next page once tour has ended
            		window.location.href = "parameters.html?powertour=1&step=1";
						
				},	
				onProgress         : function(ui){ },
				steps : [
					  {
						  hookTo          : '#powertour-demo-box-1',
						  content         : '#step-id-1',
						  width           : 400,
						  position        : 'bm',
						  offsetY         : 20,
						  offsetX         : 0,
						  fxIn            : 'flipInX',
						  fxOut           : 'bounceOutLeft',
						  showStepDelay   : 0,
						  center          : 'step',
						  scrollSpeed     : 400,
						  scrollEasing    : 'swing',
						  scrollDelay     : 0,
						  timer           : '00:00',
						  highlight       : false,
						  keepHighlighted : false,
						  keepVisible     : false,
						  onShowStep      : function(ui){},
						  onHideStep      : function(ui){ }
					  },
					  {
						  hookTo          : '#powertour-demo-box-2',
						  content         : '#step-id-2',
						  width           : 300,
						  position        : 'lt',
						  offsetY         : 0,
						  offsetX         : 20,
						  fxIn            : 'fadeIn',
						  fxOut           : 'fadeOut',
						  showStepDelay   : 0,
						  center          : 'step',
						  scrollSpeed     : 400,
						  scrollEasing    : 'swing',
						  scrollDelay     : 0,
						  timer           : '00:00',
						  highlight       : true,
						  keepHighlighted : false,
						  keepVisible     : false,
						  onShowStep      : function(ui){},
						  onHideStep      : function(ui){ }
					  },
					  {
						  hookTo          : '#powertour-demo-box-3',
						  content         : '#step-id-3',
						  width           : 400,
						  position        : 'tr',
						  offsetY         : -80,
						  offsetX         : 40,
						  fxIn            : 'rotateIn',
						  fxOut           : 'rotateOut',
						  showStepDelay   : 0,
						  center          : 'step',
						  scrollSpeed     : 400,
						  scrollEasing    : 'swing',
						  scrollDelay     : 0,
						  timer           : '00:00',
						  highlight       : false,
						  keepHighlighted : false,
						  keepVisible     : false,
						  onShowStep      : function(ui){},
						  onHideStep      : function(ui){ }
					  }		
				]
			}
		]
	});	
});