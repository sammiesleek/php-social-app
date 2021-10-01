const gtUsers = document.querySelectorAll('.slct');
const View = document.querySelector('.chat-area');


gtUsers.forEach(ht => {
    ht.addEventListener('click', (e)=>{
        ht.style.display='none'
        ht.style.opacity='0.3'
        // View.classList.add('chat');
    })
});
        console.log(gtUsers);
        document.addEventListener('load')