<?php
// namespace src\controller;
use libs\system\Controller;
use src\model\ProprietaireDb;
use src\entities\Proprietaire;
class ProprietaireController extends Controller
{
    private $proprietaireDb;
    public function __construct() {
        parent::__construct();
        $this->proprietaireDb = new ProprietaireDb();
    }
   public function index()
   {
       $proprietaires= $this->proprietaireDb->findAll();
        return $this->view->load("proprietaires/list",$proprietaire);
   }

    public function create() {
        
        return $this->view->load("proprietaires/add");
    }
   public function add()
   {
       $proprietaire=new Proprietaire();
       $proprietaire->setNom($_POST['nom']);
       $proprietaire->setPrenom($_POST['prenom']);
       $proprietaire->setTelephone($_POST['telephone']);
       $proprietaire->setDateNaissance($_POST['dateNaissance']);
       $proprietaire->setLieuxNaissance($_POST['lieuNaissance']);
       $proprietaire->setCIN($_POST['numpiece']);
       $proprietaire->setCivilite($_POST['civilite']);
       $proprietaire->setSexe($_POST['sexe']);
       $this->proprietaireDb->add($proprietaire);
   }
        
    
}