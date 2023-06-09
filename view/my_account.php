<?php
$title = 'Mon compte';
ob_start();
?>
    <div class="container my-4">
        <h2 class="h2_title my-2">Mon compte</h2>
        <hr class="hr_content mb-4"/>

        <div class="row d-flex justify-content-between">
           
                <div class="col-5 d-flex justify-content-center  background_type bg-light p-5 my-4">            
                    <div class="d-flex justify-content-center flex-column">
                        <div class="row mb-5">
                            <h4 class="text-center">Mes informations personnelles :</h4>
                        </div>

                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-5">
                                <p class="intitule">Surnom :</p>
                            </div>
                            <div class="col ">
                                <div class="infos p-2">
                                    <?= $user['nickname'] ?>
                                </div>
                            </div>
                        </div>

                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-5">
                                <p class="intitule">Date de naissance :</p>
                            </div>
                            <div class="col">
                                <div class="infos p-2">
                                    <?= $user['birth'] ?>
                                </div>
                            </div>
                        </div>

                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-5">
                                <p class="intitule">Adresse e-mail :</p>
                            </div>
                            <div class="col">
                                <div class="infos p-2">
                                    <?= $user['mail'] ?>
                                </div>
                            </div>
                        </div>

                        <div class="row d-flex align-items-center mb-5">
                            <div class="col-5">
                                <p class="intitule">Status :</p>
                            </div>
                            <div class="col">
                                <?php if ($user['role'] == 0) { ?>
                                        <div class="row mb-3">
                                            <h5 class="intitule"><i class="bi bi-check"></i> Lecteur</h5>
                                        </div>
                                    <?php } else if ($user['role'] == 1) { ?>
                                        <div class="row">
                                            <h5 class="intitule"><i class="bi bi-check-all"></i> Admin</h5>
                                        </div>
                                    <?php } ?>
                            </div>
                        </div> 
                        <button type="submit" class="btn btn-success">Modifier mes infos</button>
                    </div>
                </div>
            
        
        
            
                <div class="col-5 d-flex justify-content-center flex-column justify-content-between background_type bg-light p-5 my-4 ">            
                    <div class="d-flex justify-content-center flex-column mb-4">
                        <div class="row mb-3 ">
                            <h4 class="text-center">Mes informations de lecture :</h4>
                        </div>
                        <div class="row mb-1">
                            <h6><i class="bi bi-book-fill"></i> Nombre d'histoires lues : <?= $user['nb_reading'] ?> </h6>
                        </div>
                        <div class="row mb-3">
                            <h6><i class="bi bi-book-half"></i> Nombre d'histoires commencées : ...</h6>
                        </div>
                        <button type="submit" class="btn btn-success">Voir mes lectures</button>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-center flex-column">
                        <div class="row mb-3">
                            <h4 class="text-center">Mes informations de créations :</h4>
                        </div>
                        <div class="row mb-1">
                            <h6><i class="bi bi-book-fill"></i> Nombre d'histoires créées :  </h6>
                        </div>
                        <div class="row mb-3">
                            <h6><i class="bi bi-book-half"></i> Nombre d'histoires publiées : ...</h6>
                        </div>
                        <button type="submit" class="btn btn-success">Voir mes histoires</button>
                    </div>
                </div>
            
        </div>
     </div>


<?php $content = ob_get_clean();
require('base.php'); ?>