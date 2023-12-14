<?php if ($bannerDatas->count()): ?>
  <div class="row">
    <?php foreach ($bannerDatas as $i => $bannerData): ?>
      <div class="col span-4">
        <figure>
          <?php if ($bannerData->url): ?>
            <?php if ($bannerData->blank): ?>
              <a href="<?php echo h($bannerData->url) ?>" target="_blank">
                <?php $this->BcBaser->img($bannerData->name, ['alt'=> h($bannerData->alt)]) ?>
                <?php if ($this->Banner->getDescription($bannerData)): ?>
                  <figcaption><?php $this->Banner->showDescription($bannerData) ?></figcaption>
                <?php endif ?>
              </a>
            <?php else: ?>
              <a href="<?php echo h($bannerData->url) ?>">
                <?php $this->BcBaser->img($bannerData->name, ['alt'=> h($bannerData->alt)]) ?>
                <?php if ($this->Banner->getDescription($bannerData)): ?>
                  <figcaption><?php $this->Banner->showDescription($bannerData) ?></figcaption>
                <?php endif ?>
              </a>
            <?php endif ?>
          <?php else: ?>
            <?php $this->BcBaser->img($bannerData->name, ['alt'=> h($bannerData->alt)]) ?>
            <?php if ($this->Banner->getDescription($bannerData)): ?>
              <figcaption><?php $this->Banner->showDescription($bannerData) ?></figcaption>
            <?php endif ?>
          <?php endif ?>
        </figure>
      </div>
      <?php if ($i % 3 == 2): ?>
        </div>
        <div class="row">
      <?php endif ?>
    <?php endforeach ?>
  </div>
<?php endif ?>
