<form action="<?php echo $form->getObject()->isNew() ? url_for('eyReferentialLanguage_create') : url_for('eyReferentialLanguage_update', $object) ?>" method="post">
  <?php echo $widgetActionListMain->render() ?>
  <?php include_partial('eyReferentialLanguage/form', array('form' => $form, 'legend' => 'Langue')) ?>
  <?php echo $widgetActionListMain->render() ?>
</form>
