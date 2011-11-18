<?php

namespace FlintLabs\Bundle\AssetRegistryBundle\Services;

// TODO: Add DocBlocks

interface AssetRegistryServiceInterface
{

    public function addJavaScriptFile ($file);
    // TODO: Add Remove
    public function addJavaScriptAsset ($assetReference);
    // TODO: Add Remove
    public function getJavaScriptBlock ($key);
    public function setJavaScriptBlock ($key, $block);
    public function addStylesheetFile ($file);
    // TODO: Add Remove
    public function addStylesheetAsset ($assetReference);
    // TODO: Add Remove
    public function getStylesheetBlock ($key);
    public function setStylesheetBlock ($key, $block);

}
