<?php

namespace FlintLabs\Bundle\AssetRegistryBundle\Event;

use FlintLabs\Bundle\AssetRegistryBundle\Services\AssetRegistryServiceInterface;

class StylesheetsInjectEvent {

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
