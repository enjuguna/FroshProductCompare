<?php declare(strict_types=1);

namespace Kware\KwareProductCompare\Subscriber;

use Shopware\Core\Content\Product\Events\ProductGatewayCriteriaEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class KwareProductGatewayCriteriaSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            ProductGatewayCriteriaEvent::class => [
                ['handleCriteriaLoadedRequest', 201]
            ],
        ];
    }

    public function handleCriteriaLoadedRequest(ProductGatewayCriteriaEvent $event): void
    {
        $criteria = $event->getCriteria();

        $criteria->addAssociation('prices')->addAssociation('manufacturer');
    }
}
