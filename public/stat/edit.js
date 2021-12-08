const editButton = document.getElementById("edit_button");
const deleteButton = document.getElementById("delete_button");
const form = document.getElementById("edit_form");
const error_container = document.getElementsByClassName("error_container")[0];
const _token = document.getElementsByName('_token')[0].value;
const _token2 = document.getElementsByName('_token')[1].value;

/* Toggle visibility of form */

editButton.addEventListener("click", (event) => {
  event.preventDefault();
  const textFields = document.getElementsByClassName("property_value");
  const editInputs = document.getElementsByClassName("edit");
  const buttons = document.getElementsByClassName("btn");
  for (let i = 0; i < textFields.length; i++) {
    textFields[i].classList.add("d-none");
    editInputs[i].classList.remove("d-none");
    if (editInputs[i].nodeName === "SELECT") {
      for (let j = 0; j < editInputs[i].children.length; j++) {
        if (editInputs[i].children[j].textContent.indexOf(textFields[i].textContent) !== -1) {
          editInputs[i].children[j].setAttribute('selected', 'selected');
          break;
        }; 
      };
    } else if (editInputs[i].nodeName === "TEXTAREA") {
      editInputs[i].value = textFields[i].textContent;
      editInputs[i].style.height = editInputs[i].scrollHeight + "px";
    } else {
      editInputs[i].value = textFields[i].textContent;
    };
  };
  for (let i = 0; i < buttons.length; i++) {
    buttons[i].classList.toggle("d-none");
  };
});