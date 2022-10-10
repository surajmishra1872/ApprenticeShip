window:
************
window is a primary Object of javascript of javascript providing some property and method.

alert()
confirm()
prompt()
open()
location()
setInterval()
clearInterval()
setTimeout()
etc.

prompt:
-------------
=>prompt is used to take input on runtime .
=> return type of prompt function is String.
=>prompt functionis Location in window Object

Syntax:
------
var a=prompt("fieldname","placeholder")

var
-----
var variables are globally scoped
var variables can be updated and re-declared

let
-------
let variables can be updated but not re-declared.

const
-------
const variables neither be updated nor re-declared.

== vs ===

==Equality operator
=== strict equality operator

Here both value and type is import


10=="10" return true
10==="10" return false

Type Casting/Type conversion.
---------------------------------
the process of converting one type value to another type in known as type 
casting or type conversion.

1.parseInt()
2.parseFloat()


open
-------
open  function is used to open a website on new tab or new window.
syntax:-
----------
window.open("URL","_blank","height=value,width=value")

examaple:
window.open("https://techpile.in","_blank","height=400px",width="400px")

getElementById( ) Function
------------------------------
=> getElementById Function is used to select HTML element on the basis of ID.
=>return type of getElementById Function is current Object.
=>getElementById Function is located in document Object.
=>document is the built-in Object of DOM providing some property and methods to handle html
tags

Syntax
-------
document.getElementById("id_of_html_element")

Example:-

document.getElementById("dv")

Function in javascript
------------------------

Function is a group of reuseable code designed to perform particular task repeadedly.
=>a javascript function is executed when calls it.
there are two type of function in js
---------------------------------------
1.built-in Function
=> the Function which are coming along with system interpreter are known as built-in Function.
Example:
alert()
prompt()
open()
setInterval()
etc.

2.user defined Function :-
=> The Function which are devloped by user acording to business logic are known as UDF.

There are two keyword present to define UDF
---------------------------------------------
1.Function(mandatory)
2.return(optional)

Case 1.
-----------

Syntax
------
1.Function without parameter
-----------------------------
function function_name()
{
	//line of codes
	-------
	-----------
	--------
	---n
}

2.function with parameter
----------------------------

value
---------
=>value property is used to get/set the value of selected form control.
Syntax
-----
Get-
-------
var a=document.getElementById("txt").value

Set-
--------
document.getElementById("IDofHTMLelement").value="ssjcbschj"

or

var x=document.getElementById("IDofHTMLElement")
x.value="mssmfbsf"

innerText
---------
=> inner text function property is used to set/get normal text without extra spacing of selected
html tag.

Get-
----
<div id="dv">Techpile</div>
document.getElementById("dv").innerText
var d=document.getElementById("dv").innerText="Suraj Mishra"

or

var a=document.getElementById("dv")
a.innerText="Techpile Technology"

innerHTML
------------
=>innerHTML property is used to set/get content with tag and extra space of selected HTML element

Syntax:
-----------
document.getElementById("dv").innerHTML="<b>techpile tehnology</b>"

output:-
-----------
<div id="dv"><h1>JavaScript,	html and css</h1></div> 
document.getElementById("dv").innerHTML

Output:
a=<h1>JavaScript .HTML & CSS</h1>


textContent
-----------
=>textContent property is used to set normal text with extra space of selected HTML element.

Syntax:-
-------
<div id="dv">Techpile Technology     			PVT.LTD.</div>
document.getElementById("dv").textContent="Mishra 		G"

Output:-
-------
Mishra     G

get
------
<div id="dv">JavaScript, HTML & CSS</div>
var a=document.getElementById("dv").textContent

Output:
-------
JavaScript,		HTML & CSS

setInterval()
-------------
=>setInterval function is used to execute a group of statement for every given time period

=>it is located in window Object
=>it has two parameter(callback function,time period)
syntax:-
----------

window.setInterval("funtionName()",1000)

 or

window.setInterval(funtionName,1000)

setTimeout-
------------
=>setTimeout function is used to execute once a group of statement after given time period.

Syntax:-
---------
window.setTimeout(demo,1000)

OR

window.setTimeout("demo()",2000)


-------------------------------  29/11/2021 ---------------------------------
date Object
-------------
date is the predefine object providing some methods related to current date and time.

Syntax
--------
var obj=new Date()

getDay  (0-6) 
getMonth (0-11)
getFullYear() =2021
getSeconds (0,59)
getMinutes (0,59)
getHours(0-23)
getDate(1-31)
getMilliseconds (0-999)
--------------------------------------------------
x.getDate() //29
x.getMonth() //10
x.getFullYear() //2021















