<?php

namespace HandissimoBundle\Entity;

/**
 * DisabilityTypes
 */
class DisabilityTypes
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $disabilityName;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $structures;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->structures = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set disabilityName
     *
     * @param string $disabilityName
     *
     * @return DisabilityTypes
     */
    public function setDisabilityName($disabilityName)
    {
        $this->disabilityName = $disabilityName;

        return $this;
    }

    /**
     * Get disabilityName
     *
     * @return string
     */
    public function getDisabilityName()
    {
        return $this->disabilityName;
    }

    /**
     * Add structure
     *
     * @param \HandissimoBundle\Entity\Organizations $structure
     *
     * @return DisabilityTypes
     */
    public function addStructure(\HandissimoBundle\Entity\Organizations $structure)
    {
        $this->structures[] = $structure;

        return $this;
    }

    /**
     * Remove structure
     *
     * @param \HandissimoBundle\Entity\Organizations $structure
     */
    public function removeStructure(\HandissimoBundle\Entity\Organizations $structure)
    {
        $this->structures->removeElement($structure);
    }

    /**
     * Get structures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStructures()
    {
        return $this->structures;
    }
}

