<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.nu.ptc6' shared service.

return $this->services['service_locator.nu.ptc6'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['repository' => function () {
    $f = function (\App\Repository\CategoryRepository $v = null) { return $v; }; return $f(${($_ = isset($this->services['App\Repository\CategoryRepository']) ? $this->services['App\Repository\CategoryRepository'] : $this->load('getCategoryRepositoryService.php')) && false ?: '_'});
}]);
