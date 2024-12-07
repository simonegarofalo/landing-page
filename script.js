const banner = document.getElementById("cookie-policy");
const acceptButton = document.getElementById("accept-cookies");

setTimeout(function () {
    banner.style.display = "flex";
  }, 3000);
  
  acceptButton.addEventListener("click", function () {
    banner.style.display = "none";
  });

let lastScrollPosition = 0;
let scrollThreshold = 50;
let accumulatedScroll = 0;
const navbar = document.querySelector("header");

window.addEventListener("scroll", () => {
  const currentScrollPosition = window.scrollY;

  accumulatedScroll += currentScrollPosition - lastScrollPosition;

  if (currentScrollPosition > lastScrollPosition) {
    navbar.classList.add("hidden");
    accumulatedScroll = 0;
  } else if (accumulatedScroll < -scrollThreshold){
    navbar.classList.remove("hidden");
    accumulatedScroll = 0;
  }

  lastScrollPosition = currentScrollPosition;
});


let hamburger = document.querySelector(".hamburger");
hamburger.addEventListener("click", function () {
  document.body.classList.toggle("open");
});

gsap.set("#service-1", { y: 100, opacity: 0 });
      ScrollTrigger.batch("#service-1", {
        onEnter: (batch) => gsap.to(batch, { opacity: 1, y: 0, stagger: 2 }),
      });
      gsap.set("#service-text-1", { y: 100, opacity: 0 });
      ScrollTrigger.batch("#service-text-1", {
        onEnter: (batch) => gsap.to(batch, { opacity: 1, y: 0, stagger: 2 }),
      });
      gsap.set("#service-2", { y: 100, opacity: 0 });
      ScrollTrigger.batch("#service-2", {
        onEnter: (batch) => gsap.to(batch, { opacity: 1, y: 0, stagger: 2 }),
      });
      gsap.set("#service-text-2", { y: 100, opacity: 0 });
      ScrollTrigger.batch("#service-text-2", {
        onEnter: (batch) => gsap.to(batch, { opacity: 1, y: 0, stagger: 2 }),
      });

      gsap.set(".cards", { y: 100, opacity: 0 });
      ScrollTrigger.batch(".cards", {
        onEnter: (batch) => gsap.to(batch, { opacity: 1, y: 0, stagger: 2 }),
      });