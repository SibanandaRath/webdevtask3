window.addEventListener('scroll',reveal);

function reveal(){
    var reveals = document.querySelectorAll('.reveal');

    for(var i = 0 ; i<reveals.length;i++){
        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 80;
        if(revealtop < windowheight - revealpoint){
            reveals[i].classList.add('active');
        }
        else{
            reveals[i].classList.remove('active');
        }
    }
}


const navbarDiv = document.querySelector('.navbar');

// hide navbar
window.addEventListener('scroll', () => {
    if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
        navbarDiv.style.display = "none";
    } else {
        navbarDiv.style.display = "";
    }
});