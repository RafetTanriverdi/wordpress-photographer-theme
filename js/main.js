let btn = document.querySelector("#btn");
let btnM = document.querySelector("#btn-m");
let sidebar = document.querySelector(".sidebar");
let icon = document.querySelector(".bx-menu");


btnM.addEventListener('click', () => {
    sidebar.classList.toggle('mobile-active');
    btnM.classList.toggle("bx-x");
    
});
function onSidebar(){
    sidebar.classList.add("active");
    btn.classList.replace("bx-menu","bx-x");
};
function offSidebar(){
    sidebar.classList.remove("active");
    btn.classList.replace("bx-x","bx-menu");
};

const sliderContainer =document.querySelector('.slider-container');

const slideRight =document.querySelector('.right-slide');
const slideLeft =document.querySelector('.left-slide');

const upButton =document.querySelector('.up-button');
const downButton =document.querySelector('.down-button');

const slidesLength =slideLeft.querySelectorAll('div').length;

let activeSlideIndex=0;

slideLeft.style.top =`-${(slidesLength-1)*100}vh`;
//add event linerter to the buttons
upButton.addEventListener('click',()=> changeSlide('up'));
downButton.addEventListener('click',()=> changeSlide('down'));

const changeSlide = (direction) => {
    const sliderHeight = sliderContainer.clientHeight;
    if(direction=='up'){
        activeSlideIndex++;
        if(activeSlideIndex > slidesLength-1){
            activeSlideIndex = 0;
        }
    }else if(direction=='down'){
        activeSlideIndex--;
        if(activeSlideIndex<0){
            activeSlideIndex =slidesLength-1;
        }
    }

    slideRight.style.transform=`translateY(-${
        activeSlideIndex*sliderHeight
    }px)`;
    
    slideLeft.style.transform=`translateY(${
        activeSlideIndex*sliderHeight
    }px)`;
    
      
};
//mouse scroll effect


window.addEventListener('wheel', function(e) {
    const sliderHeight = sliderContainer.clientHeight;
    if (e.deltaY > 0) {
        activeSlideIndex--;
        if(activeSlideIndex<0){
            activeSlideIndex =slidesLength-1;
        }
    } else {
        activeSlideIndex++;
        if(activeSlideIndex > slidesLength-1){
            activeSlideIndex = 0;
        }
    }
    
    slideRight.style.transform=`translateY(-${
        activeSlideIndex*sliderHeight
    }px)`;
    
    slideLeft.style.transform=`translateY(${
        activeSlideIndex*sliderHeight
    }px)`;

    
});


var isPaused = false;
var slideInterval = setInterval(showSlides, 3000);
function showSlides() {
    const sliderHeight = sliderContainer.clientHeight;
    activeSlideIndex--;
    if(activeSlideIndex<0){
        activeSlideIndex =slidesLength-1;
    }
    slideRight.style.transform=`translateY(-${
        activeSlideIndex*sliderHeight
    }px)`;
    
    slideLeft.style.transform=`translateY(${
        activeSlideIndex*sliderHeight
    }px)`;

};



document.getElementById("vertical-slider").onmousemove = function() {
    if (!isPaused) {
        clearInterval(slideInterval);
        isPaused = true;
    }

}
    
document.getElementById("vertical-slider").onmouseout = function() {
    if (isPaused) {
        slideInterval = setInterval(showSlides, 3000);
        isPaused = false;
    }
}
;
