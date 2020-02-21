<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
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
     * @var string|null
     *
     * @ORM\Column(name="open_id", type="string", length=255, nullable=true)
     */
    private $openId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="union_id", type="string", length=255, nullable=true)
     */
    private $unionId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="jingdong_id", type="string", length=255, nullable=true)
     */
    private $jingdongId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="grade", type="string", length=255, nullable=true)
     */
    private $grade;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $lastLogin;

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
     * @return string|null
     */
    public function getOpenId(): ?string
    {
        return $this->openId;
    }

    /**
     * @param string|null $openId
     */
    public function setOpenId(?string $openId): void
    {
        $this->openId = $openId;
    }

    /**
     * @return string|null
     */
    public function getUnionId(): ?string
    {
        return $this->unionId;
    }

    /**
     * @param string|null $unionId
     */
    public function setUnionId(?string $unionId): void
    {
        $this->unionId = $unionId;
    }

    /**
     * @return string|null
     */
    public function getJingdongId(): ?string
    {
        return $this->jingdongId;
    }

    /**
     * @param string|null $jingdongId
     */
    public function setJingdongId(?string $jingdongId): void
    {
        $this->jingdongId = $jingdongId;
    }

    /**
     * @return string|null
     */
    public function getGrade(): ?string
    {
        return $this->grade;
    }

    /**
     * @param string|null $grade
     */
    public function setGrade(?string $grade): void
    {
        $this->grade = $grade;
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
     * @return \DateTime|null
     */
    public function getLastLogin(): ?\DateTime
    {
        return $this->lastLogin;
    }

    /**
     * @param \DateTime|null $lastLogin
     */
    public function setLastLogin(?\DateTime $lastLogin): void
    {
        $this->lastLogin = $lastLogin;
    }
}
