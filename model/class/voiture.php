<?php
class Voiture
{
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
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    /**
     * @return mixed
     */
    public function getEnergie()
    {
        return $this->energie;
    }

    /**
     * @param mixed $energie
     */
    public function setEnergie($energie)
    {
        $this->energie = $energie;
    }

    /**
     * @return mixed
     */
    public function getEstAutomatique()
    {
        return $this->estAutomatique;
    }

    /**
     * @param mixed $estAutomatique
     */
    public function setEstAutomatique($estAutomatique)
    {
        $this->estAutomatique = $estAutomatique;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }
    private $id;
    private $marque;
    private $modele;
    private $energie;
    private $estAutomatique;
    private $image;

    /**
     * Voiture constructor.
     * @param $id
     * @param $marque
     * @param $modele
     * @param $energie
     * @param $estAutomatique
     * @param $image
     */
    public function __construct($id, $marque, $modele, $energie, $estAutomatique, $image)
    {
        $this->id = $id;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->energie = $energie;
        $this->estAutomatique = $estAutomatique;
        $this->image = $image;
    }

}