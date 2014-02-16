[?php slot('title', __('<?php echo sfInflector::humanize($this->getPluralName()) ?> List')) ?]

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">[?php echo __('<?php echo sfInflector::humanize($this->getPluralName()) ?> List') ?]</h3>
  </div>
  <div class="panel-body">
    <table class="table table-condensed table-bordered table-hover">
	  <thead>
		<tr>
	<?php foreach ($this->getColumns() as $column): ?>
		  <th>[?php echo __('<?php echo sfInflector::humanize(sfInflector::underscore($column->getPhpName())) ?>') ?]</th>
	<?php endforeach; ?>
		</tr>
	  </thead>
	  <tbody>[?php foreach ($<?php echo $this->getPluralName() ?> as $<?php echo $this->getSingularName() ?>): ?]
		<tr>
	<?php foreach ($this->getColumns() as $column): ?>
	<?php if ($column->isPrimaryKey()): ?>
	  <?php if (isset($this->params['route_prefix']) && $this->params['route_prefix']): ?>
		<td><a href="[?php echo url_for('<?php echo $this->getUrlForAction(isset($this->params['with_show']) && $this->params['with_show'] ? 'show' : 'edit') ?>', $<?php echo $this->getSingularName() ?>) ?]">[?php echo $<?php echo $this->getSingularName() ?>->get<?php echo sfInflector::camelize($column->getPhpName()) ?>() ?]</a></td>
	  <?php else: ?>
		<td><a href="[?php echo url_for('<?php echo $this->getModuleName() ?>/<?php echo isset($this->params['with_show']) && $this->params['with_show'] ? 'show' : 'edit' ?>?<?php echo $this->getPrimaryKeyUrlParams() ?>) ?]">[?php echo $<?php echo $this->getSingularName() ?>->get<?php echo sfInflector::camelize($column->getPhpName()) ?>() ?]</a></td>
	  <?php endif; ?>
	<?php else: ?>
	  <?php if ($column->getType() == 'CLOB'): ?>
	  <td>[?php echo truncate_text($<?php echo $this->getSingularName() ?>->get<?php echo sfInflector::camelize($column->getPhpName()) ?>(), 800) ?]</td>
	  <?php else: ?>
	  <td>[?php echo $<?php echo $this->getSingularName() ?>->get<?php echo sfInflector::camelize($column->getPhpName()) ?>() ?]</td>
	  <?php endif; ?>
	<?php endif; ?>
	<?php endforeach; ?>
	  </tr>
	  [?php endforeach; ?]</tbody>
	</table>
	<?php if (isset($this->params['route_prefix']) && $this->params['route_prefix']): ?>
		<a href="[?php echo url_for('<?php echo $this->getUrlForAction('new') ?>') ?]" class="btn btn-primary">[?php echo __('New') ?]</a>
	<?php else: ?>
		<a href="[?php echo url_for('<?php echo $this->getModuleName() ?>/new') ?]" class="btn btn-primary">[?php echo __('New') ?]</a>
	<?php endif; ?>
  </div>
</div>


