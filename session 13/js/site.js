var bars = document.querySelector('.fa-bars')
var x_bars = document.querySelector('.fa-times')

var nav = document.querySelector('nav');
bars.onclick = function ()
{
    bars.style.display = 'none'
    x_bars.style.display = 'block';
    nav.classList.remove('nav-close')
    nav.classList.add('nav-open')
}

x_bars.onclick = function ()
{
    x_bars.style.display = 'none'
    bars.style.display = 'block'
    nav.classList.remove('nav-open')
    nav.classList.add('nav-close')
}