[?php use_stylesheets_for_form($form) ?]
[?php use_javascripts_for_form($form) ?]

<?php $form = $this->getFormObject() ?>
<?php if (isset($this->params['route_prefix']) && $this->params['route_prefix']): ?>
[?php echo form_tag_for($form, '@<?php echo $this->params['route_prefix'] ?>') ?]
<?php else: ?>
<form action="[?php echo url_for('<?php echo $this->getModuleName() ?>/'
  . ($form->getObject()->isNew() ? 'create' : 'update')
  . (!$form->getObject()->isNew() ? '?<?php echo $this->getPrimaryKeyUrlParams('$form->getObject()', true) ?> : ''))
  ?]" method="post" [?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?]>
<?php endif;?>

<?php if (isset($this->params['non_verbose_templates']) && $this->params['non_verbose_templates']): ?>
  [?php echo $form->renderUsing('bootstrap') ?]
<?php else: ?>
  [?php echo $form->renderGlobalErrors() ?]

<?php foreach ($form as $name => $field): if ($field->isHidden()) continue ?>
  <div class="control-group[?php if ($form['<?php echo $name ?>']->hasError()): ?] error[?php endif ?]">
    [?php echo $form['<?php echo $name ?>']->renderLabel(null, array('class' => 'control-label')) ?]
    <div class="controls">
      [?php echo $form['<?php echo $name ?>']->render() ?]
      [?php if ($form['<?php echo $name ?>']->hasError()): ?]<div class="help-inline">[?php echo $form['<?php echo $name ?>']->getError() ?]</div>[?php endif ?]
    </div>
  </div>
<?php endforeach; ?>
<?php endif; ?>

  <?php if (!isset($this->params['non_verbose_templates']) || !$this->params['non_verbose_templates']): ?>
[?php echo $form->renderHiddenFields(false) ?]
  <?php endif; ?>
[?php if (!$form->getObject()->isNew()): ?]
    <input type="hidden" name="sf_method" value="put" />
  [?php endif ?]

  <div class="form-actions">
    <button type="submit" class="btn btn-primary">Save</button>
  <?php if (isset($this->params['route_prefix']) && $this->params['route_prefix']): ?>
    <a href="[?php echo url_for('<?php echo $this->getUrlForAction('list') ?>') ?]" class="btn">Back to list</a>
<?php else: ?>
  <a href="[?php echo url_for('<?php echo $this->getModuleName() ?>/index') ?]" class="btn">Back to list</a>
<?php endif; ?>

    [?php if (!$form->getObject()->isNew()): ?]
<?php if (isset($this->params['route_prefix']) && $this->params['route_prefix']): ?>
      [?php echo link_to('Delete', '<?php echo $this->getUrlForAction('delete') ?>', $form->getObject(), array('method' => 'delete', 'confirm' => 'Are you sure?', 'class' => 'btn btn-warning pull-right')) ?]
<?php else: ?>
      [?php echo link_to('Delete', '<?php echo $this->getModuleName() ?>/delete?<?php echo $this->getPrimaryKeyUrlParams('$form->getObject()', true) ?>, array(
        'method' => 'delete',
        'confirm' => 'Are you sure?',
        'class' => 'btn btn-warning pull-right',
      )) ?]
<?php endif; ?>
    [?php endif ?]
  </div>
</form>
