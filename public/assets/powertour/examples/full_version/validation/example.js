// example: validation
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
						  onShowStep      : function(ui){							 
							  
							  // button variable
							  var nextBtn = ui.currentStep.find('[data-powertour-action="next"]');
							  
							  // disable the next button at default
							  $('body').attr('data-powertour-disable-next', true);
							  
							  // add a visual class to the button at default(not required)
							  nextBtn.addClass('btn-disable');
							  
							  // validate the input
							  $('#step-validation-input-1').keyup(function(e){
								  if($(this).val().length > 3){
									  
									  // enable the next button 
									  $('body').removeAttr('data-powertour-disable-next');
							  
									  // remove the visual class from the button(not required)
									  nextBtn.removeClass('btn-disable');
							  
								  }
							  });
	  
						  },
						  onHideStep      : function(ui){
							  
							  // remove the next button again
							  $('body').removeAttr('data-powertour-disable-next');
							  
							  // clear the input after
							  $('#step-validation-input-1').val(''); 
	    
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
						  timer           : '00:00',
						  highlight       : true,
						  keepHighlighted : false,
						  keepVisible     : false,
						  onShowStep      : function(ui){

							  // button variable
							  var prevBtn = ui.currentStep.find('[data-powertour-action="prev"]');
							  var nextBtn = ui.currentStep.find('[data-powertour-action="next"]');						  
							  
							  // disable the prev/next button at default
							  $('body').attr('data-powertour-disable-prev', true);
							  $('body').attr('data-powertour-disable-next', true);
							  
							  // add a visual class to the button at default(not required)
							  prevBtn.addClass('btn-disable');
							  nextBtn.addClass('btn-disable');
							  
							  // validate the input
							  $('#step-validation-input-2').keyup(function(e){
								  if($(this).val().length > 3){
									  
									  // enable the prev/next button 
									  $('body').removeAttr('data-powertour-disable-prev');
							   		  $('body').removeAttr('data-powertour-disable-next');
							   
									  // remove the visual class from the button(not required)
									  prevBtn.removeClass('btn-disable');
							  		  nextBtn.removeClass('btn-disable');
							  
								  }
							  });
							    
						  },
						  onHideStep      : function(ui){
							  
							  // remove the prev/next button again
							  $('body').removeAttr('data-powertour-disable-prev');
							  $('body').removeAttr('data-powertour-disable-next');
							  
							  // clear the input after
							  $('#step-validation-input-2').val(''); 
	    
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
						  timer           : '00:00',
						  highlight       : false,
						  keepHighlighted : false,
						  keepVisible     : false,
						  onShowStep      : function(ui){
							  
							  // button variable
							  var prevBtn = ui.currentStep.find('[data-powertour-action="prev"]');				  
							  
							  // disable the prev button at default
							  $('body').attr('data-powertour-disable-prev', true);
							  
							  // add a visual class to the button at default(not required)
							  prevBtn.addClass('btn-disable');
							  
							  // validate the input
							  $('#step-validation-input-3').keyup(function(e){
								  if($(this).val().length > 3){
									  
									  // enable the next button 
									  $('body').removeAttr('data-powertour-disable-prev');
							  
									  // remove the visual class from the button(not required)
									  prevBtn.removeClass('btn-disable');
							  
								  }
							  }); 
							  
						  },
						  onHideStep      : function(ui){ 
						  
							  // remove the prev/next button again
							  $('body').removeAttr('data-powertour-disable-prev');
							  
							  // clear the input after
							  $('#step-validation-input-3').val(''); 
						  
						  }
					  }		
				]
			}
		]
	});	
});