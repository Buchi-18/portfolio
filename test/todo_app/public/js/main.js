"use strict";
{
  // チェックボックスの判定
  const checkboxes = document.querySelectorAll("input[type='checkbox']");
  checkboxes.forEach(function (checkbox) {
    checkbox.addEventListener("change", function () {
      fetch();
    });
  });

  // DELETEボタンクリック時の処理
  const deletes = document.querySelectorAll(".delete");
  deletes.forEach(function (deleteBtn) {
    deleteBtn.addEventListener("click", function () {
      if (!confirm("Are you sure?")) return;
      deleteBtn.parentNode.submit();
    });
  });

  // PURGEボタンクリック時の処理
  const purge = document.querySelector(".purge");
  purge.addEventListener("click", function () {
    if (!confirm("Delete all checked tasks, Are you sure?")) return;
    purge.parentNode.submit();
  });
}
