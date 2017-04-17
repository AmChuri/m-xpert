// example: run once
// version: tiny
$(document).ready(function($){	
	
	// used for the demo to reset the key(demo)
	$('body').on('click','#reset-key',function(e){
		
		localStorage.removeItem("run-tour-localstorage");
		
		// reload the page
		location.reload(); 
		
	});

	// get the key
    var runtour = localStorage.getItem('run-tour-localstorage');
	
	// run if key has value 'no' (set inside the 'onFinish' callback function)
	if(runtour != 'no'){
		
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
		
	}else{
		
		// hide the trigger
		$('#powertour-demo-trigger-id').hide();
		
		// show reset button(demo)
		$('#reset-key').show();
		
	}	
	
	// set valu eby button
	$('#setLocalStorageValue').click(function(e){
	
		// hide the trigger
		$('#powertour-demo-trigger-id').hide();
	
		// show reset button(demo)
		$('#reset-key').show();
		
		// if tour ends set value to prevent 
		localStorage.setItem('run-tour-localstorage','no');
		 
	});
	
});