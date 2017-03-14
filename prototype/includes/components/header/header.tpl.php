<header class="page__header">
  <div class="page__header--inner">

    <div class="header__site-branding">
      <a href="/" title="Startsiden">
        <div class="header__organisation-logo">
          <img src="images/logo-bright.png" alt="Buste af H.C. Andersen" role="navigation" />
        </div>
        <div class="header__organisation-name">H.C. Andersen-Samfundet i Odense</div>
      </a>
    </div>

    <div class="page__navigation">
      <div class="page__navigation--inner">
        <!--        <input type="checkbox" class="header_navigation--burgermenu" id="open-menu">-->
        <!--        <label class="header_navigation--burgermenu-ico" for="open-menu"></label>-->
        <?php include('includes/components/header/header-navigation.tpl.php'); ?>
        <?php include('includes/components/header/searchbox.php') ?>
        <?php include('includes/components/header/user_menu.php') ?>
      </div>
    </div>

  </div>

</header>
