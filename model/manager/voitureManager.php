<?php


class voitureManager extends bdManager{
    public function __construct()
    {
        parent::__construct();
    }

    public function selectAll()
    {
        $voiture = [];
        $sql =  'SELECT * FROM voiture';
        foreach  ($this->bdd->query($sql) as $row) {
            $voiture[] = new Voiture($row['id'], $row['marque'], $row['modele'], $row['energie'], $row['estAutomatique'], $row['image']  );
        }

        return $voiture;
    }

    public function select($id)
    {
        $requete = $this->bdd->prepare("SELECT * FROM voiture WHERE id= :id");
        $requete->execute(['id'=> $id]);
        $res = $requete->fetch();
        $voiture = new Voiture($res['id'], $res['marque'], $res['modele'], $res['energie'], $res['estAutomatique'], $res['image']);
        return $voiture;
    }

    public function insert(Voiture $voiture){
        $requete = $this->bdd->prepare('INSERT INTO voiture(marque, modele, energie , estAutomatique, image)
VALUES(:marque, :modele, :energie , :estAutomatique, :image)');
        $requete->execute([
            'marque' => $voiture ->getMarque(),
            'modele' => $voiture ->getModele(),
            'energie' => $voiture ->getEnergie(),
            'estAutomatique' => $voiture ->getEstAutomatique(),
            'image' => $voiture ->getImage(),
        ]);

        $voiture->setId($this->bdd->lastInsertId());
    }

    public function delete($id){
        $voiture = $this->bdd->prepare('DELETE FROM voiture WHERE id = :id');
        $voiture->execute(['id'=> $id]);
    }




}