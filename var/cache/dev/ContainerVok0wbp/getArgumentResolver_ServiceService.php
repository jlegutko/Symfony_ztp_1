<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->services['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(['App\\Controller\\TaskController:index' => function () {
    return ${($_ = isset($this->services['service_locator.ugu6scy']) ? $this->services['service_locator.ugu6scy'] : $this->load('getServiceLocator_Ugu6scyService.php')) && false ?: '_'};
}, 'App\\Controller\\TestController:index' => function () {
    return ${($_ = isset($this->services['service_locator.fxnbasy']) ? $this->services['service_locator.fxnbasy'] : $this->load('getServiceLocator_FxnbasyService.php')) && false ?: '_'};
}, 'App\\Controller\\TestController:view' => function () {
    return ${($_ = isset($this->services['service_locator.fxnbasy']) ? $this->services['service_locator.fxnbasy'] : $this->load('getServiceLocator_FxnbasyService.php')) && false ?: '_'};
}, 'App\\Controller\\TaskController::index' => function () {
    return ${($_ = isset($this->services['service_locator.ugu6scy']) ? $this->services['service_locator.ugu6scy'] : $this->load('getServiceLocator_Ugu6scyService.php')) && false ?: '_'};
}, 'App\\Controller\\TestController::index' => function () {
    return ${($_ = isset($this->services['service_locator.fxnbasy']) ? $this->services['service_locator.fxnbasy'] : $this->load('getServiceLocator_FxnbasyService.php')) && false ?: '_'};
}, 'App\\Controller\\TestController::view' => function () {
    return ${($_ = isset($this->services['service_locator.fxnbasy']) ? $this->services['service_locator.fxnbasy'] : $this->load('getServiceLocator_FxnbasyService.php')) && false ?: '_'};
}]));