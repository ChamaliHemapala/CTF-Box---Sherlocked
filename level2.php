<?php

	//session start
	session_start();
	mysqli_connect('localhost','root','','isproject');
	//mysql_select_db('isproject');
	
    

	
	
?>

<!DOCTYPE html>
<html>
<body background="woods.png">

	<h2 id="level2" style="color:white;text-align:center" >LEVEL 3 </h2>
	<h4 style="color:white;text-align:center" font-family: "Times New Roman"> INVESTIGATE THE BELOW MAP!!</h4>
	<a href="map.png" download><img src="map.png" alt="W3Schools" width="500" height="500" style="margin-left:540px;opacity: 0.3;"></a>






<div id="id01" class="modal">
  
  <form method="post" class="modal-content animate" action="level3.php">
    

    <div class="container" style="margin-left:650px">


      <label for="psw"><b></b></label>
      <input type="password" placeholder="xx.xx` N, yy.yy` W" name="psw" id="psw" required>
        
      <input type="submit" class="btn1" name="location" value="Follow the path" id="location" >  
      
    </div>

    
  </form>
</div>



</body>

</html>
