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


       return $this->entityManager->createQuery("SELECT p FROM proprietaire p ")->getResult();
        
    }

    public function add( Proprietaire $proprietaire)
    {
        $this->entityManager->persist($proprietaire);
        $this->entityManager->flush();
    }

    public function edit($id)
    {
        $proprietaire = $this->entityManager->getRepository('Proprietaire')->find($id);
        return $proprietaire;
    }

    public function update($proprietaire)
    {
        $p = $this->entityManager->getRepository('Proprietaire')->find($proprietaire);
        if ($p != null) {
            $this->entityManager->merge($p);
            $this->entityManager->flush();
        }

    }

    public function delete($id){
        $proprietaire = $this->entityManager->find("Proprietaire",$id);
        $this->entityManager->remove($proprietaire);
        $this->entityManager->flush();
    }
}

?>