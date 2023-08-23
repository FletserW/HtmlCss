let valor = "";

function buttonp(value) {
  valor += value;
  document.getElementById("display").value = valor;
}

function clear() {
  valor = "";
  document.getElementById("display").value = "";
}

function calculateResult() {
  try {
    document.getElementById("display").value = result;
    valor = result.toString();
  } catch (error) {
    document.getElementById("display").value = "Error";
  }
}
