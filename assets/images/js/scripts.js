$(document).ready(function() { 
    $( "#login-form" ).submit(function( event ) {
		event.preventDefault();
	
		var $form = $( this ),
			data1 = $form.find( "input[name='username']" ).val(),
			data2 = $form.find( "input[name='password']" ).val(),
			url = $form.attr( "action" );
	
		var posting = $.post( url, { username: data1, password: data2 } );
	
		posting.done(function( data ) {
			data = JSON.parse(data);
			$( "#login-message" ).removeClass('display-none').addClass((data.error)?'alert-danger':'alert-success').html(data.message);
			if(!data.error) 
			{
				window.location.href = $form.find( "input[name='nextpath']" ).val();
			}
		});
	});
}); 