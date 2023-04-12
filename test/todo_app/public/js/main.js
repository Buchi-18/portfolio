"use strict";
{
  // チェックボックスの判定
  const checkboxes = document.querySelectorAll("input[type='checkbox']");
  checkboxes.forEach(function (checkbox) {
    checkbox.addEventListener("change", function () {
      checkbox.parentNode.submit();
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
}
