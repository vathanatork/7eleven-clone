
// headers 
let logo = document.querySelector('[data-logo]');
let hamberger = document.querySelector('[data-hamberger]');
let left_aside = document.querySelector('[data-left-aside]');
let slidenav = document.querySelector('[data-slide-nav]');
let xbtn = document.querySelector('[data-xbtn]');

hamberger.addEventListener('click',()=>{
    if (slidenav.classList.contains('hidden')){
        hamberger.classList.add('hidden');
        logo.classList.add('hidden');
        left_aside.classList.add('hidden');
        slidenav.classList.remove('hidden');
    }
})

xbtn.addEventListener('click',()=>{
    if (logo.classList.contains('hidden')){
        hamberger.classList.remove('hidden');
        logo.classList.remove('hidden');
        left_aside.classList.remove('hidden');
        slidenav.classList.add('hidden');
    }
});

// slide navigation
let foodbtn = document.querySelector('[data-food]')
let drinkbtn = document.querySelector('[data-drink]')
let category = document.querySelector('[data-category]')
let food_category = document.querySelector('[data-food-category]')
let drink_category = document.querySelector('[data-drink-category]')
let drinkBack = document.querySelector('[data-drink-back]')
let foodBack = document.querySelector('[data-food-back]')

foodbtn.addEventListener('click',()=>{
    category.classList.toggle('hidden');
    food_category.classList.toggle('hidden');
})

drinkbtn.addEventListener('click',()=>{
    category.classList.toggle('hidden');
    drink_category.classList.toggle('hidden');
})

drinkBack.addEventListener('click',()=>{
    category.classList.remove('hidden');
    drink_category.classList.add('hidden');
})

foodBack.addEventListener('click',()=>{
    category.classList.remove('hidden');
    food_category.classList.add('hidden');
})


