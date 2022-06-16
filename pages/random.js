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
$('button.save1').on('click', function(){
  localStorage.setItem('result', document.querySelector('.check').innerHTML);
  const body = document.querySelector('body');
  const div = document.createElement('div');
  const check = document.querySelector('.check').innerHTML;
  const mant = document.querySelector('.mant')
  div.classList.add('gou');
  const get = localStorage.getItem('result');
  div.innerHTML = get;
  mant.appendChild(div);
  localStorage.setItem('gou', document.querySelector('.mant').innerHTML);
})
function Saved(){
  const gou = localStorage.getItem('gou');
  if (gou) {
    document.querySelector('.mant').innerHTML = gou;
  }
}
Saved();