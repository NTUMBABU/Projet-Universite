<style type="text/css" media="screen">
/*-------------pour les footer------------------*/
h1 {
  font-size: 10vw;
  text-align: center;
  margin-top: 20px;
  color: #333;
}
footer
{
  flex-shrink: 0;
  border-top: 0px;
  width: 100%;
  background: #006CB2;
  color: #FFFFFF;
}
.contenu-footer {
  width: 1200px;
  margin: 0 auto;
  display: flex;
  justify-content: center;
  align-items: flex-start;
  font-size: 20px;
  padding: 50px 0 100px;
}

.bloc {
  width: 25%;
  margin: 0 30px;
}

/* contact */
..footer-services h3,
.footer-limoge h3,
.footer-reseaux h3
{
  font-size: 16px;
  padding-bottom: 10 px;
}

.footer-contact p {
  padding: 5px 0;
}

.footer-services/*taille des texte dans la liste srevice*/
{
  font-size: 12px;
}

.footer-logo/*positionnement du logo footer*/
{
  /*position: relative;*/
  position: relative;
  right: 30px;
}
.liste-Logo,
.liste-services,
.liste-limoge,
.liste-reseaux /*pour retire les point devant les liste*/
{
  list-style-type: none;
}
.liste-services li
{
  padding: 2px 0;
}
.liste-services a
{
  text-decoration: none;
  color: #FFFFFF;
}

.liste-services a:hover/*pour fair les hover flo sur les liens de liste*/
{
  color: rgb(3, 3, 3);
}
/*icone*/
.liste-limoge/*positionnement du logo limoge*/
{
  position: relative;
  top: 10px;
  right: 1px;
}
.liste-reseaux/*positionnement des logos de reseaux*/
{
  position: relative;
  top: 10px;
  right: 1px;
}
.liste-reseaux li/*metre a la ligne la liste*/
{
  display: inline;
}
.liste-services/*positionnement des liste services*/
{
  position: relative;
  top: 10px;
  right: 1px;
}
</style>
<footer>
  <div class="contenu-footer">
    <div class="bloc footer-logo ">
      <ul class="liste-Logo">
        <li>
          <a href="https://udm.ac.mu/?lang=fr"><img src="/Projet-Universite/multi-media/footerLogo.png" alt="logo footer" /></a>
        </li>
      </ul>
    </div>
    <div class="bloc footer-services">
      <h3>À propos de nous</h3>
      <ul class="liste-services">
        <li>
          <a href="#">Notre site</a>
        </li>
        <li>
          <a href="#">infos legales</a>
        </li>
        <li>
          <a href="#">Nous contacter</a>
        </li>
      </ul>
    </div>
    <div class="bloc footer-limoge">
      <h3>Partenaires<br/> académiques</h3>
      <ul class="liste-limoge">
        <li>
          <a href="https://www.unilim.fr/" target="_blank"><img src="/Projet-Universite/multi-media/logo-limoge.png" alt="Logo limoge"></a>
        </li>
      </ul>
    </div>
    <div class="bloc footer-reseaux">
      <h3>Nous suivre sur<br/> les réseaux sociaux</h3>
      <ul class="liste-reseaux">
        <li>
          <a href="https://www.facebook.com/UniversiteDesMascareignes/" target="_blank"><img src="/Projet-Universite/multi-media/facebook.png" alt="image facebook"></a>
        </li>
        <li>
          <a href="https://www.instagram.com/universite.des.mascareignes/" target="_blank"><img src="/Projet-Universite/multi-media/instagram.png" alt="instagrame"></a>
        </li>
        <li>
          <a href="https://twitter.com/udmmauritius?lang=en" target="_blank"><img src="/Projet-Universite/multi-media/twitter.png" alt="twitter"></a>
        </li>
        <li>
          <a href="https://www.linkedin.com/school/16172101" target="_blank"><img src="/Projet-Universite/multi-media/linkedin.png" alt="linkedin"></a>
        </li>
        <li>
          <a href="https://www.youtube.com/c/UNIVERSIT%C3%89DESMASCAREIGNES" target="_blank"><img src="/Projet-Universite/multi-media/youtube-svg.png" alt="youtube"></a>
        </li>
      </ul>
    </div>
  </div>
</footer>
