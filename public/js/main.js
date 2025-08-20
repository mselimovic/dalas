
document.addEventListener("scroll", function () {
  const navbar = document.querySelector(".navbar");
  if (window.scrollY > 50) {
    navbar.classList.add("scrolled");
    // or use "scrolled blue" for blue glass effect
  } else {
    navbar.classList.remove("scrolled", "blue");
  }
});

