<?php

declare(strict_types=1);

namespace slapperV2\events;

use pocketmine\entity\Entity;
use pocketmine\event\entity\EntityEvent;

class SlapperDeletionEvent extends EntityEvent {

    public function __construct(Entity $entity) {
        $this->entity = $entity;
    }

}
