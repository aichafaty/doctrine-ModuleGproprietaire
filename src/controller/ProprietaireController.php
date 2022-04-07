<?php
use libs\system\Controller;
use src\model\ProprietaireDb;
require_once dirname(__DIR__).".\..\config\autoload.php";

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
        return $this->view->load("proprietaires/list",$proprietaires);
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
      $prop = $this->proprietaireDb->add($proprietaire);
       header("location: http://localhost/mesProjest/doctrine-ModuleGproprietaire/Proprietaire/index");
   }

    public function edit()
    {
        $id=$_GET['id'];
        $proprietaire = $this->proprietaireDb->edit($id);
        return $this->view->load("proprietaires/edit",$proprietaire);


    }

    public function modififier() {
        $id=(int)$_POST['id'];

        $proprietaire = $this->proprietaireDb->edit($id);

        $proprietaire->setNom($_POST['nom']);
        $proprietaire->setPrenom($_POST['prenom']);
        $proprietaire->setTelephone($_POST['telephone']);
        $proprietaire->setDateNaissance($_POST['dateNaissance']);
        $proprietaire->setLieuxNaissance($_POST['lieuNaissance']);
        $proprietaire->setCIN($_POST['numpiece']);
        $proprietaire->setCivilite($_POST['civilite']);
        $proprietaire->setSexe($_POST['sexe']);
        $this->proprietaireDb->update($proprietaire);
        header("location: http://localhost/mesProjest/doctrine-ModuleGproprietaire/Proprietaire/index");
    }

    public function delete() {
        $id=$_GET['id'];
       $prprietaire= $this->proprietaireDb->delete($id);
        header("location: http://localhost/mesProjest/doctrine-ModuleGproprietaire/Proprietaire/index");
    }
        

}