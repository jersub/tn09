<?php slot('title', sfOutputEscaper::unescape($title)) ?>
<?php slot('page_section', sfOutputEscaper::unescape($pageSection)) ?>
<?php slot('page_subject', sfOutputEscaper::unescape($pageSubject)) ?>

<?php if (isset($pageDescription)) : ?>
  <?php slot('page_description', sfOutputEscaper::unescape($pageDescription)) ?>
<?php endif ?>

<?php if (isset($formFilter) && isset($widgetActionListFilter)) : ?>
<form class="ey_form_filters" action="<?php echo url_for($sl_configuration->getOption('route_filter')) ?>" method="post">
  <?php include_partial('global/filters', array('filterPartial' => $filterPartial, 'form' => $formFilter, 'widgetActionListFilter' => $widgetActionListFilter)) ?>
</form>
<?php endif ?>

<?php if (isset($newLabel)) : ?>
  <?php include_partial('global/new', array('route' => $sl_configuration->getOption('route_new'), 'label' => $newLabel)) ?>
<?php elseif (isset($createActionsPartial)) : ?>
  <?php include_partial($createActionsPartial, array('sl_configuration' => $sl_configuration)) ?>
<?php endif ?>

<?php if (isset($widgetPager)): ?>
  <?php echo sfOutputEscaper::unescape($widgetPager)->render('pager_top') ?>
<?php endif ?>

<?php if (isset($widgetPagerInfos)): ?>
<div class="eyrtabletitle">
  <?php echo sfOutputEscaper::unescape($widgetPagerInfos)->render('pager_infos') ?>
</div>
<?php endif ?>

<?php if ($widgetTable->getNbData()) : ?>
<form class="ey_form" action="<?php echo url_for(sfOutputEscaper::unescape($sl_configuration)->getOption('route_batch')) ?>" method="post">
  <?php echo sfOutputEscaper::unescape($widgetTable)->render('ey_data') ?>
  <?php if (isset($widgetActionListBatch)) : ?>
    <?php echo sfOutputEscaper::unescape($widgetActionListBatch)->render('action_list_batch') ?>
  <?php endif ?>
</form>
<?php endif ?>