<?php
/**
 * Created by JetBrains PhpStorm.
 * User: flint
 * Date: 18/11/11
 * Time: 11:25 AM
 * To change this template use File | Settings | File Templates.
 */

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
