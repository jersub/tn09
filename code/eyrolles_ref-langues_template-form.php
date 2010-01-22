<div class="bloc_fiche">
  <fieldset>
    <legend><?php echo sfOutputEscaper::unescape($legend) ?></legend>
    <table>
      <?php echo $form ?>
      <?php include_partial('global/hiddenMethodField', array('form' => $form)) ?>
    </table>
  </fieldset>
</div>