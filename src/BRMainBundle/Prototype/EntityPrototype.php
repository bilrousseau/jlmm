<?php

namespace BRMainBundle\Prototype;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\HasLifecycleCallbacks()
 */

abstract class EntityPrototype {

	/**
     * @ORM\PreUpdate
     */
    protected function dateUpdate()
    {
        $this->setUpdate(new \DateTime());
    }
}