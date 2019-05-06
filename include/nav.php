
  <ul class="navbar-nav">
      <?php
            //looping throught nav items
            foreach ($navItems as $item) {
              echo "<li class='nav-item'> <a class='nav-link' href=\"$item[slug]\"> $item[title]</a></li>";
               
          }
      ?> 

</ul>
