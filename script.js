function showTextField() {
    var textField = document.createElement("input");
    textField.setAttribute("type", "text");
  
    var parentElement = document.getElementById("myButton").parentNode;
    parentElement.replaceChild(textField, document.getElementById("myButton"));
//Кнопка 2
    var parentElement = document.getElementById("myButton2").parentNode;
    parentElement.replaceChild(textField, document.getElementById("myButton2"));
  }
  