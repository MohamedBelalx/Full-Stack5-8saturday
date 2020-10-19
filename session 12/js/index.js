/* var h1 = document.getElementById('test')
var p = document.getElementsByTagName('p');
var h2 = document.getElementsByClassName('h2');

var h2_container = document.querySelectorAll('.container .h2');


h1.oncopy = function()
{
    h1.innerHTML = 'Try To Be Original'
} */

// dollar converter to LE
var dollar = document.getElementById('dollar');
var convert = document.querySelector('#convert');
var result = document.getElementById('result');

convert.onclick = function ()
{
    result.innerHTML = parseInt(dollar.value) + 16;
}