"use strict";

const headerLists = document.getElementById("headerLists");
const mobileMenu = document.getElementById("mobileMenu");
mobileMenu.addEventListener("click", function () {
  headerLists.classList.toggle("open");
  mobileMenu.classList.toggle("open");
});
