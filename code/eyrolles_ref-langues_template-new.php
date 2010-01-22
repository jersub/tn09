<?php slot('title', $sl_configuration->getPageTitle()) ?>
<?php slot('page_section', $sl_configuration->getPageSection()) ?>
<?php slot('page_subject', $form->getObject()->isNew() ? 'Création' : 'Édition') ?>

<?php if (!$form->getObject()->isNew()): ?>
  <?php include_partial('global/new', array('route' => $sl_configuration->getOption('route_new'), 'label' => 'Nouveau')) ?>
<?php endif ?>

<form action="<?php echo $form->getObject()->isNew() ? url_for($sl_configuration->getPagePrefixRoute().'_create') : url_for($sl_configuration->getPagePrefixRoute().'_update', $object) ?>" method="post">
  <?php echo sfOutputEscaper::unescape($widgetActionListMain)->render('action_new_top') ?>
  <?php include_partial('eyReferentialBase/form', array('form' => $form, 'legend' => $sl_configuration->getPageLegend())) ?>
  <?php echo sfOutputEscaper::unescape($widgetActionListMain)->render('action_new_bottom') ?>
</form>
