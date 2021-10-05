const testcontainer = document.querySelector('.test-container');



    $.ajax({
        type:"GET",
        url:"testProcess.php",
        success:(response)=>{
            console.log(response)
           testcontainer.innerHTML=response
        }
     })


    
    





  

    

  

   

console.log("test in googleChrome is working")
