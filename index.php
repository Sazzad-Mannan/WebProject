<?php
session_start();
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
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
  </head>
  <body>
    <table
      
      width="1300px"
      height="7000px"
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
       
      <tr height="442px" class="tr1">
        <td colspan="3">
          <h1 style="margin-bottom: 0px; padding-left: 10px">
            Discover, collect, and sell extraordinary NFTs
          </h1>
          <br />
          <h3 style="padding-left: 10px">
            Digital Arts is the world's first and largest NFT marketplace
          </h3>
          <br />
          <a href="explore-collections.php"
            ><button class="btn1"><b>Explore</b></button></a
          >
          <a href=""
            ><button class="btn1 btn2"><b>Create</b></button></a
          ><br />
        </td>
        <td colspan="3">
          <div id="card1">
            <a href="">
              <img src="includes/images/zombie.jpg" alt="" />
              <div class="card1div">
                <img
                  src="includes/images/pic.png"
                  style="
                    width: 30px;
                    border-radius: 50%;
                    padding: 10px;
                    float: left;
                  "
                  alt=""
                />
                <div style="width: 60%; float: left">
                  <b>Zoonies</b>
                  <br />
                  by Zoonies
                </div>
                <div style="width: 20%; float: right">2d 20h 30s</div>
              </div>
            </a>
          </div>
        </td>
      </tr>
      <tr height="120px">
        <td colspan="6">
          <div id="banner">
            <h2>
              <b>Check out solana collections on Digital Arts</b>
            </h2>
            <button
              class="btn1"
              style="float: right; margin-top: 34px; margin-right: 34px"
            >
              Explore
            </button>
          </div>
        </td>
      </tr>
      <tr height="400px">
        <td colspan="6" style="text-align: center">
          <h2>Notable Drops</h2>
          <br />
          <div class="container">
            <ul class="control" id="custom-control">
              <li class="prev">
                <img src="includes/images/left.png" alt="" />
              </li>
              <li class="next">
                <img src="includes/images/right.png" alt="" />
              </li>
            </ul>
            <div class="my-slider">
              <img src="includes/images/slideimg2.png" alt="" />
              <img src="includes/images/slideimg1.jpg" alt="" />
              <img src="includes/images/slideimg3.jpg" alt="" />
              <img src="includes/images/sliderimage4.png" alt="" />
              <img src="includes/images/sliderimage5.jpg" alt="" />
            </div>
          </div>
        </td>
      </tr>
      <tr height="80px">
        <td colspan="6" style="text-align: center; font-size: 20px">
          <form action="" method="get">
            <b>Top collections over</b>
            <select name="days" id="" style="color: blue; font-size: 20px">
              <option value="">last 24 hours</option>
              <option value="">last 7 days</option>
              <option value="">last 30 days</option>
            </select>
          </form>
        </td>
      </tr>
      <tr height="300px">
        <td colspan="2">
          <table class="tb3" style="width: 100%; table-layout: fixed">
            <col style="width: 5%" />
            <col style="width: 15%" />
            <col style="width: 50%" />
            <col style="width: 30%" />

           
            <?php
$num=$result->num_rows;
if($result->num_rows>0){
				$i=1;
         if($num>5){$k=5;}else{$k=$num;}
         for($j=0;$j<$k;$j++){ 
            $row=mysqli_fetch_assoc($result); ?>
            <tr style="height: 60px">
              <td><?php echo $i++; ?></td>
              <td>
                <img
                  style="width: 100%; border-radius: 30px"
                  src="<?php echo $row['asset']; ?>"
                  alt=""
                />
              </td>
              <td>
                <p
                  style="
                    width: 100%;
                    height: 23px;
                    overflow: hidden;
                    white-space: nowrap; /* Don't forget this one */
                    text-overflow: ellipsis;
                    margin: 0px;
                  "
                >
                  <b><?php echo $row['name']; ?></b>
                </p>

                <span>Floor Price: <?php echo $row['price']; ?> BDT</span>
              </td>
              <td>
                <span style="color: green">+36.5%</span><br />
                
              </td>
            </tr>
<?php $num--;} ?>
          </table>
        </td>
        <td colspan="2">
          <table class="tb3" style="width: 100%; table-layout: fixed">
            <col style="width: 5%" />
            <col style="width: 15%" />
            <col style="width: 50%" />
            <col style="width: 30%" />


          <?php   if($num>5){$k=5;}else{$k=$num;}
         for($j=0;$j<$k;$j++){ 
            $row=mysqli_fetch_assoc($result); ?>
            <tr style="height: 60px">
              <td><?php echo $i++; ?></td>
              <td>
                <img
                  style="width: 100%; border-radius: 30px"
                  src="<?php echo $row['asset']; ?>"
                  alt=""
                />
              </td>
              <td>
                <p
                  style="
                    width: 100%;
                    height: 23px;
                    overflow: hidden;
                    white-space: nowrap; /* Don't forget this one */
                    text-overflow: ellipsis;
                    margin: 0px;
                  "
                >
                  <b><?php echo $row['name']; ?></b>
                </p>

                <span>Floor Price: <?php echo $row['price']; ?> BDT</span>
              </td>
              <td>
                <span style="color: green">+36.5%</span><br />
                
              </td>
            </tr>
<?php $num--;} ?>
          </table>
        </td>
        <td colspan="2">
          <table class="tb3" style="width: 100%; table-layout: fixed">
            <col style="width: 5%" />
            <col style="width: 15%" />
            <col style="width: 50%" />
            <col style="width: 30%" />
           <?php  if($num>5){$k=5;}else{$k=$num;}
         for($j=0;$j<$k;$j++){ 
            $row=mysqli_fetch_assoc($result); ?>
            <tr style="height: 60px">
              <td><?php echo $i++; ?></td>
              <td>
                <img
                  style="width: 100%; border-radius: 30px"
                  src="<?php echo $row['asset']; ?>"
                  alt=""
                />
              </td>
              <td>
                <p
                  style="
                    width: 100%;
                    height: 23px;
                    overflow: hidden;
                    white-space: nowrap; /* Don't forget this one */
                    text-overflow: ellipsis;
                    margin: 0px;
                  "
                >
                  <b><?php echo $row['name']; ?></b>
                </p>

                <span>Floor Price: <?php echo $row['price']; ?> BDT</span>
              </td>
              <td>
                <span style="color: green">+36.5%</span><br />
                
              </td>
            </tr>
<?php $num--;}} ?>
          </table>
        </td>
      </tr>
      <tr height="80px">
        <td colspan="6" style="text-align: center; font-size: 20px">
          <a href="rankings.php"
            ><button class="btn1"><b>Go to Rankings</b></button></a
          >
        </td>
      </tr>
      <tr height="80px">
        <td colspan="6" style="text-align: center; font-size: 20px">
          <form action="" method="get">
            <b>Trending in</b>
            <select name="days" id="" style="color: blue; font-size: 20px">
              <option value="">all categories</option>
              <option value="">solana NFTs</option>
              <option value="">art</option>
              <option value="">collectibles</option>
              <option value="">domain names</option>
              <option value="">music</option>
              <option value="">photography</option>
              <option value="">sports</option>
              <option value="">trading cards</option>
              <option value="">utility</option>
              <option value="">virtual worlds</option>
            </select>
          </form>
        </td>
      </tr>

      <tr height="400px">
        <td colspan="6" style="text-align: center">
          <div class="container">
            <ul class="control" id="custom-control2">
              <li class="prev">
                <img src="includes/images/left.png" alt="" />
              </li>
              <li class="next">
                <img src="includes/images/right.png" alt="" />
              </li>
            </ul>
            <div class="my-slider2">
              <img src="includes/images/slideimg2.png" alt="" />
              <img src="includes/images/slideimg1.jpg" alt="" />
              <img src="includes/images/slideimg3.jpg" alt="" />
              <img src="includes/images/slideimg4.png" alt="" />
              <img src="includes/images/slideimg5.jpg" alt="" />
            </div>
          </div>

          <!--div id="slider">
            <img src="includes/images/sliderimg25.jpg" alt="" />
            <img src="includes/images/sliderimg27.png" alt="" />
            <img src="includes/images/sliderimg24.gif" alt="" />
          </div>
          <img src="includes/images/left.png" alt="" />
          <img src="includes/images/right.png" alt="" /-->
        </td>
      </tr>
      <tr height="80px">
        <td colspan="6" style="text-align: center">
          <h3><b>Create and sell your NFTs</b></h3>
        </td>
      </tr>

      <tr height="200px">
        <td colspan="6">
          <table
            width="100%"
            height="100%"
            style="text-align: center"
            border="1"
          >
            <col width="25%" />
            <col width="25%" />
            <col width="25%" />
            <col width="25%" />
            <tr>
              <td>
                <img
                  src="includes/images/wallet.svg"
                  style="width: 35px"
                  alt=""
                /><br />
                <b>Set up your wallet</b><br />
                <p>
                  Once you’ve set up your wallet of choice, connect it to
                  Digital Arts by clicking the wallet icon in the top right
                  corner. Learn about the
                </p>
              </td>
              <td>
                <img
                  src="includes/images/collection.svg"
                  style="width: 35px"
                  alt=""
                /><br />
                <b>Create your collection</b><br />
                <p>
                  Click
                  <a href="" style="text-decoration: none"
                    ><b>My Collections</b></a
                  >
                  and set up your collection. Add social links, a description,
                  profile & banner images, and set a secondary sales fee.
                </p>
              </td>
              <td>
                <img
                  src="includes/images/nft.svg"
                  style="width: 35px"
                  alt=""
                /><br />
                <b>Add your NFTs</b><br />
                <p>
                  Upload your work (image, video, audio, or 3D art), add a title
                  and description, and customize your NFTs with properties,
                  stats, and unlockable content.
                </p>
              </td>
              <td>
                <img
                  src="includes/images/sale.svg"
                  style="width: 35px"
                  alt=""
                /><br />
                <b>List them for sale</b><br />
                <p>
                  Choose between auctions, fixed-price listings, and
                  declining-price listings. You choose how you want to sell your
                  NFTs, and we help you sell them!
                </p>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr height="80px">
        <td colspan="6" style="text-align: center">
          <h2>Resources for getting started</h2>
        </td>
      </tr>
      <tr height="250px">
        <td colspan="2">
          <a
            href=""
            style="
              width: 100%;
              height: 100%;
              text-decoration: none;
              color: black;
            "
            ><img
              src="includes/images/img1.png"
              alt=""
              width="100%"
              height="70%"
            />

            <h3
              style="
                width: 100%;
                height: 28%;
                margin: 0;
                padding: 0;
                text-align: center;
                border-top: 1px solid rgb(216, 216, 216);
              "
            >
              How to easily setup a MetaMask Wallet
            </h3>
          </a>
        </td>
        <td colspan="2">
          <a
            href=""
            style="
              width: 100%;
              height: 100%;
              text-decoration: none;
              color: black;
            "
            ><img
              src="includes/images/img2.jpg"
              alt=""
              width="100%"
              height="70%"
            />

            <h3
              style="
                width: 100%;
                height: 28%;
                margin: 0;
                padding: 0;
                text-align: center;
                border-top: 1px solid rgb(216, 216, 216);
              "
            >
              How to Fund MetaMask with ETH
            </h3>
          </a>
        </td>
        <td colspan="2">
          <a
            href=""
            style="
              width: 100%;
              height: 100%;
              text-decoration: none;
              color: black;
            "
            ><img
              src="includes/images/img3.png"
              alt=""
              width="100%"
              height="70%"
            />

            <h3
              style="
                width: 100%;
                height: 28%;
                margin: 0;
                padding: 0;
                text-align: center;
                border-top: 1px solid rgb(216, 216, 216);
              "
            >
              How to Find an NFT You Love
            </h3>
          </a>
        </td>
      </tr>
      <tr height="80px">
        <td colspan="6" style="text-align: center">
          <h2>Browse by category</h2>
        </td>
      </tr>
      <tr height="200px">
        <td colspan="2">
          <a
            href=""
            style="
              text-decoration: none;
              color: black;
              text-align: center;
              width: 100%;
              height: 1005;
            "
          >
            <img
              style="width: 100%"
              height="70%"
              src="includes/images/art.webp"
              alt=""
            />
            <h2 style="padding: 0; margin: 0; height: 28%">Art</h2>
          </a>
        </td>
        <td colspan="2">
          <a
            href=""
            style="
              text-decoration: none;
              color: black;
              text-align: center;
              width: 100%;
              height: 1005;
            "
          >
            <img
              style="width: 100%"
              height="70%"
              src="includes/images/collectibles.webp"
              alt=""
            />
            <h2 style="padding: 0; margin: 0; height: 28%">Collectibles</h2>
          </a>
        </td>
        <td colspan="2">
          <a
            href=""
            style="
              text-decoration: none;
              color: black;
              text-align: center;
              width: 100%;
              height: 1005;
            "
          >
            <img
              style="width: 100%"
              height="70%"
              src="includes/images/domain-names.webp"
              alt=""
            />
            <h2 style="padding: 0; margin: 0; height: 28%">Domain Names</h2>
          </a>
        </td>
      </tr>
      <tr height="200px">
        <td colspan="2">
          <a
            href=""
            style="
              text-decoration: none;
              color: black;
              text-align: center;
              width: 100%;
              height: 1005;
            "
          >
            <img
              style="width: 100%"
              height="70%"
              src="includes/images/music.webp"
              alt=""
            />
            <h2 style="padding: 0; margin: 0; height: 28%">Music</h2>
          </a>
        </td>
        <td colspan="2">
          <a
            href=""
            style="
              text-decoration: none;
              color: black;
              text-align: center;
              width: 100%;
              height: 1005;
            "
          >
            <img
              style="width: 100%"
              height="70%"
              src="includes/images/photography-category.webp"
              alt=""
            />
            <h2 style="padding: 0; margin: 0; height: 28%">Photography</h2>
          </a>
        </td>
        <td colspan="2">
          <a
            href=""
            style="
              text-decoration: none;
              color: black;
              text-align: center;
              width: 100%;
              height: 1005;
            "
          >
            <img
              style="width: 100%"
              height="70%"
              src="includes/images/sports.webp"
              alt=""
            />
            <h2 style="padding: 0; margin: 0; height: 28%">Sports</h2>
          </a>
        </td>
      </tr>
      <tr height="200px">
        <td colspan="2">
          <a
            href=""
            style="
              text-decoration: none;
              color: black;
              text-align: center;
              width: 100%;
              height: 1005;
            "
          >
            <img
              style="width: 100%"
              height="70%"
              src="includes/images/trading-cards.webp"
              alt=""
            />
            <h2 style="padding: 0; margin: 0; height: 28%">Trading Cards</h2>
          </a>
        </td>
        <td colspan="2">
          <a
            href=""
            style="
              text-decoration: none;
              color: black;
              text-align: center;
              width: 100%;
              height: 1005;
            "
          >
            <img
              style="width: 100%"
              height="70%"
              src="includes/images/utility.png"
              alt=""
            />
            <h2 style="padding: 0; margin: 0; height: 28%">Utility</h2>
          </a>
        </td>
        <td colspan="2">
          <a
            href=""
            style="
              text-decoration: none;
              color: black;
              text-align: center;
              width: 100%;
              height: 1005;
            "
          >
            <img
              style="width: 100%"
              height="70%"
              src="includes/images/virtual-worlds.webp"
              alt=""
            />
            <h2 style="padding: 0; margin: 0; height: 28%">Virtual Worlds</h2>
          </a>
        </td>
      </tr>
      <tr height="80px">
        <td colspan="6" style="text-align: center">
          <h1>Meet Digital Arts</h1>
        </td>
      </tr>
      <tr height="600px">
        <td colspan="6" style="text-align: center">
          <video width="90%" height="90%" autoplay muted>
            <source src="includes/videos/video1.mp4" type="video/mp4" />
            <source src="includes/videos/video1.ogg" type="video/ogg" />
            Your browser does not support the video tag.
          </video>
        </td>
      </tr>
      <tr height="80px">
        <td colspan="6" style="text-align: center">
          <a href="explore-collections.php"
            ><button class="btn1">Explore the marketplace</button></a
          >
        </td>
      </tr>
      <tr height="100px">
        <td width="16.67%"></td>
        <td width="16.67%"></td>
        <td width="16.67%"></td>
        <td width="16.67%"></td>
        <td width="16.67%"></td>
        <td width="16.67%"></td>
      </tr>
    <?php  include "footer.php"; ?>
    </table>

    <script type="text/javascript" src="includes/js/main.js"></script>
  </body>
</html>
