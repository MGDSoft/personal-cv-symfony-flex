<?php

namespace App\Entity;

use App\Entity\FieldTrait\CreatedAndUpdatedTrait;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\Repository\SkillRepository")
 */
class Skill
{
    use CreatedAndUpdatedTrait;

    /**
     * @var string
     *
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=60)
     * @Assert\Length(max="60")
     */
    private $name;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean")
     */
    private $enabled=true;

    /**
     * @var string
     *
     * @ORM\Column(type="integer", length=3)
     * @Assert\Range(min = 0, max = 100)
     */
    private $score;

    /**
     * @var SkillMainCategory
     *
     * @Assert\NotNull()
     * @ORM\ManyToOne(targetEntity="SkillMainCategory", fetch="EAGER")
     */
    private $skillMainCategory;

    /**
     * @var SkillSecondaryCategory|null
     *
     * @ORM\ManyToOne(targetEntity="SkillSecondaryCategory", fetch="EAGER")
     * @ORM\JoinColumn(nullable=true)
     */
    private $skillSecondaryCategory;

    public function __toString()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param string $score
     * @return $this
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * @return SkillMainCategory
     */
    public function getSkillMainCategory()
    {
        return $this->skillMainCategory;
    }

    /**
     * @param SkillMainCategory $skillMainCategory
     * @return $this
     */
    public function setSkillMainCategory($skillMainCategory)
    {
        $this->skillMainCategory = $skillMainCategory;
        return $this;
    }

    /**
     * @return SkillSecondaryCategory|null
     */
    public function getSkillSecondaryCategory()
    {
        return $this->skillSecondaryCategory;
    }

    /**
     * @param SkillSecondaryCategory $skillSecondaryCategory
     * @return $this
     */
    public function setSkillSecondaryCategory($skillSecondaryCategory)
    {
        $this->skillSecondaryCategory = $skillSecondaryCategory;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

}