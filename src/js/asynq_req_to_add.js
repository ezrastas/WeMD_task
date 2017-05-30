function add_email() {
 	  var msg   = $('#add_form').serialize();
        $.ajax({
          type: 'post',
          url: '../src/captcha.php',
          data: msg,
          success: function(data) {
            $('#results').html(data);
          },
          error:  function(xhr, str){
	    alert('Возникла ошибка: ' + xhr.responseCode);
          }
        });

    }
 
