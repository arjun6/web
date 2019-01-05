<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
<p><font size=5><marquee><i> Join us now soon just by filling the below simple registeration form.</i> </marquee></p>
<p><font size=4><marquee direction="right"><i>let's help you Dance the whole out of you</i></marquee></p>
<center>
<div class="one" >
<b>To contact us via email please complete the form below:</b><br><br>
<form method="POST" action="register.php" >
<label for="fname">First Name:</label><br>
<input type="text" name="Fname" size="30" maxlength="40" required /><br><br>
<label for="mname">Middle Name:</label><br>
<input type="text" name="Mname" size="30" maxlength="40" /><br><br>
<label for="lname">Last Name:</label><br>
<input type="text" name="Lname" size="20" maxlength="40" required /><br><br>
<label for="email">Email:</label><br>
<input type="text" name="Email" size="30" maxlength="50" required /><br><br>
<label for="contact">Contact No. :</label><br>
<input type="tel" name="Contact" size="10" maxlength="10" required /></br><br>
<label for="dance">Dance form interested:</label><br>
<select name="Dancform" required>
	<option selected hidden value="">---Select ur intersted dance form---</option>
	<option>Bharatnatyam</option>
	<option>Kathak</option>
	<option>Kathakali</option>
	<option>Kolattam</option>
	<option>Kuchupudi</option>
	<option>Manipuri</option>
	<option>Mayilattam</option>
	<option>Oddissi</option>
	<option>Oppana</option>
	<option>Padayani</option>
	<option>Rass lila</option>
	<option>Veergase</option>
</select><br><br>
<label for="students">Number of students interested:</label><br>
<select name="Intersetd" required>
	<option selected hidden value="">---Select a number---</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
</select><br><br>
<center><input type="submit" value="submit"/> <input type="reset" value="RESET"/></center>
</center>
</form>
</div>
</body>
</html>

<?php 
 $con=mysql_connect("localhost","root","") or die(mysql_error());  
    $db=mysql_select_db('nachadedance',$con) or die(mysql_error());  
 if(isset($_POST['submit'])){  
     $Fname=$_POST['Fname'];  
    $Mname=$_POST['Mname'];
    $Lname=$_POST['Lname'];    
    $Email=$_POST['Email'];    
    $Contact=$_POST['Contact'];        
    $Dancform=$_POST['Dancform'];        
    $Intersetd=$_POST['Intersetd'];        

if($Fname==''){
echo "<script>alert('enter your first name')</script> ";
}

if($Lname==''){
echo "<script>alert('enter your last name')</script> ";
}

if($Email==''){
echo "<script>alert('enter your mail id')</script> ";
}

if($Contact==''){
echo "<script>alert('enter your contact no')</script> ";
}

if($Dancform==''){
echo "<script>alert('select your dance form')</script> ";
}
if($Intersetd==''){
echo "<script>alert('select no of students')</script> ";
}
else{
$query="insert into register(Fname,Mname,Lname,Email,Contact,Dancform,Intersetd) values ('$Fname','$Mname','$Lname','$Email','$Contact','$Dancform','$Intersetd')";
if(mysql_query($query)){
echo "<script>alert('you are sucessfully registered')</script> ";
}
}
 }
?>
