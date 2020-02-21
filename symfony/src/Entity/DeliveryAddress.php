<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeliveryAddress
 *
 * @ORM\Table(name="delivery_address")
 * @ORM\Entity
 */
class DeliveryAddress
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
     * @var int|null
     *
     * @ORM\Column(name="province_id", type="integer", nullable=true)
     */
    private $provinceId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="city_id", type="integer", nullable=true)
     */
    private $cityId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="district_id", type="integer", nullable=true)
     */
    private $districtId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="neighborhood_id", type="integer", nullable=true)
     */
    private $neighborhoodId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extra", type="string", length=255, nullable=true)
     */
    private $extra;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_default", type="boolean", nullable=true)
     */
    private $isDefault;

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
     * @return int|null
     */
    public function getProvinceId(): ?int
    {
        return $this->provinceId;
    }

    /**
     * @param int|null $provinceId
     */
    public function setProvinceId(?int $provinceId): void
    {
        $this->provinceId = $provinceId;
    }

    /**
     * @return int|null
     */
    public function getCityId(): ?int
    {
        return $this->cityId;
    }

    /**
     * @param int|null $cityId
     */
    public function setCityId(?int $cityId): void
    {
        $this->cityId = $cityId;
    }

    /**
     * @return int|null
     */
    public function getDistrictId(): ?int
    {
        return $this->districtId;
    }

    /**
     * @param int|null $districtId
     */
    public function setDistrictId(?int $districtId): void
    {
        $this->districtId = $districtId;
    }

    /**
     * @return int|null
     */
    public function getNeighborhoodId(): ?int
    {
        return $this->neighborhoodId;
    }

    /**
     * @param int|null $neighborhoodId
     */
    public function setNeighborhoodId(?int $neighborhoodId): void
    {
        $this->neighborhoodId = $neighborhoodId;
    }

    /**
     * @return string|null
     */
    public function getExtra(): ?string
    {
        return $this->extra;
    }

    /**
     * @param string|null $extra
     */
    public function setExtra(?string $extra): void
    {
        $this->extra = $extra;
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
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime|null $updatedAt
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return bool|null
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    /**
     * @param bool|null $isDefault
     */
    public function setIsDefault(?bool $isDefault): void
    {
        $this->isDefault = $isDefault;
    }


}
