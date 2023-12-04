<?php
/**
 * @var \BaserCore\View\AppView $this
 */
?>
<!doctype html>
<html lang="ja">
  <head>
    <?php $this->BcBaser->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->BcBaser->title() ?>
    <?php $this->BcBaser->metaDescription() ?>
    <?php $this->BcBaser->metaKeywords() ?>
    <?php $this->BcBaser->icon() ?>
    <?php $this->BcBaser->css([
      'ress.min',
      'style',
      'cms',
    ]) ?>
    <?php $this->BcBaser->js([
      'jquery-3.6.0.min',
      'jquery.bxslider.min',
      'style',
      'cms',
    ]); ?>
    <?php $this->BcBaser->scripts() ?>
    <?php $this->BcBaser->googleAnalytics() ?>
  </head>
  <body id="<?php $this->BcBaser->contentsName() ?>">

    <?php $this->BcBaser->func() ?>

    <?php $this->BcBaser->header() ?>

    <?php $this->BcBaser->flash() ?>

    <?php if($this->BcBaser->isHome()): ?>
      <?php $this->BcBaser->element('top_info') ?>
    <?php else: ?>
      <main>
        <article>
          <div class="container">
            <div class="row">
              <div class="col span-12">
                <?php $this->BcBaser->crumbsList(['onSchema' => true]); ?>
                <?php $this->BcBaser->content() ?>
              </div>
            </div>
          </div>
        </article>
      </main>
    <?php endif ?>

    <?php $this->BcBaser->footer() ?>

  </body>
</html>
