// example: minimal setup
// version: full
$(document).ready(function($){
	$.powerTour({
		tours : [
			{
				trigger            : '#powertour-demo-trigger-id',

				steps : [
					  {
						  hookTo          : '#powertour-demo-box-1',
						  content         : '#step-id-1',
						  width           : 400,
						  position        : 'bm',
						  fxIn            : 'flipInX',
						  fxOut           : 'bounceOutLeft'
					  },
					  {
						  hookTo          : '#powertour-demo-box-2',
						  content         : '#step-id-2',
						  width           : 300,
						  position        : 'lt',
						  fxIn            : 'fadeIn',
						  fxOut           : 'fadeOut'
					  },
					  {
						  hookTo          : '#powertour-demo-box-3',
						  content         : '#step-id-3',
						  width           : 400,
						  position        : 'tr',
						  fxIn            : 'rotateIn',
						  fxOut           : 'rotateOut'
					  }	
				]
			}
		]
	});	
});