<?php


?>
<body>
    <header>
        <div class="navbar">
            <div class="navbar-left">
                <a href="../public/home.php" style="text-decoration: none;">
                    <div class="logo">
                        <img class="logo-icon" src="../assets/icons/Logo.png" alt="logo">
                    </div>
                </a>

            </div>
            <div class="nav">
                <style>
                    .dropbtn {
                                font-size: 1.1rem;
                                font-weight: 700;
                                background-color: #D7EBED;
                                padding: 16px;
                                font-size: 16px;
                                border: none;
                                cursor: pointer;
                            }
  
                    .dropbtn:hover {
                                color: #146C94;
                            }
  
                     .dropdown {
                            position: relative;
                            display: inline-block;
                            }
  
                    .dropdown-content {
                                display: none;
                                position: absolute;
                                background-color: #f1f1f1;
                                min-width: 220px;
                                overflow: auto;
                                z-index: 1;
                            }
  
                    .dropdown-content a {
                        color: black;
                        padding: 12px 16px;
                        text-decoration: none;
                        display: block;
                    }
  
                    .dropdown a:hover {
                        background-color: #ddd;
                    }
                    
                    .show {
                        display: block;
                    }
                </style>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">Course</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="../public/course-sd.php">Sekolah Dasar</a>
                        <a href="../public/course-smp.php">Sekolah Menengah Pertama</a>
                        <a href="../public/course-sma-ipa.php">Sekolah Menengah Atas - IPA</a>
                        <a href="../public/course-sma-ips.php">Sekolah Menengah Atas - IPS</a>
                        <a href="../public/utbk.php">UTBK-SNBT</a>
                    </div>
                  </div>
                  <script>
                    function myFunction() {
                      document.getElementById("myDropdown").classList.toggle("show");
                    }
                    
                    window.onclick = function(event) {
                      if (!event.target.matches('.dropbtn')) {
                        var dropdowns = document.getElementsByClassName("dropdown-content");
                        var i;
                        for (i = 0; i < dropdowns.length; i++) {
                          var openDropdown = dropdowns[i];
                          if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                          }
                        }
                      }
                    }
                    </script>
                <a class="nav-button" href="#event">Event</a>
                <a class="nav-button" href="#about">About</a>
                <a class="profile" href="../public/profile.php"><img class="user-icon" src="../assets/icons/user.png" alt=""></a>
            </div>
        </div>
    </header>
</body>

</html>