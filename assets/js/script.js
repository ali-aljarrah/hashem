document.addEventListener("DOMContentLoaded", function(event) {

    document.getElementById("current-date").innerHTML = new Date().getFullYear();

    let scrollPosLis = window.scrollY  || document.documentElement.scrollTop;

    const navBar = document.getElementById('custom-navbar');

    if(scrollPosLis > 75) {
        navBar.style.boxShadow = '0 0.5rem 1rem rgba(0, 0, 0, 0.15)';
    } else {
        navBar.style.boxShadow = 'none';
    } 

    window.onscroll = () => {
        let scrollPos = window.scrollY  || document.documentElement.scrollTop;
        if(scrollPos > 75) {
            navBar.style.boxShadow = '0 0.5rem 1rem rgba(0, 0, 0, 0.15)';
        } else {
            navBar.style.boxShadow = 'none';
        } 
    }

    const smMenuBtn = document.getElementById("sm-navbar-btn");
    const burgerIcon = document.getElementById("burger-icon");
    const smMenu = document.getElementById("sm-menu");
    let smMenuIsOpen = false;

    smMenuBtn.addEventListener('click', (e) => {
        e.preventDefault();
        if(smMenuIsOpen == false) {
            burgerIcon.classList.add('active');
            smMenu.classList.add('show');
            smMenuIsOpen = true;
        } else {
            burgerIcon.classList.remove('active');
            smMenu.classList.remove('show');
            smMenuIsOpen = false;
        }
    });

    const accodionBtn = document.getElementById("accodionBtn");
    const accodionBtnIcon = document.getElementById("accodionBtnIcon");
    const accodionMenu = document.getElementById("accodionMenu");
    let isAccordionOpen = false;

    accodionBtn.addEventListener("click", (e) => {
        e.preventDefault();

        if(isAccordionOpen == false) {
            isAccordionOpen = true;
            accodionMenu.classList.add("show");
            accodionBtnIcon.style.transform = "rotate(180deg)";
        } else {
            isAccordionOpen = false;
            accodionMenu.classList.remove("show");
            accodionBtnIcon.style.transform = "rotate(0deg)";
        }
    })

});


