<?php 
 	$name="";
 	$err_name="";
 	$username="";
 	$err_username="";
 	$password="";
 	$err_password="";
    $conpassword="";
 	$err_conpassword="";
    $email="";
    $err_email="";
    $phonecode="";
    $err_phonecode="";
    $phonenumber="";
    $err_phonenumber="";
    $addressstreet="";
    $err_addressstreet="";
    $addresscity="";
    $err_addresscity="";
    $addressstate="";
    $err_addressstate="";
    $addresspostal="";
    $err_addresspostal="";
    $birthday="";
    $err_birthday="";
    $birthmonth="";
    $err_birthmonth="";
    $birthyear="";
    $err_birthyear="";
 	$gender="";
 	$err_gender="";
 	$infos=[];
 	$err_infos="";
 	$bio="";
 	$err_bio="";

 	$hasError =false;

    $arrDay =array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
    $arrMonth=array("January","February","March","April","May","June","July","August","September","October","November","December");
    $arrYear=array(1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008);




	 function infoExist($info){
		global $infos;
		foreach($infos as $i){
			if($i == $info) return true;
		}
		return false;
	}
	
	



	//if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(isset($_POST["submit"])){
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
		else if(strlen($_POST["username"]) <= 6){
			$hasError = true;
			$err_username ="Username must contain >6 characters";

		}
		else{
			$username = htmlspecialchars($_POST["username"]);
		}

        if(empty($_POST["password"])){
			$hasError = true;
			$err_password ="Password Required";
		} 

        else if( ctype_upper($_POST["password"]) and ctype_lower($_POST["password"])){
			$hasError = true;
			$err_password ="password must have a upper and lower case";


		}

		else if(strpos($_POST["password"],"#") or strpos($_POST["password"],"?") ){

			$hasError = true;
			$err_password ="password must have a # or ?";

		}
		else if(strlen($_POST["password"]) <= 8){
			$hasError = true;
			$err_password ="Password must contain >8 characters";

		}
		else if(is_numeric($_POST["password"]) <= 1){
			$hasError = true;
			$err_phonenumber ="Password must contain 1 numeric value. ";

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

        if(empty($_POST["phonecode"])){
			$hasError = true;
			$err_phonecode ="phone Code Required";
		}		
        else if(!is_numeric($_POST["phonecode"])){
			$hasError = true;
			$err_phonecode ="Code must be numeric characters";

		}
		else{
			$phonecode = htmlspecialchars($_POST["phonecode"]);
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


        if(empty($_POST["addressstreet"])){
			$hasError = true;
			$err_addressstreet ="Street address Required";
		}
		else{
			$addressstreet = htmlspecialchars($_POST["addressstreet"]);
		}

        
        if(empty($_POST["addresscity"])){
			$hasError = true;
			$err_addresscity ="City address Required";
		}
		else{
			$addressaddresscity = htmlspecialchars($_POST["addresscity"]);
		}

        
        if(empty($_POST["addressstate"])){
			$hasError = true;
			$err_addressstate ="State address Required";
		}
		else{
			$addressstate = htmlspecialchars($_POST["addressstate"]);
		}

        
        if(empty($_POST["addresspostal"])){
			$hasError = true;
			$err_addresspostal ="Postal/Zip address Required";
		}
		else{
			$addresspostal = htmlspecialchars($_POST["addresspostal"]);
		}
        




		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender= "Gender Required!";
		}else{
			$gender = htmlspecialchars($_POST["gender"]);
		}
		if(!isset($_POST["infos"])){
			$hasError = true;
			$err_infos="Infos Required";
		}
		else{
			$infos = $_POST["infos"];
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




		if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio ="Bio Required";
		}
		else{
			$bio = htmlspecialchars($_POST["bio"]);
		}
		

		if(!$hasError){
		echo "<h1>Form submitted</h1>";
    	echo $_POST["name"]."<br>";
    	echo $_POST["username"]."<br>";
    	echo $_POST["password"]."<br>";
        echo $_POST["conpassword"]."<br>";
        echo $_POST["email"]."<br>";
		echo $_POST["phonecode"]."<br>";
		echo $_POST["phonenumber"]."<br>";
		echo $_POST["addressstreet"]."<br>";
		echo $_POST["addresscity"]."<br>";
		echo $_POST["addressstate"]."<br>";
		echo $_POST["addresspostal"]."<br>";
		echo $_POST["birthday"]."<br>";
		echo $_POST["birthmonth"]."<br>";
		echo $_POST["birthyear"]."<br>";
		
    	echo $_POST["gender"]."<br>";
		
    	echo $_POST["bio"]."<br>";
    	$arr = $_POST["infos"];
    	echo "Infos : ";

    	foreach($arr as $e){
        	echo "$e<br>";
    		}
		}
	//header("Location: index.php");

	}


	
	
?>

<html>
	<head></head>
	<body>
		<form action="" method="post">
		<fieldset>
            <h1 align="center">Club Member Registration</h1>
			<table>
				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Your name ...."> </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				<tr>
					<td>Username</td>
					<td>: <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">  </td>
					<td><span><?php echo $err_username; ?></span></td>
				</tr>

				<tr>
					<td>Password</td>
					<td>: <input type="password" name="password" placeholder="Password">  </td>
					<td><span><?php echo $err_password; ?></span></td>
				</tr>
                <tr>
					<td>Confirm Password</td>
					<td>: <input type="password" name="conpassword" placeholder="Confirm Password">  </td>
                    <td><span><?php echo $err_conpassword; ?></span></td>
					
				</tr>
                <tr>
					<td>Email</td>
					<td>: <input type="text" name="email" placeholder="">  </td>
                    <td><span> <?php echo $err_email;?> </span></td>
					
				</tr>
                <tr>
					<td>Phone</td>
					<td>: <input type="text"  name="phonecode" placeholder="Code"> - <input type="text" name="phonenumber" placeholder="Number">  </td>
                    <td><span> <?php echo $err_phonecode;?> <br> <?php echo $err_phonenumber;?> </span></td>
					
				</tr>
                <tr>
					<td> Address:</td>
					<td> <input type="text" name="addressstreet" placeholder="Street Address">   <br> 
                     <input type="text" name="addresscity" placeholder="City"> - <input type="text" name="addressstate" placeholder="State"> <br>  
                    <input type="text" name="addresspostal" placeholder="Postal/Zip Code">  </td>
                    <td><span> <?php echo $err_addressstreet;?> <br> <?php echo $err_addresscity;?>
                                <?php echo $err_addressstate;?> <br> <?php echo $err_addresspostal;?> </span></td>
					
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
                    <select name="birthyear">
						
                        <option disabled selected>Year</option>
                        <?php
                                foreach($arrYear as $a){
                                    if($a == $birthyear) 
                                        echo "<option selected>$a</option>";
                                    else
                                        echo "<option>$a</option>";
                                }
                        ?>
                        </select>
                    
                </td>

					
                    <td><span> <?php echo $err_birthday;  echo $err_birthmonth;  echo $err_birthyear; ?> </span></td>

                </tr>
				<tr>
					<td>Gender</td>
					<td>: <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" type="radio" value="Female" <?php if($gender=="Female") echo "checked"; ?> > Female </td>
					<td><span> <?php echo $err_gender;?> </span></td>
				</tr>

                <tr>
					<td>Where did you hear <br>about us?</td>
					<td><input type="checkbox" name="infos[]" <?php if(infoExist("A Friend or Colleague")) echo "checked";?> value="A Friend or Colleague" > A Friend or Colleague <br>
					 <input type="checkbox" name="infos[]" <?php if(infoExist("Google")) echo "checked";?> value="Google" > Google <br>
					 <input type="checkbox" name="infos[] " <?php if(infoExist("Blog Post")) echo "checked";?> value="Blog Post" > Blog Post <br>
                     <input type="checkbox" name="infos[] " <?php if(infoExist("News Article")) echo "checked";?> value="News Article" > News Article <br>
					</td>
                    <td><span> <?php echo $err_infos;?> </span></td>
					
				</tr>


				<tr>
					<td><br> Bio :</td>
					<td> <br><textarea name="bio"><?php echo $bio; ?></textarea>
					</td>
					<td><span><?php echo $err_bio;?></span></td>
				</tr>
				<tr>
					<td colspan="2" align="right"><input type="submit" name="submit" value="register"></td>
					
				</tr>
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>