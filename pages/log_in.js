$('button').on('click', function(){
  const email = $('input.email').val();
  const password = $('input.password').val();
  localStorage.setItem('email', email);
  localStorage.setItem('password', password);
})
function Auto() {
  const fromStorage = localStorage.getItem('email');
  const fromStorage1 = localStorage.getItem('password');
  if (fromStorage || fromStorage1) {
    $('input.email').val(fromStorage);
    $('input.password').val(fromStorage1);
  }
}
Auto();