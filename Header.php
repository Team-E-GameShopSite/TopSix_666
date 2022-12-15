<div class="header">
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="kaihatuTOP.php">
        <img src="img/TopSix.png" alt="" width="85" height="70">
      </a>
      <form class="d-flex" action="kaihatuITIRAN.php">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-secondary me-2" type="submit"><i class="bi bi-search"></i>Search</button>
        <?php
          require_once 'dao/DBManager.php';
          $dbmng = new DBManager();
          $searchList = $dbmng->GetItemInfoForCartsByUserId($_SESSION['user_id']);
        echo "<a href='kaihatuCART.php'><button class='btn btn-outline-primary me-2' type='button'><i class='bi bi-cart'></i>cart:";
        if (isset($_SESSION['user_id']) == true) {
          echo "count($searchList)" . "</button></a>";
        } else {
          echo "</button></a>";
        } 
        ?>
         <?php
    require_once 'dao/DBManager.php';
    $dbmng = new DBManager();
    $searchArray = $dbmng->GetItemInfoForFavoritesByUserId($_SESSION['user_id']);
        echo "<a href='kaihatuOKINIIRI.php'><button class='btn btn-outline-primary me-2' type='button'><i class='bi bi-star'></i>favorite:" . count($searchArray) . "</button></a>";
        ?>
        <a href="kaihatuLOGIN.php"><button class="btn btn-outline-primary me-2" type="button"><i class="bi bi-person-circle"></i>
            <?php

            if (isset($_SESSION['user_id']) == false) {
              echo "Login";
            } else {
              echo "MyPage";
            }

            ?>
          </button></a>
      </form>
    </div>
  </nav>
</div>
