
 <!-- Html way

     <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link page-scroll" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#about">TEAM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#courses">MENU</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#contact">CONTACT</a>
          </li>


    </ul>
-->



  <ul class="navbar-nav">
      <?php
            //looping throught nav items
            foreach ($navItems as $item) {
              echo "<li class='nav-item'> <a class='nav-link' href=\"$item[slug]\"> $item[title]</a></li>";
               
          }
      ?> 

</ul>
