/*
var inputs = document.querySelectorAll('.form-control')
var icons = document.querySelectorAll('.position-absolute');
icons[0].onclick = function()
{    icons[0].style.display = 'none'
    icons[1].style.display = 'block'
    inputs[2].type = 'text'
}
icons[1].onclick = function()
{    icons[1].style.display = 'none'
    icons[0].style.display = 'block'
    inputs[2].type = 'password'}

for(var i = 0; i < inputs.length;i++)
{    inputs[i].onblur = function(e) 
       {
        if(e.target.value.length > 3)     
           {            e.target.nextElementSibling.style.display = 'none'       
         }else   
              {            e.target.nextElementSibling.style.display = 'block'        }        
                }
}
*/


var inputs = document.querySelectorAll('.form-control');
console.log(inputs)


for(var i = 0 ; i < inputs.length ; i++)
{
    inputs[i].onblur = function(e)
    {
        if(e.target.value.length > 2)
        {
            e.target.nextElementSibling.style.display = 'none'
        }else
        {
            e.target.nextElementSibling.style.display = 'block'
        }
    }
}

            