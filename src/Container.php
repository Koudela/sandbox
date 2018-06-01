<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity @ORM\Table(name="container")
 */
class Container {
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
     * @ORM\OneToMany(targetEntity="Container", mappedBy="parent", cascade={"remove"})
     */
    private $children;

    /**
     * @ORM\ManyToOne(targetEntity="Container", inversedBy="children")
     */
    private $parent;

    /**
     * @ORM\ManyToMany(targetEntity="Baseitem", mappedBy="containedIn")
     */
    private $containedProducts;

    public function __construct() {
        $this->children = new ArrayCollection();
        $this->containedProducts = new ArrayCollection();
    }
}