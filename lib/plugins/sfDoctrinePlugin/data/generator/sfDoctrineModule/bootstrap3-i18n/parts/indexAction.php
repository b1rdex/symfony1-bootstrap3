  public function executeIndex(sfWebRequest $request)
  {
<?php if (isset($this->params['with_doctrine_route']) && $this->params['with_doctrine_route']): ?>
    $this-><?php echo $this->getPluralName() ?> = $this->getRoute()->getObjects();
<?php else: ?>
    $this-><?php echo $this->getPluralName() ?> = Doctrine_Query::create()
      ->from('<?php echo $this->getModelClass() ?> <?php echo strtolower(substr($this->getModelClass(), 0, 1)) ?>')
      ->execute()
    ;
<?php endif; ?>
  }
