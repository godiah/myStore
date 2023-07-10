//Navigation Bar
const navSlide = () => {
const burger = document.querySelector('.burger');
const nav = document.querySelector('.nav-links');
const navLinks = document.querySelectorAll('.nav-links li');

burger.addEventListener('click', () => {
nav.classList.toggle('nav-active');
//Animate Links
navLinks.forEach((link, index) => {
    if(link.style.animation){
     link.style.animation = ``
    } else {
     link.style.animation = `navLinkFade 0.5s ease forwards ${index/7 + 0.5}s`;
    }        

 });
//Burger Animation
    burger.classList.toggle('toggle');
});    
}
navSlide();

const productContainers = [...document.querySelectorAll('.best-selling-product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})