"use strict";
{
  const ul = document.querySelector("ul");
  const input = document.querySelector("[name='title']");

  //ブラウザにタスクの追加 ********** **********
  document.querySelector("form").addEventListener("submit", function (e) {
    e.preventDefault();
    const title = input.value;

    fetch("?action=add", {
      method: "POST",
      // URLSearchParamsオブジェクトは、URLのクエリストリング形式のパラメータを操作するためのインターフェースを提供する
      body: new URLSearchParams({
        fetchBodyTitle: title,
      }),
    })
      .then(function (response) {
        return response.json();
      })
      .then(function (json) {
        addTodo(json.id, title);
      });
    input.value = "";
    input.focus();
  });

  function addTodo(id, title) {
    let addHtml = `      
  <li data-id="${id}">
      <input type="checkbox">
      <span>${title}</span>
      <span class="delete">×</span>
  </li>`;
    ul.insertAdjacentHTML("afterbegin", addHtml);
  }
  //クリックハンドラー ********** **********
  ul.addEventListener("click", (e) => {
    //
    // デリートボタン
    if (e.target.classList.contains("delete")) {
      let task = e.target.previousElementSibling.textContent;
      if (!confirm(`タスク ${task} を削除してよろしいですか？`)) return;

      fetch("?action=delete", {
        method: "POST",
        body: new URLSearchParams({
          fetchBodyId: e.target.parentNode.dataset.id,
        }),
      });

      e.target.parentNode.remove();
    }
  });
}
