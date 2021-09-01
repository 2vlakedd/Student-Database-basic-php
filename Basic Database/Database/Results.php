<html>
<head>

<?php
include "connection.php";
?>
<style>
.top {
	margin-left:3%;	
	
}
input[type=text].top {
	height:5%;
	Width:50%;
	margin-top:20px;
		margin-bottom:10px;
		margin-left:200px;
}
input[type=submit].top {
	position:static;
	height:5%;
	Width:10%;
margin-top:20px;
float:right;
		margin-bottom:10px;
	
}
input[type=submit].bot {
		position:static;
	height:5%;
	Width:12%;
	margin-right:160px;
		margin-top:20px;
		margin-bottom:10px;
		
	float:right;
}
div.slider{

  height: 40%;
  width: 90%;
  overflow-x: scroll;
  border:1px solid black;	
  margin-left:5%;
  padding-left:10px;
}
</style>
<form action="index.php" >
<input type="submit" name="ADDRECORDS" value="ADD RECORDS"class="bot">
</form>	
<div class="top"> 

<form action="Search.php" method="post">
<input type="submit" name="submit" value="Search" class="top">
<input type="text" name="search" class="top">

</form>
<div class="slider">
<?php





if (isset($_POST['submit'])) {
    $searchValue = $_POST['search'];

    if ($link->connect_error) {
        echo "connection Failed: " . $link->connect_error;
    } else {
        $sql = "SELECT * FROM table1 WHERE lastname LIKE '%$searchValue%' OR firstname LIKE '%$searchValue%'
		OR middlename LIKE '%$searchValue%'OR no LIKE '%$searchValue%'OR street LIKE '%$searchValue%'
		OR city LIKE '%$searchValue%'OR municipality LIKE '%$searchValue%'OR province LIKE '%$searchValue%'
		OR sss LIKE '%$searchValue%'OR tin LIKE '%$searchValue%'OR contact LIKE '%$searchValue%'OR email LIKE '%$searchValue%'
		OR nationality LIKE '%$searchValue%'OR gender = '%$searchValue%'OR birthplace LIKE '%$searchValue%'
		OR birthdate LIKE '%$searchValue%'OR education LIKE '%$searchValue%'OR status LIKE '%$searchValue%'
		OR hair LIKE '%$searchValue%'OR eyes LIKE '%$searchValue%'OR built LIKE '%$searchValue%'OR complexion LIKE '%$searchValue%'";

        $result = $link->query($sql); 
        while ($row = $result->fetch_assoc()) {
			
             echo "<tr>";

    echo "<td>"; echo $row["firstname"]; echo "</td>";
	 echo "<td>"; echo $row["lastname"]; echo "</td>";
	  echo "<td>"; echo $row["middlename"]; echo "</td>";
	  echo "<td>"; echo $row["no"]; echo "</td>";
	    echo "<td>"; echo $row["street"]; echo "</td>";
		  echo "<td>"; echo $row["city"]; echo "</td>";
		    echo "<td>"; echo $row["municipality"]; echo "</td>";
			  echo "<td>"; echo $row["province"]; echo "</td>";
			    echo "<td>"; echo $row["sss"]; echo "</td>";
				  echo "<td>"; echo $row["tin"]; echo "</td>";
				    echo "<td>"; echo $row["contact"]; echo "</td>";
					  echo "<td>"; echo $row["email"]; echo "</td>";
					  echo "<td>"; echo $row["nationality"]; echo "</td>";
					  echo "<td>"; echo $row["gender"]; echo "</td>";
					  echo "<td>"; echo $row["birthplace"]; echo "</td>";
					  echo "<td>"; echo $row["birthdate"]; echo "</td>";
					  echo "<td>"; echo $row["education"]; echo "</td>";
					  echo "<td>"; echo $row["status"]; echo "</td>";
					  echo "<td>"; echo $row["hair"]; echo "</td>";
					  echo "<td>"; echo $row["eyes"]; echo "</td>";
					  echo "<td>"; echo $row["built"]; echo "</td>";
					  echo "<td>"; echo $row["complexion"]; echo "</td><br>";
				   echo"</tr>";	 
			  echo "</div class=\"slider\">";
	  }

        $result->free();
    }   
}


     

 



?>

      
   
</head>


<body>
<table>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <thead>
      <tr>
	  
	   <th>Update</th>
	   <th>Delete</th>
        <th>Name</th>
        <th>Address</th>
        <th>SSS</th>
		<th>TIN</th>
		<th>Contact No.</th>
		<th>Email</th>
		<th>Nationality</th>
		<th>Gender</th>
		<th>Birthplace</th>
		<th>Birthdate</th>
		<th>Education</th>
		<th>Status</th>
		<th>Hair</th>
		<th>Eyes</th>
		<th>Built</th>
		<th>Complexion</th>
		
      </tr>												
  
  
    
  </div>	

  
  <?php
   $res=mysqli_query($link,"select * from table1");
  while($row=mysqli_fetch_array ($res))
  {
  echo "<tr>";
  

echo "<td>";?> <a href="edit.php?id=<?php echo $row ["id"];?>"><button type="button" class= "btn btn-success">Edit</button></a><?php  echo "</td>";
echo "<form action=\"Results.php\" name=\"form1\" method=\"post\">";
  
echo "<td>";?> <a href="delete.php?id=<?php echo $row ["id"];?>"><button type="button" class= "btn btn-danger">Delete</button></a><?php  echo "</td>";
echo"</form>";
echo "<td>"; echo $row["lastname"];
       echo $row["firstname"]; 
	  echo $row["middlename"]; echo "</td>";
	  echo "<td>"; echo $row["no"]; 
	     echo $row["street"]; 
	echo"<br>";	 echo $row["city"]; 
		     echo $row["municipality"]; 
			echo"<br>";   echo $row["province"];  "</td>";
			    echo "<td>"; echo $row["sss"]; echo "</td>";
				  echo "<td>"; echo $row["tin"]; echo "</td>";
				    echo "<td>"; echo $row["contact"]; echo "</td>";
					  echo "<td>"; echo $row["email"]; echo "</td>";
					  echo "<td>"; echo $row["nationality"]; echo "</td>";
					  echo "<td>"; echo $row["gender"]; echo "</td>";
					  echo "<td>"; echo $row["birthplace"]; echo "</td>";
					  echo "<td>"; echo $row["birthdate"]; echo "</td>";
					  echo "<td>"; echo $row["education"]; echo "</td>";
					  echo "<td>"; echo $row["status"]; echo "</td>";
					  echo "<td>"; echo $row["hair"]; echo "</td>";
					  echo "<td>"; echo $row["eyes"]; echo "</td>";
					  echo "<td>"; echo $row["built"]; echo "</td>";
					  echo "<td>"; echo $row["complexion"]; echo "</td>";
					  
					   
	  
	   echo"</tr>";
  
  
  }
 
  
  ?>
  
<?php


	if (isset($_POST["delete"]))
{
	mysqli_query($link,"delete from table1 where id=$id");
?>
<script type="text/javascript">
window.location="Results.php";
</script>

	<?php
}

?>

  </table>
  </body>
  
</html>