var age = 26;
var name = 'mohamed';
/* 
if(name == 'mohamed' && age == 26)
{
    console.log('Go To Window 1')
}else
{
    console.log('you are not statisfied the conditions')
}
*/

/* 
var x = [1,2,3,5,'string',true,null];

console.log(x.length)

x.push('added last')

console.log(x) */

// LOOP


var x = [1,2,3,5,6,4,'mohamed','ahmed',true,null]

/* var i = 0;

while(i < x.length)
{
    console.log(x[i])
    i++
}

for(var i =0;i < 10;i++)
{
    if(i == 5)
    {
        continue;
    }
    console.log(i)
}

 */

var names = ['mohamed','ahmed','amr','mohamed','saad','mark'];


/* for(var i = 0; i < names.length ;i++)
{
    if(names[i] == 'mohamed')
    {
        continue
    }
    console.log(names[i])
}
 */
/* for(var i = 0; i < names.length ;i++)
{
    if(names[i] == 'amr')
    {
        console.log(i)
        break;
    }
} */

// functions

var p = 50; // global

function test(x,y) // parameter
{
    var z = x + y; // local
    return z
}

var z_global = test(1,2)

console.log(z_global)