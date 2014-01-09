$(document).ready(function(){
	$.ajax({
		url:"https://api.instagram.com/v1/media/popular?client_id=4626f74ee7fb465cb6ba0790375c34f1"
	}).done(function(){
		console.log(data);
	})
});
