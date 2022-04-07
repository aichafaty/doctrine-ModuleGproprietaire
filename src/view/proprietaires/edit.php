<?php require_once"src/public/header.php"?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-8 m-auto">
            <h1 class="my-5 text-center">Edit Proprietaire</h1>
            <form action="http://localhost/mesProjest/doctrine-ModuleGproprietaire/Proprietaire/modififier?id='.$data->getId().'" method="post">
                <div class="mb-3">
                    <input type="text" class="form-control fs-2 hidden"  id="nom" name="id" value="<?=$data->getId()?>" > <label for="nom" class="form-label fs-2" name="id"  value="<?=$data->getId()?>"></label>
                    <label for="nom" class="form-label fs-2" >Nom</label>
                    <input type="text" class="form-control fs-2"  id="nom" name="nom" value="<?=$data->getNom()?>">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label fs-2" >Prenom</label>
                    <input type="text" class="form-control fs-2" id="prenom" name="prenom" value="<?=$data->getPrenom()?>">
                </div>

                <div class="mb-3">
                    <label for="telephone" class="form-label fs-2">Telephone</label>
                    <input type="number" class="form-control fs-2" id="telephone" name="telephone" value="<?=$data->getTelephone() ?>">
                </div>
                <div class="mb-3">
                    <label for="dateNaissance" class="form-label fs-2">Date Naissance</label>
                    <input type="date" class="form-control fs-2" id="dateNaissance" name="dateNaissance" value="<?=$data->getDateNaissance() ?>">
                </div>
                <div class="mb-3">
                    <label for="lieuNaissance" class="form-label fs-2">Lieu de Naissance</label>
                    <input type="text" class="form-control fs-2" id="lieuNaissance" name="lieuNaissance"  value="<?=$data->getLieuxNaissance() ?>">
                </div>
                <div class="mb-3">
                    <label for="numpiece" class="form-label fs-2">Numero Piece D'identite</label>
                    <input type="text" class="form-control fs-2" id="numpiece" name="numpiece"  value="<?=$data->getCIN() ?>">
                </div>
                <div class="mb-3">
                    <label for="numpiece" class="form-label fs-2">Civilte</label>
                    <select class="form-select fs-2" aria-label="Default select example" name="civilite"  value="<?=$data->getCivilite() ?>">
                        <option value="celibatire">Celibataire</option>
                        <option value="marie">Marie</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="numpiece" class="form-label fs-2">Genre</label>
                    <select class="form-select fs-2" aria-label="Default select example" name="sexe"  value="<?=$data->getSexe() ?>">
                        <option value="masculin">Masculin</option>
                        <option value="feminin">Feminin</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success fs-2 mb-5">Modifier</button>
            </form>
        </div>
    </div>
</div>
<?php require_once"src/public/footer.php"?>
