<style type="text/css" media="screen">

  .boxCont1/*contenaire principale*/
  {

    position: relative;
    left: 50px;
    width: 94%;
    height: 800px;
    /*background: #9b9bff;*/
  }

  .id-user
  {
    width: 80px;
    height: 30px;

    position: fixed;
    top: 10px;
    right: 20px;

    transform: translate(-50% , -50%);
    background: rgba(0, 0, 0, 0.8);
  }

  .option1
  {
    width: 60%;
    height: 210px;
    position: absolute;
    top: 25%;
    left: 10%;
    transform: translate(15% , -15%);
    text-align: justify;
    line-height: 30px;
    /* transform: translateX(-50%); */
    font-size: 18px;
    padding: 40px;
    background-color: #F2F3F4;
    border-radius: 10px;
    cursor: pointer;
    box-shadow: 5px 5px 10px #adadadad, -5px -5px 10px #eee;
    color: #222;
  }

  .option2
  {
    width: 60%;
    height: 210px;
    position: absolute;
    top: 60%;
    left: 10%;
    transform: translate(15% , -15%);
    text-align: justify;
    line-height: 30px;
    /* transform: translateX(-50%); */
    font-size: 18px;
    padding:  40px;
    background-color: #F2F3F4;
    border-radius: 10px;
    cursor: pointer;
    box-shadow: 5px 5px 10px #adadadad, -5px -5px 10px #eee;
    text-decoration: none;
    color: #222;
  }
  .option1 h5, .option2 h5
  {
    text-align: center;
    font-size: 20px;
    margin-bottom: 10px;
    color: #006CB2;
  }
  .option1:hover, .option2:hover
  {
    background-color: #85C1E9;
    box-shadow: 5px 5px 10px #222, -5px -5px 10px #eee;
  }


/* --------------------------------------- --------------------------*/

.boxCont2/*contenaire principale*/
{
  position: relative;
  left: 50px;
  width: 94%;
  height: 800px;
  /*background: #9b9bff;*/
}

.maison1, .maison2, .maison3
{
  width: 60%;
  height: 200px;

  background-color: #F2F3F4;
  border-radius: 10px;
  cursor: pointer;
  box-shadow: 1px 1px 10px #adadadad, -1px -1px 10px #eee;
  color: #222;

}
.maison1:hover, .maison2:hover, .maison3:hover
{
  background-color: #D6EAF8;
}

.maison1
{
  position: absolute;
  top: 15%;
  transform: translate(1%);

}

.maison2
{
  position: absolute;
  top: 43%;
  transform: translate(1%);
}

.maison3
{
  position: absolute;
  top: 71%;
  transform: translate(1%);
}
.maison1:hover, .maison2:hover, .maison3:hover
{
  box-shadow: 5px 5px 10px #adadadad, -5px -5px 10px #eee;
  cursor: pointer;
}
/* contenu de l'image */
.presentation img
{
  width: 100%;
  height:100%;
}
.presentation
{
  width: 40%;
  height: 150px;
  position: absolute;
  top: 10%;
  transform: translate(10%);
  border: 1px solid grey;
}

/*detaille de la maison*/

.info-M
{
  width: 40%;
  height: 150px;
  position: absolute;
  top: 10%;
  right: 13%;
  /* border: 1px solid grey; */
  text-align: left;
  line-height: 65px;
  font-size: 15px;
  padding-top: 15px;
}

/* ----------------------------------------------------------------- */


</style>
