const form = document.querySelector('.form form');
const Seterr = document.querySelector('.Seterr');
const err = document.querySelector('.err');
const submitBtn = document.getElementById('Reg');

form.onsubmit = (e) =>{
    e.preventDefault();
}


if(submitBtn){
    submitBtn.addEventListener('click',()=>{
    
    
    let xhr  = new XMLHttpRequest();
    xhr.open("POST","app/controller/register.php", true)
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == "success"){
                    Seterr.style.display="none"
                    err.textContent=''
                }else{
                Seterr.style.display="block"
                err.textContent=data
                }
                
            }
            else{
                
            }
        }
        else{
            
        }
    }
    let formdata = new FormData(form);
    xhr.send(formdata)
    
        
    
    })
}

