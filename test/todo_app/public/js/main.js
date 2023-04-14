"use strict";

{
  const token = document.querySelector("main").dataset.token;
  const ul = document.querySelector("ul");
  const checkboxes = document.querySelectorAll("input[type='checkbox']");
  const input = document.querySelector("[name='title']");
  input.focus();
  const deletes = document.querySelectorAll(".delete");
  const purge = document.querySelector(".purge");

  function addTodo(id, title) {
    let addHtml = `      
        <li data-id="${id}">
            <input type="checkbox">
            <span>${title}</span>
            <span class="delete">×</span>
        </li>`;

    ul.insertAdjacentHTML("afterbegin", addHtml);
  }

  ul.addEventListener("click", function (e) {
    if (e.target.type === "checkbox") {
      fetch("?action=toggle", {
        method: "POST",
        body: new URLSearchParams({
          id: e.target.parentNode.dataset.id,
          token: token,
        }),
      })
        .then(function (response) {
          if (!response.ok) {
            throw new Error("This Todo has been deleted!");
          }
          return response.json();
        })
        .then(function (result) {
          if (result.is_done !== e.target.checked) {
            alert("This Todo has been updated! UI is begin updated.")
            e.target.checked = result.is_done;
            location.reload();
          }
  
        })
        .catch(function (err) {
          alert(err.message);
          location.reload();
        });
    }
    if (e.target.classList.contains("delete")) {
      if (!confirm("Are you sure?")) return;
      fetch("?action=delete", {
        method: "POST",
        body: new URLSearchParams({
          id: e.target.parentNode.dataset.id,
          token: token,
        }),
      });

      e.target.parentNode.remove();
    }
  });

  // タスクの追加
  document.querySelector("form").addEventListener("submit", function (e) {
    e.preventDefault();
    const title = input.value;

    fetch("?action=add", {
      method: "POST",
      body: new URLSearchParams({
        title: title,
        token: token,
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

  // PURGEボタンクリック時の処理
  purge.addEventListener("click", function () {
    if (!confirm("Delete all checked tasks, Are you sure?")) return;
    fetch("?action=purge", {
      method: "POST",
      body: new URLSearchParams({
        token: token,
      }),
    });

    checkboxes.forEach(function (checkbox) {
      if (checkbox.checked) {
        checkbox.parentNode.remove();
      }
    });
  });
}
