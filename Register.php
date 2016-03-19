<html>

<!---->

<head>

	<title>Registration Form</title>

<link rel="stylesheet" type="text/css" href="regStyle.css"></link>

<link rel="stylesheet" type="text/css" href="calender.css"></link>

<style>

a.date{ text-decoration:none; color: #000000;



}

a{ color:#003366; text-decoration:none;}

</style>

</head>

<?

include("../includes/config.php");

		$user_ID = $_POST['userID']; $firstName =$_POST['FirstName']; 

		$lastName = $_POST['LastName']; $userName = $_POST['UserName']; 

		$address = $_POST['Address']; $city = $_POST['City']; 

		$country = $_POST['Country'];

		$state =$_POST['State']; $postcode = $_POST['Postcode'];

		$password = $_POST['password']; 

		$DOBD = $_POST['day'];

		$DOBM = $_POST['month'];

		$DOBY = $_POST['year'];

		$admin = $_POST['AdminPriv']; 

		$Email = $_POST['Email']; $comments = $_POST['user_comments']; 

		$signature = $_POST['Sign']; $profileImage = $_POST['Profile'];

		$subscribe = $_POST['subscribe'];

		$unsub = $_POST['unsubscrie'];

		if(isset($_POST['submit'])) { 

		

		//see if submit button is pressed.

		

		$query ="INSERT INTO auth_users 

		(user_id, user_firstname, user_lastname, user_forumname, DOB_month, DOB_year, DOB_day,user_address,

			user_city, user_state, user_country, user_post, user_password, user_admin, user_email, user_comment, user_since, user_signature, user_image)			Values('','$firstName','$lastName','$userName', '$day', '$month','$year','$address','$city','$state','$country', '$postcode', '$password','$admin', '$Email','$comments',now(),'$signature','$profileImage')";



		//open the connectio the the server and the database

		openDB();

		if(mysql_query($query)){

			echo "Thank you for Regiesting with Smcleod Technologies

				  <br>Welcome to Smcleod Technologies";

		}

		else{

			echo"Something Fields where not correctly entered please try again<b>",mysql_error(),"</b>";

		}

		closeDB();

		//Check image code here



} else { //display form

?>

<body>

<form name="reg" action="<? echo $_SERVER[PHP_SELF];?>" method="post">

<input type="hidden" name="userID">

<input type="hidden" name="AdminPriv" value="N">

<table class="tborder" cellpadding="6" cellspacing="1" border="0" width="175" >

<tr>

	<td class="tcat">Register at Smcleod Technologies </td>

</tr>

<tr>

	<td class="panelsurround">

	<div class="panel">

		<div style="width:550px" align="left">

		

			<div class="smallfont" style="margin-bottom:3px">

				Register with Smcleod Technologies, to take advantage of our products and services, Recive regular emails offering special deals in order to  register <span class="smallfont" style="margin-bottom:3px">you must first</span> fillout this form .<br />

			</div>

			

			<fieldset class="fieldset">

				<legend><strong>Personal Information:</strong></legend>

				<table cellpadding="0" cellspacing="3" border="0" width="400">

				<tr>

					<td>

					

						First Name: <br />

						<input type="text" name="FirstName">				</td>

					<td>

						Last Name: <br />

						 <input type="text" name="LastName" />

				  </td>

				

				</tr>

<tr>									<td>

						User Name: <br />

							<input type="text" name="UserName" />

									</td>

						<td>

						Password: <br />

							<input type="password" name="password" />

									</td>

				</tr>

								<tr>

					<td>

						Date of Birth: <br /></td>

					<td>Day:

					  <select name="day">

					  	<? 

							for($day = 1; $day < 32; $day++ )

							{

								echo "<option value='$day'>$day</option>";

							}

?>



</select>Month:

<select name="month"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select><br>

Year:<br>

<select name="year">

<? 

	for($year = 1900; $year < 2009; $year++ )

	{

		echo "<option value='$year'>$year</option>";

	}

?>

</select></td>

				

				</tr>

				</table>

			</fieldset>

				<fieldset class="fieldset">

				<legend><strong>Contact Information:</strong>

				</legend>

				<table cellpadding="0" cellspacing="3" border="0" width="400">

				<tr>

					<td colspan="2">Please enter your contact details to become a memeber of Smcleod Technologies.</td>

				</tr>

				<tr>

					<td>

						Email Address:<br />

<input type-"text" size="25" name="Email"/>				</td>

					<td>

						Address :<br />

<input type="text" name="Address" maxlength="250" />					</td>

				</tr>

				<tr>

				<td>

				Post code:<br />

      <input type="text" name="Postcode" />

				</td>

				<td>

				City:<br />

        <input type="text" name="City">

				</td>

				</tr>

				<tr><td>State:<br /><select name="State"><option value="NSW">NSW</option><option value="QLD">QLD</option><option value="VIC">VIC</option><option value="WA">WA</option><option value="SA">SA</option><option value="NT">NT</option></select>

				</td>

				

				<td>Contry:<br><select name="Country"><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="The Bahamas">The Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Costa Rica">Costa Rica</option><option value="Cote d'Ivoire">Cote d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="Gabon">Gabon</option><option value="The Gambia">The Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Greece">Greece</option><option value="Grenada">Grenada</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Honduras">Honduras</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy<">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, North<">Korea, North</option><option value="Korea, South">Korea, South</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia<">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States of America">United States of America</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican City">Vatican City</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select>

				</td>

				</tr>

				</table>

			</fieldset>

			

			<fieldset class="fieldset">

				<legend><strong>User Information:</strong> </legend>

				<table cellpadding="0" cellspacing="3" border="0" width="400">

				<tr>

					<td colspan="2">Please enter a valid email address for yourself.</td>

				</tr>

				<tr><td>Date Joined:</td>

				</tr>

				<tr>

				  <td width="175" class="calendar">

					<?

		if ($actday < $lastDay["mday"]){

        echo "<tr>";

        for ($i=0; $i<7;$i++){

            $actday++;

            if ($actday <= $lastDay["mday"]){

                echo "<td>$actday</td>";

            }

            else {

                echo "<td>&nbsp;</td>";

            }

        }        

        echo "</tr>";

    }



?> 

					<?php

function showCalendar(){

    // Get key day informations. 

    // We need the first and last day of the month and the actual day



    $today    = getdate();

    $firstDay = getdate(mktime(0,0,0,$today["mon"],1,$today["year"]));

    $lastDay  = getdate(mktime(0,0,0,$today["mon"]+1,0,$today["year"]));

    // Create a table with the necessary header informations

    

	echo "<table bgcolor='#FFFFFF' boarder='0'>";

    echo "<tr><th class='calendar' colspan='7'>".$today["month"]." - ".$today["year"]."</th></tr>";

    echo "<tr bgcolor='#003366'>";

    echo "  <td><font color='#FFFFFF'>Mo</font></td><td><font color='#FFFFFF'>Tu</font></td><td><font color='#FFFFFF'>We</font></td><td><font color='#FFFFFF'>Th</font></td>";

    echo "  <td><font color='#FFFFFF'>Fr</font></td><td><font color='#FFFFFF'>Sa</font></td><td><font color='#FFFFFF'>Su</font></td></tr>";

    // Display the first calendar row with correct positioning

    echo "<tr>";

    for($i=1;$i<$firstDay["wday"];$i++){

        echo "<td>&nbsp;</td>";

    }

    $actday = 0;

    for($i=$firstDay["wday"];$i<=7;$i++){

        $actday++;

        if ($actday == $today["mday"]) {

            $class = " class='actday'";

        } else {

            $class = "";

        }

        echo "<td$class><a class='date' href='' onMouseClick=''>$actday</a></td>";

    }

    echo "</tr>";

    //Get how many complete weeks are in the actual month

    $fullWeeks = floor(($lastDay["mday"]-$actday)/7);

    for ($i=0;$i<$fullWeeks;$i++){

        echo "<tr>";

        for ($j=0;$j<7;$j++){

            $actday++;

            if ($actday == $today["mday"]) {

                $class = " class='actday'";

            } else {

                $class = "";

            }

            echo "<td$class><a class='date' href='' onMouseClick=''>$actday</a></td>";

        }

        echo "</tr>";

    }

    //Now display the rest of the month

    if ($actday < $lastDay["mday"]){

        echo "<tr>";

        

		for ($i=0; $i<7;$i++){

            $actday++;

            

			if ($actday == $today["mday"]) {

                $class = " class='actday' bgcolor='#840000' 

				";

            } else {

                $class = "";

            }

    

            if ($actday <= $lastDay["mday"]){

                echo "<td$class><a class='date' href='' onMouseClick=''> $actday</a></td>";

            }

            else {

                echo "<td>&nbsp;</td>";

            }

        } 

        echo "</tr>";

    }

    echo "</table>";

	echo"<table> 

	<tr><td><font size='2px' color='#003366'><<<!--><a href=''> Previous</font></a></td>

	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

	<td><font size='2px' color='#003366'> Next >></font> </td>

	</tr>

	

	</table>";

}

showCalendar();

?>

				</td>

				<td>&nbsp;</td>

				</tr>

				<tr>

				<td>

				 Profile Image:<br>

 					<input type="file" name="Profile">

				</td>

				<td width="173">

 Signature:<br>

 	<input type="text" name="Sign">				</td>

				</tr>

				</table> <br>

			</fieldset>

			

			<fieldset class="fieldset">

	<legend><strong>Feed Back :</strong></legend>

	<table cellpadding="0" cellspacing="3"  border="0" width="100%">

	<tr>

		<td width="100%" valign="top">

		  Comments:<br><br>

	<textarea name="user_comments" rows="8" cols="40"></textarea><br><br>

	Subscribe to Mailing List: <br><br>

	Yes: <input type="checkbox" name="subscribe" value="Y">

	No: <input type="checkbox" name="unsubscribe" value="N"><br>

	<br><input type="submit" name="submit" value="Submit">

			

			<input type="reset" name="cancel" value="Cancel">

	

			</td>

		<td valign="bottom" align="center"><span id="refresh_imagereg" style="display:none"><a href="#">Refresh Image</a></span>		</td>

	</tr>

	</table>

</fieldset>

		</div>

	

	</div>	</td>

</tr>

</table>

</form>

<? } //end else ?>



</body>

</html>

		