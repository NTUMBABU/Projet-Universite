<style type="text/css" media="screen">

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
    top: 110px;
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
[type="date"]
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
.boxp12/*contenaire principale*/
{
  position: relative;
  left: 50px;
  width: 94%;
  height: 900px;
  /*background: #9b9bff;*/
}
.div_pg3/*la div du formulaire*/
{
  background-color: #F2F3F4;
  height: 720px;
  width: 590px;
  border-radius: 5px;

  padding: 40px;
  position: relative;
  top: 110px;
  left: 300px;

  overflow: hidden;
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
/*positionnement du botton soumettre*/
.boutton_soumetre
{
  padding: 5px;
}
/*------pour le popup---------*/
.photo_profil
{
  height: 180px;
  width: 180px;
  position: absolute;
  top: 30%;
  left: 50%;
  transform: translate(-50% , -50%);
  border-radius: 50%;
  overflow: hidden;
  border: 1px solid grey;
  /* background: green; */
}
.min-label
{
  position: absolute;
  top: 61%;
  left: 51%;
  transform: translate(-50% , -50%);
}
#profile
{
  height: 100%;
  width: 100%;
  margin-top: 1px;
}
#file
{
  display: none;
}
#uploadBtn
{
  height: 25px;
  width: 360px;
  position: absolute;
  bottom: -10%;
  left: 50%;
  transform: translateX(-50%);
  /* text-align: center; positionnement des text*/
  /* background: rgba(0, 0, 0, 0.3); */
  color:  #006CB2;
  /* line-height: 30px; positionnement des text*/
  font-size: 18px;
  cursor: pointer;
}
#uploadBtn:hover
{
  text-decoration: underline;
}
.popup
{
  width: 500px;
  height: 400px;
  /* background: yellow; */
  position: absolute;
  padding-left: 15px;
  padding-right: 15px;
  padding-top: 0px;
  padding-bottom: 15px;
  transform: translate(75% , 15% ) scale(0);
  border: 1px solid grey;
  box-shadow: 10px 10px 15px #adadadad, -10px -10px 15px #eee;


}
#close
{
  position: absolute;
  bottom: 50px;
  left: 50%;
  transform: translate(-50% , -50%);

  border: none;
  border-radius: 2px;
  padding: 7px;
  font-size: 15px;
  color: #fff;
  margin: 1%;
  cursor: pointer;
  background-color: #016bb2;
  height: 50px;
  width: 100px;

}

input[type="button"]:hover
{
  background-color: #006cb2;
  opacity: 0.8;
  filter: alpha(opacity=50);
}
.popup .close-popup
{
  position: absolute;
  right: 20px;
  top: 20px;
  width: 30px;
  height: 30px;
  background: #222;
  color: #fff;
  font-size: 25px;
  font-weight: 600px;
  line-height: 30px;
  text-align: center;
  border-radius: 50px;

}

.popup.active
{
  transition: all 800ms ease-in-out;
  transform: translate(75% , 15% ) scale(1);
}


</style>
