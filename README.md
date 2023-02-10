## Installation
Make sure that you have installed easyadmin and webpack. Install package:
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
