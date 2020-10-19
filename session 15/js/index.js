var div = document.querySelector('.features .container')
var row = document.querySelector('.review .row')

window.onscroll = function () 
{
    if(document.body.scrollTop > 300)
    {
        div.classList.add('animate__fadeInLeftBig')
    }
    if(document.body.scrollTop > 600)
    {
        row.classList.add('animate__fadeInLeftBig')
    }
}