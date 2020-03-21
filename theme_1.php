<head>
	<style>

	.video {
		height: 480px !important;
	}

	.footer {
		position: fixed;
		left: 50px;
		bottom: 10px;
		width: 100%;
		height: 80px;
		cursor: pointer;
		padding: 0;
		margin: 0px;
		z-index: 5;
	}

	.footer button {
		cursor: pointer;
		margin-bottom: 0px;
		border-radius: 25px;
		border: 2px solid;
	}

	.footer li {
		float:left;

	}

	.footer li :hover {
	 background-color: #FFF;
	 border: none;
	 width: 30px;
	 height: 30px;
	}

	.footer button :hover {
	 background-color: #FFF;
	 border: none;
	 width: 13px;
	 height: 13px;
	}

	</style>

<script src="https://player.vimeo.com/api/player.js"></script>

</head>

<div class="footer" style="padding-bottom: -5px;">
	<ul style="display:inline;" class="footer" >
		<audio autoplay loop volume="0.5" id="music" ontimeupdate='updateTrackTime(this);'>
		 <source src="/test/music2.mp3" type="audio/mpeg">
			 Your browser does not support the audio element.
		</audio>
		<li><button onclick="document.getElementById('music').play()" ><img src="/test/play.png" style="padding-top:3px;" width="13px" heigth="13px"></img></button></li>
		<li><button onclick="document.getElementById('music').pause()"><img src="/test/pause.png" style="padding-top:3px;" width="13px" heigth="13px"></img></button></li>
		<li><button onclick="document.getElementById('music').volume -= 0.1"><img src="/test/moins.png" style="padding-top:3px;" width="13px" heigth="13px"></img></button></li>
		<li><button onclick="document.getElementById('music').volume += 0.1"><img src="/test/plus.png" style="padding-top:3px;" width="13px" heigth="13px"></img></button></li>
	</ul>
</div>

<audio autoplay volume="0.1" id="son1">
 <source src="/test/son1.mp3" type="audio/mpeg">
	 Your browser does not support the audio element.
</audio>

<audio volume="0.1" id="son2">
 <source src="/test/son2.mp3" type="audio/mpeg">
	 Your browser does not support the audio element.
</audio>

<script>
	var audio = document.getElementById("music");
	audio.volume = 0.5;
    function updateTrackTime(track){
      var currTime = Math.floor(track.currentTime).toString(); 
      var duration = Math.floor(track.duration).toString();
        if((duration - currTime)<2 ){
            var fadeOut = setInterval(function(){
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
            }
            audio.volume -= 0.1;
        
          },200);
        }
        if(currTime==0 ){
            var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
        }
    }
</script>
</script>

<script>
var audio2 = document.getElementById("son1");
audio2.volume = 0.1;
</script>

<script>
var audio3 = document.getElementById("son2");
audio3.volume = 0.1;
</script>


    <div class="section chapter-1 fleche" data-chapter="0" id="chapter-1">
		<div class="intro">
			<h1 class="big-title">1990<br>NAISSANCE</h1>
            <img onclick="document.getElementById('son1').play()" src="<?php echo $src; ?>/imgs/fleche-bas.gif" class="ani" alt="fleche" />
		</div>
	</div>
	<div class="section chapter-1" data-chapter="0">
		<div class="intro">
			<div class="content">
				<div class="imgsContainer">
					<img src="<?php echo $src; ?>/imgs/photo-cofondateurs.png" class="ani" alt="photo-cofondateurs.png" />
				</div>
				<div class="box-beige aText box-beige-lg">
					<p class="block-text">À leur sortie de l’école secondaire, poussés par le désir de jouer, François Hurtubise et Sarto Gendron développent plusieurs projets avec le Théâtre de l’École Buissonnière (TEB Théâtre).
						Ils font ainsi la connaissance de Pierre-Yves Bernard, avec qui ils
						créent <b><i>Le Rock du grand méchant loup</i></b>, spectacle fondateur du
						Théâtre Bluff en 1990, compagnie de théâtre de création pour
						adolescents.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="section chapter-1" data-chapter="0">
		<div class="intro">
			<div class="content">
				<div class="imgsContainer">
					<img src="<?php echo $src; ?>/imgs/photo-cofondateurs.png" class="" alt="photo-cofondateurs.png" />
				</div>
				<div class="box-beige box-beige-2 box-beige-lg">
					<p class="block-text">Lavallois d’origine, François Hurtubise approche la ville de Laval qui accueille la compagnie à bras ouverts. Se partageant les tâches administratives au mieux de leurs connaissances, les trois membres fondateurs mettent sur pied leurs premiers spectacles dans des conditions difficiles. Les moyens financiers et techniques sont réduits, influençant les choix artistiques.<br>
						<br>
						La rareté des lieux de diffusion amène la création du festival Rencontre théâtre Ados, véritable vitrine offrant de la visibilité aux pièces pour adolescents.<br>
						<br>
						François Hurtubise quitte le Théâtre Bluff en 1996. Il est maintenant diffuseur de spectacles à la Maison des Arts de Laval.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="section chapter-2" data-chapter="2" id="chapter-2">
		<div class="intro">
			<div class="content">
				<p>François Hurtubise nous parle de la naissance du Théâtre Bluff <br>
				  – Il est coordonnateur de la Maison des arts de Laval et est <br>
				  cofondateur du Théâtre Bluff.</p>
			</div>
			<p class="credits">Laboratoire public. Comédiens : Jean-François Boudreau et
				Stéphane Archambault. Mise en scène : François Hurtubise
				Collection Théâtre Bluff</p>
		</div>
	</div>
	<div class="section chapter-2 content-gallery" data-chapter="2">
		<div class="slide">
			<div class="intro-gallery">
				<ul class="gallery list-unstyled cS-hidden">
					<li data-thumb="https://i.vimeocdn.com/video/683089984_640.jpg" data-src="https://i.vimeocdn.com/video/670988263_640.jpg">
						<div  class="video" id="video1"></div>
						<p class="key">Racontez-nous la naissance du Théâtre Bluff</p>
					</li>
					<li data-thumb="https://i.vimeocdn.com/video/683090269_640.jpg" data-src="https://i.vimeocdn.com/video/670989016_640.jpg">
						<div  class="video" id="video2"></div>
						<p class="key">Pourquoi avoir choisi de fonder une compagnie de théâtre pour adolescents ?</p>
					</li>
                    <li data-thumb="https://i.vimeocdn.com/video/680773121_640.jpg" data-src="https://i.vimeocdn.com/video/670989016_640.jpg">
					  <div  class="video" id="video3"></div>
						<p class="key">Pourquoi avez-vous décidé de vous établir à Laval ?</p>
					</li>
					<li data-thumb="https://i.vimeocdn.com/video/683091289_640.jpg" data-src="https://i.vimeocdn.com/video/670990132_640.jpg">
						<div  class="video" id="video4"></div>
						<p class="key">Comment partagiez-vous les tâches administratives ou techniques au sein de la compagnie ?</p>
					</li>
					<li data-thumb="https://i.vimeocdn.com/video/679644686_640.jpg" data-src="https://i.vimeocdn.com/video/670993971_640.jpg">
						<div  class="video" id="video5"></div>
						<p class="key">Quelle place occupait le théâtre pour adolescents au tournant des années 1990 ?</p>
					</li>
					<li data-thumb="https://i.vimeocdn.com/video/679644482_640.jpg" data-src="https://i.vimeocdn.com/video/670994480_640.jpg">
						<div  class="video" id="video6"></div>
					  <p class="key">Dans quelles conditions produisiez-vous les premiers spectacles ?</p>
					</li>
					<li data-thumb="https://i.vimeocdn.com/video/688521263_640.jpg" data-src="https://i.vimeocdn.com/video/670995888_640.jpg">
						<div  class="video" id="video7"></div>
						<p class="key">De quelle manière les contraintes influençaient vos choix artistiques?</p>
					</li>
                    					<li data-thumb="https://i.vimeocdn.com/video/688521484_640.jpg" data-src="https://i.vimeocdn.com/video/670995888_640.jpg">
					<div  class="video" id="video8"></div>
						<p class="key">Quelles étaient les conditions de diffusion durant les années 1990 ?</p>
					</li>
					<li data-thumb="https://i.vimeocdn.com/video/688521857_640.jpg" data-src="https://i.vimeocdn.com/video/670996527_640.jpg">
						<div  class="video" id="video9"></div>
						<p class="key">Racontez-nous une anecdote qui a marqué l’histoire du Théâtre Bluff.</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="section chapter-3" data-chapter="3" id="chapter-3">
		<div class="intro">
			<h1 class="title-img-top"><img src="<?php echo $src; ?>/imgs/titre-retour.png" alt="Retour dans le temps"></h1>
		</div>
	</div>
	<div class="section chapter-4" data-chapter="3">
		<div class="intro">
			<div class="content">
				<h1 class="title-img-top">Le Rock du <br>grand méchant loup</h1>
			</div>
		</div>
	</div>
	<div class="section chapter-4" data-chapter="3">
		<div class="intro">
			<div class="content">
				<div class="bleft"></div>
				<div class="bright">
					<p class="block-text-piece block-haut"><i>Le Rock du grand méchant loup</i> est une hilarante comédie qui
porte sur le passage du secondaire au cégep, ou plus symboliquement,
sur le passage de l’adolescence au monde adulte. Par
le biais de l’humour, les personnages nous conduisent à réfléchir
sur la vie à l’école et invitent les spectateurs à la poursuite de
leurs propres idéaux.<br><br>
La pièce<i> Le Rock du grand méchant loup</i> est le spectacle fondateur
du Théâtre Bluff. Il a été joué durant plusieurs années dans de nombreuses écoles du Québec<br>
<br>
Texte : Pierre-Yves Bernard<br>
Mise en scène : Pierre-Yves Bernard<br>
Avec : Chantal Dumoulin, France Parent, Sylvie Lessard, Sarto Gendron, François Hurtubise et Benoît Éthier<br>
Scénographie : Guy Declos et Anne Plamondon<br>
Chorégraphie : Caroline Lavoie<br>
Bande Sonore : Carol Lechasseur			        </p>
				</div>
			</div>
		</div>
	</div>
	<div class="section chapter-4" data-chapter="3">
		<div class="intro"><h2>Programme du <i>Rock du grand méchant loup</i></h2>
			<div class="content block-haut">
				<img src="<?php echo $src; ?>/imgs/programme-rock-1.png" class="ani aBigImage" alt="affiches-tournee" />
				<p class="credits">La troupe TEB Théâtre, ancêtre du Théâtre Bluff, aura connu une vie éphémère mais prolifique. <br>
			  Parmi ses succès, on compte les pièces<i> Finis les folies</i> et <i>Le Rock du grand méchant loup.</i><br>Au moment de la conception de ce programme, le Théâtre Bluff n’existe pas encore officiellement. Il sera créé la même année, le 22 novembre 1990.</p>
			</div>
		</div>
	</div>
	<div class="section chapter-4" data-chapter="3">
		<div class="intro"><h2>Programme du <i>Rock du grand méchant loup</i></h2>
			<div class="content">
				<img src="<?php echo $src; ?>/imgs/programme-rock-2.png" class="ani aBigImage" alt="affiches-tournee" />
				<p class="credits">La pièce était présentée à l’intérieur des écoles et la troupe transportait
	avec elle ses systèmes d’éclairage et de son. Il existait 2 versions du spectacle. La plus courte pouvait être jouée
	sur l’heure de dîner des étudiants! Aujourd’hui, ce sont les élèves qui se déplacent dans les lieux de
	diffusion. Ils peuvent ainsi assister à des pièces de théâtre dans des
	conditions optimales.</p>
			</div>
		</div>
	</div>
 <!-- Mercenaires 1 titre -->
	<div class="section chapter-5" data-chapter="3">
		<div class="intro">
			<div class="content">
				<h1 class="title-img-top">Les Mercenaires</h1>
			</div>
		</div>
	</div>
 <!-- Mercenaires-synopsis -->
	<div class="section chapter-5" data-chapter="3">
		<div class="intro">
			<div class="content">
				<div class="bleft"></div>
				<div class="bright">
					<p class="block-text-piece">Sophie, 16 ans, a une ambition, profiter de chaque moment qui passe avant que
ne se réalisent les catastrophes que prédisent quotidiennement les bulletins de
nouvelles à la télé : détérioration de l’environnement, récession économique,
sida, etc. Hantée par cette vision apocalyptique que transmet la télé, elle entreprend
de vivre sa vie au maximum avant que la planète ne saute.<br>
Sophie quitte donc l’école et sera confrontée à ses peurs et ses idéaux. Son désir
de vivre l’emportera toutefois et la convaincra qu’elle peut agir sur ce monde qui
n’a finalement rien d’apocalyptique.</p>
				</div>
			</div>
           <p class="credits">Sur la photo: Sarto Gendron et France Parent.</p>
		</div>
	</div>
     <!-- Mercenaires-credits -->
	<div class="section chapter-5" data-chapter="3">
		<div class="intro">
			<div class="content">
				<div class="bleft">
					<img src="<?php echo $src; ?>/imgs/affiche-mercenaires.png" class="" alt="affiche-mercenaires.png" />
				</div>
				<div class="bright">
					<p class="block-text-piece">
Texte : Pierre-Yves Bernard<br>
Mise en scène : Luce Pelletier<br>
Avec : Isabelle Drainville, Sarto Gendron, Martin Héroux, France Parent, Luc Pilon, Christine Séguin et Chantal Valade<br>
Scénographie : Catherine Granche<br>
Bande sonore : Diane Leboeuf<br>
Éclairages et régie : Sylvain Bédard<br>
Chorégraphies : Shantal Nicole<br>
Conseillères dramaturgiques : <br>
Chantale Cadieux et Sylvie Provost</p>
				</div>
			</div>
		</div>
	</div>
  <!-- Chacals-titre -->
	<div class="section chapter-6" data-chapter="3">
		<div class="intro">
			<div class="content">
				<h1 class="title-img-top">En hommage aux chacals</h1>
			</div>
		</div>
	</div>
  <!-- Chacals-synopsis -->
	<div class="section chapter-6" data-chapter="3">
		<div class="intro">
			<div class="content">
				<div class="bleft"></div>
				<div class="bright">
					<p class="">Dans la cité, la nuit venue, ils hantent les rues désertes à
la recherche de victimes potentielles, prêts à tout pour
accroître leur puissance. Ils sont regroupés en trois gangs,
les Businessmen, les Avocats et les Politiciens. Leurs proies
: les exclus, ceux qui, d’après eux, refusent de contribuer au
système et à leur propre enrichissement.</p><br>
<small>Sur la photo : France Galarneau, Jocelyn Blanchard, Guillerma Kerwin et François Hurtubise.</small>
				</div>
			</div>
		</div>
	</div>
	<div class="section chapter-6" data-chapter="3">
		<div class="intro">
			<div class="content">
				<div class="bleft">
					<img src="<?php echo $src; ?>/imgs/affiche-chacals.png" class="ani" alt="affiche-chacals.png" />
				</div>
				<div class="bright ani aText">
					<p class="">Texte : Pierre-Yves Bernard<br>
Mise en scène : Mario Boivin<br>
Avec : Stéphane Archambault, Jocelyn Blanchard, France Galarneau, François Hurtubise, Guillerma Kerwin et Joël Marin<br>
Assistance à la mise en scène : Sarto Gendron<br>
Scénographie : Pierre-André Vézina<br>
Costumes : Mireille Vachon<br>
Bande sonore : Mario Boivin<br>
Éclairages : Sylvain Bédard<br>
Assistance à la production : Martin Collins<br>
Décors : Pierre-André Vézina</p><br>
					<small>Sur la photo: France Galarneau et Joël Marin.</small>
				</div>
			</div>
		</div>
	</div>
<!-- Chacals-photos -->
	<div class="section chapter-7 slides" data-chapter="3">
		<div class="slide">
			<div class="intro" style="background-image: url('<?php echo $src; ?>/imgs/photo-1.6.jpg');">
				<p class="credits">Comédiens: France Galarneau, François Hurtubise, Joël Marin et Stéphane Archambault <br>Collection Théâtre Bluff</p>
			</div>
		</div>
		<div class="slide">
			<div class="intro" style="background-image: url('<?php echo $src; ?>/imgs/photo-1.8.jpg');">
				<p class="credits">Comédiens: France Galarneau et Joël Marin <br>Collection Théâtre Bluff</p>
			</div>
		</div>
        		<div class="slide">
			<div class="intro" style="background-image: url('<?php echo $src; ?>/imgs/photo-1.9.jpg');">
				<p class="credits">Comédien : Joël Marin<br>Collection Théâtre Bluff</p>
			</div>
		</div>
	</div>
	<!-- - -->
	<!-- RTA titre -->
	<div class="section chapter-8" data-chapter="4" id="chapter-4">
		<div class="intro">
			<h1 class="title-img-top"><img src="<?php echo $src; ?>/imgs/titre-rencontre.png" alt="Rencontres Théâtre ADOS"></h1>
		</div>
	</div>
	<!-- RTA tx1 -->
	<div class="section chapter-8" data-chapter="4">
		<div class="intro">
			<div class="content">
				<div class="box-beige aText">
					<p class="block-text">Signe d’un renouveau du théâtre jeunesse au Québec, la <b>Rencontre <br>
				    Théâtre Ados</b>, fondée en 1996 par Pierre-Yves Bernard, Sarto Gendron, <br>
				    François Hurtubise et Sylvie Lessard, propose à chaque année des <br>
				    oeuvres de création devant un public adolescent.<br>
					  <br>
				  La première édition présente <b><i>En hommage aux chacals</i></b> du Théâtre Bluff, <br>
				  trois productions étudiantes ainsi que des ateliers de création. <br>
				  1 600 spectateurs y assistent.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- RTA tx2 -->
	<div class="section chapter-9" data-chapter="4">
		<div class="intro">
			<div class="content">
				<div class="box-beige aText">
					<p class="block-text">Depuis sa création, la Rencontre Théâtre Ados a accueilli<br>
plus de 200 000 spectateurs et n’a cessé de croître pour devenir <br>
l’un des plus grands festivals de théâtre de création pour adolescents <br>
au Canada.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- RTA video -->
	<div class="section chapter-9 content-gallery" data-chapter="4">
		<div class="slide">
			<div class="intro-gallery">
				<ul class="gallery">
					<li>
						<div  class="video" id="video10"></div>
						<p class="key">Comment est né le festival de la <b>Rencontre Théâtre Ados</b> ?</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Drama titre -->
	<div class="section chapter-10" data-chapter="5" id="chapter-5">
		<div class="intro">
			<h1 class="title-img-top"><img src="<?php echo $src; ?>/imgs/titre-texte-drama.png" alt="Le texte dramatique"></h1>
		</div>
	</div>

<!-- Drama tx1  -->
	<div class="section chapter-10" data-chapter="5">
		<div class="intro">
			<div class="content">
				<div class="box-beige aText">
					<p class="block-text"><b>Élisabeth Bourget</b> nous parle de son métier.
					  <br>
					  <br>
				    Elle est conseillère dramaturgique au Centre d’essai des auteurs dramatiques, doctorante en études et pratiques des arts à l’UQAM et elle effectue une recherche sur la formation en écriture et l’accompagnement dramaturgique.</p>
				</div>
			</div>
		</div>
	</div>
<!-- Drama - videos E.B. -->
	<div class="section chapter-10 content-gallery" data-chapter="5">
		<div class="slide">
			<div class="intro-gallery">
				<ul class="gallery list-unstyled cS-hidden">
					<li data-thumb="https://i.vimeocdn.com/video/678639489_640.jpg" data-src="https://i.vimeocdn.com/video/683078956_200.jpg">
						<div  class="video" id="video11"></div>
						<p class="key">Élisabeth Bourget nous raconte son parcours professionnel.</p>
					</li>
					<li data-thumb="https://i.vimeocdn.com/video/678639183_640.jpg" data-src="https://i.vimeocdn.com/video/674075808_200.jpg">
						<div  class="video" id="video12"></div>
						<p class="key">Qu’est-ce qu’un texte dramatique ?</p>
					</li>
					<li data-thumb="https://i.vimeocdn.com/video/678640154_640.jpg" data-src="https://i.vimeocdn.com/video/677491608_200.jpg">
						<div  class="video" id="video13"></div>
						<p class="key">Quels éléments essentiels considérez-vous lorsque vous écrivez un texte pour la scène ?</p>
					</li>
					<li data-thumb="https://i.vimeocdn.com/video/683087308_640.jpg" data-src="https://i.vimeocdn.com/video/683079487_200.jpg">
						<div  class="video" id="video14"></div>
						<p class="key">Qu’est-ce que ça prend pour écrire un bon texte dramatique ?</p>
					</li>
					<li data-thumb="https://i.vimeocdn.com/video/683087394_640.jpg" data-src="https://i.vimeocdn.com/video/683079630_200.jpg">
						<div  class="video" id="video15"></div>
						<p class="key">Parlez-nous des étapes de rédaction à suivre lorsque vous écrivez une pièce de théâtre.</p>
					</li>
					<li data-thumb="https://i.vimeocdn.com/video/678640780_640.jpg" data-src="https://i.vimeocdn.com/video/674076326_200.jpg">
						<div  class="video" id="video16"></div>
						<p class="key">Que trouvez-vous le plus difficile dans la rédaction d’un texte dramatique ?</p>
					</li>
					<li data-thumb="https://i.vimeocdn.com/video/678639670_640.jpg" data-src="https://i.vimeocdn.com/video/683079898_200.jpg">
						<div  class="video" id="video17"></div>
						<p class="key">Parlez-nous des auteurs dramatiques qui ont marqué l’histoire du théâtre ici et à travers le monde.</p>
					</li>
					<li data-thumb="https://i.vimeocdn.com/video/683087675_640.jpg" data-src="https://i.vimeocdn.com/video/683080229_200.jpg">
						<div  class="video" id="video18"></div>
						<p class="key">Qu’est-ce qui caractérise un bon auteur dramatique ?</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- DRAMA tx2 -->
	<div class="section chapter-10" data-chapter="5">
		<div class="intro">
			<div class="content">
				<div class="box-beige aText block-text-center">
					<p class="block-text"><b>Sébastien David</b> nous parle du métier de dramaturge.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- DRAMA videos S.D. -->
	<div class="section chapter-10 content-gallery" data-chapter="5">
		<div class="slide">
			<div class="intro-gallery">
				<ul class="gallery list-unstyled cS-hidden">
					<li data-thumb="https://i.vimeocdn.com/video/720826269_640.jpg" data-src="https://i.vimeocdn.com/video/720826269_640.jpg">
						<div  class="video" id="video19"></div>
						<p class="key">Qu’est-ce qu’un dramaturge?</p>
					</li>
					<li data-thumb="https://i.vimeocdn.com/video/678641966_640.jpg" data-src="https://i.vimeocdn.com/video/678641966_640.jpgg">
						<div  class="video" id="video20"></div>
						<p class="key">Lorsque tu rédiges un texte, est-ce que tu sais déjà tout ce que tu vas écrire ou si le texte se développe au fur et à mesure ?</p>
					</li>
					<li data-thumb="https://i.vimeocdn.com/video/678642218_640.jpg" data-src="https://i.vimeocdn.com/video/678642218_640.jpg">
						<div  class="video" id="video21"></div>
						<p class="key">Comment te prépares-tu pour écrire une pièce ?</p>
					</li>
					<li data-thumb="https://i.vimeocdn.com/video/678642490_640.jpg" data-src="https://i.vimeocdn.com/video/678642490_640.jpg">
						<div  class="video" id="video22"></div>
						<p class="key">Qu’est-ce qui est différent lorsque tu écris pour des adolescents ?</p>
					</li>
					<li data-thumb="https://i.vimeocdn.com/video/736086870_260x146.jpg" data-src="https://i.vimeocdn.com/video/736086870_260x146.jpg">
						<div  class="video" id="video23"></div>
						<p class="key">Qu’est-ce que tu trouves le plus intéressant dans le métier d’auteur ?</p>
					</li>
					<li data-thumb="https://i.vimeocdn.com/video/678642931_640.jpg" data-src="https://i.vimeocdn.com/video/678642931_640.jpg">
						<div  class="video" id="video24"></div>
						<p class="key">Qu’est-ce que tu trouves le plus difficile dans le métier d’auteur ?</p>
					</li>

					<li data-thumb="https://i.vimeocdn.com/video/678643275_640.jpg" data-src="https://i.vimeocdn.com/video/678643275_640.jpg">
						<div  class="video" id="video25"></div>
						<p class="key">Raconte-nous un élément marquant de ton métier d’auteur</p>
					</li>
					<li data-thumb="https://i.vimeocdn.com/video/678643512_640.jpg" data-src="https://i.vimeocdn.com/video/678643512_640.jpg">
						<div  class="video" id="video26"></div>
						<p class="key">Lorsqu’un auteur écrit une oeuvre, est-ce qu’il y insère toujours une part d’autobiographie ?</p>
					</li>
					<li data-thumb="https://i.vimeocdn.com/video/678643778_260x146.jpg" data-src="https://i.vimeocdn.com/video/678643778_260x146.jpg">
						<div  class="video" id="video27"></div>
						<p class="key">Lorsque tu écris une pièce de théâtre, quels sont les composantes essentielles dont tu dois tenir compte ?</p>
					</li>
					<li data-thumb="https://i.vimeocdn.com/video/688531481_640.jpg" data-src="https://i.vimeocdn.com/video/688531481_640.jpg">
						<div  class="video" id="video28"></div>
						<p class="key">Lorsque tu écris une scène de théâtre, quels sont les éléments importants dont tu dois tenir compte ?</p>
					</li>

					<li data-thumb="https://i.vimeocdn.com/video/678644302_640.jpg" data-src="https://i.vimeocdn.com/video/678644302_640.jpg">
						<div  class="video" id="video29"></div>
						<p class="key">Quand tu crées un personnage, est-ce que tu le contrôles entièrement ou bien est-ce lui qui te mène ?</p>
					</li><li data-thumb="https://i.vimeocdn.com/video/678644590_640.jpg" data-src="https://i.vimeocdn.com/video/678644590_640.jpg">
						<div  class="video" id="video30"></div>
						<p class="key">Quel est l’élément déclencheur qui te permet d’écrire ?</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- INTRO extraits pièces -->
	<div class="section chapter-10" data-chapter="5" id="chapter-5">
		<div class="intro">
			<div class="content">
				<div class="box-blue">
					<p>Voici des extraits tirés des pièces <b><i>Les Mercenaires</i></b> (1993) et <b><i>Antioche</i></b> (2017). <br>
					  Amusez-vous à les comparer, en vous posant les questions suivantes&nbsp;: <br><br>
					Où et quand se situe l’action?<br>
					Quel est le conflit?<br>
					Quels sont les thèmes abordés?<br>
					Qui sont les personnages principaux? Quels liens entretiennent-ils?</p>
				</div>
			</div>
		</div>
	</div>
<!-- RESUME Mercenaires -->
	<div class="section chapter-11" data-chapter="5">
		<div class="intro">
			<div class="content">
				<div class="box-beige aText">
					<p class="block-text"><b>Résumé de la pièce <i>Les Mercenaires</i></b> <br>
					  <br>
Sophie, 16 ans, a une ambition, profiter de chaque moment qui passe avant que ne se réalisent les catastrophes que prédisent quotidiennement les bulletins de nouvelles à la télé : détérioration de l’environnement, récession économique, sida, etc. Hantée par cette vision apocalyptique que transmet la télé, elle entreprend de vivre sa vie au maximum avant que la planète ne saute.</p>
				</div>
			</div>
		</div>
	</div>
<!--  EXTRAIT Les Mercenaires -->
	<div class="section chapter-11 extraits" data-chapter="5" id="chapter-5">
		<div class="intro">
			<div class="content" style="padding: 10px 10px 0px 10px;">
				<div class="box-extrait">
					<p class="top-tire">EXTRAIT TIRÉ DE LA PIÈCE</p>
                    <h5>Théâtre pour adolescents</h5>
				  <h3>Les Mercenaires</h3>
					<h5>Texte de Pierre-Yves Bernard<br>
					Janvier 1995</h5>
					<br>
					<div class="text-extrait"><?php require_once(dirname(__FILE__).'/theme_1_extrait_2.php'); ?></div>
				</div>
			</div>
		</div>
	</div>
<!-- RESUME Antioche -->
	<div class="section chapter-12" data-chapter="5">
		<div class="intro">
			<div class="content">
				<div class="box-beige aText">
					<p class="block-text"><b>Résumé de la pièce <i>Antioche</i></b> <br>
					  <br>
Jade fait des listes et des rencontres sur internet pour essayer de trouver un sens à sa révolte. Antigone, sa meilleure amie morte dans une pièce écrite il y a 2500 ans, essaie désespérément de faire jouer sa tragédie à la troupe de théâtre de l’école. Inès, la mère de Jade, erre comme un fantôme dans leur maison de banlieue. Antioche, c’est l’histoire de trois filles emmurées vivantes qui décident de fuir vers l’avant. Et surtout, d’une rencontre improbable dans la ville d’Antioche, en Turquie, là où tout pourrait encore changer.</p>
				</div>
			</div>
            	<p class="credits"><i>Antioche</i>, Sarah Laurendeau. Photo: Marie-Andrée Lemire. Collection Théâtre Bluff</p>
		</div>
	</div>
<!--  EXTRAIT Antioche -->
	<div class="section chapter-12 extraits" data-chapter="5" id="chapter-5">
		<div class="intro">
			<div class="content" style="padding: 10px 10px 0px 10px;">
				<div class="box-extrait">
					<p class="top-tire">EXTRAIT TIRÉ DE LA PIÈCE</p>
					<h3>Antioche</h3>
					<h4>Tragédie en deux actes</h4>
					<h5>De Sarah Berthiaume</h5>
					<br>
					<div class="text-extrait"><?php require_once(dirname(__FILE__).'/theme_1_extrait_1.php'); ?></div>
				</div>
			</div>
		</div>
	</div>
	<!-- SUR Mercenaires -->
	<div class="section chapter-11 mercenaires" data-chapter="5">
		<div class="intro">
			<div class="content">
				<div class="box-beige aText">
					<p class="block-text"><b><br>
				    Sur la pièce…</b> <br><br>
				  La pièce <b><i>Les Mercenaires</i></b> parle de thèmes liés à des problématiques de l’époque <br>
				  (années 90). Elle met en scène la génération x, qui peine à se trouver des emplois <br>
				  stables et bien rémunérés, dans un contexte social déprimant. L’auteur Pierre-Yves Bernard parvient à traiter avec humour et légèreté de réalités difficiles.</p><br>
<small>Sur la photo:  Luc Pilon et Christine Séguin. </small>
				</div>
			</div>
		</div>
	</div>
<!-- SUR Antioche -->
	<div class="section chapter-12" data-chapter="5">
		<div class="intro">
			<div class="content">
				<div class="box-beige aText">
					<p class="block-text"><br><b>Sur la pièce…</b> <br>
					  <br>
				  Dans la pièce <i><b>Antioche</b></i>, Sarah Berthiaume présente des femmes révoltées et éprises de liberté, qui cherchent à donner un sens à leur existence. La langue est vive, rythmée et pleine d’humour.<br>
				  L’auteure aborde elle aussi des thèmes d’actualité, comme le phénomène de la radicalisation, les tensions entre l’Occident et l’Orient et le vide de valeurs des sociétés de consommation.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Conclusion -->
	<div class="section chapter-10" data-chapter="5">
		<div class="intro">
			<div class="content">
				<div class="box-blue">
					<p><br><b>En conclusion</b> <br>
					  <br>
Ces œuvres, écrites à 23 ans d’intervalle, ont plus de points en commun qu’il n’y paraît. Comme vous l’avez sans doute constaté, elles abordent des enjeux de société. Elles sont définitivement ancrées dans leur époque. Aussi, les deux auteurs n’hésitent pas à utiliser l’humour pour faire passer leurs propos, parfois graves. Dans les deux cas, les dramaturges ont choisi pour héroïnes des jeunes femmes, qui se placent en marge de la société, par refus des conventions et par désir d’émancipation. Enfin, malgré la grandeur des conflits et des tiraillements entre les personnages, les deux pièces présentent des situations issues du quotidien. Dans celle de Sarah Berthiaume cependant, la mise en place de départ bascule soudain dans le réalisme magique, faisant accéder au spectateur à une dimension tragique et onirique!
<br><br>
Cet exemple démontre que, depuis ses débuts, le Théâtre Bluff est resté fidèle à sa mission première. Celle de mettre de l’avant des prises de parole engagées, en évitant de donner des réponses simples à des questionnements complexes, afin d’amener le public à questionner le monde qui l’entoure.
<br><br>
Voyez-vous d’autres similitudes ou différences entre ces deux textes?</p>
				</div>
			</div>
		</div>
	</div>
	<!--
	<div class="section chapter-13 slides definitions" data-chapter="5">
		<div class="slide">
			<div class="intro">
				<h3 class="title-img-top">Découvre la définition <br>de chaque mot :</h3>
				<div class="reps">
					<div class="text-vertical quest"><p>Cintre</p></div>
					<div class="text-vertical def anim2 fadeIn one"><p>Partie d’un théâtre située au-dessus de la scène,
	où l’on remonte les décors. <br>
<small>Petit Larousse 2009</small></p></div>
				</div>
			</div>
		</div>
		<div class="slide">
			<div class="intro">
				<h3 class="title-img-top">Découvre la définition <br>de chaque mot :</h3>
				<div class="reps">
					<div class="text-vertical quest"><p>Didascalie</p></div>
					<div class="text-vertical def  anim2 fadeIn one"><p>Ensemble des instructions de jeu et de mise
en scène données par l’auteur dans une pièce de théâtre. <br>
<small>Petit Larousse 2009</small></p></div>
				</div>
			</div>
		</div>
		<div class="slide">
			<div class="intro">
				<h3 class="title-img-top">Découvre la définition <br>de chaque mot :</h3>
				<div class="reps">
					<div class="text-vertical quest"><p>Acte</p></div>
					<div class="text-vertical def  anim2 fadeIn one"><p>Chacune des principales divisions d’une pièce de
théâtre ou d’un opéra. <br>
<small>Petit Larousse 2009</small></p></div>
				</div>
			</div>
		</div>
		<div class="slide">
			<div class="intro">
				<h3 class="title-img-top">Découvre la définition <br>de chaque mot :</h3>
				<div class="reps">
					<div class="text-vertical quest"><p>Aparté</p></div>
					<div class="text-vertical def  anim2 fadeIn one"><p>Ce qu’un acteur dit à part soi, et qui, selon les
conventions théâtrales, n’est entendu que des spectateurs. <br>
<small>Petit Larousse 2009</small></p></div>
				</div>
			</div>
		</div>
		<div class="slide">
			<div class="intro">
				<h3 class="title-img-top">Découvre la définition <br>de chaque mot :</h3>
				<div class="reps">
					<div class="text-vertical quest"><p>Cabotin</p></div>
					<div class="text-vertical def  anim2 fadeIn one"><p>Acteur médiocre qui a une haute opinion de
lui-même. <br>
<small>Petit Larousse 2009</small></p></div>
				</div>
			</div>
		</div>
		<div class="slide">
			<div class="intro">
				<h3 class="title-img-top">Découvre la définition <br>de chaque mot :</h3>
				<div class="reps">
					<div class="text-vertical quest"><p>Distribution</p></div>
					<div class="text-vertical def  anim2 fadeIn one"><p>Répartition des rôles entre les interprètes
d’un spectacle, d’un film, ensemble de ces interprètes. <br>
<small>Petit Larousse 2009</small></p></div>
				</div>
			</div>
		</div>
		<div class="slide">
			<div class="intro">
				<h3 class="title-img-top">Découvre la définition <br>de chaque mot :</h3>
				<div class="reps">
					<div class="text-vertical quest"><p>Figurant</p></div>
					<div class="text-vertical def  anim2 fadeIn one"><p>Acteur qui a un rôle peu important, généralement
muet, dans un spectacle. <br>
<small>Petit Larousse 2009</small></p></div>
				</div>
			</div>
		</div>
		<div class="slide">
			<div class="intro">
				<h3 class="title-img-top">Découvre la définition <br>de chaque mot :</h3>
				<div class="reps">
					<div class="text-vertical quest"><p>Côté jardin</p></div>
					<div class="text-vertical def anim2 fadeIn one"><p>Partie de la scène d’un théâtre située à la
gauche des spectateurs, par opposition au côté cour situé à
la droite des spectateurs. <br>
<small>Petit Larousse 2009</small></p></div>
				</div>
			</div>
		</div>
		<div class="slide">
			<div class="intro">
				<h3 class="title-img-top">Découvre la définition <br>de chaque mot :</h3>
				<div class="reps">
					<div class="text-vertical quest"><p>Mot de Cambronne</p></div>
					<div class="text-vertical def  anim2 fadeIn one"><p>Avant une pièce de théâtre, les
acteurs se souhaitent « bonne chance » en se disant
merde !</p></div>
				</div>
			</div>
		</div>
		<div class="slide">
			<div class="intro">
				<h3 class="title-img-top">Découvre la définition <br>de chaque mot :</h3>
				<div class="reps">
					<div class="text-vertical quest"><p>Italienne</p></div>
					<div class="text-vertical def  anim2 fadeIn one">
					  <p>Afin de bien se remémorer le texte, les acteurs
le récitent rapidement, sans costume, ni mouvement.</p></div>
				</div>
			</div>
		</div>
	</div>-->
	<!--Définition -->

	<div class="section chapter-14" data-chapter="5" id="chapter-5">
		<div class="intro">
            <img src="<?php echo $src; ?>/imgs/point-interrogation.gif" class="ani" alt="question" />
			<div class="reps">
				<div class="text-vertical quest"><p class="">Quelle est la définition du mot CINTRE ?</p></div>
				<input id="enter12" type="text" name="rep" class="rep-user" data-rep="3">
				<div class="text-vertical rep-auto rep1"><p class="">Partie d’un théâtre située au-dessus de la scène, où l’on remonte les décors. - <i>Petit Larousse 2009</i></p></div>
			</div>
			<a href="http://musee.bluff.qc.ca/theatre-pour-ados-décor-costume/"><img src="<?php echo $src; ?>/imgs/fleche-suite-quiz2.gif" alt="voir la suite" width: 100%/></a>
		</div>
	</div>

	<div class="section chapter-14" data-chapter="5" id="chapter-5">
		<div class="intro">
            <img src="<?php echo $src; ?>/imgs/point-interrogation.gif" class="ani" alt="question" />
			<div class="reps">
				<div class="text-vertical quest"><p class="">Quelle est la définition du mot DIDASCALIE ?</p></div>
				<input id="enter11" type="text" name="rep" class="rep-user" data-rep="4">
				<div class="text-vertical rep-auto rep1"><p class="">Ensemble des instructions de jeu et de mise en scène données par l’auteur dans une pièce de théâtre.  - <i>Petit Larousse 2009</i></p></div>
			</div>
			<a href="http://musee.bluff.qc.ca/theatre-pour-ados-décor-costume/"><img src="<?php echo $src; ?>/imgs/fleche-suite-quiz2.gif" alt="voir la suite" width: 100%/></a>
		</div>
	</div>

	<div class="section chapter-14" data-chapter="5" id="chapter-5">
		<div class="intro">
            <img src="<?php echo $src; ?>/imgs/point-interrogation.gif" class="ani" alt="question" />
			<div class="reps">
				<div class="text-vertical quest"><p class="">Quelle est la définition du mot ACTE ?</p></div>
				<input id="enter10" type="text" name="rep" class="rep-user" data-rep="6">
				<div class="text-vertical rep-auto rep1"><p class="">Chacune des principales divisions d’une pièce de théâtre ou d’un opéra. - <i>Petit Larousse 2009</i></p></div>
			</div>
			<a href="http://musee.bluff.qc.ca/theatre-pour-ados-décor-costume/"><img src="<?php echo $src; ?>/imgs/fleche-suite-quiz2.gif" alt="voir la suite" width: 100%/></a>
		</div>
	</div>

	<div class="section chapter-14" data-chapter="5" id="chapter-5">
		<div class="intro">
            <img src="<?php echo $src; ?>/imgs/point-interrogation.gif" class="ani" alt="question" />
			<div class="reps">
				<div class="text-vertical quest"><p class="">Quelle est la définition du mot APARTÉ ?</p></div>
				<input id="enter9" type="text" name="rep" class="rep-user" data-rep="6">
				<div class="text-vertical rep-auto rep1"><p class="">Ce qu’un acteur dit à part soi, et qui, selon les conventions théâtrales, n’est entendu que des spectateurs. - <i>Petit Larousse 2009</i></p></div>
			</div>
			<a href="http://musee.bluff.qc.ca/theatre-pour-ados-décor-costume/"><img src="<?php echo $src; ?>/imgs/fleche-suite-quiz2.gif" alt="voir la suite" width: 100%/></a>
		</div>
	</div>

	<div class="section chapter-14" data-chapter="5" id="chapter-5">
		<div class="intro">
            <img src="<?php echo $src; ?>/imgs/point-interrogation.gif" class="ani" alt="question" />
			<div class="reps">
				<div class="text-vertical quest"><p class="">Quelle est la définition du mot CABOTIN ?</p></div>
				<input id="enter8" type="text" name="rep" class="rep-user" data-rep="7">
				<div class="text-vertical rep-auto rep1"><p class="">Répartition des rôles entre les interprètes d’un spectacle, d’un film, ensemble de ces interprètes. - <i>Petit Larousse 2009</i></p></div>
			</div>
			<a href="http://musee.bluff.qc.ca/theatre-pour-ados-décor-costume/"><img src="<?php echo $src; ?>/imgs/fleche-suite-quiz2.gif" alt="voir la suite" width: 100%/></a>
		</div>
	</div>

	<div class="section chapter-14" data-chapter="5" id="chapter-5">
		<div class="intro">
            <img src="<?php echo $src; ?>/imgs/point-interrogation.gif" class="ani" alt="question" />
			<div class="reps">
				<div class="text-vertical quest"><p class="">Quelle est la définition du mot FIGURANT ?</p></div>
				<input id="enter7" type="text" name="rep" class="rep-user" data-rep="8">
				<div class="text-vertical rep-auto rep1"><p class="">Acteur qui a un rôle peu important, généralement muet, dans un spectacle. - <i>Petit Larousse 2009</i></p></div>
			</div>
			<a href="http://musee.bluff.qc.ca/theatre-pour-ados-décor-costume/"><img src="<?php echo $src; ?>/imgs/fleche-suite-quiz2.gif" alt="voir la suite" width: 100%/></a>
		</div>
	</div>

	<div class="section chapter-14" data-chapter="5" id="chapter-5">
		<div class="intro">
            <img src="<?php echo $src; ?>/imgs/point-interrogation.gif" class="ani" alt="question" />
			<div class="reps">
				<div class="text-vertical quest"><p class="">Quelle est la définition du mot CÔTÉ JARDIN ?</p></div>
				<input id="enter6" type="text" name="rep" class="rep-user" data-rep="9">
				<div class="text-vertical rep-auto rep1"><p class="">Partie de la scène d’un théâtre située à la gauche des spectateurs, par opposition au côté cour situé à la droite des spectateurs. - <i>Petit Larousse 2009</i></p></div>
			</div>
			<a href="http://musee.bluff.qc.ca/theatre-pour-ados-décor-costume/"><img src="<?php echo $src; ?>/imgs/fleche-suite-quiz2.gif" alt="voir la suite" width: 100%/></a>
		</div>
	</div>

	<div class="section chapter-14" data-chapter="5" id="chapter-5">
		<div class="intro">
            <img src="<?php echo $src; ?>/imgs/point-interrogation.gif" class="ani" alt="question" />
			<div class="reps">
				<div class="text-vertical quest"><p class="">Que signifie MOT DE CAMBRONNE ?</p></div>
				<input id="enter5" type="text" name="rep" class="rep-user" data-rep="10">
				<div class="text-vertical rep-auto rep1"><p class="">Avant une pièce de théâtre, les acteurs se souhaitent « bonne chance » en se disant merde !</p></div>
			</div>
			<a href="http://musee.bluff.qc.ca/theatre-pour-ados-décor-costume/"><img src="<?php echo $src; ?>/imgs/fleche-suite-quiz2.gif" alt="voir la suite" width: 100%/></a>
		</div>
	</div>

	<div class="section chapter-14" data-chapter="5" id="chapter-5">
		<div class="intro">
            <img src="<?php echo $src; ?>/imgs/point-interrogation.gif" class="ani" alt="question" />
			<div class="reps">
				<div class="text-vertical quest"><p class="">Que signifie le mot ITALIENNE ?</p></div>
				<input id="enter4" type="text" name="rep" class="rep-user" data-rep="11">
				<div class="text-vertical rep-auto rep1"><p class="">Afin de bien se remémorer le texte, les acteurs le récitent rapidement, sans costume, ni mouvement.</p></div>
			</div>
			<a href="http://musee.bluff.qc.ca/theatre-pour-ados-décor-costume/"><img src="<?php echo $src; ?>/imgs/fleche-suite-quiz2.gif" alt="voir la suite" width: 100%/></a>
		</div>
	</div>

	<div class="section chapter-14" data-chapter="5" id="chapter-5">
		<div class="intro">
            <img src="<?php echo $src; ?>/imgs/point-interrogation.gif" class="ani" alt="question" />
			<div class="reps">
				<div class="text-vertical quest"><p class="">Quelle est la définition du mot DISTRIBUTION ?</p></div>
				<input id="enter3" type="text" name="rep" class="rep-user" data-rep="8">
				<div class="text-vertical rep-auto rep1"><p class="">Répartition des rôles entre les interprètes d’un spectacle, d’un film, ensemble de ces interprètes.  - <i>Petit Larousse 2009</i></p></div>
			</div>
			<a href="http://musee.bluff.qc.ca/theatre-pour-ados-décor-costume/"><img src="<?php echo $src; ?>/imgs/fleche-suite-quiz2.gif" alt="voir la suite" width: 100%/></a>
		</div>
	</div>
	<!-- Définition -->

	<div class="section chapter-14" data-chapter="5" id="chapter-5">
		<div class="intro">
            <img src="<?php echo $src; ?>/imgs/point-interrogation.gif" class="ani" alt="question" />
			<div class="reps">
				<div class="text-vertical quest"><p class="">Quelle est la pièce fondatrice du Théâtre Bluff ?</p></div>
				<input id="enter" type="text" name="rep" class="rep-user" data-rep="1">
				<div class="text-vertical rep-auto rep1"><p class="">La pièce <i>Le Rock du grand méchant loup</i> est le spectacle fondateur du Théâtre Bluff.</p></div>
			</div>
			<a href="http://musee.bluff.qc.ca/theatre-pour-ados-décor-costume/"><img src="<?php echo $src; ?>/imgs/fleche-suite-quiz2.gif" alt="voir la suite" width: 100%/></a>
		</div>
	</div>
	<div class="section chapter-14" data-chapter="5">
		<div class="intro">
            <img src="<?php echo $src; ?>/imgs/point-interrogation.gif" class="ani" alt="question" />
			<div class="reps">
				<div class="text-vertical quest"><p class="">Quelles sont les étapes importantes à considérer lors de l’écriture d’une pièce de théâtre ?</p></div>
				<input id="enter2" type="text" name="rep" class="rep-user" data-rep="2">
				<div class="text-vertical rep-auto rep2"><p class="">Les personnages, la construction du récit et les thématiques abordées.</p></div>
			</div>
			<a href="http://musee.bluff.qc.ca/theatre-pour-ados-décor-costume/"><img src="<?php echo $src; ?>/imgs/fleche-suite-quiz2.gif" alt="voir la suite" width: 100%/></a>
		</div>
	</div>
	<div class="section chapter-14" data-chapter="5">
		<div class="intro"><a onclick="document.getElementById('son1').play()" href="http://musee.bluff.qc.ca/theatre-pour-ados-décor-costume/"><img src="<?php echo $src; ?>/imgs/fleche-suite-exploration.gif" class="ani" alt="voir la suite" /></a></div>
	</div>

  <script>
var music = document.getElementById("music");
 var son2 = document.getElementById("son2");
 var enter = document.getElementById("enter");
 var enter2 = document.getElementById("enter2");
  var enter3 = document.getElementById("enter3");
	var enter4 = document.getElementById("enter4");
	var enter5 = document.getElementById("enter5");
	var enter6 = document.getElementById("enter6");
	var enter7 = document.getElementById("enter7");
	var enter8 = document.getElementById("enter8");
	var enter9 = document.getElementById("enter9");
	var enter10 = document.getElementById("enter10");
	var enter11 = document.getElementById("enter11");
  var enter12 = document.getElementById("enter12");

 enter.addEventListener("keydown", function (e) {
		 if (e.keyCode === 13) {
				 play(e);
		 }
 });

 enter2.addEventListener("keydown", function (e) {
		 if (e.keyCode === 13) {
				 play(e);
		 }
 });

 enter3.addEventListener("keydown", function (e) {
		 if (e.keyCode === 13) {
				 play(e);
		 }
 });

 enter4.addEventListener("keydown", function (e) {
		if (e.keyCode === 13) {
				play(e);
		}
 });

 enter5.addEventListener("keydown", function (e) {
	 if (e.keyCode === 13) {
			 play(e);
	 }
 });

 enter6.addEventListener("keydown", function (e) {
		if (e.keyCode === 13) {
				play(e);
		}
 });

 enter7.addEventListener("keydown", function (e) {
		if (e.keyCode === 13) {
				play(e);
		}
 });

 enter8.addEventListener("keydown", function (e) {
		if (e.keyCode === 13) {
				play(e);
		}
 });

 enter9.addEventListener("keydown", function (e) {
	 if (e.keyCode === 13) {
			 play(e);
	 }
 });

 enter10.addEventListener("keydown", function (e) {
	if (e.keyCode === 13) {
			play(e);
	}
 });

 enter11.addEventListener("keydown", function (e) {
 if (e.keyCode === 13) {
		 play(e);
 }
 });

 enter12.addEventListener("keydown", function (e) {
 if (e.keyCode === 13) {
		 play(e);
 }
 });


 function play(e) {
	son2.play();
 }

   </script>
	  <script>

		var options01 = {
 		 url: "https://player.vimeo.com/video/253691204?title=0&byline=0&portrait=0",
 		 width: 853,
 		 height: 480
 	 };

 	 var options02 = {
 		 url: "https://player.vimeo.com/video/253791157?title=0&byline=0&portrait=0",
 		 width: 853,
 		 height: 480
 	 };

	 var options03 = {
 		 url: "https://player.vimeo.com/video/253791405?title=0&byline=0&portrait=0",
 		 width: 853,
 		 height: 480
 	 };

	 var options04 = {
 		 url: "https://player.vimeo.com/video/252892671?title=0&byline=0&portrait=0",
 		 width: 853,
 		 height: 480
 	 };

	 var options05 = {
 		 url: "https://player.vimeo.com/video/252892674?title=0&byline=0&portrait=0",
 		 width: 853,
 		 height: 480
 	 };

	 var options06 = {
 		 url: "https://player.vimeo.com/video/252892670?title=0&byline=0&portrait=0",
 		 width: 853,
 		 height: 480
 	 };

	 var options07 = {
 		 url: "https://player.vimeo.com/video/252892673?title=0&byline=0&portrait=0",
 		 width: 853,
 		 height: 480
 	 };

	 var options08 = {
 		 url: "https://player.vimeo.com/video/252892672?title=0&byline=0&portrait=0",
 		 width: 853,
 		 height: 480
 	 };

	 var options09 = {
 		 url: "https://player.vimeo.com/video/252892677?title=0&byline=0&portrait=0",
 		 width: 853,
 		 height: 480
 	 };

	 var options10 = {
			 url: "https://player.vimeo.com/video/252892677?title=0&byline=0&portrait=0",
			 width: 853,
			 height: 480
		 };

		 var options11 = {
  		 url: "https://player.vimeo.com/video/252097763?title=0&byline=0&portrait=0",
  		 width: 853,
  		 height: 480
  	 };

  	 var options12 = {
  		 url: "https://player.vimeo.com/video/252097889?title=0&byline=0&portrait=0",
  		 width: 853,
  		 height: 480
  	 };

 	 var options13 = {
  		 url: "https://player.vimeo.com/video/252098639?title=0&byline=0&portrait=0",
  		 width: 853,
  		 height: 480
  	 };

 	 var options14 = {
  		 url: "https://player.vimeo.com/video/252098352?title=0&byline=0&portrait=0",
  		 width: 853,
  		 height: 480
  	 };

 	 var options15 = {
  		 url: "https://player.vimeo.com/video/252098774?title=0&byline=0&portrait=0",
  		 width: 853,
  		 height: 480
  	 };

 	 var options16 = {
  		 url: "https://player.vimeo.com/video/252099088?title=0&byline=0&portrait=0",
  		 width: 853,
  		 height: 480
  	 };

 	 var options17 = {
  		 url: "https://player.vimeo.com/video/252098017?title=0&byline=0&portrait=0",
  		 width: 853,
  		 height: 480
  	 };

 	 var options18 = {
  		 url: "https://player.vimeo.com/video/252098470?title=0&byline=0&portrait=0",
  		 width: 853,
  		 height: 480
  	 };

 	 var options19 = {
  		 url: "https://player.vimeo.com/video/252099268?title=0&byline=0&portrait=0",
  		 width: 853,
  		 height: 480
  	 };

 	 var options20 = {
 			 url: "https://player.vimeo.com/video/252099935?title=0&byline=0&portrait=0",
 			 width: 853,
 			 height: 480
 		 };

		 var options21 = {
  		 url: "https://player.vimeo.com/video/252100246?title=0&byline=0&portrait=0",
  		 width: 853,
  		 height: 480
  	 };

  	 var options22 = {
  		 url: "https://player.vimeo.com/video/252100455?title=0&byline=0&portrait=0",
  		 width: 853,
  		 height: 480
  	 };

		 var options23 = {
			 url: "https://player.vimeo.com/video/252100725?title=0&byline=0&portrait=0",
			 width: 853,
			 height: 480
		 };

		 var options24 = {
			 url: "https://player.vimeo.com/video/252100842?title=0&byline=0&portrait=0",
			 width: 853,
			 height: 480
		 };
     var options25 = {
			 url: "https://player.vimeo.com/video/252101072?title=0&byline=0&portrait=0",
			 width: 853,
			 height: 480
		 };
     var options26 = {
			 url: "https://player.vimeo.com/video/252101321?title=0&byline=0&portrait=0",
			 width: 853,
			 height: 480
		 };
     var options27 = {
      url: "https://player.vimeo.com/video/252101548?title=0&byline=0&portrait=0",
      width: 853,
      height: 480
    };
    var options28 = {
      url: "https://player.vimeo.com/video/252101781?title=0&byline=0&portrait=0",
      width: 853,
      height: 480
    };
    var options29 = {
      url: "https://player.vimeo.com/video/252102039?title=0&byline=0&portrait=0",
      width: 853,
      height: 480
    };
    var options30 = {
      url: "https://player.vimeo.com/video/252102180?title=0&byline=0&portrait=0",
      width: 853,
      height: 480
    };



	 var video1Player = new Vimeo.Player("video1", options01);
	 var video2Player = new Vimeo.Player("video2", options02);
	 var video3Player = new Vimeo.Player("video3", options03);
	 var video4Player = new Vimeo.Player("video4", options04);
	 var video5Player = new Vimeo.Player("video5", options05);
	 var video6Player = new Vimeo.Player("video6", options06);
	 var video7Player = new Vimeo.Player("video7", options07);
	 var video8Player = new Vimeo.Player("video8", options08);
	 var video9Player = new Vimeo.Player("video9", options09);
	 var video10Player = new Vimeo.Player("video10", options10);
	 var video11Player = new Vimeo.Player("video11", options11);
	 var video12Player = new Vimeo.Player("video12", options12);
	 var video13Player = new Vimeo.Player("video13", options13);
	 var video14Player = new Vimeo.Player("video14", options14);
	 var video15Player = new Vimeo.Player("video15", options15);
	 var video16Player = new Vimeo.Player("video16", options16);
	 var video17Player = new Vimeo.Player("video17", options17);
	 var video18Player = new Vimeo.Player("video18", options18);
	 var video19Player = new Vimeo.Player("video19", options19);
	 var video20Player = new Vimeo.Player("video20", options20);
	 var video21Player = new Vimeo.Player("video21", options21);
   var video22Player = new Vimeo.Player("video22", options22);
	 var video23Player = new Vimeo.Player("video23", options23);
	 var video24Player = new Vimeo.Player("video24", options24);
	 var video25Player = new Vimeo.Player("video25", options25);
	 var video26Player = new Vimeo.Player("video26", options26);
	 var video27Player = new Vimeo.Player("video27", options27);
	 var video28Player = new Vimeo.Player("video28", options28);
	 var video29Player = new Vimeo.Player("video29", options29);
	 var video30Player = new Vimeo.Player("video30", options30);

	  </script>

	<script>

	video1Player.on('play', function() {
			$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
          
          
			

	});
	video2Player.on('play', function() {
			$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video3Player.on('play', function() {
		$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video4Player.on('play', function() {
		$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video5Player.on('play', function() {
		$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video6Player.on('play', function() {
		$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video7Player.on('play', function() {
		$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video8Player.on('play', function() {
		$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video9Player.on('play', function() {
		$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video10Player.on('play', function() {
		$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video11Player.on('play', function() {
		$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video12Player.on('play', function() {
		$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video13Player.on('play', function() {
		$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video14Player.on('play', function() {
		$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video15Player.on('play', function() {
		$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video16Player.on('play', function() {
		$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video17Player.on('play', function() {
		$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video18Player.on('play', function() {
		$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video19Player.on('play', function() {
		$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video20Player.on('play', function() {
		$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video21Player.on('play', function() {
		$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video22Player.on('play', function() {
			$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video23Player.on('play', function() {
		$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
	video24Player.on('play', function() {
		$('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
	});
video25Player.on('play', function() {
    $('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
});
video26Player.on('play', function() {
    $('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
});
video27Player.on('play', function() {
    $('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
});
video28Player.on('play', function() {
    $('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
});
video29Player.on('play', function() {
    $('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
});
video30Player.on('play', function() {
    $('.footer').hide("slide", { direction: "left" }, 2000);
	    
          var fadeOut = setInterval(function(){
        
            audio.volume = audio.volume -= 0.1;
            
            if(audio.volume < 0.1){
              clearInterval(fadeOut);
              music.pause();
              
            }
        
          },100);
});


	video1Player.on('pause', function() {
	    music.play();
          var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			
            
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video2Player.on('pause', function() {
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video3Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video4Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video5Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video6Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video7Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video8Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video9Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video10Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video11Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video12Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video13Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video14Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video15Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video16Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video17Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video18Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video19Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video20Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video21Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video22Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video23Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video24Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
  video25Player.on('pause', function() {
      audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video26Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video27Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);	$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video28Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video29Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});
	video30Player.on('pause', function() {
	    audio.volume = 0;
	    music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
			$('.footer').show("slide", { direction: "left" }, 2000);
	});


	video1Player.on('ended', function() {
			audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
	});
	video2Player.on('ended', function() {
			audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
    
	});
	video3Player.on('ended', function() {
			audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video4Player.on('ended', function() {
		audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
         
        
	});
	video5Player.on('ended', function() {
		audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video6Player.on('ended', function() {
		audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video7Player.on('ended', function() {
		audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video8Player.on('ended', function() {
		audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video9Player.on('ended', function() {
		audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video10Player.on('ended', function() {
			audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video11Player.on('ended', function() {
			audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video12Player.on('ended', function() {
			audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video13Player.on('ended', function() {
		audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video14Player.on('ended', function() {
			audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video15Player.on('ended', function() {
			audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video16Player.on('ended', function() {
			audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video17Player.on('ended', function() {
		audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video18Player.on('ended', function() {
		audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video19Player.on('ended', function() {
		audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	})
	video20Player.on('ended', function() {
			audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video21Player.on('ended', function() {
		audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video22Player.on('ended', function() {
		audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video23Player.on('ended', function() {
		audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video24Player.on('ended', function() {
		audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
  video25Player.on('ended', function() {
		audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video26Player.on('ended', function() {
		audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	})
	video27Player.on('ended', function() {
		audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video28Player.on('ended', function() {
		audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video29Player.on('ended', function() {
		audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	video30Player.on('ended', function() {
		audio.volume = 0;
			music.play();
        var fadeIn = setInterval(function(){
        
            audio.volume += 0.1;
            
            if(audio.volume > 0.5){
              clearInterval(fadeIn);
            }
        
          },200);
          
        
	});
	
</script>
