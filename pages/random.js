function gen() {
    var a = (Math.round(Math.random() * 7) + 2), b = (Math.round(Math.random() * 7) + 2);
    return [a + "x" + b + "=", a * b];
}
var current = gen();
document.getElementById("task").innerHTML = current[0];
function check() {
    ++document.getElementById( +document.getElementById("answer").value == current[1] ? "correct" : "incorrect" ).innerHTML;
    current = gen();
    document.getElementById("task").innerHTML = current[0];
    document.getElementById('answer').value = '';
}