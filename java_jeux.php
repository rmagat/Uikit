<?php include ('top.php'); ?>

<a href="archives.php" class='lienRetour'>Retour aux archives</a>
<hr>
    <h1>"Catch the zombies !"</h1>
    <p>A propos : “catch the zombies” est mon tout premier jeu réalisé avec JQuery.
    Ce jeu fait apparaître des zombies aléatoirement. Plus on clique dessus à chaque apparition,
    plus on gagne de points.</p>
    <h2>Aperçu du jeux :</h2>
    <img class='image' src="images/catch.jpg"/>
    <h2>Mon script :</h2>
    <pre>
    var score=0;
    var nbMouv=0;
    var slash="/";
    $('#btCommencer').click(function() {
            
            function mouvementAlea () {
                    $('#slash').text(slash);
                    var nb = Math.floor(Math.random() * 31);
                    if(nb > 0 & nb <9) {
                            $('#mouv2').delay(300);
                            $('#mouv2').animate({"top": "-=150px"}, 250);
                            $('#mouv2').delay(200);
                            $('#mouv2').animate({"top": "+=150px"}, 250);
                            nbMouv++;
                            $('#nbMouv').text(nbMouv);
                    }
                    if(nb > 10 & nb <19) {
                            $('#mouv3').delay(300);
                            $('#mouv3').animate({"top": "-=150px"}, 250);
                            $('#mouv3').delay(200);
                            $('#mouv3').animate({"top": "+=150px"}, 250);
                            nbMouv++;
                            $('#nbMouv').text(nbMouv);
                    }
                    if(nb > 20 & nb <30) {
                            $('#mouv4').delay(300);
                            $('#mouv4').animate({"top": "-=150px"}, 250);
                            $('#mouv4').delay(200);
                            $('#mouv4').animate({"top": "+=150px"}, 250);
                            nbMouv++;
                            $('#nbMouv').text(nbMouv);
                    }
            }
            
            jQuery(document).ready(function(){
                    setInterval(mouvementAlea, 1000);
            });
    });
    $('#mouv2').click(function() {
            score++;
            $('#score').text(score);
            if(score == 10) {
                    alert("Bravo ! Vous avez attrapé 10 zombies sur "+ nbMouv +" !");
                    location.reload();
            }
    });
    $('#mouv3').click(function() {
            score++;
            $('#score').text(score);
            if(score == 10) {
                    alert("Bravo ! Vous avez attrapé 10 zombies sur "+ nbMouv +" !");
                    location.reload();
            }
    });
    $('#mouv4').click(function() {
            score++;
            $('#score').text(score);
            if(score == 10) {
                    alert("Bravo ! Vous avez attrapé 10 zombies sur "+ nbMouv +" !");
                    location.reload();
            }
    });
    </pre>
    <h2>Mon body :</h2>
    <pre><code>
     &lt;p id="nomJeu">"catch the zombies !" &lt;/p>
	 &lt;div id="jeu">
             &lt;input type="submit" id="btCommencer" value="JOUER">
	     &lt;p id="cssScore">SCORE :&lt;span id="score">&lt;/span>&lt;span id="slash">&lt;/span>
             &lt;span id="nbMouv">&lt;/span>&lt;/p>
	     &lt;img id="sol" src="dirt.png"> 
	     &lt;img class="mouv2 "id="mouv2" src="zombie.png">
	     &lt;img class="mouv3 "id="mouv3" src="zombie.png">
	     &lt;img class="mouv4 "id="mouv4" src="zombie.png">
	 &lt;/div>
    </code></pre>
    <h2>Fichier CSS :</h2>
    <pre>
body {
	margin: 0;
	padding: 0;
	font-family: 'Lobster', cursive;
}

#nomJeu {
	position: relative;
	font-size: 50px;
	margin-left: auto;
	margin-right: auto;
	width: 400px;
	text-align: center;
	top : 5%;
}
/* Fenêtre du jeu */
#jeu {
	top: 5%;
	margin-left: auto;
	margin-right: auto;
	width: 900px;
	height: 500px;
	border: 2px black solid;
	overflow: hidden;
	position: relative;
}

/* Texture du sol */
#sol {
	position: relative;
	z-index: 100;
	margin-top: 300px;;
}

#cssScore {
	position: absolute;
	color: black;
	font-size: 20px;
	margin-left: 770px;
}
/* Bouton play */
#btCommencer {
	position: absolute;
	background-color: black;
	color: white;
	font-size: 20px;
	border: 2px black solid;
	top: 450px;
	z-index: 150;
	width:100%;
	height: 50px; 
	opacity: 0.8;
}

/* personnage en mouvement*/
.mouv1 {
	position: absolute;
	z-index: 10;
	top: 300px;
	padding-right: 30px;
	padding-left: 30px;
	cursor: pointer;
}

.mouv2 {
	position: absolute;
	z-index: 10;
	top: 300px;
	padding-right: 30px;
	padding-left: 30px;
	margin-left: 200px;
	cursor: pointer;
}

.mouv3 {
	position: absolute;
	z-index: 10;
	top: 300px;
	padding-right: 30px;
	padding-left: 30px;
	margin-left: 400px;
	cursor: pointer;
}

.mouv4 {
	position: absolute;
	z-index: 10;
	top: 300px;
	padding-right: 30px;
	padding-left: 30px;
	margin-left: 600px;
	cursor: pointer;
}
    </pre>
    <hr>
    <a href='archives.php' class='lienRetour'>Retour aux archives</a>

<?php include ('bottom.php'); ?>