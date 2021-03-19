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
  .boxCont1/*contenaire principale*/
  {

    position: relative;
    top: 100px;
    left: 50px;
    width: 94%;
    height: 800px;
    /*background: #9b9bff;*/
  }
  .titre11
  {
    z-index:-2;
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
    height: auto;
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
    height: auto;
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
  top:100px;
  left: 50px;
  width: 94%;
  height: 800px;
  /*background: #9b9bff;*/
}

.maison1
{
  top: 25%;
  transform: translate(1%, 50%);

  width: 60%;
  height: 200px;

  background-color: #F2F3F4;
  border-radius: 10px;
  cursor: pointer;
  box-shadow: 1px 1px 10px #adadadad, -1px -1px 10px #eee;
  color: #222;

}
.maison1:hover
{
  background-color: #D6EAF8;
  cursor: pointer;
}
.temp
{
  margin: 20px;
  font-size: 15px;
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
  line-height: 35px;
  font-size: 15px;
  padding-top: 15px;
}

/* ----------------------------------------------------------------- */

</style>
