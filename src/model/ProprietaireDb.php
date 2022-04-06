<?php
namespace src\model;
use libs\system\Model;
use Proprietaire;

require_once dirname(__DIR__).".\..\config\autoload.php";

class ProprietaireDb extends Model
{
    public function __construct()
    {
        parent::__construct();
        //echo "ok";
    }
  
    public function findAll(){

//        $proprietaire = $this->entityManager->getRepository('Proprietaire');
//             $proprietaires = $proprietaire->findAll();
//      return $proprietaires;
       return $this->entityManager->createQuery("SELECT p FROM proprietaire p ")->getResult();
        
    }

    public function add( Proprietaire $proprietaire)
    {
        $this->entityManager->persist($proprietaire);
        $this->entityManager->flush();
    }

    public function edit($id)
    {
//        $proprietaire = $entityManager->find('Proprietaire', $id);
//        return $proprietaire;
    }

    public function update()
    {

    }
}




?>