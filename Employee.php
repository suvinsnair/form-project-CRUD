<?php

namespace EmployeeBundle\Entity;

/**
 * Employee
 */
class Employee
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $employeeId;

    /**
     * @var string
     */
    private $empName;

    /**
     * @var string
     */
    private $empTalent;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    
    

    /**
     * Set employeeId
     *
     * @param integer $employeeId
     *
     * @return Employee
     */
    public function setEmployeeId($employeeId)
    {
        $this->employeeId = $employeeId;

        return $this;
    }

    /**
     * Get employeeId
     *
     * @return integer
     */
    public function getEmployeeId()
    {
        return $this->employeeId;
    }

    /**
     * Set empName
     *
     * @param string $empName
     *
     * @return Employee
     */
    public function setEmpName($empName)
    {
        $this->empName = $empName;

        return $this;
    }

    /**
     * Get empName
     *
     * @return string
     */
    public function getEmpName()
    {
        return $this->empName;
    }

    /**
     * Set empTalent
     *
     * @param string $empTalent
     *
     * @return Employee
     */
    public function setEmpTalent($empTalent)
    {
        $this->empTalent = $empTalent;

        return $this;
    }

    /**
     * Get empTalent
     *
     * @return string
     */
    public function getEmpTalent()
    {
        return $this->empTalent;
    }
}

