<!DOCTYPE html>
<html>
<body>
<p id="myP1">TEXT-GROWING.</p>
<p id="myP2">TEXTSHRINKING</p>
</body>
<script>
//Global declerations
var size = 10;
vari =0;
var myWait1 = setInterval(GrowText1, 100);
function GrowText1()
{
if(size<51)
{
size = size + 1;
document.getElementById("myP1").style.fontSize = (size+'pt');
document.getElementById("myP1").style.color = "red";
//Hide the paragraph "text-shriniking" document.getElementById("myP2").style.visibility = "hidden";
}
else
{
clearInterval(myWait1);
myWait1 = setInterval(ShrinkText1, 100);
//Now hide the 1st paragraph and display the second paragraph
document.getElementById("myP1").style.visibility = "hidden";
document.getElementById("myP1").style.fontSize = '1pt';
document.getElementById("myP2").style.visibility = "visible";
}
}
function ShrinkText1()
{
if(size>5)
{
size = size -1;
document.getElementById("myP2").style.fontSize = (size+'pt');
}
}
</script>
</html>