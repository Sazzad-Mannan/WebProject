<?php session_start();
include "includes/db/config.php";

$sql="SELECT * FROM assets";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Digital Arts Buy and Sell</title>
    <link rel="icon" href="includes/images/icon.png" />
    <link rel="stylesheet" href="includes/css/main.css" />
  </head>
  <body>
    <table  width="1300px" style="table-layout: fixed" align="center">
      <col width="16.67%" />
      <col width="16.67%" />
      <col width="16.67%" />
      <col width="16.67%" />
      <col width="16.67%" />
      <col width="16.67%" />
   
        <?php include "header.php"; ?>

          <!--a href="" class="li1">
            <img src="includes/images/profile.png" alt="" />

            <ul class="subul1" id="subul1">
              <li><a href=""> Hello</a></li>
              <li><a href=""> Hello</a></li>
              <li><a href=""> Hello</a></li>
              <li><a href=""> Hello</a></li>
              <li><a href=""> Hello</a></li>
            </ul>
          </a>

          <img src="includes/images/wallet.png" alt="" /> -->
       
      <tr height="60px" width="100%" style="text-align: center;">
       
        <td>
          <form action="" method="post">
            <select name="sort" id="" style="padding: 10px">
              <option value="">Status</option>
              <option value="">Buy Now</option>
              <option value="">On Auction</option>
              <option value="">New</option>
              <option value="">Has offers</option>
             
            </select>
        
        </td>
        <td>   <select name="sort" id="" style="padding: 10px">
            <option value="">Price</option>
          
          </select>
      
      </td>
      <td>   <select name="sort" id="" style="padding: 10px">
        <option value="">Quantity</option>
        <option value="">All Item</option>
        <option value="">Single Item</option>
        <option value="">Bundles</option>
      
      </select>
  
  </td>
  <td>   <select name="sort" id="" style="padding: 10px">
    <option value="">Collections</option>
   
  </select>

</td>
<td>   <select name="category" id="" style="padding: 10px">
    <option value="">Category</option>
    <option value="">Arts</option>
    <option value="">Collectibles</option>
    <option value="">Domain Names</option>
    <option value="">Music</option>
    <option value="">Photography</option>
    <option value="">Sports</option>
    <option value="">Trading Cards</option>
    <option value="">Utility</option>
    <option value="">Virtual Worlds</option>
  </select>

</td>
<td>   <select name="sort" id="" style="padding: 10px">
    <option value="">Sort by</option>
    <option value="">Recently listed</option>
    <option value="">Recently created</option>
    <option value="">Recently sold</option>
    <option value="">Price low to high</option>
    <option value="">Price high to low</option>
    <option value="">Ending soon</option>
  </select>
</form>
</td>
      </tr>
<?php
$num=$result->num_rows;
if($result->num_rows>0){
				for($i=0;$i<$result->num_rows;$i++){?>
         <tr height="280px" style="text-align: center;">
         <?php 
         if($num>6){$k=6;}else{$k=$num;}
         for($j=0;$j<$k;$j++){ 
            $row=mysqli_fetch_assoc($result); ?>
          
     
        <td><div id="assetdiv" style="width: 100%;border-radius: 10px;">
        <a href=""><img src="<?php echo $row['asset']; ?>" width="100%" height="148px" alt="">
        <b><?php echo $row['name']; ?></b><br>
        <?php  $sql2="SELECT fname,lname from user where id=".$row['user_id'];
        $result2=mysqli_query($conn,$sql2);
        $row2=mysqli_fetch_assoc($result2); 
        echo $row2['fname']." ".$row2['lname']; ?>
         <br>
        <b>Price : <?php echo $row['price']; ?>BDT</b><br>
        <?php echo $row['status']; ?> </a><br>
        <div style="width: 100%;height:26px">
            <button class="buynow" style="width: 100%;background:rgb(24, 104, 183);color:white;cursor:pointer;border: none;padding: 5px;">Buy Now</button>
        </div>
          </div></td>
        <?php $num--; } }?>
      </tr>

      <?php  }else{echo "No assets in database.";} ?>
      <?php  include "footer.php"; ?>
    </table>
  </body>
</html>
