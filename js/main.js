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
//  animation handler js
//  ******************************
// フェードイン共通
window.addEventListener("load", commonFade);
window.addEventListener("scroll", commonFade);
function commonFade() {
  const fades = document.querySelectorAll(".fade");
  fades.forEach(function (element) {
    if (getInView(element)) {
      element.classList.add("fade-in");
    } else {
      element.classList.remove("fade-in");
    }
  });
}
// アニメーション width 発火
window.addEventListener("scroll", setWidthAnim);
function setWidthAnim() {
  const widthBgAnim = document.querySelectorAll(".width-bg-anim");
  widthBgAnim.forEach(function (element) {
    if (getInView(element)) {
      element.classList.add("width-animation");
      console.log("foo");
    }
  });
}
// アニメーション fade in scale 発火
window.addEventListener("scroll", setScaleInAnim);
function setScaleInAnim() {
  const imgScaleAnim = document.querySelectorAll(".img-scale-anim");
  imgScaleAnim.forEach(function (element) {
    if (getInView(element)) {
      element.classList.add("fade-in-scale");
    }
  });
}
// 要素が画面内の任意の位置にあるか判定
function getInView(element) {
  const rect = element.getBoundingClientRect();
  const rectHeight = rect.bottom - rect.top;
  const isInView =
    0 < rect.top && rect.bottom < window.innerHeight + rectHeight;
  return isInView;
}

//  ******************************
//  loading image script
//  ******************************
const loadingImgs = document.querySelectorAll(".loading-box > img");
loadingImgs.forEach(function (loadedImg) {
  loadedImg.addEventListener("load", function () {
    loadedImg.style.opacity = 1;
    loadedImg.parentElement.classList.remove("loading-box");
  });
});
