[?php slot('title', __('Show <?php echo sfInflector::humanize($this->getSingularName()) ?>')) ?]

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">[?php echo __('Show <?php echo sfInflector::humanize($this->getSingularName()) ?>') ?]</h3>
  </div>
  <div class="panel-body">
	<table class="table table-bordered">
	  <tbody>
	  <?php foreach ($this->getColumns() as $column): ?>
	  <tr>
		  <th scope="row">[?php echo __('<?php echo sfInflector::humanize(sfInflector::underscore($column->getPhpName())) ?>') ?]:</th>
		  <td>[?php echo $<?php echo $this->getSingularName() ?>->get<?php echo sfInflector::camelize($column->getPhpName()) ?>() ?]</td>
		</tr>
	  <?php endforeach ?></tbody>
	</table>
	<div class="btn-toolbar">
	  <div class="btn-group">
	<?php if (isset($this->params['route_prefix']) && $this->params['route_prefix']): ?>
		<a href="[?php echo url_for('<?php echo $this->getUrlForAction('edit') ?>', $<?php echo $this->getSingularName() ?>) ?]" class="btn btn-primary">[?php echo __('Edit') ?]</a>
	  </div>
	  <div class="btn-group">
		<a href="[?php echo url_for('<?php echo $this->getUrlForAction('list') ?>') ?]" class="btn btn-default">[?php echo __('Back to List') ?]</a>
	  <?php else: ?>
		<a href="[?php echo url_for('<?php echo $this->getModuleName() ?>/edit?<?php echo $this->getPrimaryKeyUrlParams() ?>) ?]" class="btn btn-primary">[?php echo __('Edit') ?]</a>
	  </div>
	  <div class="btn-group">
		<a href="[?php echo url_for('<?php echo $this->getModuleName() ?>/index') ?]" class="btn btn-default">[?php echo __('Back to List') ?]</a>
	  <?php endif ?>
	</div>
	</div>
  </div>
</div>




