function add() {
    var x = parseFloat(document.getElementById("number1").value);
    var y = parseFloat(document.getElementById("number2").value);
    var z = x + y;
    document.getElementById("result").value = z;
}
function sub() {
    var x = parseFloat(document.getElementById("number1").value);
    var y = parseFloat(document.getElementById("number2").value);
    var z = x - y;
    document.getElementById("result").value = z;
}
function multi() {
    var x = parseFloat(document.getElementById("number1").value);
    var y = parseFloat(document.getElementById("number2").value);
    var z = x * y;
    document.getElementById("result").value = z;
}
function divi() {
    var x = parseFloat(document.getElementById("number1").value);
    var y = parseFloat(document.getElementById("number2").value);
    var z = x / y;
    document.getElementById("result").value = z;
}