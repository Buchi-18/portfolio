"use strict";
{
  //
  //ブラウザにタスクの追加 ********** **********
  const input = document.querySelector("[name='title']");
  document.querySelector("form").addEventListener("submit", (e) => {
    e.preventDefault();
    const token = getToken();
    const title = input.value;

    fetch("?action=add", {
      method: "POST",
      // URLSearchParamsオブジェクトは、URLのクエリストリング形式のパラメータを操作するためのインターフェースを提供する
      body: new URLSearchParams({
        fetchBodyTitle: title,
        fetchBodyToken: token,
      }),
    })
      .then((response) => response.json())
      .then((json) => addTodo(json.id, title))
      .catch((error) => {
        alert("リクエストが拒否されました。");
        console.error("リクエストが拒否されました。", error);
      });
    input.value = "";
    input.focus();
  });

  function addTodo(id, title) {
    if (title === "") return;
    let addHtml = `      
  <li data-id="${id}">
      <input type="checkbox" name="checkbox">
      <span>${htmlSpecialChars(title)}</span>
      <span class="delete">×</span>
  </li>`;
    ul.insertAdjacentHTML("afterbegin", addHtml);
  }

  //
  //クリックハンドラー ul内要素 ********** **********
  const ul = document.querySelector("ul");
  ul.addEventListener("click", (e) => {
    const token = getToken();

    //
    // チェックボタン
    if (e.target.type === "checkbox") {
      fetch("?action=toggle", {
        method: "POST",
        body: new URLSearchParams({
          fetchBodyId: e.target.parentNode.dataset.id,
          fetchBodyToken: token,
        }),
      })
        .then((response) => {
          return response.json();
        })
        .then((json) => {
          if (json.is_empty === true) {
            alert("このtodoはすでに削除されています、ブラウザを更新します。");
            location.reload();
            return;
          }
          if (json.is_done !== e.target.checked) {
            alert("このtodoの状態は古くなっています、ブラウザを更新します。");
            location.reload();
          }
        })
        .catch((error) => {
          alert("不正なチェックリクエストです。");
          console.error("不正なチェックリクエストです。", error);
        });
    }
    //
    // デリートボタン
    if (e.target.classList.contains("delete")) {
      let task = e.target.previousElementSibling.textContent;
      if (!confirm(`タスク ${task} を削除してよろしいですか？`)) return;

      fetch("?action=delete", {
        method: "POST",
        body: new URLSearchParams({
          fetchBodyId: e.target.parentNode.dataset.id,
          fetchBodyToken: token,
        }),
      })
        .then((response) => response.json())
        .then((json) => {
          if (json.val) {
            e.target.parentNode.remove();
          }
        })
        .catch((error) => {
          alert("削除リクエストが拒否されました。");
          console.error("削除リクエストが拒否されました。", error);
        });
    }
  });

  //
  //クリックハンドラー purgeボタン ********** **********
  const purge = document.querySelector(".purge");
  const checkboxes = document.querySelectorAll("input[type='checkbox']");
  purge.addEventListener("click", () => {
    if (!confirm("チェック済みのタスクを全て削除してよろしいですか？")) return;
    const token = getToken();

    fetch("?action=purge", {
      method: "POST",
      body: new URLSearchParams({
        fetchBodyToken: token,
      }),
    })
      .then((response) => response.json())
      .then((json) => {
        if (json.val) {
          checkboxes.forEach((ele) => {
            if (ele.checked) {
              ele.parentNode.remove();
            }
          });
        }
      })
      .catch((error) => {
        alert("purgeリクエストが拒否されました。");
        console.error("purgeリクエストが拒否されました。", error);
      });
  });
}

//
//トークンの取得 ********** **********
function getToken() {
  const token = document.querySelector("main").dataset.token;
  return token;
}

//
// エスケープ処理 JS
function htmlSpecialChars(str) {
  return (str + "")
    .replace(/&/g, "&amp;")
    .replace(/"/g, "&quot;")
    .replace(/'/g, "&#039;")
    .replace(/</g, "&lt;")
    .replace(/>/g, "&gt;");
}
