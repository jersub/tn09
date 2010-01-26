<?php echo $widgetPager->render() ?>

<div class="eyrtabletitle">
  <?php echo $widgetPagerInfos->render() ?>
</div>

<form class="ey_form" action="<?php echo url_for('eyReferentialLanguage_batch') ?>" method="post">
  <?php echo $widgetTable->render() ?>
  <?php echo $widgetActionListBatch->render() ?>
</form>