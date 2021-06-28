<?php 
	
	

 	$symptoms="";
 	$err_symptoms="";
	$symptoms1="";
	$err_symptoms1="";
	$effected="";
	$err_effected="";
	$effected1="";
	$err_effected1="";
	$bloodpressure="";
	$err_bloodpressure="";
	$bloodpressure1="";
	$err_bloodpressure1="";
	$cancer="";
	$err_cancer="";
	$cancer1="";
	$err_cancer1="";
	$stroke="";
	$err_stroke="";
	$stroke1="";
	$err_stroke1="";
	$problem="";
	$err_problem="";
	$problem1="";
	$err_problem1="";
	$medicines="";
	$err_medicines="";
	$medicines1="";
	$err_medicines1="";


 


 	$hasError =false;







	if(isset($_POST["submit"])){


		if(empty($_POST["symptoms"])){
			$hasError = true;
			$err_symptoms ="Please fill the Symptoms  Field";
		}

		else{
			$symptoms = htmlspecialchars($_POST["symptoms"]);
		}

		if(empty($_POST["symptoms1"])){
			if($_POST["symptoms"]=="Yes")
			{
			$hasError = true;
			$err_symptoms1 ="Please describe the Symtoms as you clicked Yes";
		}
		}

		else{
			$symptoms1 = htmlspecialchars($_POST["symptoms1"]);
		}

		if(empty($_POST["effected"])){
			$hasError = true;
			$err_effected ="Effected or not Required";
		}

		else{
			$effected = htmlspecialchars($_POST["effected"]);
		}

		if(empty($_POST["effected1"])){
			if($_POST["effected"]=="Yes")
			{
			$hasError = true;
			$err_effected1 ="Please describe the effect as you clicked Yes";
			}
		}

		else{
			$effected1 = htmlspecialchars($_POST["effected1"]);
		}


		if(empty($_POST["bloodpressure"])){

			$hasError = true;
			$err_bloodpressure ="bloodpressure Required";
			
		}

		else{
			$bloodpressure = htmlspecialchars($_POST["bloodpressure"]);
		}

		if(empty($_POST["bloodpressure1"])){
			if($_POST["bloodpressure"]=="Yes")
			{
			$hasError = true;
			$err_bloodpressure1 ="Please describe the effect as you clicked Yes";
			}
		}

		else{
			$bloodpressure1 = htmlspecialchars($_POST["bloodpressure1"]);
		}
		
		if(empty($_POST["cancer"])){
			$hasError = true;
			$err_cancer ="cancer Required";
		}

		else{
			$cancer = htmlspecialchars($_POST["cancer"]);
		}
		if(empty($_POST["cancer1"])){
			if($_POST["cancer"]=="Yes")
			{
			$hasError = true;
			$err_cancer1 ="Please describe the cancer as you clicked Yes";
			}
		}

		else{
			$cancer1 = htmlspecialchars($_POST["cancer1"]);
		}


		if(empty($_POST["stroke"])){
			$hasError = true;
			$err_stroke ="stroke Required";
		}

		else{
			$stroke= htmlspecialchars($_POST["stroke"]);
		}

		if(empty($_POST["stroke1"])){
			if($_POST["cancer"]=="Yes")
			{
			$hasError = true;
			$err_stroke1 ="Please describe the cancer as you clicked Yes";
			}
		}

		else{
			$stroke1 = htmlspecialchars($_POST["stroke1"]);
		}


		if(empty($_POST["problem"])){
			$hasError = true;
			$err_problem ="problem Required";
		}

		else{
			$problem = htmlspecialchars($_POST["problem"]);
		}

		if(empty($_POST["problem1"])){
			if($_POST["problem"]=="Yes")
			{
			$hasError = true;
			$err_problem1 ="Please describe the problem as you clicked Yes";
			}
		}

		else{
			$problem1 = htmlspecialchars($_POST["problem1"]);
		}

		if(empty($_POST["medicines"])){
			$hasError = true;
			$err_medicines ="medicines Required";
		}

		else{
			$medicines = htmlspecialchars($_POST["medicines"]);
		}

		if(empty($_POST["medicines1"])){
			if($_POST["medicines"]=="Yes")
			{
			$hasError = true;
			$err_medicines1 ="Please describe the medicines you clicked Yes";
			}
		}

		else{
			$medicines1 = htmlspecialchars($_POST["medicines1"]);
		}









		

		if(!$hasError){
		echo "<h1>Form details</h1>";
		echo $_POST["symptoms"]."<br>";
		echo $_POST["symptoms1"]."<br>";
    	echo $_POST["effected"]."<br>";
		echo $_POST["effected1"]."<br>";
    	echo $_POST["bloodpressure"]."<br>";
		echo $_POST["bloodpressure1"]."<br>";
		echo $_POST["cancer"]."<br>";
    	echo $_POST["cancer1"]."<br>";
		echo $_POST["stroke"]."<br>";
    	echo $_POST["stroke1"]."<br>";
		echo $_POST["problem"]."<br>";
    	echo $_POST["problem1"]."<br>";
		echo $_POST["medicines"]."<br>";
    	echo $_POST["medicines1"]."<br>";

		

		}


	}


	?>




<html>
<head></head>
<body>
	
<form action="" method="post">
		<fieldset>
            <h1 align="center">Medical History of patient</h1>
			<table>
			<tr>
		    	<td><br> Do you have any fever or other symptoms that could be due to COVID-19? <br> 
				<input name="symptoms" value="Yes" <?php if($symptoms=="Yes") echo "checked"; ?> type="radio"> Yes 
				<input name="symptoms" value="No" <?php if($symptoms=="No") echo "checked"; ?> type="radio"> No </td>
				<td><span> <?php echo $err_symptoms;?> </span></td>
			</tr>

			
			<tr> 
				<td>If yes, Describe <input name="symptoms1" type="text"></td>
				<td><span> <?php echo $err_symptoms1;?> </span></td>
			
			</tr>

			<tr>
			 <td><br> Are You Covid Effected Previously? <br> <input name="effected" value="Yes" <?php if($effected=="Yes") echo "checked"; ?> type="radio">   Yes   <input name="effected" value="No" <?php if($effected=="No") echo "checked"; ?> type="radio">   No   </td>
			 <td><span> <?php echo $err_effected;?> </span></td>
			 </tr>

			<tr>
				<td>If yes, Describe <input name="effected1" type="text"></td>
				<td><span> <?php echo $err_effected1;?> </span></td>
			 </tr>


			<tr>
			<td><br> Do you have any High blood pressure? <br><input name="bloodpressure" value="Yes" <?php if($bloodpressure=="Yes") echo "checked"; ?> type="radio"> Yes  <input name="bloodpressure" value="No" <?php if($bloodpressure=="No") echo "checked"; ?> type="radio"> No </td>
			<td><span> <?php echo $err_bloodpressure;?> </span></td>
			</tr>

			<tr>
			<td>If yes, Describe <input name="bloodpressure1" type="text"></td> 
			<td><span> <?php echo $err_bloodpressure1;?> </span></td>
			  </tr>




			<tr>
				<td><br> Do you have any cancer? <br><input name="cancer" value="Yes" <?php if($cancer=="Yes") echo "checked"; ?> type="radio"> Yes  <input name="cancer" value="No" <?php if($cancer=="No") echo "checked"; ?> type="radio"> No </td>
				<td><span> <?php echo $err_cancer;?> </span></td>
			</tr>

			

			<tr> 
				<td>If yes, Describe <input name="cancer1" type="text"></td>  
				<td><span> <?php echo $err_cancer1;?> </span></td>
			 </tr>


			
			<tr> 
				<td><br> Did you have have any Stroke? <br><input name="stroke" value="Yes" <?php if($stroke=="Yes") echo "checked"; ?> type="radio"> Yes  <input name="stroke" value="No" <?php if($stroke=="No") echo "checked"; ?> type="radio"> No </td>
				<td><span> <?php echo $err_stroke;?> </span></td>
			 </tr>

			

			<tr>
			 <td>If yes, Describe <input name="stroke1" type="text"></td>
			 <td><span> <?php echo $err_stroke1;?> </span></td>
			    </tr>


			<tr>
			 <td><br> Do you have any other health problem? <br><input name="problem" value="Yes" <?php if($problem=="Yes") echo "checked"; ?> type="radio"> Yes  <input name="problem" value="No" <?php if($problem=="No") echo "checked"; ?> type="radio"> No </td> 
			 <td><span> <?php echo $err_problem;?> </span></td>
			 </tr>

			

			<tr>
			 <td>If yes, Describe <input name="problem1" type="text"></td> 
			 <td><span> <?php echo $err_problem1;?> </span></td> 
			   </tr>


			<tr>
			 <td><br> Do you take any medicines regularly? <br><input name="medicines" value="Yes" <?php if($medicines=="Yes") echo "checked"; ?> type="radio"> Yes  <input name="medicines" value="No" <?php if($medicines=="No") echo "checked"; ?> type="radio"> No </td>
			 <td><span> <?php echo $err_medicines;?> </span></td>
			  </tr>

			

			<tr> 
				<td>If yes, Describe <input name="medicines1" type="text"></td>
				<td><span> <?php echo $err_medicines1;?> </span></td>
			
			   </tr>




			<tr>
                    <td align="left"><input type="submit" name="submit" value="Submit"></td>

                </tr>



			

			








			</table>
			
			
			</fieldset>
			</form>

</body>

</html>










