let loginLink = document.getElementById('loginLink')
let formWrapper = document.getElementById('formWrapper')

loginLink.addEventListener('click', ()=>{
    console.log(formWrapper.style);
    if(formWrapper.style.display === "block"){
        console.log('caca');
        formWrapper.style.display = "none";
    }else if(formWrapper.style.display === "none"){
        console.log('shit');
        formWrapper.style.display = "block";
    } 
})