<?php declare(strict_types=1);

namespace Kware\KwareProductCompare;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;
use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\UninstallContext;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class KwareProductCompare extends Plugin
{
  
    public function uninstall(UninstallContext $uninstallContext): void
    {
        if ($uninstallContext->keepUserData()) {
            parent::uninstall($uninstallContext);
            return;
        }
        parent::uninstall($uninstallContext);
    }

    
}
