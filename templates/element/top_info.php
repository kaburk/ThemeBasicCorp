<?php
/**
 * @var \BaserCore\View\AppView $this
 */
?>
<div class="mainimg">
  <?php $this->BcBaser->mainImage(['all' => true, 'num' => 5]) ?>
</div>

<main>
  <section class="container">
    <?php if (\Cake\Core\Plugin::isLoaded('Banner')): ?>
      <?php $this->Banner->showBanner('TOPバナー', ['template' => 'banner_block_top']); ?>
    <?php else: ?>
      <div class="row">
        <div class="col span-4">
          <figure>
            <?php $this->BcBaser->img('catch.jpg', ['alt'=> 'キャッチ画像']) ?>
            <figcaption>ここにタイトル</figcaption>
          </figure>
        </div>
        <div class="col span-4">
          <figure>
            <?php $this->BcBaser->img('catch.jpg', ['alt'=> 'キャッチ画像']) ?>
            <figcaption>ここにタイトル</figcaption>
          </figure>
        </div>
        <div class="col span-4">
          <figure>
            <?php $this->BcBaser->img('catch.jpg', ['alt'=> 'キャッチ画像']) ?>
            <figcaption>ここにタイトル</figcaption>
          </figure>
        </div>
      </div>
    <?php endif ?>
  </section>

  <section class="container">
    <div class="row">
      <div class="col span-8">
          <?php $this->BcBaser->blogPosts('news', 3) ?>
      </div>
      <div class="col span-4">
        <?php if (\Cake\Core\Plugin::isLoaded('Banner')): ?>
          <?php $this->Banner->showBanner('TOPサイドバナー', ['template' => 'banner_block_top-side']); ?>
        <?php else: ?>
          <?php $this->BcBaser->link($this->BcBaser->getImg('banner.png', ['alt'=> 'バナー画像']), '__DUUMY__', ['escape' => false, 'target' => '_blank']); ?>
          <?php $this->BcBaser->link($this->BcBaser->getImg('banner.png', ['alt'=> 'バナー画像']), '__DUUMY__', ['escape' => false, 'target' => '_blank']); ?>
          <?php $this->BcBaser->link($this->BcBaser->getImg('banner.png', ['alt'=> 'バナー画像']), '__DUUMY__', ['escape' => false, 'target' => '_blank']); ?>
          <p> ※ バナー関連は、バナープラグインが公開されたら管理画面からバナー管理できるようにすると良さそうです。</p>
        <?php endif ?>
      </div>
    </div>
  </section>

  <section class="container">
    <?php $this->BcBaser->content() ?>
  </section>
</main>
