 <nav>
     <div class="container d-flex justify-content-between py-3">

         <!-- logo image -->
         <a href="index.php"><img src="./imgs/logo.png" class="logo" alt="Logo" /></a>

         <!-- login and register buttons -->
         <div class="d-flex gap-3">
             <?php
                if ($user) {
                    echo '<p class="m-0 d-flex align-items-center">Hi! ' . $user['name'] . '</p>';
                    echo '<a href="./scripts/logout.php" class="m-0 d-flex align-items-center">LogOut</a>';
                } else {
                    echo '<a href="./login-register.php" class="text-decoration-none">
                <button class="btn">Login/Register</button>
              </a>';
                }
                ?>
         </div>
     </div>
 </nav>