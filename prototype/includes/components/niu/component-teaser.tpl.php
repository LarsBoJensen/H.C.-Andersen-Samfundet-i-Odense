<section class="component-teaser">

  <hgroup class="component-teaser__headline-group">
    <h1>Headline Teaser-Group</h1>
    <h2>Subline Teaser-Group</h2>
  </hgroup>

  <div class="component-teaser--inner">

    <?php for($i=0; $i<8; $i++): ?>

    <article class="component-teaser__article-teaser">
      <figure class="component-teaser__image">
        <img src="images/teaser.jpg" />
      </figure>
      <h2 class="component-teaser__headline">
        TEASER HEADLINE
      </h2>
      <p class="component-teaser__text">
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
        sed diam nonumy eirmod tempor invidunt ut labore.
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
        sed diam nonumy eirmod tempor invidunt ut labore.
      </p>
      <a href="#" class="button">Weiterlesen</a>
    </article>

    <?php endfor; ?>

  </div>
</section>