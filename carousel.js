const buttons = document.querySelectorAll("[data-carousel-button]");
let autoRotateInterval;

function rotateSlides(offset) {
  const slides = document.querySelector('[data-slides]');
  const activeSlide = slides.querySelector("[data-active]");
  let newIndex = [...slides.children].indexOf(activeSlide) + offset;
  if (newIndex < 0) newIndex = slides.children.length - 1;
  if (newIndex >= slides.children.length) newIndex = 0;

  slides.children[newIndex].dataset.active = true;
  delete activeSlide.dataset.active;
}

function startAutoRotate() {
  autoRotateInterval = setInterval(() => {
    rotateSlides(1);
  }, 2500);
}

function stopAutoRotate() {
  clearInterval(autoRotateInterval);
}

buttons.forEach((button) => {
  button.addEventListener("click", () => {
    stopAutoRotate();
    const offset = button.dataset.carouselButton === "next" ? 1 : -1;
    rotateSlides(offset);
    startAutoRotate();
  });
});

startAutoRotate();
