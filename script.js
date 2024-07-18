const slider = document.querySelector('.slider');
const sliderImages = document.querySelectorAll('.slider_img');
console.log(sliderImages);
const sliderLine = document.querySelector('.slider_line');

const sliderBtnNext = document.querySelector('.slider_btn-next');
const sliderBtnPrev = document.querySelector('.slider_btn-prev');

let sliderCount = 0;
let sliderWidth = slider.offsetWidth;

sliderBtnNext.addEventListener('click', nextSlide);

sliderBtnPrev.addEventListener('click', prevSlider);


function nextSlide() {
	sliderCount++;
	console.log(sliderCount);

	if (sliderCount >= sliderImages.length) {
		sliderCount = 0;
	}

	rollSlider();
}

function prevSlider() {
	sliderCount--;
	console.log(sliderCount);

	if (sliderCount < 0) {
		sliderCount = sliderImages.length -1;
	}

	rollSlider();
}

function rollSlider() {
	sliderLine.style.transform = `translateX(${-sliderCount * sliderWidth}px)`;
}

setInterval(() => {
	nextSlide()
}, 5000);



