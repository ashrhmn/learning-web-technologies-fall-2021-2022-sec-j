function btn(key) {
  let resultElement = document.getElementById("result");
  let resultPrevElement = document.getElementById("resultPrev");
  let operatorElement = document.getElementById("operator");
  console.log(key);
  if (!isNaN(key)) {
    let res = resultElement.innerHTML;
    resultElement.innerHTML = res == 0 ? key : res + key;
  } else if (key == ".") {
    indexOperator = resultElement.innerHTML.indexOf("+");
    if (!resultElement.innerHTML.includes(".")) {
      resultElement.innerHTML += ".";
    } else {
      //Check if dot exists on second num
    }
  } else {
    if (key == "+" || key == "-" || key == "*" || key == "/" || key == "=") {
      switch (operatorElement.innerHTML) {
        case "+" || "=":
          resultPrevElement.innerHTML =
            Number(resultPrevElement.innerHTML) +
            Number(resultElement.innerHTML);
          resultElement.innerHTML = 0;
          if (!key == "=") {
            operatorElement.innerHTML = key;
          } else {
            resultElement.innerHTML = resultPrevElement.innerHTML;
            operatorElement.innerHTML = "";
            resultPrevElement.innerHTML = "";
          }
          break;
        case "-":
          resultPrevElement.innerHTML =
            Number(resultPrevElement.innerHTML) -
            Number(resultElement.innerHTML);
          resultElement.innerHTML = 0;
          if (!key == "=") {
            operatorElement.innerHTML = key;
          } else {
            resultElement.innerHTML = resultPrevElement.innerHTML;
            operatorElement.innerHTML = "";
            resultPrevElement.innerHTML = "";
          }
          break;
        case "*":
          resultPrevElement.innerHTML =
            Number(resultPrevElement.innerHTML) *
            Number(resultElement.innerHTML);
          resultElement.innerHTML = 0;
          if (!key == "=") {
            operatorElement.innerHTML = key;
          } else {
            resultElement.innerHTML = resultPrevElement.innerHTML;
            operatorElement.innerHTML = "";
            resultPrevElement.innerHTML = "";
          }
          break;
        case "/":
          resultPrevElement.innerHTML =
            Number(resultPrevElement.innerHTML) /
            Number(resultElement.innerHTML);
          resultElement.innerHTML = 0;
          if (!key == "=") {
            operatorElement.innerHTML = key;
          } else {
            resultElement.innerHTML = resultPrevElement.innerHTML;
            operatorElement.innerHTML = "";
            resultPrevElement.innerHTML = "";
          }
          break;
        case "":
          resultPrevElement.innerHTML = resultElement.innerHTML;
          operatorElement.innerHTML = key;
          resultElement.innerHTML = 0;
          break;
        case "=":
          break;
      }
    }
  }
}
