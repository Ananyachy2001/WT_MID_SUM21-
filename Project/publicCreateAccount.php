<?php 

	$nid="";
	$err_nid="";
 	$name="";
 	$err_name="";
 	$username="";
 	$err_username="";
	$email="";
	$err_email="";
 	$password="";
 	$err_password="";
    $conpassword="";
 	$err_conpassword="";
    $phonenumber="";
    $err_phonenumber="";
    $birthday="";
    $err_birthday="";
    $birthmonth="";
    $err_birthmonth="";
    $birthyear="";
    $err_birthyear="";
 	$gender="";
 	$err_gender="";
 


 	$hasError =false;

    $arrDay =array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
    $arrMonth=array("January","February","March","April","May","June","July","August","September","October","November","December");




	




	if(isset($_POST["submit"])){


		if(empty($_POST["nid"])){
			$hasError = true;
			$err_nid ="Nid  Required";
		}
		else if(!is_numeric($_POST["nid"])){
			$hasError = true;
			$err_nid ="Nid must contain  numeric value. ";

		}
		else if(strlen($_POST["nid"]) < 6){
			$hasError = true;
			$err_nid ="Nid must contain atleast 6 numeric value. ";

		}
		else{
			$nid = htmlspecialchars($_POST["nid"]);
		}


		if(empty($_POST["name"])){
			$hasError = true;
			$err_name ="Name Required";
		}
		else if(strlen($_POST["name"]) <= 4){
			$hasError = true;
			$err_name ="Name must contain >4 characters";

		}
		else{
			$name = htmlspecialchars($_POST["name"]);
		}

        if(empty($_POST["username"])){
			$hasError = true;
			$err_username ="Username Required";
		} 
        else if( strpos($_POST["username"]," ")){
			$hasError = true;
			$err_username ="Username can't have space characters";

		}
		else if(strlen($_POST["username"]) <= 5){
			$hasError = true;
			$err_username ="Username must contain >5characters";

		}
		else{
			$username = htmlspecialchars($_POST["username"]);
		}

        if(empty($_POST["password"])){
			$hasError = true;
			$err_password ="Password Required";
		
		} 

		else if(strlen($_POST["password"]) < 3){
			$hasError = true;
			$err_username ="Password must contain atleast 3 characters";

		}
		else if(!strpos($_POST["password"],"#") and !strpos($_POST["password"],"?") ){
			

			$hasError = true;
			$err_password ="password must have a # or ?";

		}
		else if(!strpos($_POST["password"],"0") and !strpos($_POST["password"],"1") and !strpos($_POST["password"],"2") and !strpos($_POST["password"],"3")
		and !strpos($_POST["password"],"4") and !strpos($_POST["password"],"5") and !strpos($_POST["password"],"6") and !strpos($_POST["password"],"7") 
		and !strpos($_POST["password"],"8") and !strpos($_POST["password"],"9"))
		{


			$hasError = true;
			$err_password ="Password must contain  atleast one numeric value. ";

		}


        else{
			$password = htmlspecialchars($_POST["password"]);
		}

        if(empty($_POST["conpassword"])){
			$hasError = true;
			$err_conpassword ="Confirm password Required";
		} 
        else if($_POST["password"] != $_POST["conpassword"]){
            $hasError = true;
			$err_conpassword ="incorrect password.";

        }
        else{
			$conpassword = htmlspecialchars($_POST["conpassword"]);
		}


        if(empty($_POST["email"])){
			$hasError = true;
			$err_email ="Email Required";
		}
        else if( strpos($_POST["email"],"@") ){

            if(strpos($_POST["email"],".")){
            $email = htmlspecialchars($_POST["email"]);
            }
            else{
                $hasError = true;
                $err_email ="Email should have at least one .(dot) after @";
            }
		}
        else{
			
            $hasError = true;
			$err_email ="Email should have @ and at least one .(dot) after @";
		}


        if(empty($_POST["phonenumber"])){
			$hasError = true;
			$err_phonenumber ="Phone Number Required";
		}
		else if(!is_numeric($_POST["phonenumber"])){
			$hasError = true;
			$err_phonenumber ="Number must be numeric characters ";

		}
		else{
			$phonenumber = htmlspecialchars($_POST["phonenumber"]);
		}


		if (!isset($_POST["birthday"])){
			$hasError = true;
			$err_birthday="Birth Day Required!";
		}
		else{
			$birthday =htmlspecialchars($_POST["birthday"]);
		}

        if (!isset($_POST["birthmonth"])){
			$hasError = true;
			$err_birthmonth="Birth Month Required!";
		}
		else{
			$birthmonth =htmlspecialchars($_POST["birthmonth"]);
		}

        if (!isset($_POST["birthyear"])){
			$hasError = true;
			$err_birthyear="Birth Year Required!";
		}
		else{
			$birthyear =htmlspecialchars($_POST["birthyear"]);
		}

		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender= "Gender Required!";
		}else{
			$gender = htmlspecialchars($_POST["gender"]);
		}





		

		if(!$hasError){
		echo "<h1>Form details</h1>";
		echo $_POST["nid"]."<br>";
    	echo $_POST["name"]."<br>";
    	echo $_POST["username"]."<br>";
		echo $_POST["email"]."<br>";
    	echo $_POST["password"]."<br>";
        echo $_POST["conpassword"]."<br>";
		echo $_POST["phonenumber"]."<br>";
		echo $_POST["birthday"]."<br>";
		echo $_POST["birthmonth"]."<br>";
		echo $_POST["birthyear"]."<br>";
    	echo $_POST["gender"]."<br>";
			

		}


	}

	
	
?>











<html>
	<head></head>
	<body>

	<h1><u>Index page of People</u></h1>

	<div>
	<ul>
       <li><a href="publicCreateAccount.php">Create Account for Vaccine Registration </a></li> 
	   <li><a href="vaccineRegistration.php">Vaccine Registration Page <br></a></li>
	   <li><a href="medicalHistory.php"> Medical History Page</a></li>
	   <li><a href="updatePublicInfo.php"> Update Information for People</a></li>

	</ul>
	</div>



	



		<form action="" method="post">
		<fieldset>




            <h1 align="center"><u>Create Account for People</u></h1>
		<table align="center">


		<span align="center"><img  height="200px" width="200px" src="1.jpg" alt=""></span>


		
            <tr>
					<td>Nid</td>
					<td>: <input type="text" name="nid" value="<?php echo $nid; ?>"  placeholder=""> </td>
					<td><span> <?php echo $err_nid;?> </span></td>
					
				</tr>
				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>" placeholder=""> </td>
					<td><span> <?php echo $err_name;?> </span></td>
					
				</tr>
				<tr>
					<td>Username</td>
					<td>: <input type="text" name="username" value="<?php echo $username; ?>" placeholder="">  </td>
					<td><span> <?php echo $err_username;?> </span></td>
				
				</tr>


                <tr>
					<td>Email</td>
					<td>: <input type="text" name="email" value="<?php echo $email; ?>"  placeholder="">  </td>
					<td><span> <?php echo $err_email;?> </span></td>
                   
					
				</tr>
                <tr>
					<td>Password</td>
					<td>: <input type="password" name="password" value="<?php echo $password; ?>" placeholder="Password">  </td>
					<td><span> <?php echo $err_password;?> </span></td>
					
				</tr>
                <tr>
					<td>Confirm Password</td>
					<td> <input type="password" name="conpassword" value="<?php echo $conpassword; ?>" placeholder="Confirm Password">  </td>
					<td><span> <?php echo $err_conpassword;?> </span></td>
                    
					
				</tr>
                <tr>
					<td>Phone: </td>
					<td> <input type="text" name="phonenumber" value="<?php echo $phonenumber; ?>" placeholder="Number">  </td>
					<td><span> <?php echo $err_phonenumber;?> </span></td>
                   
					
				</tr>


				<tr>
				<td>Birth Date:</td>
                <td> 
                    <select name="birthday">
						
						<option disabled selected>Day</option>
						<?php
							foreach($arrDay as $a){
								if($a == $birthday) 
									echo "<option selected>$a</option>";
								else
									echo "<option>$a</option>";
							}
						?>
					</select>
					<span> <?php echo $err_birthday; ?> </span>
                    <select name="birthmonth">
						
					<option disabled selected>Month</option>
					<?php
							foreach($arrMonth as $a){
								if($a == $birthmonth) 
									echo "<option selected>$a</option>";
								else
									echo "<option>$a</option>";
							}
					?>
					</select>
					<span> <?php echo $err_birthmonth; ?> </span>
                    <select name="birthyear" value="<?php echo $birthyear; ?>">
						
                        <option disabled selected>Year</option>
                        <?php
						
						for($i=1945;$i<=2021;$i++){
							

							if($i == $birthyear){
							echo "<option selected>$i</option>";}
							else
								{	echo "<option>$i</option>";}
							
						}
                        ?>
                        </select>
                    
                </td>

					
                    <td><span> <?php  echo $err_birthyear; ?> </span></td>

                </tr>
				

				<tr>
					<td>Gender</td>
					<td>: <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male 
					<input name="gender" type="radio" value="Female" <?php if($gender=="Female") echo "checked"; ?> > Female 
					<input type="radio" value="Other" <?php if($gender=="Other") echo "checked"; ?> name="gender"> Other </td>
					<td><span> <?php echo $err_gender;?> </span></td>
				</tr>
				
				


				<tr>
                    <td align="left"><input type="submit" name="submit" value="Submit"></td>

                </tr>


               
        </table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>