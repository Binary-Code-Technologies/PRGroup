<?php
echo "<header class=\"header\">

      <div class=\"header_bar d-flex flex-row align-items-center justify-content-start\">
        <div class=\"header_list\">
          <ul class=\"d-flex flex-row align-items-center justify-content-start\">

            <li class=\"d-flex flex-row align-items-center justify-content-start\">
              <div><img src=\"images/phone-call.svg\" alt=\"\"></div>
              <span>+546 990221 123</span>
            </li>

            <li class=\"d-flex flex-row align-items-center justify-content-start\">
              <div><img src=\"images/placeholder.svg\" alt=\"\"></div>
              <span>Main Str, no 23, New York</span>
            </li>

            <li class=\"d-flex flex-row align-items-center justify-content-start\">
              <div><img src=\"images/envelope.svg\" alt=\"\"></div>
              <span><a href=\"mailto:prconsultant.raipur@gmail.com\"
                  style=\"color: white\">prconsultant.raipur@gmail.com</a></span>
            </li>
          </ul>
        </div>
        <div class=\"ml-auto d-flex flex-row align-items-center justify-content-start\">
          <div class=\"social\">
            <ul class=\"d-flex flex-row align-items-center justify-content-start\">
              <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
              <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
              <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
              <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
              <li><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
            </ul>
          </div>
          <!-- <div class=\"log_reg d-flex flex-row align-items-center justify-content-start\">
            <ul class=\"d-flex flex-row align-items-start justify-content-start\">
              <li><a href=\"../logOut.php\">Logout</a></li>
            </ul>
          </div> -->
        </div>
      </div>

      <div class=\"header_content d-flex flex-row align-items-center justify-content-start\">
        <div class=\"logo\"><a href=\"#\">PR<span>Group</span></a></div>
        <nav class=\"main_nav\">
          <ul class=\"d-flex flex-row align-items-start justify-content-start\">
            <li><a href=\"index.php\">Home</a></li>
            <li><a href=\"about.php\">About us</a></li>
            <li><a href=\"listings.php\">Listings</a></li>
            <li><a href=\"contact.php\">Contact</a></li>
          </ul>
        </nav>
        <div class=\"submit ml-auto\"><a href=\"../logOut.php\">Logout</a></div>
        <div class=\"hamburger ml-auto\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></div>
      </div>
    </header>
    <div class=\"menu text-right\">
      <div class=\"menu_close\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>
      <div class=\"menu_log_reg\">
        <div class=\"log_reg d-flex flex-row align-items-center justify-content-end\">
          <ul class=\"d-flex flex-row align-items-start justify-content-start\">
            <li><a href=\"../logOut.php\">Logout</a></li>
          </ul>
        </div>
        <nav class=\"menu_nav\">
          <ul>
            <li><a href=\"index.php\">Home</a></li>
            <li><a href=\"about.php\">About us</a></li>
            <li><a href=\"listings.php\">Listings</a></li>
            <li><a href=\"contact.php\">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>"
?>