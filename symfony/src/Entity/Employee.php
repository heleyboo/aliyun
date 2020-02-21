<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @ORM\Table(name="employee")
 * @ORM\Entity
 */
class Employee
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
     * @ORM\Column(name="employee_name", type="string", length=50, nullable=true)
     */
    private $employeeName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="employee_age", type="string", length=255, nullable=true)
     */
    private $employeeAge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="employee_salary", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $employeeSalary;

    /**
     * @var string|null
     *
     * @ORM\Column(name="profile_image", type="string", length=255, nullable=true)
     */
    private $profileImage;


}
