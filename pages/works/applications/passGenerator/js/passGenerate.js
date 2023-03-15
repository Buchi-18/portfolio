"use strict";
import { characters } from "./characterData.js";
let numbers = true;
let newArray = [];

const pass_01 = document.getElementById("pass_01");
const pass_02 = document.getElementById("pass_02");

// Number ON/OFF 判定
document.getElementById("numbers_btn").addEventListener("click", numOption);
// pass generate
document.getElementById("generate_btn").addEventListener("click", passGenerate);
// pass reset
document.getElementById("reset_btn").addEventListener("click", passReset);

// クリップボードにコピー
const copy = document.querySelectorAll(".copy");
copy.forEach(function (copy) {
  copy.addEventListener("click", function (e) {
    let target = e.target.closest(".pass-box");
    let passText = target.firstElementChild.textContent;
    navigator.clipboard.writeText(passText);
    if (passText === "") {
      return;
    } else {
      showBox(); //copyポップアップ表示
    }

    function showBox() {
      target.classList.remove("hidden");
      setTimeout(closeBox, 500); // 500ms後にcopyポップアップを閉じる
    }
    function closeBox() {
      target.classList.add("hidden");
    }
  });
});

// メソッド
function charactersRandomNum() {
  return Math.floor(Math.random() * characters.length);
}
function newArrayRandomNum() {
  return Math.floor(Math.random() * newArray.length);
}

function numOption() {
  numbers_btn.classList.toggle("off");
  numbers = !numbers;

  if (!numbers) {
    numbers_btn.textContent = "Numbers OFF";
  } else {
    numbers_btn.textContent = "Numbers ON";
  }
}

function passGenerate() {
  let pass_length = document.getElementById("pass_length").value;
  pass_01.textContent = "";
  pass_02.textContent = "";
  if (!numbers) {
    const regexp = /[^0-9]/gi;
    for (let i = 0; i < characters.length; i++) {
      if (characters[i].match(regexp)) {
        newArray.push(characters[i]);
      }
    }
    for (let i = 0; i < pass_length; i++) {
      pass_01.textContent += newArray[newArrayRandomNum()];
    }
    for (let i = 0; i < pass_length; i++) {
      pass_02.textContent += newArray[newArrayRandomNum()];
    }
  } else {
    for (let i = 0; i < pass_length; i++) {
      pass_01.textContent += characters[charactersRandomNum()];
    }
    for (let i = 0; i < pass_length; i++) {
      pass_02.textContent += characters[charactersRandomNum()];
    }
  }
}

function passReset() {
  pass_01.textContent = "";
  pass_02.textContent = "";
  pass_length.value = 15;
}
