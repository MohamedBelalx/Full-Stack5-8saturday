var inputs = document.querySelectorAll('.form-control')


var icons = document.querySelectorAll('.position-absolute');


var btn = document.querySelector('.btn-danger')

var res = document.querySelector('.h1')

icons[0].onclick = function()
{
    icons[0].style.display = 'none'

    icons[1].style.display = 'block'

    inputs[2].type = 'text'
}
icons[1].onclick = function()
{
    icons[1].style.display = 'none'

    icons[0].style.display = 'block'

    inputs[2].type = 'password'
}



for(var i = 0; i < inputs.length;i++)
{
    inputs[i].onblur = function(e)
    {

        if(e.target.value.length > 3)
        {
            e.target.nextElementSibling.style.display = 'none'
        }else
        {
            e.target.nextElementSibling.style.display = 'block'
        }
        
    }
}


btn.onclick = function()
{
    var ajax = new XMLHttpRequest(); // object resp.. for ajax requests
    ajax.onreadystatechange = function()
    {
        if(ajax.readyState == 4 && ajax.status == 200)
        {
            res.innerHTML = ajax.responseText
        }
    }
    ajax.open('GET','test.txt') // location and method
    ajax.send();
}