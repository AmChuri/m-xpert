// example: step defaults
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
				onEndTour          : function(ui){ },	
				onProgress         : function(ui){ },
				steps : [
					  {
						  hookTo          : '#powertour-demo-box-1',
						  content         : '#step-id-1'
					  },
					  {
						  hookTo          : '#powertour-demo-box-2',
						  content         : '#step-id-2'
					  },
					  {
						  hookTo          : '#powertour-demo-box-3',
						  content         : '#step-id-3'
					  }		
				],
				stepDefaults : [
					{
						width           : 300,
						position        : 'tm',
						offsetY         : 20,
						offsetX         : 0,
						fxIn            : 'fadeIn',
						fxOut           : 'fadeOut',
						showStepDelay   : 0,
						center          : 'step',
						scrollSpeed     : 400,
						scrollEasing    : 'swing',
						scrollDelay     : 0,
						timer           : '00:00',
						highlight       : false,
						keepHighlighted : false,
						keepVisible     : false,
						onShowStep      : function(ui){ },
						onHideStep      : function(ui){ }
					}
				 ]
			}
		]
	});	
});