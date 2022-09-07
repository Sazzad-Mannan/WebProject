<?php session_start();
include "includes/db/config.php";


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
        
      <tr height="120px" width="100%" style="text-align: center">
        <td colspan="6">
          <h1 style="margin-bottom: 0; padding-bottom: 0">Top NFTs</h1>
          The top NFTs on OpenSea, ranked by volume, floor price and other
          statistics.
        </td>
      </tr>

      <tr height="60px" width="100%" style="text-align: center">
        <td colspan="2">
          <select name="sort" id="" style="padding: 10px">
            <option value="">All Time</option>
            <option value="">Last 24 hours</option>
            <option value="">Last 7 days</option>
            <option value="">Last 30 days</option>
          </select>
        </td>
        <td colspan="2">
          <select name="sort" id="" style="padding: 10px">
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
        <td colspan="2">
          <select name="sort" id="" style="padding: 10px">
            <option value="">All chains</option>
            <option value="">Etherium</option>
            <option value="">Polygon</option>
            <option value="">Klayton</option>
            <option value="">Solana</option>
          </select>
        </td>
      </tr>
      <tr>
        <td colspan="6">
          <table border="1" width="100%" style="text-align: center">
            <col width="25%" />

            <col width="12.5%" />
            <col width="12.5%" />
            <col width="12.5%" />
            <col width="12.5%" />
            <col width="12.5%" />
            <col width="12.5%" />
            <tr>
              <th>Collection</th>
              <th>Volume</th>
              <th>24h%</th>
              <th>7d%</th>
              <th>Floor Price</th>
              <th>Owners</th>
              <th>Items</th>
            </tr>
            <tr>
              <td>
                <img
                  src="includes/images/art.webp"
                  width="30px"
                  height="30px"
                  style="border-radius: 50%"
                  alt=""
                />
                <b>Art Blocks Curated</b>
              </td>
              <td>538.97ETH</td>
              <td><span style="color: green">+328.93%</span></td>
              <td><span style="color: red">-54.90%</span></td>
              <td>0.50</td>
              <td>12.1k</td>
              <td>58.6k</td>
            </tr>
            <tr>
              <td>
                <img
                  src="includes/images/art.webp"
                  width="30px"
                  height="30px"
                  style="border-radius: 50%"
                  alt=""
                />
                <b>Art Blocks Curated</b>
              </td>
              <td>538.97ETH</td>
              <td><span style="color: green">+328.93%</span></td>
              <td><span style="color: red">-54.90%</span></td>
              <td>0.50</td>
              <td>12.1k</td>
              <td>58.6k</td>
            </tr>
            <tr>
              <td>
                <img
                  src="includes/images/art.webp"
                  width="30px"
                  height="30px"
                  style="border-radius: 50%"
                  alt=""
                />
                <b>Art Blocks Curated</b>
              </td>
              <td>538.97ETH</td>
              <td><span style="color: green">+328.93%</span></td>
              <td><span style="color: red">-54.90%</span></td>
              <td>0.50</td>
              <td>12.1k</td>
              <td>58.6k</td>
            </tr>
            <tr>
              <td>
                <img
                  src="includes/images/art.webp"
                  width="30px"
                  height="30px"
                  style="border-radius: 50%"
                  alt=""
                />
                <b>Art Blocks Curated</b>
              </td>
              <td>538.97ETH</td>
              <td><span style="color: green">+328.93%</span></td>
              <td><span style="color: red">-54.90%</span></td>
              <td>0.50</td>
              <td>12.1k</td>
              <td>58.6k</td>
            </tr>
            <tr>
              <td>
                <img
                  src="includes/images/art.webp"
                  width="30px"
                  height="30px"
                  style="border-radius: 50%"
                  alt=""
                />
                <b>Art Blocks Curated</b>
              </td>
              <td>538.97ETH</td>
              <td><span style="color: green">+328.93%</span></td>
              <td><span style="color: red">-54.90%</span></td>
              <td>0.50</td>
              <td>12.1k</td>
              <td>58.6k</td>
            </tr>
            <tr>
              <td>
                <img
                  src="includes/images/art.webp"
                  width="30px"
                  height="30px"
                  style="border-radius: 50%"
                  alt=""
                />
                <b>Art Blocks Curated</b>
              </td>
              <td>538.97ETH</td>
              <td><span style="color: green">+328.93%</span></td>
              <td><span style="color: red">-54.90%</span></td>
              <td>0.50</td>
              <td>12.1k</td>
              <td>58.6k</td>
            </tr>
            <tr>
              <td>
                <img
                  src="includes/images/art.webp"
                  width="30px"
                  height="30px"
                  style="border-radius: 50%"
                  alt=""
                />
                <b>Art Blocks Curated</b>
              </td>
              <td>538.97ETH</td>
              <td><span style="color: green">+328.93%</span></td>
              <td><span style="color: red">-54.90%</span></td>
              <td>0.50</td>
              <td>12.1k</td>
              <td>58.6k</td>
            </tr>
            <tr>
              <td>
                <img
                  src="includes/images/art.webp"
                  width="30px"
                  height="30px"
                  style="border-radius: 50%"
                  alt=""
                />
                <b>Art Blocks Curated</b>
              </td>
              <td>538.97ETH</td>
              <td><span style="color: green">+328.93%</span></td>
              <td><span style="color: red">-54.90%</span></td>
              <td>0.50</td>
              <td>12.1k</td>
              <td>58.6k</td>
            </tr>
            <tr>
              <td>
                <img
                  src="includes/images/art.webp"
                  width="30px"
                  height="30px"
                  style="border-radius: 50%"
                  alt=""
                />
                <b>Art Blocks Curated</b>
              </td>
              <td>538.97ETH</td>
              <td><span style="color: green">+328.93%</span></td>
              <td><span style="color: red">-54.90%</span></td>
              <td>0.50</td>
              <td>12.1k</td>
              <td>58.6k</td>
            </tr>
            <tr>
              <td>
                <img
                  src="includes/images/art.webp"
                  width="30px"
                  height="30px"
                  style="border-radius: 50%"
                  alt=""
                />
                <b>Art Blocks Curated</b>
              </td>
              <td>538.97ETH</td>
              <td><span style="color: green">+328.93%</span></td>
              <td><span style="color: red">-54.90%</span></td>
              <td>0.50</td>
              <td>12.1k</td>
              <td>58.6k</td>
            </tr>
          </table>
        </td>
      </tr>

      <?php  include "footer.php"; ?>
    </table>
  </body>
</html>
