<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.ugu6scy' shared service.

return $this->services['service_locator.ugu6scy'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['paginator' => function () {
    return ${($_ = isset($this->services['knp_paginator']) ? $this->services['knp_paginator'] : $this->load('getKnpPaginatorService.php')) && false ?: '_'};
}, 'repository' => function () {
    $f = function (\App\Repository\TaskRepository $v = null) { return $v; }; return $f(${($_ = isset($this->services['App\Repository\TaskRepository']) ? $this->services['App\Repository\TaskRepository'] : $this->load('getTaskRepositoryService.php')) && false ?: '_'});
}]);
