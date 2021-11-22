function btn(key) {
  let resultElement = document.getElementById("result");
  console.log(key);
  if (!isNaN(key)) {
    let res = resultElement.innerHTML;
    resultElement.innerHTML = res == 0 ? key : res + key;
  } else if (key == ".") {
    indexOperator = resultElement.innerHTML.indexOf("+");
  } else {
  }
}
