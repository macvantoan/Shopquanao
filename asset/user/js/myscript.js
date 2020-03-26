$(document).ready(function(){
    $("#register").click(function(){
      var username = $('#username').val();
      var password = $('#pw').val();
      var re_password = $('#re_pw').val();
      var name = $('#name_re').val();

      var address = $('#address_re').val();
      var phone = $('#phone_re').val();
      
      if( username == "" ||  username==null){
      	$('.terms').text('User name không được để trống');      	 
      	return false;
      }
       if( password == "" || password == null ){
      	$('.terms').text('Password không được để trống');      	 
      	return false;
      } 
       if( re_password == "" || re_password == null ){
      	$('.terms').text('Vui lòng nhập lại password');      	 
      	return false;
      } 
      if( password != re_password){
      		$('.terms').text('Hai password chưa khớp'); 
      }
       if( name == "" || name == null ){
      	$('.terms').text('Tên không được để trống');      	 
      	return false;
      } 
       if( address == "" || address == null ){
      	$('.terms').text('Địa chỉ không được để trống');      	 
      	return false;
      } 
       if( phone == "" || phone == null ){
      	$('.terms').text('Số điện thoại không được để trống');      	 
      	return false;
      } 
       if( email_re == "" || email_re == null ){
      	$('.terms').text('Vui lòng nhập Email');      	 
      	return false;
      } 
 
    });
    
    $("#login-shop").click(function(){
    	var username = $("#modlgn_username").val();
    	var password = $("#modlgn_passwd").val();
	     if( username == "" ||  username==null){
	      	$('#notifi_user').text('User name không được để trống');      	 
	      	return false;
	      }
	       if( password == "" || password == null ){
	      	$('#notifi_pass').text('Password không được để trống');      	 
	      	return false;
	      } 
    	
    });

    $("#contact").click(function(){
        var name_ct = $("#name_ct").val();
        var email_ct = $("#email_ct").val();
        var subject_ct = $("#subject_ct").val();
        var content_ct = $("#content_ct").val();
        if (name_ct == "" || username == null){
          $(".error").text("Tên Không Được Để Trống !!");
          return false;
        }
         if (email_ct == "" || email_ct == null){
          $(".error").text("Email Không Được Để Trống !!");
          return false;
        }
         if (subject_ct == "" || subject_ct == null){
          $(".error").text("Tiêu Đề Không Được Để Trống !!");
          return false;
        }
         if (content_ct == "" || content_ct == null){
          $(".error").text("Nội Dung Không Được Để Trống !!");
          return false;
        }
    });
	
	$('.add_cart').click(function(){
		var sl = $('.input_t').val();
		if(sl < 1){
			$('.error').text('Bạn Nhập Số Lượng hoặc Sản Phẩm Nhỏ Hơn 0');
			return false;
		}
	});
	$('#send_buy').click(function(){
		var name = $("#name_buy").val();
		var address = $("#address_buy").val();
		var phone = $("#phone_buy").val();
		var email = $("#email_buy").val();
		if(name == '' || name ==null){
			$('.error').text('Tên Không Được Để Trống');
			return false;
		}
		if(address == '' || address ==null){
			$('.error').text('Địa Chỉ Không Được Để Trống');
			return false;
		}
		if(phone == '' || phone ==null){
			$('.error').text('Số Điện Thoại Không Được Để Trống');
			return false;
		}
		
		if(email == '' || email ==null){
			$('.error').text('Email Không Được Để Trống');
			return false;
		}
		
	});
});