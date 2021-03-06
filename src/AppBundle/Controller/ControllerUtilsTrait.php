<?php

namespace AppBundle\Controller;

trait ControllerUtilsTrait
{
    public static $flashSuccess = 'success';
    public static $flashInfo = 'info';
    public static $flashWarning = 'warning';
    public static $flashDanger = 'danger';

    protected function flashMessage($type, $message = null)
    {
        $supportedTypes = [self::$flashSuccess, self::$flashInfo, self::$flashWarning, self::$flashDanger];
        if (!in_array($type, $supportedTypes)) {
            throw new \LogicException(sprintf('""%s" type is not supported'));
        }
        if (!$this->container->has('session')) {
            throw new \LogicException('You can not use the addFlash method if sessions are disabled.');
        }
        if (!$message) {
            $message = $this->get('translator')->trans('flash.'.$type.'.message', [], 'common');
        }

        $this->container->get('session')->getFlashBag()->add($type, $message);
    }
}
