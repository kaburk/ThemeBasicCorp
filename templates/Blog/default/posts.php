<?php
/**
 * @var \BaserCore\View\BcFrontAppView $this
 * @var \BcBlog\View\BlogFrontAppView $this
 * @var \Cake\ORM\ResultSet $posts
 */
?>
<div class="<?php echo h($this->Blog->getBlogName()) ?>">
  <h2>
    <?php echo h($this->BcBaser->getBlogTitle()) ?>
  </h2>
  <ul>
    <?php if ($posts->count()): ?>
      <?php foreach($posts as $key => $post): ?>
        <li>
          <a href="<?php echo $this->BcBaser->getBlogPostLinkUrl($post) ?>">
            <?php $this->BcBaser->blogPostDate($post, 'Y.m.d') ?>　<?php $this->BcBaser->blogPostTitle($post, false) ?>
          </a>
        </li>
      <?php endforeach ?>
    <?php else: ?>
      <li class="no-data">
          <?php echo __d('baser_core', '記事がありません。'); ?>
      </li>
    <?php endif ?>
  </ul>
</div>
