const wrapper=document.querySelector('.wrapper');
const loginLink=document.querySelector('.login-link');
const registerLink=document.querySelector('.register-link');
const btnpopup=document.querySelector('button');
const iconclose=document.querySelector('.icon_close');

registerLink.addEventListener('click',()=>{
    wrapper.classList.add('active');
});

loginLink.addEventListener('click',()=>{
    wrapper.classList.remove('active');
})

btnpopup.addEventListener('click',()=>{
    wrapper.classList.add('active-popup')
})

iconclose.addEventListener('click',()=>{
    wrapper.classList.remove('active-popup')
})