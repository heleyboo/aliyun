<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 *
 * @ORM\Table(name="order")
 * @ORM\Entity
 */
class Order
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
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="submission_time", type="datetime", nullable=true)
     */
    private $submissionTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="total_sum", type="integer", nullable=true)
     */
    private $totalSum;

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
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @param int|null $userId
     */
    public function setUserId(?int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return \DateTime|null
     */
    public function getSubmissionTime(): ?\DateTime
    {
        return $this->submissionTime;
    }

    /**
     * @param \DateTime|null $submissionTime
     */
    public function setSubmissionTime(?\DateTime $submissionTime): void
    {
        $this->submissionTime = $submissionTime;
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




}
