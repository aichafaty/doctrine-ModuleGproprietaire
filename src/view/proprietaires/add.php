<?php require_once"src/public/header.php"?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 m-auto">
                <h1 class="my-5 text-center">Add Proprietaire</h1>
                <form action="http://localhost/mesProjest/doctrine-ModuleGproprietaire/Proprietaire/add" method="post">
                    <div class="mb-3">
                        <label for="nom" class="form-label fs-2">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom"> 
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label fs-2">Prenom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom"> 
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fs-2">Email</label>
                        <input type="email" class="form-control" id="email" name="email"> 
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label fs-2">Telephone</label>
                        <input type="number" class="form-control" id="telephone" name="telephone"> 
                    </div>
                    <div class="mb-3">
                        <label for="dateNaissance" class="form-label fs-2">Date Naissance</label>
                        <input type="date" class="form-control" id="dateNaissance" name="dateNaissance"> 
                    </div>
                    <div class="mb-3">
                        <label for="lieuNaissance" class="form-label fs-2">Lieu de Naissance</label>
                        <input type="text" class="form-control" id="lieuNaissance" name="lieuNaissance"> 
                    </div>
                    <div class="mb-3">
                        <label for="numpiece" class="form-label fs-2">Numero Piece D'identite</label>
                        <input type="text" class="form-control" id="numpiece" name="numpiece"> 
                    </div>
                    <div class="mb-3">
                        <label for="numpiece" class="form-label fs-2">Civilte</label>
                        <select class="form-select" aria-label="Default select example" name="civilite">
                            <option value="celibatire">Celibataire</option>
                            <option value="marie">Marie</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="numpiece" class="form-label fs-2">Genre</label>
                        <select class="form-select" aria-label="Default select example" name="sexe">
                            <option value="masculin">Masculin</option>
                            <option value="feminin">Feminin</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success fs-2 mb-5">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
    <?php require_once"src/public/footer.php"?>
