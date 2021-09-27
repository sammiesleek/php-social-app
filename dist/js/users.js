const userBox = document.querySelector('.active-users')
setInterval(() => {
    
    let xhr = new XMLHttpRequest;
        xhr.open("GET","app/controller/users.php", true);
        xhr.onload = ()=>{
            if(xhr.readyState == XMLHttpRequest.DONE){
                if(xhr.status === 200){
                    let data = xhr.response;
                userBox.innerHTML=data;
                    
                }

            }
        }
      
        xhr.send()
}, 10000);

    