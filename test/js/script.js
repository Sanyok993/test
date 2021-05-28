document.addEventListener('DOMContentLoaded', () => {
    
    const burgerMenu = document.querySelector('.burger-menu'),
      menu = document.querySelector('.menu'),
      mobileMenu = document.querySelector('.mobile-menu'),
      wrapMenu = document.querySelector('.header-main'),
      questions = document.querySelectorAll('.questions-list__item'),
      answer = document.querySelectorAll('.questions-list__answer'),
      burgerMenuChildren = document.querySelector('.burger-menu__item'),
      buttonForm = document.querySelector('.authorization-form__button'),
      inputForm = document.querySelector('.authorization-form__input');



    window.addEventListener(`resize`, event => {
        if(document.documentElement.clientWidth < 641 || window.innerWidth < 645) {
            mobileMenu.appendChild(menu);
        } else {
            wrapMenu.insertBefore(menu, burgerMenu);
        }
    }, false);

    if(window.screen.width < 645) {
        mobileMenu.appendChild(menu);
    } else {
        wrapMenu.insertBefore(menu, burgerMenu);
    }

    burgerMenu.addEventListener('click', () => {
        menu.classList.toggle('active');
        burgerMenu.classList.toggle('active-burger');
        burgerMenuChildren.classList.toggle('active-burger');
    })
    

    for(let i = 0; i < questions.length; i++) {
        questions[i].addEventListener('click', (e) => {
            answer[i].classList.toggle('questions-list__answer_active');
        })
    }
    console.log(inputForm.value);
    buttonForm.addEventListener('click', () => {
        sessionStorage.setItem('name', inputForm.value);
        console.log(inputForm.value);
        console.log(sessionStorage.name);
    })

});


