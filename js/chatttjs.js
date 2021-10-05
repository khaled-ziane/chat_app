const typingform = document.querySelector('#mytypeform');
const inputtype = document.querySelector('#txtmessage');
const messagecontainer = document.querySelector('.messages-container');



 
typingform.addEventListener('submit',(e)=>{
    $.ajax({
        type:"POST",
        url:"chatProcess.php",
        data:$('#mytypeform').serialize(),
        success:(response)=>{
            console.log(response)
          inputtype.value=""
          messagecontainer.innerHTML=response
          messagecontainer.scrollTop= messagecontainer.scrollHeight
        }
     })
    
    e.preventDefault()
})




// messagecontainer.scrollTop= messagecontainer.scrollHeight
console.log("t is working")





