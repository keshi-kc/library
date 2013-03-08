<?php
?>

<html>
    <head>
        <title> ADD BOOK DETAILS</title>
        
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type="C:\xampp\htdocs\xampp\Library_management\jquery-1.9.1.min"></script>
       <!-- <script type="text/javascript">
            $(document).ready(function() {
                $("#frmSubmit").click(function() {
                        $("#ack").toggle(2000);
                    });
            });
        </script> -->
    </head>
    <body>
        <div id="outerDiv">
            <div id="headerDiv">
<!--                 <center><h1>BOOK ENTRY SECTION</h1></center> -->
<!--                 <ul> -->
<!--                     <a href="#"><li>Home</li></a> -->
<!--                     <a href="#"><li>Books status</li></a> -->
<!--                     <a href="#"><li>email us</li></a> -->
<!--                     <a href="#"><li>contact us</li></a> -->
<!--                 </ul> -->
            </div>
           <!-- <div id="frmAck">
                <p id="ack">Form submitted succesfully</p>
            </div> -->
            <div id="leftDiv">
<!--             <ul> -->
<!--                 <li>abc</li> -->
<!--                 <li>xyz</li> -->
<!--             </ul>     -->
            </div>
            <div id="frmDiv">
                <form action="" method="post" id="AddBook">
                 <input type="hidden" name="book_id" value="" />
                 <input type="hidden" name="id_for_copies" value="" />
                    <table id="frmTable">                     
                        <tr>
                            <td><p>Accession number*</p></td><td><input type="text" name="existing_book_id" required="required" /></td>
                            <td><p>Book Title*</p></td><td><input type="text" name="book_title" required="required" /></td>
                        </tr>
                        <tr>
                            <td><p>Author Name*</p></td><td><input type="text" name="author_name " pattern="[a-zA-Z ]{0,}" required="required" /></td>
                            <td><p>Publisher Name*</p></td><td><input type="text" name="publisher_name" required="required" /></td>
                        </tr>
                        <tr>
                            <td><p>Subject*</p></td><td><input type="text" name="subject_id" required="required" /></td>
                            <td><p>Num Of Copy*</p></td><td><input type="number" name="number_of_copy" required="required" min="1" /></td>
                        </tr>
                        <tr>
                            <td><p>Main Subject*</p></td><td><input type="text" name="main_subject_id" required="required" /></td>
                             <td><p>Addition*</p></td><td><input type="text" name="addition" required="required" /></td>
                        </tr>
                        <tr>
                            <td><p>MRP*</p></td><td><input type="text" name="price" required="required" /></td>
                            <td><p>Dissount*</p></td><td><input type="text" name="discount" required="required" /></td>
                        </tr>
                        <tr>
                            <td><p>Net Price*</p></td><td><input type="text" name="net_price" required="required" /></td>
                            <td><p>Bill Number*</p></td><td><input type="text" name="bill_detail_id" required="required" /></td>
                        </tr>
                        <tr>
                            <td><p>Vendor Name*</p></td><td><input type="text" name="vendor_id" required="required" /></td>
                            <td><p>Volume*</p></td><td><input type="text" name="volume" required="required" /></td>
                        </tr>
                        <tr>
                            <td><p>Date Of Purchase*</p></td><td><input type="text" name="date_of_purchase" required="required" /></td>
                            <td><p>Isbn Number*</p></td><td><input type="text" name="isbn_number" required="required" /></td>
                        </tr>
                        <tr>
                             <td><p>Issued TO</p></td><td><input type="text" name="issued_to" required="required" /></td>
                             <td><p>Reserve For</p></td><td><input type="text" name="reserve_for" required="required" /></td>
                        </tr>
                        <tr>
                            <td><p>Remarks</p></td><td colspan="3"><textarea name="remark" cols="50" rows="4"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="SAVE"/></td>
                            <td colspan="2"><input type="reset" value="CANCEL"/></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>