const input = document.querySelector('input')
const searching = document.querySelector('.users')
 input.addEventListener('input',(e)=>{
    var val = e.target.value
    console.log(val)
    $.ajax({
        type:"POST",
        url:"searchProcess.php",
        data:{
          val:val
        },
        success:(response)=>{        
           if(response.length==0) {
                console.log("no user found !")
                searching.innerHTML= "No User Found !"
           }else {
            searching.innerHTML= response
           }
        }
     })
 });



