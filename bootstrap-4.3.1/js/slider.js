const slides = document.querySelectorAll('.slide');
const next = document.querySelector('#next');
const previous = document.querySelector('#previous');
const auto = true; // Auto scroll
const intervalTime = 4000;


const nextSlide = () => {
  // Get current class
  const current = document.querySelector('.current');
  // Remove current class
  current.classList.remove('current');
  // Check for next slide
  if (current.nextElementSibling) {
    // Add current to next sibling
    current.nextElementSibling.classList.add('current');
  } else {
    // Add current to starting point again
    slides[0].classList.add('current');
  }
  setTimeout(() => current.classList.remove('current'));
};

const previousSlide = () => {
  // Get current class
  const current = document.querySelector('.current');
  // Remove current class
  current.classList.remove('current');
  // Check for prev slide
  if (current.previousElementSibling) {
    // Add current to prev sibling
    current.previousElementSibling.classList.add('current');
  } else {
    // Add current to last
    slides[slides.length - 1].classList.add('current');
  }
  setTimeout(() => current.classList.remove('current'));
};

// Button events
next.addEventListener('click', e => {
    nextSlide();
})

previous.addEventListener('click', e => {
    previousSlide();
})

//set auto interval
if(auto){
    setInterval(nextSlide, intervalTime );
}