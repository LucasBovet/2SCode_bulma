<?php
include 'inscription_validation.php';
?>


  <div class="form_container">
    <form method="POST" action = 'inscription' >

     
     
    
      
      <div class="field">
        <label class="label">Prénom</label>
        <div class="control">
          <input id="name" name = 'firstname' class="input" type="text" placeholder="Nom" onblur="checkName()">
          <div class="feedback" id="feedbackname"></div>
        </div>
      </div>

      
      <div class="field">
        <label for="lastname" class="label">Nom</label>
        <div class="control">
          <input id="lastname" name = 'lastname' class="input" type="text" placeholder="Nom" onblur="checkLastName()">
          <div class="feedback" id="feedbacklastname"></div>
        </div>
      </div>

   
      

      <div class="field">
        <label class="label">Adresse E-Mail</label>
        <div class="control">
          <input id="mail" name = 'mail'class="input" type="text" placeholder="Nom" onblur="checkMail()">
          <div class="feedback" id="feedbackmail"></div>
        </div>
      </div>

      <div class="field">
        <label class="label">Date de naissance</label>
        <div class="control">
          <input id="date" name = 'date_of_birth' class="input" type="text" placeholder="jj/mm/aaaa" onblur="checkDate()">
          <div class="feedback" id="feedbackdate"></div>
        </div>
      </div>

      <div class="field">
        <label class="label">Mot de passe</label>
        <div class="control">
          <input class="input" name = 'password' type="password" placeholder="Mot de passe">
        </div>
      </div>

      <div class="field">
        <label class="label">Confirmer le mot de passe</label>
        <div class="control">
          <input class="input" name = 're_password' type="password" placeholder="Confirmer le  mot de passe">
        </div>
      </div>

     

      <div class="field">
        <label class="label">Ville</label>
        <div class="control">
          <input id="city" name = 'city' class="input" type="text" placeholder="Ville" onblur="checkCity()">
          <div class="feedback" id="feedbackcity"></div>
        </div>
      </div>

      
 

      <div class="field is-grouped">
        <div class="control">
          <button class="button is-link" name="register_form">S'inscrire</button>
        </div>
        <div class="control">
          <button class="button is-link is-light">Annuler</button>
        </div>
      </div>
    </form>
    </div>
