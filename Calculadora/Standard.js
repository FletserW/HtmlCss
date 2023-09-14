let valor = "";

function buttonp(value) {
  valor += value;
  document.getElementById("display").value = valor;
}

function clea() {
  valor = "";
  document.getElementById("display").value = "";
}

function calculateResult() {
  try {
    const result = eval(valor);
    document.getElementById("display").value = result;
    valor = result.toString();
  } catch (error) {
    document.getElementById("display").value = "Error";
  }
}