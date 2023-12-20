<?php
/**
 * @var \BaserCore\View\BcFrontAppView $this
 */
if (!isset($separator)) {
	$separator = '&nbsp;&gt;&nbsp;';
}
if (!isset($home)) {
	$home = __d('baser_core', 'ホーム');
}
$crumbs = $this->BcBaser->getCrumbs();
if (!empty($crumbs)) {
	foreach($crumbs as $key => $crumb) {
		if ($this->BcArray->last($crumbs, $key)) {
			if ($crumb['name']) {
				$this->BcBaser->addCrumb(h($crumb['name']));
			}
		} else {
			$this->BcBaser->addCrumb(h($crumb['name']), $crumb['url']);
		}
	}
} elseif (empty($crumbs)) {
	if ($this->name == 'CakeError') {
		$this->BcBaser->addCrumb('404 NOT FOUND');
	}
}
?>

<div class="breadcrumb">
	<?php if (empty($onSchema)): ?>
		<?php
		if ($this->BcBaser->isHome()) {
			echo $home;
		} else {
			$this->BcBaser->crumbs($separator, $home);
		}
		?>
	<?php else: ?>
		<ul itemscope itemtype="https://schema.org/BreadcrumbList">
			<?php if ($this->BcBaser->isHome()): ?>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span
						itemprop="name"><?php echo $home ?></span>
					<meta itemprop="position" content="1"/>
				</li>
			<?php else: ?>
				<?php $this->BcBaser->crumbs($separator, $home, true) ?>
			<?php endif ?>
		</ul>
	<?php endif ?>
</div>
