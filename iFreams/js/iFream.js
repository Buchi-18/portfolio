"use strict";

const inlineFrames = document.querySelectorAll("#inlineFrameWrap");
const iFrames = document.querySelectorAll("iframe");

setFrameWidth();

window.addEventListener("scroll", function () {
  setFrameWidth();
});

function setFrameWidth() {
  inlineFrames.forEach(function (inlineFrame) {
    const frameWidth = inlineFrame.clientWidth;
    iFrames.forEach(function (iFrame) {
      iFrame.style.width = `${inlineFrame.clientWidth}px`;
    });
  });
}
