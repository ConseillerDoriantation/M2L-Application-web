<!doctype html>
<html lang="fr">
   <script type="text/javascript" src="./JS/Verif.js"></script>
   <head>
      <meta charset="UTF-8">
   	<?php include("header.php"); ?>
      <title>M2L - Inscription</title>
   </head>
   <body>
      <form method="post" action="index.php?uc=identification&action=inscrire">
         <div class="container">
            <div class="row justify-content-md-center mt-5">
               <div class="card text-white bg-dark col-sm-12 col-md-8">
                  <div class="card-header">Formulaire d'inscription</div>
				  <div class="card-body text-white">
                     <div class="form-group">	
                        <label for="nom">Nom : </label>
                        <input type="text" class="form-control" placeholder="Entrez un nom" name="nom" id="nom" required>
                     </div>
                     <div class="form-group">
                        <label for="prenom">Prenom : </label>
                        <input type="text" class="form-control" placeholder="Entrez un prénom" name="prenom" id="prenom" required>
                     </div>
                     <div class="form-group">
                        <label for="mail">Adresse mail : </label>
                        <input type="email" class="form-control" placeholder="Entrez une adresse e-mail" name="mail" id="mail" required>
                     </div>
                     <div class="form-group">
                        <label for="adresse">Adresse : </label>
                        <input type="text" class="form-control" placeholder="Entrez une adresse" name="adresse" id="adresse" required> 
                     </div>
                     <div class="form-group">
                        <label for="cp">Code postal : </label>
                        <input type="text" class="form-control" placeholder="Entrez un code postal" name="cp" id="cp" required>
                     </div>
                     <div class="form-group">
                        <label for="ville">Ville : </label>
                        <input type="text" class="form-control" placeholder="Entrez une ville" name="ville" id="ville" required>
                     </div>
                     <div class="form-group">
                        <label for="password_user">Mot de passe :</label> 
                        <input type="password" class="form-control" placeholder="••••••••••" name="password_user" id="password_user" required>
                     </div>
                     <p><strong> Ajouter les numéros de licences dont vous êtes le représentant légal </strong></p>
                     <div class="form-group">
                        <label for="nbLicences">Nombres de licences :</label>
                        
                        <select name="nbLicences" id="nbLicences" class="nbLicences form-control" onchange="ajoutLicence(this.value)">
                           <option selected disabled>--- Selectionner ---</option>
                           <?php			
                              for ($i = 1; $i <= 10 ; $i++) 
                              {
                              	if ($i == 1) 
                              		echo "<option value=".$i.">".$i." Licence</option>";
                              	else
                              		echo "<option value=".$i.">".$i." Licences</option>";
                              }
                              ?>
                        </select>
                        
                     </div>

                     <!-- valeur de l'ancien nombre de licence -->
                     <input type="hidden" id="lastNbL">

                     <!-- bloc where the various licence input will be created -->
                     <div class="form-group" id="bloc_licences"></div>

                     <div class="form-group text-center mt-2 mb-0" id="bloc_erreur">
                     <?php 
                        if((isset($_SESSION['MsgErreurVide'])) && ($_SESSION['MsgErreurVide']) == "1" ) { echo "<div class='alert alert-danger' role='alert'> Veuillez remplir tous les champs ! </div>"; unset($_SESSION['MsgErreurVide']); }
                        if((isset($_SESSION['MsgErreurLicence'])) && ($_SESSION['MsgErreurLicence']) == "1" ) { echo "<div class='alert alert-danger' role='alert'> Le numéro de licence que vous avez saisie est incorrect. </div>"; unset($_SESSION['MsgErreurLicence']); }  
                     ?>
                     </div>

                     <button class="btn btn-info" type="submit" >Valider</button>
                     <button class="btn btn-warning" type="reset" >Effacer</button>

                     <button class="btn btn-danger float-right" type="submit" onclick="window.location.href='index.php'">Retour</button>

                  </div>
               </div>
            </div>
         </div>
      </form>
   </body>
</html>
