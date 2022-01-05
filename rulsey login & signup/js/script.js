// Get reference to the password input
const passwordEl = document.querySelector(".form-input--password");

// Get reference to the container for the eye image
const eyeContainerEl = document.querySelector(".password-eye-container");

// Get reference for the eye image
const eyeImgEl = eyeContainerEl.getElementsByTagName("img")[0];

// Show/hide the eye
passwordEl.addEventListener("keyup", (e) => {
  e.target.value.length
    ? eyeContainerEl.classList.remove("hidden")
    : eyeContainerEl.classList.add("hidden");
});

// Show/hide the password
eyeContainerEl.addEventListener("click", () => {
  if (eyeImgEl.classList.contains("eye-off")) {
    eyeImgEl.src = "images/eye.png";
    eyeImgEl.classList.remove("eye-off");
    passwordEl.type = "text";
  } else {
    eyeImgEl.src = "images/eye-off.png";
    eyeImgEl.classList.add("eye-off");
    passwordEl.type = "password";
  }
});

// get reference of all input using ids 

// reference for firstname 
let inpu1 = document.getElementById('first-name')

// / reference for lastname 
let inpu2 = document.getElementById('last-name')
 
// reference for email
let inpu3 = document.getElementById('email')

// reference for phone number
let inpu4 = document.getElementById('tele')

// reference for password
let inpu5 = document.getElementById('password1')

// reference for confirm password
let inpu6 = document.getElementById('password2')

// reference for confirm signup button
let inpu7 = document.getElementById('signup')
// reference for DOB
 let inpu8 = document.getElementById('date')
 let inpu9 = document.getElementById('year')


// getting dom for help text 
let text1 = document.getElementById('text1') // getting firstname help text
let text2 = document.getElementById('text2') // getting lastname help text
let text3 = document.getElementById('text3') // getting email help text
let text4 = document.getElementById('text4') // getting phone number help text
let text5 =document.getElementById('text5') // getting password help text
let text6 = document.getElementById('text6') // getting confrim password help text
let text7 = document.getElementById('text7')// geting year help text
let text8 = document.getElementById('text8')//getting day help text
let text9 = document.getElementById('text9')// getting age-limit text


// vaidating each input 

// creating pattern for each input 

let pat = {
  real : /^[a-zA-Z\d]{2,15}$/, //regex pattern for firstname
  surname:/^[A-Za-z\d]{2,15}$/,//regex pattern for lastname
  email:/^[A-Za-z\d\.-]+@[A-Za-z\d]+\.[a-zA-Z]+[\.a-zA-Z]+$/, //regex pattern for email
  pin1:/^[A-Za-z\d\w]{4,10}$/,//regex pattern for new password
  
  mobile : /^\d{11}$/, //regex pattern for phone number
  day:/^\d{1,2}$/,//regex pattern for day
  year: /^\d{4}$/,   // regex pattern for year
}


// validating for firstname
function first() {
  if(pat.real.test(inpu1.value)) {
    text1.innerHTML = ""
  
  } else {
    text1.innerHTML = 'username must not contain signs'
  }

}

inpu1.addEventListener('input',() => {
  first()
})

// validating for last name 

function last()  {
    if(pat.surname.test(inpu2.value)) {
      text2.innerHTML = ''
     
    } else {
     text2.innerHTML =  'username must not contain signs'
    }
}

inpu2.addEventListener('input', () => {
  last()
})

// validating for email

function mail() {
  if(pat.email.test(inpu3.value)) {
    text3.innerHTML = ''
    
  } else {
    text3.innerHTML ="invalid email address"
  }
}

inpu3.addEventListener('input', () => {
  mail()
})
// validating for phone number 

function phone() { //fucntion to validate phone number
   if(pat.mobile.test(inpu4.value)) {
    
    //  text4.classList.add('match')
    text4.innerHTML = ''
   } else {
    text4.innerHTML = 'phone number is invalid'
  
   }
}

inpu4.addEventListener('input', () => {
  phone()
})
// validating for password 

function code() {
  if(pat.pin1.test(inpu5.value)) {
    text5.innerHTML = ''
  
  } else {
    text5.innerHTML = 'password not accepted'
  }
}

inpu5.addEventListener('input', () => {
  code()
})

// validating for confirm password 

function code2() {
  if (inpu6.value === inpu5.value) {
    text6.innerHTML = ''
    
  }  else {
    text6.innerHTML = 'password not match'
  }
}

inpu6.addEventListener('input', () => {
  code2()
})
//validating for year
function life() {
  if(pat.year.test(inpu9.value)) {
  text7.innerHTML = ''
  } else {
    text7.innerHTML ="invalid DOB"
  }
}

inpu9.addEventListener('input',() => {
  life()
})

// validating for day 
function days() {
  if(pat.day.test(inpu8.value)) {
    text8.innerHTML = ''
  } else {
    text8.innerHTML = 'inavlid day '
  }
}

inpu8.addEventListener('input', () => {
  days()
})


// checking that user fills all input field 

inpu7.addEventListener('click', (e) => {
  if(inpu1.value == '') {
    e.preventDefault()
    alert('please fill all form appropriately')
  } else if(inpu2.value == '') {
    e.preventDefault()
    alert('please fill all form appropriately')
  } else if(inpu3.value == '') {
    e.preventDefault()
    alert('please fill all form appropriately')
  } else if(inpu4.value == '') {
    e.preventDefault()
    alert('please fill all form appropriately')
  } else if(inpu5.value == '') {
    e.preventDefault()
    alert('please fill all form appropriately')
  } else if(inpu6.value == '') {
    e.preventDefault()
    alert('please fill all form appropriately')
  }  else if(inpu9.value == '') {
    e.preventDefault()
    alert('please fill all form appropriately')
  } else if(inpu8.value == '') {
    e.preventDefault()
    alert('please fill all form appropriately')
  }

  check()
})

// checking if the user has filled in correct details

inpu7.addEventListener('click', (e) => {
  if( text1.innerHTML == 'username must not contain signs') {
    e.preventDefault() 
    alert('fill all form correctly')
  }  else if (  text2.innerHTML ==  'username must not contain signs') {
    e.preventDefault() 
    alert( 'fill all form correctly')
  } else if (  text3.innerHTML ==  "invalid email address" ) {
    e.preventDefault() 
    alert( 'fill all form correctly')
  } else if ( text4.innerHTML == 'phone number is invalid'  ) {
    e.preventDefault() 
    alert( 'fill all form correctly')
  } else if ( text5.innerHTML == 'password not accepted'  ) {
    e.preventDefault() 
    alert( 'fill all form correctly')
  }  else if (  text6.innerHTML == 'password not match' ) {
    e.preventDefault() 
    alert( 'fill all form correctly')
  }  
  else if( text7.innerHTML =="invalid DOB") {
    e.preventDefault() 
    alert( 'fill all form correctly')
  }
  else if(text8.innerHTML == 'inavlid day ' ) {
    e.preventDefault() 
    alert( 'fill all form correctly')
  } 
 
})

// verify the age limit for the site

function check(e) {
  let current = new Date()
  let limit = current.getFullYear()-inpu9.value 
   if(limit > 17 ) {
    
    text9.innerHTML =''
   }  else {
    
     text9.innerHTML = 'underage cant be registered'
     e.preventDefault()
   }
   console.log(limit)
}




