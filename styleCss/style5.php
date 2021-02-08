<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<style type="text/css" media="screen">

  body
  {
    margin: 0;
    padding: 0;
    background:#f1f1f1;
  }
  header
  {
     position: fixed;
      background:  #17202A;
      width: 100%;
      height: auto;
      z-index:3;
  }
  header .point-dr
  {
    color: #fff;
    margin: auto;

    test-transform: uppercase;
    font-size: 22px;
    font-weight: 800;
  }
  .point-dr span
  {
    color: #3498DB;
  }
  header .point-gc
  {
    padding: 5px;
    float: right;
    margin-top: -30px;
    margin-right: 40px;
    color: #fff;
  }
  .side-bar
  {
    background: #515A5A;
    margin-top: 61px;
    padding-top: 10px 10px 0px 0px;
    position: fixed;
    left: 0;
    width: 250px;
    height: 100%;
    z-index:3;
  }
  .side-bar a
  {
    color: #fff;
    display: block;
    width: 100%;
    line-height: 60px;
    text-decoration: none;
    padding-left: 40px;
    box-sizing: border-box;
    transition: 0.5s;
    transition-property: background;
  }
  .side-bar a:hover
  {
    background: #85C1E9;
  }
  .side-bar img
  {
    padding-right: 1px;
  }
  .content-admi
  {
    position: relative;
    margin-left: 250px;
    /* background-size: cover; */
    height: 100vh;
    /* display: flex; */
    background: #f1f1f1;
    top:60px;
    z-index:1;
  }
  .projects ul
  {
    position: absolute;
    top: 60px;
    padding:10px;
    background:#f1f1f1;
    width:200px;
    list-style:none;
    opacity:0;
    pointer-events:none;
    transform:translateY(10px);
    transition: all 0.4s ease;
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
  }
  .projects #bout:focus + ul
  {
    opacity: 1;
    pointer-events: all;
    transform: translateY(0px);
  }
  .li1, .li2
  {
    display: inline;
    margin:10px;
  }
  .li1 a
  {
    color:black;
    text-decoration:none;
  }
  .li1 a:hover
  {
    text-decoration: underline overline;
  }
  /*styel de la page gestion d'utilisateur*/
  .container
  {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -75%);
    width: 990px;
    height: 300px;
    background: #f1f1f1;
    border-radius: 2px;
    /* box-shadow: 0 0 10px rgba(0,0,0,0.5); */
    z-index:2;
  }
  .container-onglet
  {
     background: #f1f1f1;
     width: 100%;
     height: 30%;
     display: flex;
     border-bottom: 1px solid #333;
  }
  .onglets
  {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 22px;
    font-weight: 700;
    cursor:pointer;
  }

  .onglets:not(:nth-child(3))
  {
    border-right: 1px solid #333;
  }
  .contenu
  {
    height: 70%;
    width: 100%;
    position: absolute;
    opacity: 0;
  }
  .contenu h3
  {
    padding: 20px;
  }
  .contenu hr
  {
    width: 20%;
    height: 2px;
    margin-left: 20px;
    background: #000;
    border: none;
  }
  .contenu p
  {
    padding: 20px;
  }
  /*anim */
  .active
  {
    background: midnightblue;
    color: #f1f1f1;
    transition: all 0.3s ease;
  }
  .activeContenu
  {
    animation: fade 0.5s forwards;
  }
  @keyframes fade
  {
    from{
      opacity: 0;
    }
    to{
      opacity: 1;
    }
  }
  /*----------------------------*/
  /*style de la page contenu*/
  /*------------------------------*/
  .content-ges
  {
    padding:20px;
  }
  .barr
  {
    width: 20%;
    height: 2px;
    margin-left: 2px;
    background: #000;
    border: none;
  }
  .content-Caroussel
  {
    position:absolute;
    height:200px;
    width:98%;
    background:#fff;
    display:flex;
  }
  .carou
  {
    width: 100%;
    align-items: center;
    font-size: 22px;
    font-weight: 700;
  }
  .carou:not(:nth-child(3))
  {
    border-right: 1px solid #333;
  }
  .img-carou
  {
    position:relative;
    top:1px;
    width:100%;
    height:150px;
    background:grey;
  }
  .option
  {
    position:relative;
    margin-left:10px;
  }
  .img-principale
  {
    height:200px;
    width:50%;
    background-color: #fff;
    display:flex;
  }
  .img1
  {
    width:100%;
    height:70%;
    background:grey;
    align-items:center;
  }
  .img1:not(:nth-child(2))
  {
    border-right: 1px solid #333;
  }
  .option1
  {
    position:absolute;
    bottom:-8px;
    left:30px;
    width: 100%;
    align-items: center;
    font-size: 22px;
    font-weight: 700;
  }
  .option2
  {
    position:absolute;
    bottom:-8px;
    right:-28%;
    width: 100%;
    align-items: center;
    font-size: 22px;
    font-weight: 700;
  }
  /****************************/
  /*STYLE DE LA PAGE ADD USER*/
  /***************************/
  /*-------------------------*/
  form
  {
    z-index: 4;
  }
  .select li
  {
    display: inline;
  }
  .div-select
  {
    margin-left: -20px;
    margin-top: 10px;
  }
  /*********************************/
  /*stle pour la page edit profil*/
  /*------------------------------*/
  .cadre-profil
  {
    background: #fff;
    padding: 10px;
    width: 30%;
    position:absolute;
    top:50px;
    left: 50px;
  }
  /**************************/
  /*STYLE DE LA PAGE TABLEAU DE BORD*/
  /*--------------------------------*/
  .tab1,.tab3,.tab4,.tab5
  {
    background: #fff;
    border: 1px solid grey;
    width: 25%;
    height: 25%;
  }
  .tab2
  {
    float: right;
    background: #fff;
    border: 1px solid grey;
    width: 30%;
    height: 25%;
  }
  .tab4
  {
    transform: translate(175%,-15%);
  }
  .tab3
  {
    transform: translate(175%,-60%);
  }
  .tab5
  {
    transform: translate(20%,-113%);
  }
  .tab1
  {
    transform: translate(20%,40%);
  }


</style>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
