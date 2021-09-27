const gtUsers = document.querySelectorAll('.slct');
const View = document.querySelectorAll('.slct');
gtUsers.forEach(user => {
    user.addEventListener('onclick',()=>{
        View.classlist.add('show');
    })
});

console.log(gtUsers);