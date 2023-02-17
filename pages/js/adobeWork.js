"use strict";
import { adobeWorkData } from "../js/adobeWorkData.js";

// アニメーションスピード
const duration = 1000;
const photoRow = document.querySelector(".photo-row");
const rows = document.querySelectorAll(".photo-row > li");

let dataNum = adobeWorkData.length;
let randNum = Math.floor(Math.random() * dataNum);
let showNum = randNum;

render();
setInterval(function () {
  if (randNum >= dataNum - 1) {
    randNum = 0;
  } else {
    randNum++;
  }
  showNum = randNum;
  fadeOut();
  setTimeout(function () {
    render();
  }, duration);
}, 3000);

//レンダー関数 *************************
function render() {
  rows.forEach(function (row) {
    const { url, alt, title, href } = adobeWorkData[showNum];
    row.innerHTML = `<a href=${href} target="_blank"
    rel="noopener noreferrer">
    <img src=${url} alt=${alt} title=${title} >
    </a>`;
    if (showNum >= dataNum - 1) {
      showNum = 0;
    } else {
      showNum++;
    }
  });
  fadeIn();
}
//フェードアニメーション *************************
function fadeOut() {
  photoRow.animate(
    {
      opacity: ["1", `0`],
    },
    {
      duration: duration,
      fill: "forwards",
      direction: "normal",
      easing: "ease-in-out",
    }
  );
}
function fadeIn() {
  photoRow.animate(
    {
      opacity: ["0", `1`],
    },
    {
      duration: duration,
      fill: "forwards",
      direction: "normal",
      easing: "ease-in-out",
    }
  );
}
