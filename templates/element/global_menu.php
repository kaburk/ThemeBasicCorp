<?php
/**
 * @var \BaserCore\View\BcFrontAppView $this
 */
if (!isset($level)) {
  $level = 1;
}
if (!isset($currentId)) {
  $currentId = null;
}
?>

<nav>
  <div id="navi">
    <?php if (isset($tree)) : ?>
      <ul class="ul-level-<?php echo $level ?><?php echo ($level > 1) ? ' sub-group' : ' bs-global-menu' ?>">
        <?php if (isset($tree)) : ?>
          <?php foreach ($tree as $content) : ?>
            <?php if ($content->title) : ?>
              <?php
              if (!empty($content->exclude_menu)) {
                continue;
              }
              $liClass = 'li-level-' . $level;
              if ($content->id == $currentId || $this->BcBaser->isContentsParentId($currentId, $content->id)) {
                $liClass .= ' current';
              }
              $options = ['class' => 'bs-global-menu-item--link', 'escape' => true];
              if (!empty($content->blank_link)) {
                $options['target'] = '_blank';
              }
              ?>
              <li class="bs-global-menu-item <?php echo $liClass ?>">
                <?php $this->BcBaser->link($content->title, $this->BcBaser->getContentsUrl($content->url, false, null, false), $options) ?>
                <?php if (!empty($content['children'])) : ?>
                  <div class="bs-global-menu-sub">
                    <?php $this->BcBaser->element('contents_menu', ['tree' => $content['children'], 'level' => $level + 1, 'currentId' => $currentId]) ?>
                  </div>
                <?php endif ?>
              </li>
            <?php endif ?>
          <?php endforeach; ?>
        <?php endif ?>
      </ul>
    <?php endif ?>
  </div>
</nav>
