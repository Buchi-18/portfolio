"use strict";

let innerHeight = window.innerHeight;
const mainImage = document.getElementById("mainImage")

mainImage.style.height = innerHeight + "px";
//  ******************************
//  menu bar
//  ******************************
const menuBoard = document.getElementById("menuBoard");
const menuBarBox = document.getElementById("menuBarBox");
const menuBarText = document.getElementById("menuBarText");
let text = "";
let windowWidth = window.innerWidth;
if (windowWidth < 750) {
  text = "menu";
} else {
  text = "more";
}
menuBarText.innerHTML = text;
menuBarBox.addEventListener("click", function () {
  menuBoardHandler();
});
menuBoard.addEventListener("click", function (e) {
  if (!e.target.tagName === "A") return;
  menuBoardHandler();
});

function menuBoardHandler() {
  if (menuBoard.className === "open") {
    menuBoard.classList.remove("open");
    menuBarBox.classList.remove("open");
    menuBoard.classList.add("close");
    menuBarBox.classList.add("close");
    menuBarText.innerHTML = text;
  } else {
    menuBoard.classList.remove("close");
    menuBarBox.classList.remove("close");
    menuBoard.classList.add("open");
    menuBarBox.classList.add("open");
    menuBarText.innerHTML = "close";
  }
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
