console.log("ok");
const account = document.querySelector('.account');
const avatar = document.querySelector('.account .name');
const establish = document.querySelectorAll('.account a');

account.onclick = ()=>{
    avatar.classList.toggle('active');
    establish.forEach(element => {
        element.classList.toggle('active');
    });
}