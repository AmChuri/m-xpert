// example: callback functions
// version: lite
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
				onStartTour        : function(ui){ 
					
					$.growl({ title: "onStartTour:", message: "This will run once the tour starts." });					 
					 
				},
				onEndTour          : function(ui){ 
				
					// check which event is triggered
					if(ui.endType == 'stop'){
						
						$.growl({ title: "onEndTour:", message: "You have clicked the 'end tour' button." });	
						
					}else if(ui.endType == 'cancel'){
						
						$.growl({ title: "onEndTour:", message: "You have clicked outside the tour so the tour will auto cancel." });
							
					}					
					
				},	
				onProgress         : function(ui){ 
				
					$.growl({ title: "onProgress:", message: "This callback function will be fired during the switch of every step." });	
				
				},
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
						  highlight       : false,
						  keepHighlighted : false,
						  keepVisible     : false,
						  onShowStep      : function(ui){ 
						  
						  	  $.growl({ title: "onShowStep:", message: "First step is visible." });	
						  
						  },
						  onHideStep      : function(ui){ 
						  
						  	  $.growl({ title: "onShowStep:", message: "First step is closing." });	
						  
						  }
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
						  highlight       : true,
						  keepHighlighted : false,
						  keepVisible     : false,
						  onShowStep      : function(ui){ 
						  
						  	  $.growl({ title: "onShowStep:", message: "Second step is visible." });	
						  
						  },
						  onHideStep      : function(ui){ 
						  
						  	  $.growl({ title: "onShowStep:", message: "Second step is closing." });	
						  
						  }
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
						  highlight       : false,
						  keepHighlighted : false,
						  keepVisible     : false,
						  onShowStep      : function(ui){ 
						  
						  	  $.growl({ title: "onShowStep:", message: "Third step is visible." });	
						  
						  },
						  onHideStep      : function(ui){ 
						  
						  	  $.growl({ title: "onShowStep:", message: "Third step is closing." });	
						  
						  }
					  }		
				]
			}
		]
	});	
});