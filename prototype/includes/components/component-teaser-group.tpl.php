
<?php for($c=0; $c<4; $c++): ?>
  <div class="teaser-group__headline">
    <span><a href="#">Kategorie / Milieu</a></span>
  </div>

<section class="teaser-group__container">

  <!-- Component-Teaser BIG -->
  <article class="teaser-group__big-teaser">
    <a href="/article.php">

      <figure class="teaser__image--big">
        <img src="images/big-teaser.jpg" />
      </figure>

      <header class="teaser__header">
        <hgroup class="teaser__headline-group--big">
          <h2 class="kicker">Wie sicher ist Ihr Kind?</h2>
          <h1 class="headline">Politische Mehrheit wünscht Verschärfung der Kinderattest-Regeln</h1>
        </hgroup>
        <p class="teaser__text">
          <span class="teaser__location">Kopenhagen</span>
          Der Fall aus Nyborg, wo eine 21-Jährige und ein 31-Jähriger wegen
          Missbrauchs von acht Kindern im Theaterbereich angeklagt sind, erschüttert ganz Dänemark.
        </p>
      </header>

    </a>
  </article>

  <!-- Component-Teaser SMALL -->
  <?php for($i=0; $i<4; $i++): ?>
  <article class="teaser-group__small-teaser">
      <a href="/article.php">

        <hgroup class="teaser__headline-group--small">
          <h4 class="kicker">Wie sicher ist Ihr Kind?</h4>
          <h3 class="headline">Politische Mehrheit wünscht Verschärfung der Kinderattest-Regeln</h3>
        </hgroup>

        <p class="teaser__text">
        <span class="teaser__location">
          Kopenhagen
        </span>
          Der Fall aus Nyborg, wo eine 21-Jährige und ein 31-Jähriger wegen
          Missbrauchs von acht Kindern im Theaterbereich angeklagt sind, erschüttert ganz Dänemark.
        </p>
      </a>
    </article>
  <?php endfor; ?>

  <!-- Component-Teaser LIST -->
  <?php for($f=0; $f<4; $f++): ?>
  <article class="teaser-group__list-teaser">
    <a href="/article.php">

      <figure class="teaser__image--list">
        <img src="images/list-teaser.jpg" />
      </figure>

      <hgroup class="teaser__headline-group--list">
        <h4 class="kicker">Wie sicher ist Ihr Kind?</h4>
        <h3 class="headline">Politische Mehrheit wünscht Verschärfung der Kinderattest-Regeln</h3>
      </hgroup>

      <p class="teaser__text">
        <span class="teaser__location">
          Kopenhagen
        </span>
        Der Fall aus Nyborg, wo eine 21-Jährige und ein 31-Jähriger wegen
        Missbrauchs von acht Kindern im Theaterbereich angeklagt sind, erschüttert ganz
      </p>
    </a>
  </article>
  <?php endfor; ?>
</section>

  <?php include('includes/components/ads/topbanner.tpl.php') ?>

<?php endfor; ?>
