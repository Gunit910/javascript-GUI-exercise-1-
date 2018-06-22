<html>
<head>
<script language = "javascript">


function Percentage()
	{
		var num1,num2,num3,total;
		num1=document.getElementById("txtnum1").value;
		num2=document.getElementById("txtnum2").value;
		num3=document.getElementById("txtnum3").value;
		document.getElementById("percent").innerHTML = parseInt(((parseInt(num1)+parseInt(num2)+parseInt(num3))/300)*100);
	} 

function Total()
	{
		var num1,num2,num3,total;
		num1=document.getElementById("txtnum1").value;
		num2=document.getElementById("txtnum2").value;
		num3=document.getElementById("txtnum3").value;
		document.getElementById("total").innerHTML = parseInt(num1)+parseInt(num2)+parseInt(num3);
	}	
	
/*	function Res(a)
{
document.getElementById("grade").innerHTML = a;
}
*/
function Grade()
	{
		var num1,num2,num3,grd;
		num1=document.getElementById("txtnum1").value;
		num2=document.getElementById("txtnum2").value;
		num3=document.getElementById("txtnum3").value;
		
		grd =  (parseInt(num1)+parseInt(num2)+parseInt(num3))/3;
		if (grd>=80&& grd<=100)
		{
		document.getElementById("grade").innerHTML = "S";
		}
		if (grd>=75 && grd<80)
		{
		document.getElementById("grade").innerHTML = "A";
		}
		if (grd>=70 && grd<75)
		{
		document.getElementById("grade").innerHTML = "B";
		}
		if (grd>=60 && grd<70)
		{
		document.getElementById("grade").innerHTML = "C";
		}
		if (grd>=50 && grd<60)
		{
		document.getElementById("grade").innerHTML = "D";
		}
		if (grd<50 && grd>=0)
		{
		document.getElementById("grade").innerHTML = "F";
		}
		 
	/*	 switch (true)
			{
				case grd>=80:
				document.getElementById("grade").innerHTML = "S";
				break;
				case grd>=75:
				document.getElementById("grade").innerHTML = "A";
				break;
				case grd>=70:
				document.getElementById("grade").innerHTML = "B";
				break;
				case grd>=60:
				document.getElementById("grade").innerHTML = "C";
				break;
				case grd>=50:
				document.getElementById("grade").innerHTML = "D";
				break;
				case grd<50;
				document.getElementById("grade").innerHTML = "F";
				break;

			} */
		
	} 
	
function SetColor(ctrname)
	{
	document.getElementById(ctrname).style.background="orange";
	}
function RemoveColor(ctr)
	{
	ctr.style.background="white";
	}	
	

	

</script>
<style>
fieldset {
    background-color: lightblue;
    
    border-radius: 25px;
    border: 3px solid #73AD21;
    padding: 10px; 
    width: 350px;
    height: 350px;    

    margin-left: 400;
    margin-right: 400;
    margin-top: 120;
    margin-bottom: 120;
}
legend {
    background-color: #000;
    color: #fff;
    padding: 3px 6px;
}
input:invalid + span:after {
    content: '✖';
    color: red;
    padding-left: 5px;
}

input:valid + span:after {
    content: '✓';
    color: green;
    padding-left: 5px;
}

</style>
</head>

<body>
<fieldset>
<legend>Student Result:</legend>
<table align="center">
<form>
<tr>
<td >Roll No.</td>
<td><input  id="txtroll" onfocus="SetColor('txtroll')"  type="alphanumeric" placeholder="eg. 98345" maxlength='6' onblur="RemoveColor(this)" placeholder="Roll Number" required/><span class="validity"></span></td>
</tr

<tr>
<td>Name</td>
<td><input  id="txtname" onfocus="SetColor('txtname')"  type="text" onblur="RemoveColor(this)" placeholder="Enter student name" maxlength="20" required/><span class="validity"></span></td>
</tr

<tr>
<td>Class</td>
<td><input  id="txtclass" onfocus="SetColor('txtclass')"  type="number" min="5" max="12" onblur="RemoveColor(this)" placeholder="Class(From 5th to 12th)" required="Please enter a Class"/><span class="validity"></span></td>
</tr

<tr>
<td>HTML Marks</td>
<td><input id="txtnum1" min="0" max="100" placeholder="Min= 0, Max=100"  type="number" onfocus="SetColor('txtnum1')" onblur="RemoveColor(this)" onchange="Total(); Percentage(); Grade()" required="Please enter Marks in HTML"/><span class="validity"></span></td>
</tr>

<tr>
<td>CSS Marks</td>
<td><input id="txtnum2" min="0" max="100" placeholder="Min= 0, Max=100"  type="number" onfocus="SetColor('txtnum2')" onblur="RemoveColor(this)" onchange="Total(); Percentage(); Grade()  " required="Please enter Marks in CSS"/><span class="validity"></span></td>
</tr>

<tr>
<td>J.S Marks</td>
<td><input id="txtnum3" min="0" max="100" placeholder="Min= 0, Max=100"  type="number" onfocus="SetColor('txtnum3')" onblur="RemoveColor(this)" onchange="Total(); Percentage(); Grade()" required="Please enter Marks in J.S"/><span class="validity"></span></td>
<span class="validity"></span>
</tr>

<tr>
<td>Total Marks</td>
<td id="total"></td>
</tr>

<tr>
<td>Total Percentage</td>
<td id="percent" ></td>
</tr>

<tr>
<td>Grade</td>
<td id="grade" ></td>
</tr>

<tr>
<td><input type="submit"  value="Submit" /></td>
<td><input type="reset"  value="Clear" /></td>
</tr>

</form>

</table>
</fieldset>
</body>
</html>