<?php if ($bannerDatas->count()): ?>
  <?php foreach ($bannerDatas as $i => $bannerData): ?>
    <?php if ($bannerData->url): ?>
      <?php if ($bannerData->blank): ?>
        <a href="<?php echo h($bannerData->url) ?>" target="_blank">
          <?php $this->BcBaser->img($bannerData->name, ['alt'=> h($bannerData->alt)]) ?>
        </a>
      <?php else: ?>
        <a href="<?php echo h($bannerData->url) ?>">
          <?php $this->BcBaser->img($bannerData->name, ['alt'=> h($bannerData->alt)]) ?>
        </a>
      <?php endif ?>
    <?php else: ?>
      <?php $this->BcBaser->img($bannerData->name, ['alt'=> h($bannerData->alt)]) ?>
    <?php endif ?>
  <?php endforeach ?>
<?php endif ?>
