<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

<body>
    <center>
        <h1>CART</h1>
        <h2>CONTINUOUS PROFESSIONAL DEVELOPMENT</h2>
		<h3>Anytime anywhere<h3>
		<button class="buttonupdate" onclick="window.location.href='view.php'">View Cart</button>
	<br><br>
</center>
<div class="container"></div>
<form action="abc.php" method="post">
    <label>ID</label>
    <input type="text" name="customerid" placeholder="ID" required="true">
	<label>name</label>
    <input type="text" name="name" placeholder="Name" required="true">
    <label>mobile number</label>
    <input type="text" name="mobilenumber" placeholder="Mobile number" required="true">
    <label>Enter Email</label>
    <input type="text" name="emailid" placeholder="Enter Email" required="true">

<label for="category"></label>
<select name="category">
    <option value="">select the category</option>
    <option value ="ART AND WELLBEING">ART AND WELLBEING</option>
    <option value="CLASSROOM MANAGEMENT">CLASSROOM MANAGEMENT</option>
	<option value="CREATIVITY AND SOFT SKILLS">CREATIVITY AND SOFT SKILLS</option>
	<option value="LANGUAGES AND CILS">LANGUAGES AND CILS</option>
	<option value="SCHOOL INNOVATION">SCHOOL INNOVATION</option>
    <br>
</select>	
	<label for="course"></label>
<select name="course">
    <option value="">select the course</option>
    <option value ="EFFECTIVE MATIVATION">EFFECTIVE MATIVATION</option>
    <option value="TEACHER COLLABORATION">TEACHER COLLABORATION</option>
	<option value="COACHING AND MENTORING">COACHING AND MENTORING</option>
	<option value="CLASSROOM DEBATES">CLASSROOM DEBATES</option>
	<option value="LANGUAGE TEACHING">LANGUAGE TEACHING</option>
	<option value="PROJECT MANAGEMENT">PROJECT MANAGEMENT</option>
	<option value="CREATTIVE THINKING">CREATTIVE THINKING</option>
	<option value="DESIGN THINKING">DESIGN THINKING</option>
	<option value="BRAIN BASED LEARNING">BRAIN BASED LEARNING</option>
	<option value="BUILD YOUR APP">BUILD YOUR APP</option>
	
    <br>
</select>
<input type="submit" value="submit">

</form>

</body>
</html>
