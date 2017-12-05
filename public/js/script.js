$(document).ready(function(){
	
	$('#user_type').change(function(){
		role = $(this).val();
		if(role == 'staff'){
			$('#manager').show();
		}else{
			$('#manager').val('').hide();
			
		}
		
	});
	
	$('#provinces').change(function(){
		province_id = $(this).val();
		$.ajax({
			url:base_url+'/profile/cities/' + province_id,
			success: function(res){
				$('#cities').html(res);
			}
		});
	});
	
	
	$('#prof-form').on('submit', function(e){
		return true;
		email = $('#email').val();
		
		if (/^([A-Za-z0-9_\-\.])+\@(algomau)+\.(ca)$/.test(email)) {
			
		$('#email_error').html('');
			return true
		}
	
		$('#email_error').html('Email show have @algomau.ca');
	
		return false;
	});
	
});