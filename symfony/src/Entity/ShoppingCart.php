<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShoppingCart
 *
 * @ORM\Table(name="shopping_cart")
 * @ORM\Entity
 */
class ShoppingCart
{
    /**
     * @var int
     *
     * @ORM\Column(name="sid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="total_sum", type="integer", nullable=true)
     */
    private $totalSum;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_submission", type="datetime", nullable=true)
     */
    private $lastSubmission;

    /**
     * @return int
     */
    public function getSid(): int
    {
        return $this->sid;
    }

    /**
     * @param int $sid
     */
    public function setSid(int $sid): void
    {
        $this->sid = $sid;
    }

    /**
     * @return int|null
     */
    public function getTotalSum(): ?int
    {
        return $this->totalSum;
    }

    /**
     * @param int|null $totalSum
     */
    public function setTotalSum(?int $totalSum): void
    {
        $this->totalSum = $totalSum;
    }

    /**
     * @return \DateTime|null
     */
    public function getLastSubmission(): ?\DateTime
    {
        return $this->lastSubmission;
    }

    /**
     * @param \DateTime|null $lastSubmission
     */
    public function setLastSubmission(?\DateTime $lastSubmission): void
    {
        $this->lastSubmission = $lastSubmission;
    }




}
