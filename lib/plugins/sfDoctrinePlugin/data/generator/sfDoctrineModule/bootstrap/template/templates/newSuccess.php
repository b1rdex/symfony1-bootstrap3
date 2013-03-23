<h1 class="page-header">
  New <?php echo sfInflector::humanize($this->getSingularName()) . "\n" ?>
</h1>

[?php include_partial('form', array('form' => $form)) ?]
