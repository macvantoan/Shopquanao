$(document).ready(function(){
	$('#change_pass').click(function(){
		var pass1 = $('#change_pass_admin').val();
		var pass2 = $('#reinput_change_pass_admin').val();
		if (pass1 == null || pass1 == ''){
			$('.error').text('Mật Khẩu Không Được Để Trống !!');
			return false;
		}
		if (pass2 == null || pass2 == ''){
			$('.error').text('Mật Khẩu Không Được Để Trống !!');
			return false;
		}
		if (pass1 !== pass2){
			$('.error').text('Hai Mật Khẩu Không Khớp !!');
			return false;
		}
		
	})
	$('.reset').click(function(){
		var pass1 = $('.reset_pass1').val();
		var pass2 = $('.reset_pass2').val();

		if (pass1 == '' || pass2 == ''){
			$('.error').text('Mật Khẩu Không Được Để Trống');
			return false;
		}
		if (pass1 != pass2){
			$('.error').text('Mật Khẩu Khớp');
			return false;
		}
	});
})