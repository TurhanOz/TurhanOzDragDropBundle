# Description
This bundle aims to understand Drag&Drop combined to SF2

# Installation
## Process
This bundle could be added to your project thanks to composer
- get an SF2 sandbox
- inside composer.json, add the following line into the "require" bloc
"turhanoz/TurhanOzDragDropBundle": "dev-master"
- add also (at the same level as "require" )
"repositories": [
        {
            "type": "vcs",
            "url":  "https://github.com/TurhanOz/TurhanOzDragDropBundle.git"
        }
    ],

- then, simply execute 
$ php composer.phar update
$ php composer.phar install
- don't forget to register the bundle into the AppKernel
new TurhanOz\DragDropBundle\TurhanOzDragDropBundle(),

- finally, add routes into app/config/routing.yml
turhan_oz_drag_drop:
    resource: "@TurhanOzDragDropBundle/Controller"
    type:     annotation
    prefix:   /

## Dependencies
### Doctrine Data Fixtures
To have some preloaded data, Use Doctrine Data Fixtures Extension (installation process: http://symfony.com/doc/master/bundles/DoctrineFixturesBundle/index.html).
Once the extension installed, simply execute:
$ php app/console doctrine:fixtures:load

## Assets
$ php app/console assets:install web

