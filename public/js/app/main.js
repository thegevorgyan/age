$( document ).ready(function() {
	$('#myModal').modal('show');














    $('#sendData').bind('click', function(){
    	var birthday = $('#input_mm').val() + '/' + $('#input_dd').val() + '/' + $('#input_yyyy').val();
            $.ajax({
                url: 'index.php',
                dataType: 'text',
                type: 'post',
                contentType: 'application/x-www-form-urlencoded',
                data: birthday,
                success: function( data, textStatus, jQxhr ){
                    console.log(birthday);
                },
                error: function( jqXhr, textStatus, errorThrown ){
                    console.log( errorThrown );
                }
            });

	   });
	   
	   $('.website_delete').bind('click', function(){
			$.ajax({
				url: 'destroy',
				dataType: 'text',
				type: 'get',
				contentType: 'application/x-www-form-urlencoded',
				data: {'id': $(this).attr('data')},
				success: function( data, textStatus, jQxhr ){
					location.reload();
					//console.log(data);
				},
				error: function( jqXhr, textStatus, errorThrown ){
					console.log( errorThrown );
				}
			});
	   });
	   
	    $('.website_add').bind('click', function(){
			
			$.ajax({
				url: 'store',
				dataType: 'text',
				type: 'get',
				contentType: 'application/x-www-form-urlencoded',
				data: {'name': $('#website_name').val()},
				success: function( data, textStatus, jQxhr ){
					location.reload();
					//console.log({'name': $('#website_name').val(), 'key': $('#website_key').val() });
				},
				error: function( jqXhr, textStatus, errorThrown ){
					console.log( errorThrown );
				}
			});
		});



});

function isNumber(evt, val) {
	evt = (evt) ? evt : window.event;
   	var charCode = (evt.which) ? evt.which : evt.keyCode;

	if(val == 'mm' && $('#input_mm')[0].selectionEnd > 1){
		return false;
	}
   	if(val == 'dd' && $('#input_dd')[0].selectionEnd > 1){
   		return false;
   	}
   	if(val == 'yyyy' && $('#input_yyyy')[0].selectionEnd > 3){
   		return false;
   	}
   	if ((charCode > 31 && (charCode < 48 || charCode > 57))) {
		return false;
   	}
   	return true;
   }



