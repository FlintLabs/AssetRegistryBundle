<?php
/**
 * Created by JetBrains PhpStorm.
 * User: flint
 * Date: 18/11/11
 * Time: 11:21 AM
 * To change this template use File | Settings | File Templates.
 */

namespace FlintLabs\Bundle\AssetRegistryBundle\Twig\Extension;

use Twig_Extension as Extension;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class AssetRegistryExtension extends Extension
{
    private $eventDispatcher;

    public function __construct(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    public function getFunctions()
    {
        // do something there or here as the case maybe


    }

    public function renderStylesheets($documentType = 'html5')
    {
        // TODO: Create event, use dispatcher, throw something, service, all that shit.
    }

    public function renderJavaScripts($documentType = 'html5')
    {
        // TODO: Create event, use dispatcher, throw something, service, all that shit.
    }

}


