const UserIcon = document.querySelector('.user-icon');
const UserMenu = document.querySelector('.settings-menu');
const drk = document.querySelector('.night-mode-set');
const bt = document.querySelector('.bt');
UserIcon.addEventListener('click', ()=>{
    
    UserMenu.classList.toggle('open');
})

drk.addEventListener('click', ()=>{
    bt.classList.toggle('open');
    drk.classList.toggle('open');
    document.body.classList.toggle('dark-theme')
    document.querySelector('.header').classList.toggle('bk')

    if(localStorage.getItem("theme") == "light"){
        localStorage.setItem("theme", "dark")
    }
    else{
        localStorage.setItem("theme", "light")

    }
})

// menu's setting removal action onlinks
const links = document.querySelectorAll('.lrc');
links.forEach(current => {
    current.addEventListener('click', ()=>{
        UserMenu.classList.remove('open');
    })
});



// change theme color

const themeBtn = document.querySelector('.change-theme');
const themePanel = document.querySelector('.theme-panel');
themeBtn.addEventListener('click',()=>{
    themePanel.classList.toggle('open');
    UserMenu.classList.remove('open');
})

const colorBtn = document.querySelectorAll('.theme')
colorBtn.forEach(them => {
    const colorId = them.getAttribute('id');
    
    them.addEventListener('click', ()=>{
            document.querySelector('.theme_color').style.setProperty('--primary-color', colorId)
                 

            if(localStorage.getItem("mode") !== currentcolor){
                 localStorage.setItem("mode", colorId)
            }
            alert(currentcolor)
            localStorage.setItem("mode", colorId)

            
        
    })
});



if(localStorage.getItem("theme") == "light"){
    bt.classList.remove('open');
    drk.classList.remove('open');
    document.body.classList.remove('dark-theme')
    document.querySelector('.header').classList.remove('bk')
     
}
else if(localStorage.getItem("theme") == "dark"){
    bt.classList.add('open');
    drk.classList.add('open');
    document.body.classList.add('dark-theme')
    document.querySelector('.header').classList.add('bk')
}else{
    localStorage.setItem("theme", "light")
}


// if(localStorage.getItem("mode")){
//      document.querySelector('.theme_color').style.setProperty('--primary-color', colorId)
// }




// chat panel drawer
const drawer = document.querySelector('.chat-bt');
const panel = document.querySelector('.chats');
const clc = document.querySelector('.clc');
drawer.addEventListener('click', ()=>{
    panel.classList.add('chat');
    drawer.classList.add('off');
})
clc.addEventListener('click', ()=>{
    panel.classList.remove('chat');
    drawer.classList.remove('off');
})
