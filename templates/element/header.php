<?php
/**
 * @var \BaserCore\View\AppView $this
 */
?>
<header>
  <div class="container">
    <div class="row">
      <div class="col span-12">
        <div class="head">
          <h1><?php $this->BcBaser->logo() ?></h1>
          <div class="telbox">TEL：00-0000-0000</div>
          <div id="open"></div>
          <div id="close"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="menu">
    <div class="container">
      <div class="row">
        <div class="col span-12">
          <?php if (\BaserCore\Utility\BcUtil::isInstalled()): ?>
            <?php $this->BcBaser->globalMenu() ?>
          <?php endif ?>
        </div>
      </div>
    </div>
  </div>
</header>
