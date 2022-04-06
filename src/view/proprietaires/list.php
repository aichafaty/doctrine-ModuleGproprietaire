<?php require_once"src/public/header.php"?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 m-auto">
                <h1 class="my-5 text-center">List Proprietaires</h1>
                <table class="table table-success table-striped fs-4">
                    <thead>
                        <th>Nom</th>
                        <th>Prenm</th>
                        <th>Civilite</th>
                        <th>Genre</th>
                        <th>CIN</th>
                        <th>DateNaiss</th>
                        <th>LieuxNaiss</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </thead>
                    <tbody>

                        <tr class="table-active">
                            <?php
                                foreach ($data as $proprietaire )
                                {
                                    echo "<tr>";
                                    echo "<td>" . $proprietaire->getNom(). "</td>";
                                    echo "<td>" . $proprietaire->getPrenom() . "</td>";
                                    echo "<td>" . $proprietaire->getCivilite(). "</td>";
                                    echo "<td>" . $proprietaire->getSexe(). "</td>";
                                    echo "<td>" . $proprietaire->getCIN(). "</td>";
                                    echo "<td>" . $proprietaire->getDateNaissance(). "</td>";
                                    echo "<td>" . $proprietaire->getLieuxNaissance(). "</td>";
                                    echo "<td>" . $proprietaire->getTelephone(). "</td>";
                                    echo "<td>";

                                    echo '<button type="button" class="btn btn-warning fs-5 mx-1">edit</button>';
                                    echo '<button type="button" class="btn btn-danger fs-5 mx-1">delete</button>';
                                    echo "</td>";
                                    echo "</tr>";

                                }
                            ?>

                        ...
                        </tr>
                        <tr>
                        ...
                        </tr>
                        <tr>


                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <?php require_once"src/public/footer.php"?>
