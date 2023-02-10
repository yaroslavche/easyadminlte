<?php

declare(strict_types=1);

namespace Yaroslavche\EasyAdminLTE\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

abstract class AbstractAdminLTEDashboardController extends AbstractDashboardController
{
    private array $overriddenTemplates = [
        'layout' => '@EasyAdminLTE/layout.html.twig',
    ];

    public function configureAssets(): Assets
    {
        return parent::configureAssets()
            ->addWebpackEncoreEntry('easyadminlte');
    }

    public function configureCrud(): Crud
    {
        return parent::configureCrud()
            ->overrideTemplates($this->overriddenTemplates);
    }
}
