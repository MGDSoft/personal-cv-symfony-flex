<?php


namespace App\Entity;


use App\Entity\FieldTrait\CreatedAndUpdatedTrait;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

abstract class AbstractCategory
{
    use CreatedAndUpdatedTrait;

    public function __toString()
    {
        if ($this->name) {
            return $this->name;
        }

        return '';
    }

    /**
     * @var string
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=60)
     * @Assert\Length(max="60")
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=200, nullable=true)
     * @Assert\Length(max="200")
     */
    protected $description;

    /**
     * @var string
     *
     * @ORM\Column(type="integer", length=2, name="`order`")
     */
    protected $order = 99;

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
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param string $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }
}