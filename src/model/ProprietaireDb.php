<?php
namespace src\model;
use libs\system\Model;
use src\entities\Proprietaire;
class ProprietaireDb extends Model
{
    public function __construct()
    {
        parent::__construct();
        //echo "ok";
    }
  
    public function findAll(){
      
      //return ["donnees"=>"LPGL"]; 
      $proprietaire = $this->entityManager->getRepository('proprietaires');
      $proprietaires = $proprietaire->findAll();
      return $proprietaires;
      
        
    }

    public function add( Proprietaire $proprietaire)
    {
        $this->entityManager->persist($proprietaire);
        $this->entityManager->flush();
    }

    public function edit($id)
    {
        $proprietaire = $entityManager->find('Proprietaire', $id);
        return $proprietaire;
    }

    public function update()
    {

    }
}




?>