"use strict"

const inlineFrame = document.getElementById("inlineFrameWrap");
const iFrame = document.getElementById("iframe");
const frameWidth = inlineFrame.clientWidth

setFrameWidth ()

window.addEventListener("scroll", function () {
  setFrameWidth ()
});

function setFrameWidth (){
  iFrame.style.width = `${inlineFrame.clientWidth}px`;
}

