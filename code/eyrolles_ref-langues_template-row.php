<td class="left" id="ey_referential_<?php echo $subject->getId() ?>">
  <a href="<?php echo url_for('eyReferentialLanguage_edit', $subject) ?>">
    <?php echo $subject->getLabel() ?>
  </a>
</td>

<td class="left">
  <?php echo $subject->getCreator() ?>
</td>

<td class="left">
  <?php echo link_to(image_tag('edit.png', array('alt' => '')), 'eyReferentialLanguage_edit', $subject, array('title' => 'Editer ce referentiel')) ?>
  &nbsp;
  <?php echo link_to(image_tag('ico_supprimer.gif', array('alt' => '')), 'eyReferentialLanguage_delete', $subject, array('title' => 'Supprimer', 'method' => 'delete', 'confirm' => ' Etes-vous sur de vouloir supprimer ce referentiel ?')) ?>
</td>
