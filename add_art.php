<?php 
session_start();
include "includes/db/config.php";

if(!isset($_SESSION['logged_email'])|| empty($_SESSION['logged_email'])){
    $_SESSION['message']="You have to login first to enter this page.";
    header("Location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Art</title>
    <link rel="icon" href="includes/images/icon.png" />
    <link rel="stylesheet" href="includes/css/main.css" />
</head>
<body>
<table
      
      width="1300px"
      height="700px"
      style="table-layout: fixed"
      align="center"
    >
      <col width="16.67%" />
      <col width="16.67%" />
      <col width="16.67%" />
      <col width="16.67%" />
      <col width="16.67%" />
      <col width="16.67%" />
     
     <?php include "header.php"; ?>
     <br>
<tr>
    <td colspan="6" style="text-align: center;"><h1>Insert New Art</h1></td>
</tr>
     
     <form action="functions.php" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
     <tr>
        <td colspan="2"></td>
        <td style="text-align: right;">Art Name:</td>
        <td colspan="2"><input style="width: 90%;padding: 10px;" type="text" name="name" id="" ></td>
        <td></td>
     </tr>
     <tr>
        <td colspan="2"></td>
        <td style="text-align: right;">Category:</td>
        <td colspan="2"><select style="width: 90%;padding: 10px;" name="category" >
        <option value="">Category</option>
    <option value="Arts">Arts</option>
    <option value="Collectibles">Collectibles</option>
    <option value="Domain Names">Domain Names</option>
    <option value="Music">Music</option>
    <option value="Photography">Photography</option>
    <option value="Sports">Sports</option>
    <option value="Trading Cards">Trading Cards</option>
    <option value="Utility">Utility</option>
    <option value="Virtual Worlds">Virtual Worlds</option>
    </select></td>

        <td></td>
     </tr>
     <tr>

     <tr>
        <td colspan="2"></td>
        <td style="text-align: right;">Status:</td>
        <td colspan="2"><select style="width: 90%;padding: 10px;" required name="status" >
        <option value="">Status</option>
    <option value="Buy Now">Buy Now</option>
    <option value="On Auction">On Auction</option>
    <option value="New">New</option>
    <option value="Has Offers">Has Offers</option>
  
    </select></td>

        <td></td>
     </tr>
     <tr>
        <td colspan="2"></td>
        <td style="text-align: right;">Price:</td>
        <td colspan="2"><input style="width: 90%;padding: 10px;" type="number" name="price" id="" ></td>
        <td></td>
     </tr>
     <tr>
        <td colspan="2"></td>
        <td style="text-align: right;">Asset file:</td>
        <td colspan="2"><input style="width: 90%;padding: 10px;" type="file" required name="file" id="" ></td>
        <td></td>
     </tr>
     <tr>
        <td colspan="4"></td>
       
        <td> <input type="submit" value="Submit" style="text-align: right;padding: 10px;" name="asset_insert"></td>
        <td></td>
     </tr>
     </form>
     <?php include "footer.php"; ?>
</table>

<script type="text/javascript" src="includes/js/main.js"></script>
</body>
</html>