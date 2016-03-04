<?php
use Lcobucci\ActionMapper2\DependencyInjection\Container;

$builder = new Container();

return $builder->getContainer(require __DIR__ . '/di-config.php');
