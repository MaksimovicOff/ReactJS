$('button.reg').on('click', function(e){
  e.preventDefault();
  const name = $('input.name').val();
  const email = $('input.email').val();
  const password = $('input.password').val();
  const c_password = $('input.c_password').val();
  $.ajax({
    method: 'POST',
    url: 'reg.php',
    data: {
      name: name,
      email: email,
      password: password,
      c_password: c_password
    },
    success: function(great){
        if (name || email || password || c_password) {
          $('#result').html(great);
        }
        
      }
  });
  $('input.name').val('');
  $('input.email').val('');
  $('input.password').val('');
  $('input.confirm_password').val('');
})