var vidWidth = 500;
var vidHeight = 400;
var vidResults = 10;

$(document).ready(function(){
	$.get(
		"https://www.googleapis.com/youtube/v3/channels",{
			part: contentDetails,
			id: 'UC5fpy9PCMXHXuIzGwpHfMgA',
			key: 'AIzaSyDYBwXjOw13mjRX6SBIenpB2GdJ4IPIV40'},
			function(data){
				$.each(data.items, function(i, item){
				
					console.log(item);
					pid = item.contentDetails.relatedPlaylists.uploads;
					getVids(pid);
				
				})
				
			}
			
		);
		
		
	
			
		function getVids(pid){

			$.get(
				"https://www.googleapis.com/youtube/v3/playlistItems",{
					part: snippet,
					maxResults: vidResults,
					playlistId: pid,
					key: 'AIzaSyDYBwXjOw13mjRX6SBIenpB2GdJ4IPIV40'},
					function(data){
						var output;
						$.each(data.items, function(i, item){
							console.log(item);
							videoTitle = item.snippet.title;
							videoId = item.snippet.videoId;
							
							output = '<li><iframe height="' + vidHeight + '" width = "' + vidWidth + '" src =\"//www.youtube.com/embed/'+videoId + '><iframe></li>';
							
							$('results').append(output);
							
						})
						
					}
					
				);
				}
				
			});

				
			
			//uploads UU5fpy9PCMXHXuIzGwpHfMgA