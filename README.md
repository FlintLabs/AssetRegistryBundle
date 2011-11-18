# Flint Labs Asset Registry Bundle #

The AssetRegistryBundle facilitates parts of your application to register javascript and stylesheet dependencies to be referenced in your Symfony2 application.

This creates a standard location for bundle developers to register their javascript/stylesheets to inclusion in twig, without requiring the user to manage installing them into their twig header dependent on which bundles are in use.

The standard registry will enable other bundles to be developed with a standard way of managing asset dependency.


## *Don't use just yet...* ##

## Installation ##

Add to your dependencies:

    [FlintLabsAssetRegistryBundle]
        git=http://github.com/FlintLabs/AssetRegistryBundle.git
        target=/bundles/FlintLabs/Bundle/AssetRegistryBundle
        
and run in the root of your project:

    php bin/vendors install

Add the autoload paths to your bundles in AppKernel.php

    new FlintLabs\Bundle\AssetRegistryBundle\FlintLabsAssetRegistryBundle()
    
## Usage ##

Coming soon...

## To Do List ##

- Coming soon...