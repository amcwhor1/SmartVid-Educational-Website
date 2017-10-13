/*
jQuery event that triggers when the button is pressed
*/
$('#uploadVideoButton').on('click',function(){
	$('#uploadVideoPanel').show().siblings('div').hide();
});