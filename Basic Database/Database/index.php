<html>
<head>
<style>
.main{
	padding-left:5%;
	padding-right:5%;
}


.Name {
		background-color: silver;
	


	padding-left:10px;
	padding-right:10px;
	
height:10%;
border:1px solid black;	

}
input[type=text].NAME {
	height:25%;
	Width:33%;
}
.Address {
		background-color: silver;
	border:1px solid black;	
	Width:70%;
	height:20.3%;

position:static;
	float:left;
}
input[type=text].ADDRESS {
		width:18%;
		height:30%;
		margin-left:10px;

}
.sss {
		background-color: silver;
	border:1px solid black;	
	Width:29.5%;
	height:10%;
	position:static;
	float:right;
	
}
input[type=text].SSS {
	margin-left:10px;
	margin-right:10px;

		width:90%;
	height:30%;

}
.Email {
		background-color: silver;
	border:1px solid black;	
	Width:70%;
	height:9.9%;

	
	position:static;
	float:left;
}
input[type=text].EMAIL {
		width:100%;
		height:30%;
}
.tin {
		background-color: silver;
	border:1px solid black;	
		Width:29.5%;
	height:10%;
	position:static;
	float:right;
	
}
input[type=text].TIN {
	
		margin-left:10px;
	margin-right:10px;

		width:90%;
	height:30%;
}
.Nationality {
		background-color: silver;
	border:1px solid black;	
	Width:24.5%;
	height:15%;
	position:static;
	float:left;

}
input[type=text].NATIONALITY {
	
		margin-left:10px;
	margin-right:10px;

		width:90%;
	height:30%;
}

.contact {
		background-color: silver;
	border:1px solid black;	
		Width:29.5%;
	height:10%;
	position:static;
	float:right;
	
}
input[type=text].CONTACT {
	
		margin-left:10px;
	margin-right:10px;

		width:90%;
	height:30%;
}
.gender {
		background-color: silver;
border:1px solid black;	
	Width:25%;
	height:15%;
	position:static;
	float:left;

}
input[type=radio].GENDER {
		
		height:10%;
		position:static;
		float:left;
}
.Birthplace {
		background-color: silver;
	border:1px solid black;	
	Width:25%;
	height:15%;
	position:static;
	float:left;

}
input[type=text].BIRTHPLACE{
	width:100%;
		height:30%;
		
}
.Birthdate {
		background-color: silver;
	border:1px solid black;	
	Width:24.5%;
	height:15%;
	position:static;
	float:left;
	
}
input[type=text].BIRTHDATE{
		position:static;
	float:left
	    width:100%;
		height:30%;
		
}
.Education {
		background-color: silver;
	border:1px solid black;	
	Width:16%;
	height:25%;
	position:static;
	float:left;

}
input[type=radio].EDUCATION{
		height:8%;
		position:static;
		float:left;
}
.Status {
		background-color: silver;
	border:1px solid black;	
	Width:16.5%;
	height:25%;
	position:static;
	float:left;

}
input[type=radio].STATUS{
		height:8%;
		position:static;
		float:left;
}
.Hair {
		background-color: silver;
	border:1px solid black;	
	Width:16.5%;
	height:25%;
	position:static;
	float:left;
	
}
input[type=radio].HAIR{
		height:8%;
		position:static;
		float:left;
}
.Eyes {
		background-color: silver;
	border:1px solid black;	
	Width:16.5%;
	height:25%;
	position:static;
	float:left;
	
}
input[type=radio].EYES{
		height:8%;
		position:static;
		float:left;
}
.Built {
		background-color: silver;
	border:1px solid black;	
	Width:16.5%;
	height:25%;
	position:static;
	float:left;
	
}
input[type=radio].BUILT{
		height:8%;
		position:static;
		float:left;
}
.Complexion {
	background-color: silver;
	border:1px solid black;	
	Width:16.5%;
	height:25%;	
	position:static;
	float:left;
	
}
input[type=radio].COMPLEXION{
		height:8%;
		position:static;
		float:left;
}

h2 {
	font-size: 16px;
	font-family: "Lucida Console";
	font-weight: bold;
}
h3 {
	font-size: 16px;
	font-family: "Lucida Console";
	font-weight: bold;
}
.title {

position :static;
float:auto;
border:2px solid black;	

background-color: lightblue;
color: White;
height:5%;
padding-left:5px;
font-size: 16px;
font-family: "Lucida Console";
font-weight: bold;

}
h2 {
	font-size: 16px;
	font-family: "Lucida Console";
	font-weight: bold;
}




</style>

<?php
include "connection.php";

?>



<table class="table table-bordered">

  
  <div class="main">
 
</head>
<body>

  
  <form action="" name="form1" method="post">
  

 
<div class="title">
	
 <p>GENERAL INFORMATION</p>
 </div>
 <div class="Name">
  <h2> NAME </h2>

      <input type="text" class="NAME" id="lastname" placeholder=" Lastname" name="lastname">


      <input type="text" class="NAME" id="firstname" placeholder=" Firstname" name="firstname">
	  
	 
      <input type="text" class="NAME" id="middlename" placeholder=" Middlename" name="middlename">
	   </div>
	   <div class="sss">
  <h3> SSS </h3>
   
      <input type="text" class="SSS" id="sss" placeholder="SSS" name="sss"><br>
 
	
 
</div>
 
	   <div class="Address">
	   
  <h2> PRESENT ADDRESS </h2>
   
	
	

      <input type="text" class="ADDRESS" id="no" placeholder="No." name="no">
 
	
  
      <input type="text" class="ADDRESS" id="street" placeholder="Street" name="street">
 

      <input type="text" class="ADDRESS" id="city" placeholder="City" name="city">

      <input type="text" class="ADDRESS" id="municipality" placeholder="Municipality " name="municipality">

      <input type="text" class="ADDRESS" id="province" placeholder="Province" name="province">
 
</div>
<div class="tin">
  <h3> TIN </h3>
   
	
	
      <input type="text" class="TIN" id="tin" placeholder="TIN " name="tin">
 
	
 
</div>
<div class="contact">
  <h3> CONTACT NO</h3>
   
	

      <input type="text" class="CONTACT" id="contact" placeholder="Contact" name="contact">
 
	</div>
 
<div class="Email">
  <h3> EMAIL ADDRESS </h3>
   
	
	
      <input type="text" class="EMAIL" id="email" placeholder="Email Adress" name="email">
 
	
 
</div>

<div class="Nationality">
  <h3> NATIONALITY </h3>
   
	
	
   
      <input type="text" class="NATIONALITY" id="nationality" placeholder="nationality" name="nationality">
 
	
 
</div>
<div class="Gender">
  <h3> GENDER </h3>
   
	
	
      
      <input type="radio" name="gender" value="Male." id="gender"value="Male">Male 
	  <br>
	 
	     <input type="radio" name="gender" value="Female." id="gender" value="Female">Female
 <br>
	
 
</div>
<div class="Birthplace">
  <h3> BIRTHPLACE </h3>
   
	
	
      <label for="pwd"></label>
      <input type="text" class="BIRTHPLACE" id="birthplace" placeholder="birthplace" name="birthplace">
 
	
 
</div>
<div class="Birthdate">
  <h3> BIRTH DATE </h3>
   
	
	
      <label for="pwd"></label>
      <input type="date" class="BIRTHDATE" id="birthdate" placeholder="birthdate" name="birthdate">
 
	
 
</div>
	   <div class="Education">
	   
  <h2> EDUCATION </h2>
   
	
	

      <input type="radio" class="EDUCATION" id="education"  value="Informal" name="education">Informal
 <br>
	
  	

      <input type="radio" class="EDUCATION" id="education" value="Elementary" name="education">Elementary
 <br>
	

      <input type="radio" class="EDUCATION" id="education" value="Highschool" name="education">Highschool
	<br>

      <input type="radio" class="EDUCATION" id="education" value="Vocational" name="education">Vocational
	<br>

      <input type="radio" class="EDUCATION" id="education" value="College" name="education">College
 <br>

      <input type="radio" class="EDUCATION" id="education" value="PostGraduate" name="education">PostGraduate
</div>
 <div class="Status">
	   
  <h2> STATUS </h2>
   
	

      <input type="radio" class="STATUS" id="status"  value="Single" name="status">Single
 <br>
	
  	

      <input type="radio" class="STATUS" id="status" value="Married" name="status">Married
 <br>
	

      <input type="radio" class="STATUS" id="status" value="Widow/er" name="status">Widow/er
	<br>

      <input type="radio" class="STATUS" id="status" value="Separated" name="status">Separated
	
</div>
 <div class="Hair">
	   
  <h2> HAIR </h2>
   
	
	

      <input type="radio" class="HAIR" id="hair" value="Black" name="hair">Black
 <br>
	
  	

      <input type="radio" class="HAIR" id="hair" value="Brown" name="hair">Brown
 <br>
	

      <input type="radio" class="HAIR" id="hair" value="Blonde" name="hair">Blonde
	<br>

      <input type="radio" class="HAIR" id="hair" value="Gray" name="hair">Gray
	<br>

      <input type="radio" class="HAIR" id="hair" value="Others" name="hair">Others
 <br>
</div>
 <div class="Eyes">
	   
  <h2> EYES </h2>
   
	
	

      <input type="radio" class="EYES" id="eyes" value="Black" name="eyes">Black
 <br>
	
  	

      <input type="radio" class="EYES" id="eyes" value="Brown" name="eyes">Brown
 <br>

      <input type="radio" class="EYES" id="eyes" value="Blue" name="eyes">Blue
	<br>

      <input type="radio" class="EYES" id="eyes" value="Others" name="eyes">Others
	<br>

</div>
<div class="Built">
	   
  <h2> BUILT </h2>
   
	
	

      <input type="radio" class="BUILT" id="built" value="Light" name="built">Light
 <br>
	
  	

      <input type="radio" class="BUILT" id="built" value="Meduim" name="built">Meduim
 <br>
	

      <input type="radio" class="BUILT" id="built" value="Heavy" name="built">Heavy
	
</div>
<div class="Complexion">
	   
  <h2> COMPLEXION </h2>
   
	

      <input type="radio" class="COMPLEXION" id="complexion" value="Light" name="complexion">Light
 <br>
	
  	

      <input type="radio" class="COMPLEXION" id="complexion" value="Fair" name="complexion">Fair
 <br>
	

      <input type="radio" class="COMPLEXION" id="complexion" value="Dark" name="complexion">Dark
	
</div>
    <button type="submit" name="insert" class="btn btn-default">REGISTER</button>
	
	
  </form>

<form action="Results.php" method="get">
    <input type="submit" value="VIEW RECORDS" 
         name="Submit" id="frm1_submit" />
</form>

  
    
  </div>	

  
 
  
  </table>
  
  
  

</body>
<?php
if (isset($_POST["insert"]))
{
	mysqli_query($link,"insert into table1 values(NULL,'$_POST[firstname]',
	'$_POST[lastname]','$_POST[middlename]','$_POST[no]','$_POST[street]',
	'$_POST[city]','$_POST[municipality]','$_POST[province]','$_POST[sss]',
	'$_POST[tin]','$_POST[contact]','$_POST[email]','$_POST[nationality]',
	'$_POST[gender]','$_POST[birthplace]','$_POST[birthdate]','$_POST[education]','$_POST[status]','$_POST[hair]','$_POST[eyes]','$_POST[built]','$_POST[complexion]')");
	?>
	<script type ="text/javascript">
	
	window.location.href=window.location.href;
	
	</script>
	<?php
}




?>

</table >



</html>