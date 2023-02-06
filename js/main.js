"use strict";

const headerLists = document.getElementById("headerLists");
const mobileMenu = document.getElementById("mobileMenu");
const works = document.getElementById("worksMenu");

mobileMenu.addEventListener("click", function () {
  toggleOpenClassName();
});

works.addEventListener("click", function () {
  console.log("foo");
  toggleOpenClassName();
});

function toggleOpenClassName() {
  headerLists.classList.toggle("open");
  mobileMenu.classList.toggle("open");

}
