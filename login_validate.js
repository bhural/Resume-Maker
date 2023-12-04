let frm = document.querySelector('form');
frm.addEventListener('submit', function(e) {
  let email = document.querySelector('#login_mail').value;
  if (email=='') {
    alert('email is not filled');
    e.preventDefault();
  }
})


frm.addEventListener('submit', function(e) {
    let password = document.querySelector('#pass').value;
    if (password=='') {
      alert('password is not filled');
      e.preventDefault();
    }
  })