## Installation
Make sure that you have installed symfony bundles `admin` and `webpack`.
Install package:
```
$ composer require yaroslavche/easyadminlte
$ yarn install --force
```
Add `easyadminlte` Webpack Encore entry to `webpack.config.js`:
```js
# webpack.config.js
Encore
    // ...
    .addEntry('easyadminlte', './vendor/yaroslavche/easyadminlte/src/Resources/assets/dist/easyadminlte.js')
```
Build assets
```shell
$ yarn watch
```
Override template and add webpack entry
```php
# src/Controller/Admin/DashboardController.php
class DashboardController extends AbstractDashboardController
{
    public function configureCrud(): Crud
    {
        return parent::configureCrud()
            ->overrideTemplate('layout', '@EasyAdminLTE/layout.html.twig');
    }

    public function configureAssets(): Assets
    {
        return parent::configureAssets()
            ->addWebpackEncoreEntry('easyadminlte');
    }
}
```

## Troubleshooting
Could not find a version of package
```json
# composer.json
"minimum-stability": "dev",
```
yarn watch Missed import
```shell
$ yarn add --dev @fortawesome/fontawesome-free bootstrap jquery admin-lte
```
There are no registered paths for namespace "!EasyAdminLTE".
```php
# config/bundles.php
Yaroslavche\EasyAdminLTE\EasyAdminLTEBundle::class => ['all' => true],
```