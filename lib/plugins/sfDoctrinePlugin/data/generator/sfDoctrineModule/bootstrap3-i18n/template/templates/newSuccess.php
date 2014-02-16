[?php slot('title', __('New <?php echo sfInflector::humanize($this->getSingularName()) ?>')) ?]

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">[?php echo __('New <?php echo sfInflector::humanize($this->getSingularName()) ?>') ?]</h3>
  </div>
  <div class="panel-body">
	[?php include_partial('form', array('form' => $form)) ?]
  </div>
</div>
