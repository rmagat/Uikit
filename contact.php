<?php include('top.php'); ?>
<hr>
<h1>Formulaire de contact :</h1>
    <div id="leForm">
        <form class="uk-form uk-form-stacked">
            <div class="uk-form-row">
                <label for="form-s-it" class="uk-form-label">Nom* :</label>
                <div class="uk-form-controls">
                    <input type="text" id="form-s-it" class="uk-width-1-1">
                </div>
            </div>
            
            <div class="uk-form-row">
                <label for="form-s-ip" class="uk-form-label">Pr&eacutenom* :</label>
                <div class="uk-form-controls">
                    <input type="text" id="form-s-ip" class="uk-width-1-1">
                </div>
            </div>
            
            <div class="uk-form-row">
                <label for="form-s-ip" class="uk-form-label">Adresse email* :</label>
                <div class="uk-form-controls">
                    <input type="text" id="form-s-ip" class="uk-width-1-1" >
                </div>
            </div>
            
            <div class="uk-form-row">
                <label for="form-s-ip" class="uk-form-label">Société :</label>
                <div class="uk-form-controls">
                    <input type="text" id="form-s-ip" class="uk-width-1-1" >
                </div>
            </div>

            <div class="uk-form-row">
                <label for="form-s-t" class="uk-form-label">Message* :</label>
                <div class="uk-form-controls">
                    <textarea placeholder="Veuillez rediger votre message" class="uk-width-1-1" rows="5" cols="30" id="form-s-t"></textarea>
                </div>
            </div>
            <p class="toutPetit">* : les chanps sont aubligatoire !</p>
            <div id="positionSend">
                <button class="btSend">Envoyer</button>
            </div>
        </form>
    </div>
<?php include('bottom.php'); ?>