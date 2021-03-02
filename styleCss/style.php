<style type="text/css" media="screen">
body
{
  animation: transitionIn 0.75s;
}
@keyframes transitionIn
{
  from
  {
    opacity: 0;
    transform: translateY(-10px);
  }
  to
  {
    opacity: 1;
    transform: translateY(0);
  }
}

*, ::before, ::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
body{
  font-family: Arial, Helvetica, sans-serif;
  height: 100vh;
  display: flex;
  flex-direction: column;
}
.contenu {
  /* grow shrink basis */
  flex: 1 0 auto;
}
.contenu p {
  padding: 5vw 10vw;
  text-align: justify;
}
.boxp11/*contenaire principale*/
{
  position: relative;
  left: 50px;
  width: 94%;
  height: 500px;
  /*background: #9b9bff;*/
}

  .div_pg2/*la div du formulaire*/
  {
    background-color: #F2F3F4;
    height: 345px;
    width: 570px;
    border-radius: 5px;

    padding: 40px;
    position: relative;
    top: 200px;
    left: 300px;

    overflow: hidden;
    box-shadow: 5px 5px 10px #adadadad, -5px -5px 10px #eee;
  }
  form
  {
    text-align: center;
    font-size: 15px;
  }

  .titre1/*pour le titre s'identifier*/
  {
    font-size: 30px;
    color: #006CB2;
  }
/*pour les deux liens mot de passse oublie et s'inscrire*/
  .autre
  {
    font-size: 14px;
    list-style-type: none;
    margin-top: 15px;
    padding-left: 28%;
  }
  .autre li
  {
    display: inline;
  }
  .autre a {
    color: #3498db;
    text-decoration: none;
}
.autre a:hover
{
  text-decoration: underline;
}

/*pour le formulaire*/
.tableau1
{
  border-collapse: collapse;
  min-width: 400px;
  width: auto;
}
tr, td
{
  padding: 15px 20px;
}
/* table tr, td
{
  border: 1px solid #ddd;
} */
/*pour les les barre de text et les boutton*/
input[type="text"],
[type="password"],
[type="tel"],
[type="date"],
[type="mail"]
{
  /* border: none; */
  border: 1px solid silver;
  padding: 10px;
  margin: 2%;
  border-radius: 50px;
  width: 100%;
  height: 25px;
  background-color: #fff;
  outline: none;
}
select
{
  /* border: none; */
  border: 1px solid silver;
  margin: 2%;
  border-radius: 50px;
  width: 100%;
  height: 25px;
  background-color: #fff;
  outline: none;
}
input::placeholder
{
  color: #CFCFCF;
}

input[type="submit"]
{
  border: none;
  border-radius: 2px;
  padding: 7px;
  font-size: 15px;
  color: #fff;
  margin: 1%;
  cursor: pointer;
  background-color: #016bb2;
  height: 40px;
  width: 100px;
}
input[type="submit"]:hover
{
  background-color: #006cb2;
  opacity: 0.8;
  filter: alpha(opacity=50);
}


/*------------------pour la page s'inscrire-------------------*/

.div_pg3/*la div du formulaire*/
{
  background-color: #F2F3F4;
  height: auto;
  width: 590px;
  border-radius: 5px;
  padding: 40px;

  position:relative;
  top: 150px;
  left: 25%;
  margin-bottom: 20px;
  box-shadow: 5px 5px 10px #adadadad, -5px -5px 10px #eee;
}
/*radio confirmation*/
.confirmation li
{
  display: inline;
}
.confirmation
{
  position: relative;
  right: 50px;
}
#option1
{
  display: none;
}
#option2
{
  display: none;
}

/*positionnement du botton soumettre*/
.boutton_soumetre
{
  padding: 5px;
}
/*------pour le popup---------*/

input[type="button"]:hover
{
  background-color: #006cb2;
  opacity: 0.8;
  filter: alpha(opacity=50);
}
</style>
