<?php
/**
 * Created by JetBrains PhpStorm.
 * User: flint
 * Date: 18/11/11
 * Time: 11:46 AM
 * To change this template use File | Settings | File Templates.
 */

namespace FlintLabs\Bundle\AssetRegistryBundle\Event;

use \FlintLabs\Bundle\AssetRegistryBundle\Services\AssetRegistryServiceInterface;

class JavaScriptsInjectEvent {

    protected $assetRegistryService;

    public function __construct(AssetRegistryServiceInterface $assetRegistryService)
    {
        $this->setAssetRegistryService($assetRegistryService);
    }

    protected function setAssetRegistryService($assetRegistryService)
    {
        $this->assetRegistryService = $assetRegistryService;
    }

    public function getAssetRegistryService()
    {
        return $this->assetRegistryService;
    }

}
