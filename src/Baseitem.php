<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity @ORM\Table(name="baseitems")
 */
class Baseitem {
    use GetAndSet;

    /**
     * @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="Container", inversedBy="containedProducts")
     */
    private $containedIn;

    public function __construct() {
        $this->containedIn = new ArrayCollection();
    }
}
