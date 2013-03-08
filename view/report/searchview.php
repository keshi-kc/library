<?php 

?>
<html>
<head>
<title>Report</title>
</head>
<body>
<form action="http://localhost/libreport/searchcontroller.php?method=showReport" method="post">
Book Name:
<input type="text" name="bookName" />
Book Title
<input type="text" name="bookTitle" />
<br/>
<input type="checkbox" name="numberOfCopies">number of copies</input>
<input type="checkbox" name="dateOfPurchase">date of purchase</input>
<input type="checkbox" name="vendorName">vendor Name</input> <br/>
<input type="submit" value="search"/>
</form>
</body>
</html>