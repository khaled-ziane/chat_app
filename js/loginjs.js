const input = document.querySelector('#eye')
const eye = document.querySelector('.password-div i')
 input.addEventListener('input',(e)=>{
     if(e.target.value=='') {
        eye.style.color ="#cbcacb"
     }else {
        eye.style.color ="#000"
     }
 });
 eye.addEventListener('click',()=>{
     if(input.type=="password") {
        input.type = "text"
        eye.classList="fas fa-eye"
     }else{
        input.type = "password"
        eye.classList="fas fa-eye-slash"
     }
 })

 const form = document.querySelector('form')
 const btn = document.querySelector('.btn')

form.addEventListener('submit',(e)=>{
       const error = document.querySelector('.error')
       $.ajax({
          type:"POST",
          url:"loginProcess.php",
          data:$('#myform').serialize(),
          success:(response)=>{
             console.log(response)
             error.style.display='block'
             error.innerHTML = response
               if(response=="ok") {
                error.style.display='none'
                window.location.href="./profile.php"
               }
          }
       })
     e.preventDefault()
 })


 
 btn.addEventListener('click',()=>{
    const email = document.querySelector('#email').value
    const password = document.querySelector('#eye').value
    const error = document.querySelector('.error')
    if(email=="" || password=="" ) {
        error.style.display='block'
        error.innerHTML = "All Input are required"
    } 
 })


