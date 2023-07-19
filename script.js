function CreateTextField() {
    var textField = document.createElement("input");
    textField.setAttribute("type", "number");
    textField.setAttribute("name", "wire");
    var div = document.getElementById("knop");
    div.appendChild(textField);
    textField.focus();
  }

  function CreateTextField2() {
    var textField2 = document.createElement("input");
    textField2.setAttribute("type", "number");
    textField2.setAttribute("name", "w");
    var div2 = document.getElementById("knop2");
    div2.appendChild(textField2);
    textField2.focus();
  }
  