// const messagecontainer = document.querySelector('.messages-container');


setInterval(()=>{

    $.ajax({
        type:"GET",
        url:"getdataProcess.php",
        data:$('#mytypeform').serialize(),
        success:(response)=>{
            console.log(response)
           messagecontainer.innerHTML=response
           messagecontainer.scrollTop= messagecontainer.scrollHeight
        }
     })

},500)

messagecontainer.scrollTop= messagecontainer.scrollHeight





 console.log("get dataa is working")

