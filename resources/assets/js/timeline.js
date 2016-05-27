$(document).ready(function($){
	var $timelineContainer = $('.timeline-container');

	//hide timeline blocks which are outside the viewport
	$timelineContainer.each(function(){
		$(this).find('.timeline-badge, .timeline-panel').addClass('hidden');
	});

	//on scolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		$timelineContainer.each(function(){
			if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.5 && $(this).find('.timeline-badge').hasClass('hidden') ) {
				$(this).find('.timeline-badge, .timeline-panel').removeClass('hidden').addClass('bounce-in');
			}
		});
	});
});