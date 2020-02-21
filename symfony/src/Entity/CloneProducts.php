<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CloneProducts
 *
 * @ORM\Table(name="clone_products")
 * @ORM\Entity
 */
class CloneProducts
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sku", type="string", length=50, nullable=true)
     */
    private $sku;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $price;


}
