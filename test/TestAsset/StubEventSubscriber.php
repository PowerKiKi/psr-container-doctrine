<?php

declare(strict_types=1);

namespace RoaveTest\PsrContainerDoctrine\TestAsset;

use Doctrine\Common\EventSubscriber;

final class StubEventSubscriber implements EventSubscriber
{
    /**
     * {@inheritDoc}
     */
    public function getSubscribedEvents(): array
    {
        return ['foo'];
    }
}
