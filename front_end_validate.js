
let frm = document.querySelector('form');
frm.addEventListener('submit', function(e) {
  let age = document.querySelector('#age').value;
  if ((age < 18 || age > 60)) {
    alert('age should be grater than 18 and less than 60');
    e.preventDefault();
  }
})


frm.addEventListener('submit', function(e) {
    let name = document.querySelector('#name').value;
    
    if (name == '') {
      alert('name field must be filled');
      e.preventDefault();
    }
  })


  frm.addEventListener('submit', function(e) {
    let mail = document.querySelector('#mail').value;
    
    if (mail == '') {
      alert('Email field is not fiilled');
      e.preventDefault();
    }
  })

  frm.addEventListener('submit', function(e) {
    let dob = document.querySelector('#dbirth').value;
    
    if (dob == '') {
      alert('please seleect date of birth');
      e.preventDefault();
    }
  })

  frm.addEventListener('submit', function(e) {
    let GPA = document.querySelector('#gpa').value;
    
    if (GPA < 2.0|| GPA >4.0) {
      alert('MIN GPA IS 2 AND MAX GPA is 4');
      e.preventDefault();
    }
  })


  frm.addEventListener('submit', function(e) {
    let pro = document.querySelector('#Profile').value;
    
    if (pro == '') {
      alert('profile box is not filled!');
      e.preventDefault();
    }
  })

  frm.addEventListener('submit', function(e) {
    let obj = document.querySelector('#object').value;
    
    if (obj == '') {
      alert('objectives box is not filled!');
      e.preventDefault();
    }
  })

  frm.addEventListener('submit', function(e) {
    let expr = document.querySelector('#exp').value;
    
    if (expr == '') {
      alert('experience box is not filled!');
      e.preventDefault();
    }
  })

  frm.addEventListener('submit', function(e) {
    let edu = document.querySelector('#educ').value;
    
    if (edu == '') {
      alert('education box is not filled!');
      e.preventDefault();
    }
  })

  frm.addEventListener('submit', function(e) {
    let langu = document.querySelector('#lang').value;
    
    if (langu == '') {
      alert('languages box is not filled!');
      e.preventDefault();
    }
  })

  frm.addEventListener('submit', function(e) {
    let hobbies = document.querySelector('#hobby').value;
    
    if (hobbies == '') {
      alert('Hobbies box is not filled!');
      e.preventDefault();
    }
  })

  frm.addEventListener('submit', function(e) {
    let refer = document.querySelector('#ref').value;
    
    if (refer == '') {
      alert('References box is not filled!');
      e.preventDefault();
    }
  })