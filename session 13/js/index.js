/* var p = document.createElement('p');

var parent = document.querySelector('.parent');

p.innerHTML = "this html tag created from JS"

parent.appendChild(p); */

var ol = document.querySelector('ol');
var task = document.getElementById('task');
var add = document.getElementById('add');


add.onclick = function()
{
    var li = document.createElement('li');
    li.innerHTML = task.value;
    ol.appendChild(li);

    task.value = '';

    li.onclick = function()
    {
        li.classList.toggle('done')
    }
}