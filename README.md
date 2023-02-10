```
$ composer require yaroslavche/easyadminlte
$ yarn install --force
$ yarn watch
```

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
