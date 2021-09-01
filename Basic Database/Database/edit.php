<html>
<head>
<?php
include "connection.php";
$id=$_GET["id"];
$firstname="";
$middlename="";
$no="";
$street="";
$city="";
$municipality="";
$province="";
$sss="";
$tin="";
$contact="";
$email="";
$nationality="";
$gender="";
$birthplace="";
$education="";
$status="";
$hair="";
$eyes="";
$built="";
$complexion="";
$res=mysqli_query($link,"select * from table1 where id=$id");
  while($row=mysqli_fetch_array ($res))
  {
	  $lastname=$row["lastname"];
	  $firstname=$row["firstname"];
	  $middlename=$row["middlename"];
	  $no=$row["no"];
	  $street=$row["street"];
	  $city=$row["city"];
	  $municipality=$row["municipality"];
	  $province=$row["province"];
	  $sss=$row["sss"];
	  $tin=$row["tin"];
	  $contact=$row["contact"];
	  $email=$row["email"];
	  $nationality=$row["nationality"];
	  $gender=$row["gender"];
	  $birthplace=$row["birthplace"];
	  $birthdate=$row["birthdate"];
	  $education=$row["education"];
	  $status=$row["status"];
	  $hair=$row["hair"];
	  $eyes=$row["eyes"];
	  $built=$row["built"];
	  $complexion=$row["complexion"];
  }
?>
</head>


<style>
.main{

margin-right:100px ;
margin-left:100px;
weight:100%;
height:80%;

}
.Name {
	margin-left:1px;
	padding-left:1px;
	
height:15%;
border:1px solid black;	

}
input[type=text].NAME {
	height:20%;
	Width:33%;
}
.Address {
	border:1px solid black;	
	Width:70%;
	height:20.3%;

position:static;
	float:left;
}
input[type=text].ADDRESS {
		width:20%;
		height:30%;

}
.sss {
	border:1px solid black;	
	Width:29.7%;
	height:10%;
	position:static;
	float:right;
	
}
input[type=text].SSS {
	
		width:100%;
	height:30%;

}
.Email {
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
	border:1px solid black;	
	Width:29.7%;
	height:10%;
	position:static;
	float:right;
	
}
input[type=text].TIN {
	
		width:100%;
		height:30%;
	float:left;
}
.Nationality {
	border:1px solid black;	
	Width:25%;
	height:15%;
	position:static;
	float:left;

}
input[type=text].NATIONALITY {
	
		width:100%;
		height:30%;
	float:left;
}
.contact {
	border:1px solid black;	
	Width:29.7%;
	height:10%;
	position:static;
	float:right;
	
}
input[type=text].CONTACT {
	
		width:100%;
		height:30%;
	float:left;
}
.gender {
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
	border:1px solid black;	
	Width:16.5%;
	height:20%;
	position:static;
	float:left;

}
input[type=radio].EDUCATION{
		height:8%;
		position:static;
		float:left;
}
.Status {
	border:1px solid black;	
	Width:16.5%;
	height:20%;
	position:static;
	float:left;

}
input[type=radio].STATUS{
		height:8%;
		position:static;
		float:left;
}
.Hair {
	border:1px solid black;	
	Width:16.5%;
	height:20%;
	position:static;
	float:left;
	
}
input[type=radio].HAIR{
		height:8%;
		position:static;
		float:left;
}
.Eyes {
	border:1px solid black;	
	Width:16.5%;
	height:20%;
	position:static;
	float:left;
	
}
input[type=radio].EYES{
		height:8%;
		position:static;
		float:left;
}
.Built {
	border:1px solid black;	
	Width:16.5%;
	height:20%;
	position:static;
	float:left;
	
}
input[type=radio].BUILT{
		height:8%;
		position:static;
		float:left;
}
.Complexion {
	border:1px solid black;	
	Width:16.5%;
	height:20%;
	position:static;
	float:left;
	
}
input[type=radio].COMPLEXION{
		height:8%;
		position:static;
		float:left;
}
h1 {


border:2px solid black;	

background-color: black;
color: White;
font-size: 16px;
font-family: "Lucida Console";
font-weight: bold;

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
</style>




<table class="table table-bordered">

  
  <div class="main">
 
</head>
<body>

  
 <form action="" name="form1" method="post">
  

 
<div class="Name">
	
 <h1>GENERAL INFORMATION</h1>
  <h2> NAME </h2>

      <input type="text" class="NAME" id="lastname" placeholder=" Lastname" name="lastname"value="<?php echo $lastname;?>">


      <input type="text" class="NAME" id="firstname" placeholder=" Firstname" name="firstname" value="<?php echo $firstname;?>">
	  
	 
      <input type="text" class="NAME" id="middlename" placeholder=" Middlename" name="middlename"value="<?php echo $middlename;?>">
	   </div>
	   <div class="sss">
  <h3> SSS </h3>
   
	
	
     
      <input type="text" class="SSS" id="sss" placeholder="SSS" name="sss"value="<?php echo $sss;?>">
 
	
 
</div>
 
	   <div class="Address">
	   
  <h2> PRESENT ADDRESS </h2>
   
	
	

      <input type="text" class="ADDRESS" id="no" placeholder="No." name="no"value="<?php echo $no;?>">
 
	
  
      <input type="text" class="ADDRESS" id="street" placeholder="Street" name="street"value="<?php echo $street;?>">
 

      <input type="text" class="ADDRESS" id="city" placeholder="City" name="city"value="<?php echo $city;?>">

      <input type="text" class="ADDRESS" id="municipality" placeholder="Municipality " name="municipality"value="<?php echo $municipality;?>">

      <input type="text" class="ADDRESS" id="province" placeholder="Province" name="province"value="<?php echo $province;?>">
 
</div>
<div class="tin">
  <h3> TIN </h3>
   
	
	
      <input type="text" class="TIN" id="tin" placeholder="TIN " name="tin"value="<?php echo $tin;?>">
 
	
 
</div>
<div class="contact">
  <h3> CONTACT NO</h3>
   
	

      <input type="text" class="CONTACT" id="contact" placeholder="Contact" name="contact"value="<?php echo $contact;?>">
 
	</div>
 
<div class="Email">
  <h3> EMAIL ADDRESS </h3>
   
	
	
      <input type="text" class="EMAIL" id="email" placeholder="Email Adress" name="email"value="<?php echo $email;?>">
 
	
 
</div>

<div class="Nationality">
  <h3> NATIONALITY </h3>
   
	
	
   
      <input type="text" class="NATIONALITY" id="nationality" placeholder="nationality" name="nationality"value="<?php echo $nationality;?>">
 
	
 
</div>
<div class="Gender">
  <h3> GENDER </h3>
   
	
	
      
      <input type="radio" name="gender"  id="gender"value="Male"value="<?php echo $gender="Male";?>">Male 
	  <br>
	 
	     <input type="radio" name="gender"  id="gender" value="Female"value="<?php echo $gender="Female";?>">Female
 <br>
	
 
</div>
<div class="Birthplace">
  <h3> BIRTHPLACE </h3>
   
	
	
      <label for="pwd"></label>
      <input type="text" class="BIRTHPLACE" id="birthplace" placeholder="birthplace" name="birthplace"value="<?php echo $birthplace;?>">
 
	
 
</div>
<div class="Birthdate">
  <h3> BIRTH DATE </h3>
   
	
	
      <label for="pwd"></label>
      <input type="date" class="BIRTHDATE" id="birthdate" placeholder="birthdate" name="birthdate"value="<?php echo $birthdate;?>">
 
	
 
</div>
	   <div class="Education">
	   
  <h2> EDUCATION </h2>
   
	
	
<label>Informal</label>
      <input type="radio" class="EDUCATION" id="education"   name="education"value="<?php echo $education="Informal";?>">
 <br>
	
  	
<label>Elementary</label>
      <input type="radio" class="EDUCATION" id="education"  name="education"value="<?php echo $education="Elementary";?>">
 <br>
	
<label>Highschool</label>
      <input type="radio" class="EDUCATION" id="education" name="education"value="<?php echo $education="Highschool";?>">
	<br>
<label>Vocational</label>
      <input type="radio" class="EDUCATION" id="education"  name="education"value="<?php echo $education="Vocational";?>">
	<br>
<label>College</label>
      <input type="radio" class="EDUCATION" id="education" name="education"value="<?php echo $education="College";?>">
 <br>
 <label>Post Graduate</label>
      <input type="radio" class="EDUCATION" id="education"  name="education"value="<?php echo $education="PostGraduate";?>">
</div>
 <div class="Status">
	   
  <h2> STATUS </h2>
   
	
	
<label>Single</label>
      <input type="radio" class="STATUS" id="status"  name="status"value="<?php echo $status="Single";?>">
 <br>
	
  	
<label>Married</label>
      <input type="radio" class="STATUS" id="status"  name="status"value="<?php echo $status="Married";?>">
 <br>
	
<label>Widow/er</label>
      <input type="radio" class="STATUS" id="status"  name="status"value="<?php echo $status="Widow/er";?>">
	<br>
<label>Separated</label>
      <input type="radio" class="STATUS" id="status"  name="status"value="<?php echo $status="Separated";?>">
	
</div>
 <div class="Hair">
	   
  <h2> HAIR </h2>
   
	
	
<label>Black</label>
      <input type="radio" class="HAIR" id="hair"  name="hair"value="<?php echo $hair="Black";?>">
 <br>
	
  	
<label>Brown</label>
      <input type="radio" class="HAIR" id="hair"  name="hair"value="<?php echo $hair="Brown";?>">
 <br>
	
<label>Blonde</label>
      <input type="radio" class="HAIR" id="hair"  name="hair"value="<?php echo $hair="Blonde";?>">
	<br>
<label>Gray</label>
      <input type="radio" class="HAIR" id="hair"  name="hair"value="<?php echo $hair="Gray";?>">
	<br>
<label>Others</label>
      <input type="radio" class="HAIR" id="hair"  name="hair"value="<?php echo $hair="Others";?>">
 <br>
</div>
 <div class="Eyes">
	   
  <h2> EYES </h2>
   
	
	
<label>Black</label>
      <input type="radio" class="EYES" id="eyes" name="eyes"value="<?php echo $eyes="Black";?>">
 <br>
	
  	
<label>Brown</label>
      <input type="radio" class="EYES" id="eyes"  name="eyes"value="<?php echo $eyes="Brown";?>">
 <br>
	
<label>Blue</label>
      <input type="radio" class="EYES" id="eyes"  name="eyes"value="<?php echo $eyes="Blue";?>">
	<br>
<label>Others</label>
      <input type="radio" class="EYES" id="eyes"  name="eyes"value="<?php echo $eyes="Others";?>">
	<br>

</div>
<div class="Built">
	   
  <h2> BUILT </h2>
   
	
	
<label>Light</label>
      <input type="radio" class="BUILT" id="built"  name="built"value="<?php echo $built="Light";?>">
 <br>
	
  	
<label>Meduim</label>
      <input type="radio" class="BUILT" id="built"  name="built"value="<?php echo $built="Meduim";?>">
 <br>
	
<label>Heavy</label>
      <input type="radio" class="BUILT" id="built" name="built"value="<?php echo $built="Heavy";?>">
	
</div>
<div class="Complexion">
	   
  <h2> COMPLEXION </h2>
   
	
	
<label>Light</label>
      <input type="radio" class="COMPLEXION" id="complexion"  name="complexion"value="<?php echo $complexion="Light";?>">
 <br>
	
  	
<label>Fair</label>
      <input type="radio" class="COMPLEXION" id="complexion" name="complexion"value="<?php echo $complexion="Fair";?>">
 <br>
	
<label>Dark</label>
      <input type="radio" class="COMPLEXION" id="complexion"name="complexion"value="<?php echo $complexion="Dark";?>">
	
</div>
    <button type="submit" name="update" class="btn btn-default">Insert</button>
	
	
  </form>
  <?php
if (isset($_POST["update"]))
{
	mysqli_query($link,"update table1 set firstname='$_POST[firstname]' ,
	lastname='$_POST[lastname]',middlename='$_POST[middlename]',no='$_POST[no]',street='$_POST[street]',
	city='$_POST[city]',municipality='$_POST[municipality]',province='$_POST[province]',sss='$_POST[sss]',
	tin='$_POST[tin]',contact='$_POST[contact]',email='$_POST[email]',nationality='$_POST[nationality]',
	gender='$_POST[gender]',birthplace='$_POST[birthplace]',birthdate='$_POST[birthdate]',education='$_POST[education]',status='$_POST[status]',
	hair='$_POST[hair]',eyes='$_POST[eyes]',built='$_POST[built]',complexion='$_POST[complexion]' where id=$id ")or die (mysqli_error($link));
	?>
		<script type ="text/javascript">
	
	window.location="Results.php";
	
	</script>
	<?php
	
}

?>



</body>
</html>