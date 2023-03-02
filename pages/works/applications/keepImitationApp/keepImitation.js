"use strict";
class App {
  constructor() {
    this.notes = JSON.parse(localStorage.getItem("notes")) || [];
    this.title = "";
    this.text = "";
    this.id = "";
    this.darkModeCheck = window.matchMedia("(prefers-color-scheme: dark)");

    this.$note = document.querySelectorAll("#note");
    this.$form = document.querySelector("#form");
    this.$notes = document.querySelector("#notes");
    this.$modal = document.querySelector(".modal");
    this.$modalTitle = document.querySelector(".modal-title");
    this.$modalText = document.querySelector(".modal-text");
    this.$placeholder = document.querySelector("#placeholder");
    this.$noteTitle = document.querySelector("#note-title");
    this.$noteText = document.querySelector("#note-text");
    this.$formButtons = document.querySelector("#form-buttons");
    this.$formSubmitBtn = document.querySelector("#submit-button");
    this.$formCloseBtn = document.querySelector("#form-close-button");
    this.$colorTooltip = document.querySelector("#color-tooltip");
    this.$displayMode = document.querySelector(".display-mode");
    this.onDarkMode();
    this.noteColorToggle();
    this.render();
    this.addEventListeners();
  }
  // ******************************
  // addEventListeners
  // ******************************
  addEventListeners() {
    //Take a note
    document.body.addEventListener("click", (e) => {
      this.handleFormClick(e);
      this.selectNote(e);
      this.openModal(e);
      this.deleteNote(e);
    });
    // Open color palette
    document.body.addEventListener("click", (e) => {
      this.openColorPalette(e);
    });
    // Select color
    this.$colorTooltip.addEventListener("click", (e) => {
      const color = e.target.dataset.color;
      if (color) {
        this.editNoteColor(color);
      }
    });
    // Submit button
    this.$form.addEventListener("submit", (e) => {
      e.preventDefault();
      const title = this.$noteTitle.value;
      const text = this.$noteText.value;
      const hasNote = title || text;
      if (hasNote) {
        this.addNote({ title, text });
      }
    });
    this.$formCloseBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      this.closeForm();
    });
    document.body.addEventListener("click", (e) => this.closeModal(e));
    document.querySelector(".toggle_button").addEventListener("click", () => {
      this.darkModeCheck = !this.darkModeCheck;
      this.onDarkMode();
      this.noteColorToggle();
    });
  }
  // ******************************
  // method
  // ******************************
  handleFormClick(e) {
    const isFormClicked = this.$form.contains(e.target);

    const title = this.$noteTitle.value;
    const text = this.$noteText.value;
    const hasNote = title || text;

    if (isFormClicked) {
      this.openForm();
    } else if (hasNote) {
      this.addNote({ title, text });
    } else {
      this.closeForm();
    }
  }
  openForm() {
    this.$form.classList.add("form-open");
    this.$noteTitle.style.display = "block";
    this.$formButtons.style.display = "block";
  }
  closeForm() {
    this.$form.classList.remove("form-open");
    this.$noteTitle.style.display = "none";
    this.$formButtons.style.display = "none";
    this.$noteTitle.value = "";
    this.$noteText.value = "";
  }
  openModal(e) {
    if (
      e.target.matches(".toolbar-delete") ||
      e.target.matches(".toolbar-color")
    )
      return;

    if (e.target.closest(".note")) {
      this.$modal.classList.toggle("open-modal");
      this.$modalTitle.value = this.title;
      this.$modalText.value = this.text;
    }
  }
  closeModal(e) {
    if (e.target.matches(".modal") || e.target.matches(".modal-close-button")) {
      this.editNote();
      this.$modal.classList.toggle("open-modal");
    } else {
      return;
    }
  }
  openColorPalette(e) {
    if (e.target.matches(".color-option")) {
      return;
    } else if (!e.target.matches(".toolbar-color")) {
      this.$colorTooltip.style.display = "none";
      return;
    }
    this.id = e.target.nextElementSibling.dataset.id;
    const paletteCoords = e.target.getBoundingClientRect();
    const horizontal = paletteCoords.left - 110;
    const vertical = paletteCoords.top + window.scrollY + 60;
    this.$colorTooltip.style.transform = `translate(${horizontal}px, ${vertical}px)`;
    this.$colorTooltip.style.display = "flex";
    this.darkColorPalette();
  }
  onDarkMode() {
    const onDark = document.getElementById("dark");
    this.darkModeCheck ? (onDark.disabled = false) : (onDark.disabled = true);
  }
  darkColorPalette() {
    const white = document.getElementById("white").dataset;
    const purple = document.getElementById("purple").dataset;
    const orange = document.getElementById("orange").dataset;
    const blue = document.getElementById("blue").dataset;
    if (this.darkModeCheck) {
      white.color = "#202124";
      purple.color = "#571297";
      orange.color = "#752300";
      blue.color = "#002dc1";
    } else {
      white.color = "white";
      purple.color = "#d7aefb";
      orange.color = "#fbbc04";
      blue.color = "#a7ffeb";
    }
  }
  noteColorToggle() {
    if (this.darkModeCheck) {
      this.$displayMode.innerHTML = `<i class="fa-solid fa-moon"></i>`;

      this.notes.map((note) => {
        if (note.color === "#d7aefb" || note.color === "#571297") {
          note.color = "#571297";
        } else if (note.color === "#fbbc04" || note.color === "#752300") {
          note.color = "#752300";
        } else if (note.color === "#a7ffeb" || note.color === "#002dc1") {
          note.color = "#002dc1";
        } else {
          note.color = "#202124";
        }
        this.notes.color = note.color;
      });
    }
    if (!this.darkModeCheck) {
      this.$displayMode.innerHTML = `<i class="fa-regular fa-sun"></i>`;

      this.notes.map((note) => {
        if (note.color === "#571297" || note.color === "#d7aefb") {
          note.color = "#d7aefb";
        } else if (note.color === "#752300" || note.color === "#fbbc04") {
          note.color = "#fbbc04";
        } else if (note.color === "#002dc1" || note.color === "#a7ffeb") {
          note.color = "#a7ffeb";
        } else {
          note.color = "#fff";
        }
        this.notes.color = note.color;
      });
    }
    this.render();
  }
  addNote({ title, text }) {
    const newNote = {
      title,
      text,
      color: this.darkModeCheck ? "#202124" : "#fff",
      id: this.notes.length > 0 ? this.notes[this.notes.length - 1].id + 1 : 1,
    };
    this.notes = [...this.notes, newNote];
    this.render();
    this.closeForm();
  }
  editNote() {
    const title = this.$modalTitle.value;
    const text = this.$modalText.value;
    this.notes = this.notes.map((note) =>
      note.id === Number(this.id) ? { ...note, title, text } : note
    );
    this.render();
  }
  editNoteColor(color) {
    this.notes = this.notes.map((note) =>
      note.id === Number(this.id) ? { ...note, color } : note
    );
    this.render();
  }
  render() {
    this.saveNotes();
    this.displayNotes();
  }
  saveNotes() {
    localStorage.setItem("notes", JSON.stringify(this.notes));
  }
  displayNotes() {
    const hasNotes = this.notes.length > 0;
    this.$placeholder.style.display = hasNotes ? "none" : "flex";

    this.$notes.innerHTML = this.notes
      .map((note) => {
        return `
        <div style="background:${note.color};" class="note" data-id="${
          note.id
        }">
          <div class="${note.title && "note-title"}">${note.title}
          </div>
          <div class="note-text">
          ${note.text}
          </div>
            <div class="toolbar-container">
              <div class="toolbar">
                <i class="fa-solid fa-palette toolbar-color" data-id=${
                  note.id
                }></i>
                <i class="fa-solid fa-trash-can toolbar-delete" data-id=${
                  note.id
                }></i>
              </div>
            </div>
        </div>`;
      })
      .join("");
  }
  selectNote(e) {
    const $selectedNote = e.target.closest(".note");
    if (!$selectedNote) return;
    const [$noteTitle, $noteText] = $selectedNote.children;
    this.title = $noteTitle.innerText;
    this.text = $noteText.innerText;
    this.id = $selectedNote.dataset.id;
  }
  deleteNote(e) {
    e.stopPropagation();
    if (!e.target.matches(".toolbar-delete")) return;
    const id = e.target.dataset.id;
    this.notes = this.notes.filter((note) => note.id !== Number(id));
    this.render();
  }
}

new App();
