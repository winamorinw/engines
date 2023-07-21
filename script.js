function CreateTextField() {
  // let textField = document.createElement("input");
  // textField.setAttribute("type", "number");
  // let div = document.getElementById("knop");
  // div.appendChild(textField);

  let hiddeninput = document.querySelector('.hidden_input');
  hiddeninput.setAttribute('class', '');
  hiddeninput.focus();
}

function CreateTextField2() {
  // var textField2 = document.createElement("input");
  // textField2.setAttribute("type", "number");
  // var div2 = document.getElementById("knop2");
  // div2.appendChild(textField2);

  let hiddeninput = document.querySelector('.hidden_input');
  hiddeninput.setAttribute('class', '');
  hiddeninput.focus();
}

function changeColor(code)
{

  if(code == 1)
  {
    let elem = document.querySelector("#ppp");
    elem.style.backgroundColor = '#ccc';
    elem.style.boxShadow = '2px 2px 2px 1px #000';

    let elem2 = document.querySelector("#ppp2");
    elem2.style.backgroundColor = 'white';
    elem2.style.boxShadow = '0px 0px 0px 0px #00000000';

  }
  else
  {
    let elem2 = document.querySelector("#ppp2");
    elem2.style.backgroundColor = '#ccc';
    elem2.style.boxShadow = '2px 2px 2px 1px #000';


    let elem = document.querySelector("#ppp");
    elem.style.backgroundColor = 'white';
    elem.style.boxShadow = '0px 0px 0px 0px #00000000';
    
  }
  

  

}

