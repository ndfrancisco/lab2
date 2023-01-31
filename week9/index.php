<!DOCTYPE html>
<html>
<head>
<title>WEBPROG</title>
<style>
body {background-color: DimGray;}
h1   {font-family:"Constantia";color:white;text-align:center;}
p   {font-family:"Constantia";color:white;text-align:center;}
table    {font-family:"Constantia";color:white;width:100%;}
th, td {border-bottom:1px solid DimGray;}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  border-radius: 50%;
}
.btn {
  border: none;
  color: white;
  padding: 160px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.btn1 {background-color: red;}
.btn2 {background-color: orange;}
.btn3 {background-color: yellow;}
.btn4 {background-color: green;}
.btn5 {background-color: teal;}
.btn6 {background-color: blue;}
.btn7 {background-color: purple;}
</style>
</head>
<body>
<audio id="audio1">
  <source src="note1.wav" type="audio/wav">
</audio>
<audio id="audio2">
  <source src="note2.wav" type="audio/wav">
</audio>
<audio id="audio3">
  <source src="note3.wav" type="audio/wav">
</audio>
<audio id="audio4">
  <source src="note4.wav" type="audio/wav">
</audio>
<audio id="audio5">
  <source src="note5.wav" type="audio/wav">
</audio>
<audio id="audio6">
  <source src="note6.wav" type="audio/wav">
</audio>
<audio id="audio7">
  <source src="note7.wav" type="audio/wav">
</audio>
<script>
	var x1 = document.getElementById("audio1");
	var x2 = document.getElementById("audio2");
	var x3 = document.getElementById("audio3");
	var x4 = document.getElementById("audio4");
	var x5 = document.getElementById("audio5");
	var x6 = document.getElementById("audio6");
	var x7 = document.getElementById("audio7");
	function sound1() { x1.play(); } 
	function sound2() { x2.play(); }
	function sound3() { x3.play(); }
	function sound4() { x4.play(); }
	function sound5() { x5.play(); }
	function sound6() { x6.play(); }
	function sound7() { x7.play(); }
</script>
<h1>Noel</h1>
<table style="width:100%">
  <tr>
    <th>Age:</th>
    <th>21</th>
  </tr>
  <tr>
    <th>Senior High School Graduated From:</th>
    <th>Colegio San Agustin - Binan</th>
  <tr>
    <th>City the High School is located at:</th>
    <th>Binan</th>
  </tr>
  </tr>
  <tr>
    <th>Course:</th>
    <th>BSCS-SS</th>
  </tr>
  <tr>
    <th>Transferee / Second Course:</th>
    <th>No</th>
  </tr>
  <tr>
    <th>Did you choose this course:</th>
    <th>Yes</th>
  </tr>
  <tr>
    <th>Why Yes:</th>
    <th>The course appealed to me the most</th>
  </tr>
  <tr>
    <th>I.T. Experience:</th>
    <th>Programming, Digital design, Animation, Game Design, Web Design, App Design</th>
  </tr>
  <tr>
    <th>Hobbies / Interests:</th>
    <th>Theater, YouTube, Reading, History, Baking, Games, Travelling</th>
  </tr>
  <tr>
    <th>Age:</th>
    <th>21</th>
  </tr>
  <tr>
    <th>Goals in life:</th>
    <th>A stable, fun, and high-paying job and an affordable and big house in metro manila</th>
  </tr>
  <tr>
    <th>What do you expect to learn from this course (Web Programming):</th>
    <th>A fun and stress-free learning experience</th>
  </tr>
  <tr>
    <th>What do you want to learn to help you in your chosen Major:</th>
    <th>Knowledge to help improve my old skills and learn new skills</th>
  </tr>
  <tr>
    <th>Any other interesting aspects of your life that you would like to share:</th>
    <th>My current favorite musical is ride the cyclone</th>
  </tr>
</table>
<p>Add one or more pictures about yourself and your interests that you would like to share for your introduction:</p>
<img src="tmp_1671153587521.jpg">
<p>Turn on your speakers to hear the xylophone</p>
<table>
    <tr>
	<td><button class="btn btn1" onclick="sound1()">DO</button></td>
    <td><button class="btn btn2" onclick="sound2()">RE</button></td>
    <td><button class="btn btn3" onclick="sound3()">MI</button></td>
    <td><button class="btn btn4" onclick="sound4()">FA</button></td>
	<td><button class="btn btn5" onclick="sound5()">SO</button></td>
	<td><button class="btn btn6" onclick="sound6()">LA</button></td>
	<td><button class="btn btn7" onclick="sound7()">TI</button></td>
	</tr>
</table>
</body>
