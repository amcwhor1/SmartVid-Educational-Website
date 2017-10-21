/*
jQuery event that triggers when the button is pressed
*/
$('#uploadVideoButton').on('click',function(){
	$('#uploadVideoPanel').show().siblings('div').hide();
});

$('#createClassButton').on('click',function(){
	$('#createClassPanel').show().siblings('div').hide();
});

$('#manageClassesButton').on('click',function(){
	$('#manageClassesPanel').show().siblings('div').hide();
});

$('#manageVideosButton').on('click',function(){
	$('#manageVideosPanel').show().siblings('div').hide();
});

$('#accountSettingsButton').on('click',function(){
	$('#accountSettingsPanel').show().siblings('div').hide();
});

$('#classIcon1').on('click',function(){
	$('#videoListPanel').show().siblings('div').hide();
});
