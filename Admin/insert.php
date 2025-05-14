<?php include 'navbar.php';?>
<center>
<form method="post" action="upload.php" enctype="multipart/form-data">
ID: <input type="text" name="t1"><br><br>
Name: <input type="text" name="t2" style="width: 25%;height: 60px;"><br><br>
Description: <input type="text" name="t3" style="width: 25%;height: 60px;"><br><br>
Category: <input type="text" name="t4"><br><br>
Rating: <input type="text" name="t5"><br><br>
Cost Price: <input type="text" name="t6"><br><br>
Selling Price: <input type="text" name="t7"><br><br>
Image: <input type="file" name="f1"><br><br>
<button type="submit">Submit</button>
</center>


</form>