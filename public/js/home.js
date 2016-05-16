jQuery(function ($) {

	document.getElementsByTagName('html')[0].className += ' ' +
		(~window.navigator.userAgent.indexOf('MSIE') ? 'ie' : 'no-ie');

	var $eventsSlider= $('#events-slider');
	var $frame =$eventsSlider.find('.frame'); window.frr = $frame;
	var sly = new Sly($frame, {
		horizontal: 1,
		itemNav: 'basic',
		smart: 1,
		activateOn: 'click',
		mouseDragging: 1,
		touchDragging: 1,
		releaseSwing: 1,
		scrollBy: 1,
		pagesBar:$eventsSlider.find('.pages'),
		activatePageOn: 'click',
		speed: 200,
		moveBy: 600,
		elasticBounds: 1,
		dragHandle: 1,
		dynamicHandle: 1,
		clickBar: 1,

		// Buttons
		forward:$eventsSlider.find('.forward'),
		backward:$eventsSlider.find('.backward'),
	}).init();
});
        
