[?php slot('title', __('Edit <?php echo sfInflector::humanize($this->getSingularName()) ?>')) ?]

<h1 class="page-header">
  [?php echo __('Edit <?php echo sfInflector::humanize($this->getSingularName()) ?>') ?]
</h1>

[?php include_partial('form', array('form' => $form)) ?]
