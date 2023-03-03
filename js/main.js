"use strict";
//  ******************************
//  mobile menu bar
//  ******************************
const headerLists = document.getElementById("headerLists");
const mobileMenu = document.getElementById("mobileMenu");
const works = document.getElementById("worksMenu");

mobileMenu.addEventListener("click", function () {
  toggleOpenClassName();
});

works.addEventListener("click", function () {
  toggleOpenClassName();
});

function toggleOpenClassName() {
  headerLists.classList.toggle("open");
  mobileMenu.classList.toggle("open");
}
//  ******************************
//  common fade
//  ******************************
window.addEventListener("load", commonFade)
window.addEventListener("scroll", commonFade);

function commonFade() {
  const fades = document.querySelectorAll(".fade");
  fades.forEach(function (fadeElement) {
    const rect = fadeElement.getBoundingClientRect();
    const rectHeight = rect.bottom - rect.top;
    const isInView = -(rectHeight / 1.15) < rect.top && rect.bottom < window.innerHeight + (rectHeight / 2);
  if (isInView) {
    fadeElement.classList.add("fade-in");
  } else {
    fadeElement.classList.remove("fade-in");
  }
});
}
