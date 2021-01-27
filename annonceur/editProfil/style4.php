<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<style media="screen">
  .sidebar
  {
      background: #D1D1D1;
       margin-top: 63px;
      padding-top: 1px;
     position: fixed;
      margin-left: 0;
      width: 50px;
      height: 550px;
      box-shadow: 5px 5px 10px #adadadad, -5px -5px 10px #eee;
      z-index: 5;
  }

  .sidebar a
  {
    display: block;
    line-height: 60px;
    text-decoration: none;
    padding-left: 10%;
    box-sizing: border-box;
    margin-top: 1%;
    /* transition: 0.5s; */

    /* transition-property: background; */

  }
  .sidebar a:hover
  {
    transition: 1.5s;
    background: #FBFCFC;
  }
  .sidebar #desktop:hover, #conf:hover, #add:hover, #modif:hover, #off:hover
  {
    transform: scale(1.2);
    transition: 0.20s;
  }
  .sidebar a span
  {
    display: none;
  }
  /*------info bulle-------*/
  .info-bull
  {
    position: absolute;
    top: 5px;
    left: 60px;
    background: #17202A;
    color: white;
    width: 110px;

    font-size: 15px;
    padding: 5px;
    border-radius: 10%;
    box-shadow: 5px 5px 5px #adadadad, -5px -10px 5px #eee;
    display: none;
  }
  .in:hover .info-bull
  {
    display: block;
  }
  /*--------------info bulle deux-------------------*/
  .in2:hover .info-bull2
  {
    display: block;
  }
  .info-bull2
  {
    position: absolute;
    top: 55px;
    left: 60px;
    background: #17202A;
    color: white;
    width: 155px;

    font-size: 15px;
    padding: 5px;
    border-radius: 10%;
    box-shadow: 5px 5px 5px #adadadad, -5px -10px 5px #eee;
    display: none;
  }
  /*--------info bulle trois---------*/
  .in3:hover .info-bull3
  {
    display: block;
  }
  .info-bull3
  {
    position: absolute;
    top: 120px;
    left: 60px;
    background: #17202A;
    color: white;
    width: 140px;

    font-size: 15px;
    padding: 5px;
    border-radius: 10%;
    box-shadow: 5px 5px 5px #adadadad, -5px -10px 5px #eee;
    display: none;
  }
  /*--------info bulle 4----------*/
  .in4:hover .info-bull4
  {
    display: block;
  }
  .info-bull4
  {
    position: absolute;
    top: 180px;
    left: 60px;
    background: #17202A;
    color: white;
    width: 85px;

    font-size: 15px;
    padding: 5px;
    border-radius: 10%;
    box-shadow: 5px 5px 5px #adadadad, -5px -10px 5px #eee;
    display: none;
  }
  /*------------info bulle 5---------------*/
  .in5:hover .info-bull5
  {
    display: block;
  }
  .info-bull5
  {
    position: absolute;
    top: 240px;
    left: 60px;
    background: #17202A;
    color: white;
    width: 125px;

    font-size: 15px;
    padding: 5px;
    border-radius: 10%;
    box-shadow: 5px 5px 5px #adadadad, -5px -10px 5px #eee;
    display: none;
  }
  /*--------------------------------------------------------------**/

          *, ::before, ::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      body {
        background: #f1f1f1;
        font-family: Arial, Helvetica, sans-serif;
        height: 100vh;
        display: flex;
        flex-direction: column;
      }
      .contenu {
        /* grow shrink basis */
        flex: 1 0 auto;
        border-color: red;
        /* margin-left: 100px;
        margin-top: 100px; */
        margin-top: 100px;
        margin-left: 80px;
        margin-right: 20px;
      }
      .contenu p {
        /* padding: 5vw 10vw; */

        text-align: justify;
      }
      footer
      {

        flex-shrink: 0;
        height: 30px;
        margin-bottom: 1px;
        margin-left: 55px;

        border-top: 0px;
        width: 95%;
        background: #17202A;
        color: #FFFFFF;
      }
      .contenu-footer {

        width: 1200px;
        margin: 0px;

        display: flex;
        justify-content: center;
        align-items: flex-start;
        font-size: 10px;
        padding: 0px 0 0px;
      }

</style>

<!-- *********************- -->
<!-- style pour la page add -->
<!-- ******************** -->
<style type="text/css" media="screen">
  .map-a
  {
    height: 200px;
    width: 50%;
    position: relative;
    right: auto;
    border: 1px solid black;
    z-index: -1;
  }
  #insert1,#insert2,#insert3,#insert4,#insert5,#insert-v1,#insert-v2
  {
    display: none;
  }
</style>
<!-- *********************- -->
<!-- style pour la page add -->
<!-- ******************** -->
<style type="text/css" media="screen">
  
</style>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
