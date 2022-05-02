<?php
require 'connected.php';
?>


<header>
    <div class="header">
      <div class="header_menu">
        <button class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
          aria-controls="offcanvasBottom"><span class="iconify" data-icon="ci:menu-alt-02" data-width="20"
            data-height="20" data-flip="horizontal" style="color: white;"></span></button>

        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom"
          aria-labelledby="offcanvasBottomLabel">
          <div class="offcanvas-header">

            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body small">

            <div class="dropdown">
              <button class="btn  " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false">
                PRODUITS
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="">VELOS</a></li>
                <li><a class="dropdown-item" href="">EQUIPEMENT</a></li>
                <li><a class="dropdown-item" href="">COMPOSANT ET ACCESSOIRE**</a></li>
                  <?php if(admin()): ?>

                      <li><a class="dropdown-item" href="<?= ROOT_URL?>/insertion">AJOUT PRODUIT</a></li>
                  <?php endif ?>
              </ul>
            </div>
            <div class="dropdown">
              <button class="btn  " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false">
                SERVICE
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="">SUPPORT</a></li>
                <li><a class="dropdown-item" href="">FAQ</a></li>
                <li><a class="dropdown-item" href="">PAIEMENT ET EXPEDITION</a></li>
                <li><a class="dropdown-item" href="">CONTACT</a></li>

              </ul>
            </div>
            <div class="dropdown">
              <button class="btn  " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false">
                JITENSHA**
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="">TECHNOLOGIE</a></li>
                <li><a class="dropdown-item" href="">TEMOIGNAGE</a></li>
                <li><a class="dropdown-item" href="">PRESSE</a></li>
                <li><a class="dropdown-item" href="">OÙ ACHETER ?</a></li>
              </ul>
            </div>
            <div class="dropdown">
              <button class="btn  " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false">
                MON COMPTE
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                  <?php if(connecte()): ?>
                      <li><a class="dropdown-item" href="">Profile</a></li>
                      <li><a class="dropdown-item" href="/app/html/deconnexion.php">Déconnexion</a></li>
                  <?php endif ?>
                  <?php if(admin()): ?>
                      <a class="dropdown-item" href="<?= ROOT_URL?>/Gestion_membre">Gestion des membres</a></li>
                  <?php endif ?>
                  <?php if(!connecte()): ?>

                      <li><a class="dropdown-item" href="<?= ROOT_URL?>/login">Connexion</a></li>
                  <?php endif ?>

              </ul>
            </div>


          </div>
        </div>
      </div>
      <!-- <div class="header_close">
                <span class="iconify" data-icon="ant-design:close-outlined"></span>
                <span>FERMER</span>
            </div> -->
      <a href="<?= ROOT_URL?>/home" class="header_logo"><img src="<?= $logo?>" alt=""></a>
      <div class="header_menu icons_menu">


      <!-- DARK MODE LIGHT MODE -->


          <a href=""><span class="iconify" data-icon="bi:search"></span></a>
          <?php if(connecte()): ?>
             <a class="iconify" href="/app/html/deconnexion.php"><span class="iconify" data-icon="fluent:presence-offline-12-regular"></span></a>
          <?php endif ?>
          <?php if(!connecte()): ?>
              <a href="<?= ROOT_URL?>login"><span class="iconify" data-icon="codicon:account"></span></a>
          <?php endif ?>
          <a href=""><span class="iconify" data-icon="grommet-icons:shop"></span></a>
      </div>
    </div>
  </header>
