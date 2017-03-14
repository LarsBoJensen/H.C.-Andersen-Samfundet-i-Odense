<article class="article">

  <?php include('article-navigation-top.tpl.php') ?>

  <header class="article__header">

    <section class="article__header-tags">
      <label class="ghost-label-blue"><a href="#">Labletitle</a></label>
      <label class="ghost-label-blue"><a href="#">Labletitle 2</a></label>
      <label class="ghost-label-blue"><a href="#">Labletitle 3</a></label>
    </section>

    <hgroup class="article-header__hgroup">
      <h2 class="kicker">Lorem Ipsum dolor sit amor</h2>
      <h1 class="headline">Chancenungleichheit durch SU-Einsparungen befürchtet</h1>
    </hgroup>

    <section class="publishing-informations">

      <?php include('content/author-small.tpl.php'); ?>

      <div class="publishing-informations__time">
        <time>05. September 2016</time><span class="location-mark">Kopenhagen</span>
        <div class="published">
          Zuletzt Aktuallisiert um: <time>10:29 Uhr</time>
        </div>
      </div>
      <div class="publishing-informations__share">
        <?php include('content/share.tpl.php'); ?>
      </div>
    </section>

  </header>

  <main class="article__main-content">
<!--    --><?php //include('content/author.tpl.php'); ?>
    <?php include('content/component-image.tpl.php'); ?>
    <?php include('content/component-text.tpl.php'); ?>
    <?php include('content/aside-teaser.tpl.php'); ?>
    <?php include('content/component-text.tpl.php'); ?>
    <?php include('content/component-text-blockquote.tpl.php'); ?>
    <?php include('content/component-text-interview.tpl.php'); ?>
    <?php include('content/aside-teaser.tpl.php'); ?>
    <?php include('content/component-text.tpl.php'); ?>
    <?php include('content/component-text-blockquote-right.tpl.php'); ?>
    <?php include('content/component-text.tpl.php'); ?>
  </main>

  <?php include('article-navigation-bottom.tpl.php') ?>

</article>

<?php include_once('component-teaser-group.tpl.php') ?>