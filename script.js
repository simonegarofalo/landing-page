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