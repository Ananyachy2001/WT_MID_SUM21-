<?php 

 	$firstname="";
 	$err_firstname="";
	$lastname="";
	$err_lastname="";

 


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
		else if(strlen($_POST["nid"]) < 4){
			$hasError = true;
			$err_nid ="Nid must contain atleast 4 numeric value. ";

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


    	echo $_POST["gender"]."<br>";
		

		}


	}


	?>

	
	









<html>
	<head></head>
	<body>
		<form action="" method="post">
		<fieldset>
            <h1 align="center">Vaccine Registration</h1>
			<table>

				<tr>
					<td>First Name</td>
					<td>: <input type="text" name="name" value="" placeholder=""> </td>
					
				</tr>

				<tr>
					<td>Last Name </td>
					<td>: <input type="text" name="name" value="" placeholder=""> </td>
					
				</tr>

			<tr>
                <td>Age</td>
                <td><input type="radio" name="age"> older than 50 </td>
				<td><input name="age" type="radio"> 31-50 </td>
				<td><input name="age" type="radio"> 18-30 </td>
				<td><input name="age" type="radio"> less than 18 </td>

            </tr>

                <tr>
					<td>What's your Occupation?</td>
				<td> <input type="radio" name="occupation">Businessman</td>
				<td> <input name="occupation" type="radio">Goverment Worker</td>
				<td> <input name="occupation" type="radio">Banker</td>
				<td> <input name="occupation" type="radio"> Student </td>
				<td> <input name="occupation" type="radio"> Teacher</td>
				<td> <input name="occupation" type="radio"> Others </td>

				

            </tr>

			<tr>
			<td><p>If Others than write it down here:</p> </td>
			<td> <br><input name="occupation" type="text" placeholder=""> <br><br> </td>
			
			</tr>


			<tr>
				<td><br> What's your Address?</td>
				<td> <input type="text" name="address"></td>

            </tr>


			<tr>
				<td><br> What's your Postal Code?</td>
				<td> <input type="text" name="address"></td>

            </tr>
			


			<tr>
					<td>What is your marital status?</td>
				<td> <input type="radio" name="marital"> Single </td>
				<td> <input type="radio" name="marital"> Married </td>

            </tr>


			<tr>
			<td>Which center do you want to give Vaccine? </td>
			<td> <input name="center" type="radio"> Dhaka Community Medical College and Hospital <br> </td>
			<td> <input name="center" type="radio"> Kurmitola Hopital  <br> </td>
			<td> <input name="center" type="radio"> Mugda General Hospital <br></td>
			<td> <input name="center" type="radio"> Al Helal Specialized Hospital Dhaka <br></td>
			<td> <input name="center" type="radio"> Metropolitan Medical Centre Ltd <br> </td>


			</tr>


			


			
				</tr>

                <tr>
                    <td align="left"><input type="submit" value="Submit"></td>

                </tr>

               

		</table>
			
			
		</fieldset>
		</form>
	</body>
</html>