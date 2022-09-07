
<tr height="60px" width="100%">
        <td>
          <a href="index.php"
            ><img
              src="includes/images/logo.png"
              alt="Website logo"
              height="auto"
              width="100%"
          /></a>
        </td>
        <td colspan="2">
<form action="" method="post">
            <input
              type="text"
              name="search1"
              class="search1"
              placeholder="Search items,collections and accounts"
            />
          </form>
        </td>
        <td colspan="2">
          <nav>
            <ul>
              <li class="li1">
                <a href="explore-collections.php">Explore</a>
                <ul class="subul1" id="subul1">
                  <li>
                    <a href="assets.php"
                      ><img src="includes/images/icon.png" alt="" /> All NFTs</a
                    >
                  </li>
                  <li>
                    <a href=""
                      ><img src="includes/images/icon.png" alt="" /> Solana
                      NFTs</a
                    >
                  </li>
                  <li>
                    <a href=""
                      ><img src="includes/images/icon.png" alt="" /> Arts</a
                    >
                  </li>
                  <li>
                    <a href=""
                      ><img src="includes/images/icon.png" alt="" />
                      Collectibles</a
                    >
                  </li>
                  <li>
                    <a href=""
                      ><img src="includes/images/icon.png" alt="" /> Domain
                      Names</a
                    >
                  </li>
                </ul>
              </li>

              <li class="li1">
                Stats
                <ul class="subul1" id="subul1">
                  <li><a href="rankings.php"> Rankings</a></li>
                  <li><a href=""> Activity</a></li>
                </ul>
              </li>

              <li class="li1">
                Resources
                <ul class="subul1" id="subul1">
                  <li><a href=""> Help Center</a></li>
                  <li><a href=""> Platform Status</a></li>
                  <li><a href=""> Partners</a></li>
                  <li><a href=""> Gas-Free Marketplace</a></li>
                  <li><a href=""> Taxes</a></li>
                  <li><a href=""> Blog</a></li>
                  <li><a href=""> Docs</a></li>
                  <li><a href=""> Newsletter</a></li>
                </ul>
              </li>

              <li class="li1">Create</li>
            </ul>
          </nav>
        </td>
        <td class="pro">
          <nav>
            <ul>
              <li class="li1 li2">
                <img class="proimg" src="includes/images/profile.png" alt="" />
                <ul class="subul1 subul2" id="subul1">
                  <li>
                    <a href=""
                      ><img src="includes/images/icon.png" alt="" /> Profile</a
                    >
                  </li>
                  <li>
                    <a href=""
                      ><img src="includes/images/icon.png" alt="" />
                      Favourites</a
                    >
                  </li>
                  <li>
                    <a href=""
                      ><img src="includes/images/icon.png" alt="" />
                      Watchlist</a
                    >
                  </li>
                  <li>
                    <a href=""
                      ><img src="includes/images/icon.png" alt="" /> My
                      Collections</a
                    >
                  </li>
                  <li>
                    <a href=""
                      ><img src="includes/images/icon.png" alt="" /> Settings</a
                    >
                  </li>
                <?php if(isset($_SESSION['logged_email'])){?>

                    <li>
                    <a href="add_art.php"
                      ><img src="includes/images/icon.png" alt="" /> Add New Art</a
                    >
                  </li>
                    <li>
                    <a href="logout.php"
                      ><img src="includes/images/icon.png" alt="" /> Logout</a
                    >
                  </li>
                  <?php }else{ ?>
                    <li>
                    <a href="login.php"
                      ><img src="includes/images/icon.png" alt="" /> Login</a
                    >
                  </li>

                  <?php } ?>
                  
                </ul>
              </li>

              <li class="li1 li2">
                <img class="proimg" src="includes/images/wallet.png" alt="" />
                <ul class="subul1 subul2" id="subul1">
                  <li><a href=""> WalletConnect</a></li>
                  <li><a href=""> MetaMask</a></li>
                  <li><a href=""> Coinbase Wallet</a></li>
                  <li><a href=""> Phantom</a></li>
                </ul>
              </li>
            </ul>
          </nav>
          </td>
      </tr>