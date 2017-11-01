<html>
<head>
<body style="background:url(back.jpg);background-size:cover">

<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
<pre>First Name  <input type="text" name="fname"> 
     Middle Name <input type="text" name="mname">
     Last Name   <input type="text"  name="lname">
     Roll no     <input type="text"    name="roll_no">
                 <input type="submit" value="Signup">
</pre>
<?php

require_once("./connect.php");

</body>
</head>
</html>

