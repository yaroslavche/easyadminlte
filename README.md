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
Extend `DashboardController` from `AbstractAdminLTEDashboardController` instead of `AbstractDashboardController`
```php
# src/Controller/Admin/DashboardController.php
use Yaroslavche\EasyAdminLTE\Controller\AbstractAdminLTEDashboardController;

class DashboardController extends AbstractAdminLTEDashboardController
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