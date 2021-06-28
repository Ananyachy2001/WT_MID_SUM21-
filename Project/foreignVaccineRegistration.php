<?php 

 	$forfirstname="";
 	$err_forfirstname="";
	$forlastname="";
	$err_forlastname="";
	$forage="";
	$err_forage="";
	$foroccupation="";
	$err_foroccupation="";
	$foroccupation1="";
	$err_foroccupation1="";
    $country="";
    $err_country="";
    $passport="";
    $err_passport="";
	$foraddress="";
	$err_foraddress="";
	$forpostal="";
	$err_forpostal="";
	$formarital="";
	$err_formarital="";
	$forcenter="";
	$err_forcenter="";
    

	


	$arrCenter= array("Dhaka Community Medical College and Hospital","Kurmitola Hopital","Mugda General Hospital","Al Helal Specialized Hospital Dhaka","Metropolitan Medical Centre Ltd");

 


 	$hasError =false;







	if(isset($_POST["submit"])){


		if(empty($_POST["forfirstname"])){
			$hasError = true;
			$err_forfirstname ="First Name  Required";
		}

		else{
			$forfirstname = htmlspecialchars($_POST["forfirstname"]);
		}


		if(empty($_POST["forlastname"])){
			$hasError = true;
			$err_forlastname ="Last Name Required";
		}

		else{
			$forlastname = htmlspecialchars($_POST["forlastname"]);
		}

		if(empty($_POST["forage"])){
			$hasError = true;
			$err_forage ="Age Required";
		}

		else{
			$forage = htmlspecialchars($_POST["forage"]);
		}

		if(empty($_POST["foroccupation"])){
			$hasError = true;
			$err_foroccupation ="Occupation Required";
		}

		else{
			$foroccupation = htmlspecialchars($_POST["foroccupation"]);
		}


		if(empty($_POST["foroccupation1"])){
			$hasError = true;
			$err_occupation1 ="Occupation 1 other Required";
		}

		else{
			$foroccupation1 = htmlspecialchars($_POST["foroccupation1"]);
		}

        if(empty($_POST["country"])){
			$hasError = true;
			$err_country ="Country Required";
		}

		else{
			$country = htmlspecialchars($_POST["country"]);
		}

        if(empty($_POST["passport"])){
			$hasError = true;
			$err_passport ="passport Required";
		}

		else{
			$passport = htmlspecialchars($_POST["passport"]);
		}





		
		if(empty($_POST["foraddress"])){
			$hasError = true;
			$err_foraddress ="Address Required";
		}

		else{
			$foraddress = htmlspecialchars($_POST["foraddress"]);
		}

		if(empty($_POST["forpostal"])){
			$hasError = true;
			$err_forpostal ="Postal Code Required";
		}

		else{
			$forpostal = htmlspecialchars($_POST["forpostal"]);
		}

		if(empty($_POST["formarital"])){
			$hasError = true;
			$err_formarital ="marital Required";
		}

		else{
			$formarital= htmlspecialchars($_POST["formarital"]);
		}


		if(empty($_POST["forcenter"])){
			$hasError = true;
			$err_forcenter ="Center Required";
		}

		else{
			$forcenter= htmlspecialchars($_POST["forcenter"]);
		}

		





		

		if(!$hasError){
		echo "<h1>Form details</h1>";
		echo $_POST["forfirstname"]."<br>";
    	echo $_POST["forlastname"]."<br>";
		echo $_POST["forage"]."<br>";
    	echo $_POST["foroccupation"]."<br>";
		echo $_POST["foroccupation1"]."<br>";
        echo $_POST["country"]."<br>";
        echo $_POST["passport"]."<br>";
		echo $_POST["foraddress"]."<br>";
    	echo $_POST["forpostal"]."<br>";
		echo $_POST["formarital"]."<br>";
    	echo $_POST["forcenter"]."<br>";

		

		}




	}


	?>

	
	









<html>
	<head></head>
	<body>
		<form action="" method="post">
		<fieldset>
            <h1 align="center">Vaccine Registration for Foreigners</h1>
			<table>


			<span align="center"><img  height="200px" width="200px" src="3.jpg" alt=""></span>
				<tr>
					<td>First Name</td>
					<td>: <input type="text" name="forfirstname" value="<?php echo $forfirstname; ?>" placeholder=""> </td>
					<td><span> <?php echo $err_forfirstname;?> </span></td>
					
				</tr>

				<tr>
					<td>Last Name </td>
					<td>: <input type="text" name="forlastname" value="<?php echo $forlastname; ?>" placeholder=""> </td>
					<td><span> <?php echo $err_forlastname;?> </span></td>
					
				</tr>

			<tr>
                <td>Age</td>
                <td><input name="forage"  value="older than 50" <?php if($forage=="older than 50") echo "checked"; ?> type="radio">older than 50</td>
				<td><input name="forage" value="31-50" <?php if($forage=="31-50") echo "checked"; ?> type="radio">31-50 </td>
				<td><input name="forage" value="18-30" <?php if($forage=="18-30 ") echo "checked"; ?> type="radio">18-30 </td>
				<td><input name="forage" value="less than 18" <?php if($forage=="less than 18") echo "checked"; ?> type="radio">less than 18 </td>
				<td><span> <?php echo $err_forage;?> </span></td>

            </tr>

                <tr>
					<td>What's your Occupation?</td>
				<td> <input type="radio" value="Businessman" <?php if($foroccupation=="Male") echo "checked"; ?> name="foroccupation" >Businessman</td>
				<td> <input name="foroccupation" value="Goverment Worker" <?php if($foroccupation=="Goverment Worker") echo "checked"; ?> type="radio">Goverment Worker</td>
				<td> <input name="foroccupation" value="Banker" <?php if($foroccupation=="Banker") echo "checked"; ?> type="radio">Banker</td>
				<td> <input name="foroccupation" value="Student" <?php if($foroccupation=="Student") echo "checked"; ?> type="radio"> Student </td>
				<td> <input name="foroccupation" value="Teacher" <?php if($foroccupation=="Teacher") echo "checked"; ?> type="radio"> Teacher</td>
				<td> <input name="foroccupation" value="Others" <?php if($foroccupation=="Others") echo "checked"; ?> type="radio"> Others </td>
				<td><span> <?php echo $err_foroccupation;?> </span></td>

				

            </tr>

			<tr>
			<td><p>If Others than write it down here:</p> </td>
			<td> <br><input name="foroccupation1" type="text" placeholder=""> <br><br> </td>
			<td><span> <?php echo $err_foroccupation1;?> </span></td>
			
			
			</tr>


            <tr>
					<td>Country</td>
					<td>: <input type="text" name="country" value="<?php echo $country; ?>" placeholder=""> </td>
					<td><span> <?php echo $err_country;?> </span></td>
					
				</tr>


                <tr>
					<td>Passport</td>
					<td>: <input type="text" name="passport" value="<?php echo $passport; ?>" placeholder=""> </td>
					<td><span> <?php echo $err_passport;?> </span></td>
					
				</tr>


			<tr>
				<td><br> What's your Address?</td>
				<td> <input type="text" value="<?php echo $foraddress; ?>" name="foraddress"></td>
				<td><span> <?php echo $err_foraddress;?> </span></td>

            </tr>


			<tr>
				<td><br> What's your Postal Code?</td>
				<td> <input type="text" name="forpostal" value="<?php echo $forpostal; ?>"></td>
				<td><span> <?php echo $err_forpostal;?> </span></td>

            </tr>
			


			<tr>
					<td>What is your marital status?</td>
				<td> <input type="radio" value="Single " <?php if($foroccupation=="Single") echo "checked"; ?> name="formarital"> Single </td>
				<td> <input type="radio" value="Married " <?php if($foroccupation=="Married") echo "checked"; ?> name="formarital"> Married </td>
				<td><span> <?php echo $err_formarital;?> </span></td>

            </tr>


			<tr>
			<td>Which center do you want to give Vaccine? </td>
			 <td><select name="forcenter">
						
						<option disabled selected>Hospital Center</option>
						<?php
							foreach($arrCenter as $a){
								if($a == $arrCenter) 
									echo "<option selected>$a</option>";
								else
									echo "<option>$a</option>";
							}
						?>
					</select>

					</td>
					<td><span> <?php echo $err_forcenter; ?></span></td>
			
					</tr>

                <tr>
                    <td align="left"><input type="submit" name="submit" value="Submit"></td>

                </tr>

               

		</table>
			
			
		</fieldset>
		</form>
	</body>
</html>