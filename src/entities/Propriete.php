<?php

namespace src\entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="propriete")
 */
class Propriete{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $libelle;

    /**
     * Many proprietes have one quartier. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Quartier", inversedBy="proprietes")
     * @ORM\JoinColumn(name="quartier_id", referencedColumnName="id")
     */
    private $quartier;
    /**
     * Many proprietes have one type_propriete. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Typepropriete", inversedBy="proprietes")
     * @ORM\JoinColumn(name="typePropriete_id", referencedColumnName="id")
     */
    private $type_propriete;

    /**
     * Many proprietes have one type_proprietaire. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Proprietaire", inversedBy="proprietes")
     * @ORM\JoinColumn(name="proprietaire_id", referencedColumnName="id")
     */
    private $proprietaire;


    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }


}

?>
