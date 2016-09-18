// JavaScript Document

var intervalMenu = 200;

$.fn.DropdownMenu = function (settings) {
	settings = jQuery.extend(
		{
			leftPos			:	"auto",
			itemActive		:	"",
			subItemActive	: -1,
			classShow		: 'show',
			eventClick		: false,			
			returnActive	: true
		}, settings
	);

	return this.each ( function () {
		var $menu	= $(this);
		var $parent	= $(this).find('>li');
		var classVisible	= settings.classShow;
		var timeOut = setTimeout ('',0);
		var lastMenuHover = null;
		
		$parent.each ( function (index) {
			
			$(this).hover ( function () {
				$parent.not(this).find('a').removeClass('hover');
				
				//$parent.not(this).find('a').removeClass('hover');
				$parent.eq(index).find('>a.has-child').addClass('hover');

				
			}, function () {});
			
			$(this).find('a').hover ( function ()	{
				clearTimeout(timeOut);
				$(this).parents("ul").eq(0).find('>li').not($(this).parent()).find('ul').removeClass('show');				
				$(this).parent('li').parents('li').eq(0).parent('ul').find('a.has-child').removeClass('hover');
				
				$(this).next('ul').addClass (settings.classShow);

				$(this).parent('li').parents('li').find('>a').addClass ('hover');
			}, function () {
				lien = $(this);
				timeOut = setTimeout ( function () {					
					$parent.eq(index).find('ul').removeClass ('show');
					$parent.eq(index).find('a').removeClass('hover');
				}, intervalMenu );
			});			
		});
		
	})

}