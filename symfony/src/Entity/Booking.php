<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Booking
 *
 * @ORM\Table(name="booking")
 * @ORM\Entity
 */
class Booking
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
     * @ORM\Column(name="booked_by", type="integer", nullable=true)
     */
    private $bookedBy;

    /**
     * @var int|null
     *
     * @ORM\Column(name="event_id", type="integer", nullable=true)
     */
    private $eventId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="booked_for", type="integer", nullable=true)
     */
    private $bookedFor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var int|null
     *
     * @ORM\Column(name="deposit", type="integer", nullable=true)
     */
    private $deposit;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_number", type="string", length=20, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="guest_number", type="integer", nullable=true)
     */
    private $guestNumber;

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
    public function getBookedBy(): ?int
    {
        return $this->bookedBy;
    }

    /**
     * @param int|null $bookedBy
     */
    public function setBookedBy(?int $bookedBy): void
    {
        $this->bookedBy = $bookedBy;
    }

    /**
     * @return int|null
     */
    public function getEventId(): ?int
    {
        return $this->eventId;
    }

    /**
     * @param int|null $eventId
     */
    public function setEventId(?int $eventId): void
    {
        $this->eventId = $eventId;
    }

    /**
     * @return int|null
     */
    public function getBookedFor(): ?int
    {
        return $this->bookedFor;
    }

    /**
     * @param int|null $bookedFor
     */
    public function setBookedFor(?int $bookedFor): void
    {
        $this->bookedFor = $bookedFor;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int|null
     */
    public function getDeposit(): ?int
    {
        return $this->deposit;
    }

    /**
     * @param int|null $deposit
     */
    public function setDeposit(?int $deposit): void
    {
        $this->deposit = $deposit;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime|null $createdAt
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string|null $phoneNumber
     */
    public function setPhoneNumber(?string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int|null
     */
    public function getGuestNumber(): ?int
    {
        return $this->guestNumber;
    }

    /**
     * @param int|null $guestNumber
     */
    public function setGuestNumber(?int $guestNumber): void
    {
        $this->guestNumber = $guestNumber;
    }


}
