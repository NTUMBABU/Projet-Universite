<?php
   session_start();
   require_once 'config.php';

   if(isset($_POST['nameadmis']) && isset($_POST['passwordadmis']))
   {
    $email = htmlspecialchars($_POST['nameadmis']);
    $password = htmlspecialchars($_POST['passwordadmis']);

    //veerifie si l'utilisateur est dasn la table
    $check = $bdd->prepare('SELECT * FROM admis WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 1)
    {
      
      if(filter_var($email, FILTER_VALIDATE_EMAIL))
      {
        $password = hash('sha256',$password);
        if($data['password'] === $password)
         {
           $_SESSION['user'] = $data['email'];
           header('Location:Projet-Universite/admis/administrateur.php');
         }else header("Localtion:/Projet-Universite/admis/index.php?login_err=password");
      }else header("Localtion:/Projet-Universite/admis/index.php?login_err=email");
    }else header("Localtion:/Projet-Universite/admis/index.php?login_err=already");
   }else header("Localtion:/Projet-Universite/admis/index.php");
?>
<?php
  /*//phpinfo();
 //-get value asse from in longiin age file
  $email = $_POST['nameadmis'];
  $password = $_POST['passwordadmis'];

  //to  prevent mysql inject
  $email = stripcslashes($email);
  $password = stripcslashes($password);

  //connect to the server and select database
  mysqli_connect("localhost", "root", "");
  $connection = mysqli_connect("localhost", "root", "");
  if (!$connection) 
  {
    error_log("Erreur de connexion MySQL: ".mysqli_connect_error($connection));
    die('Internal server error');
    exit();
  }

  mysqli_select_db($connection, "Projet_Universite");
  $db_select = mysqli_select_db($connection, "Projet_Universite");
  if (!$db_select) {
    die("Database selection failed: " . mysqli_error($connection));
  }
  //mysqli_select_db("login_admis","") or die("echec de connexion a la base de donne".mysqli_connect_error());

  //query the database for user
  $result = mysqli_query($connection,"select * from admis where email = '$email' and password = '$password' ")
              or die("echec de connexion".mysqli_connect_error($connection));
  $row = mysqli_fetch_array($result);
  if (isset($row['email']) && $row['password'])
  {
    echo"login success !!! welcome ".$row['email']; 
  }
  else
  {
    echo"failed to login!";
  }
*/
?>

<<<<<<< HEAD
=======
 //-get value asse from in longiin age file
  $username = $_POST['nameadmis'];
  $password = $_POST['passwordadmis'];

  //to  prevent mysql inject
  $username = stripcslashes($username);
  $password = stripcslashes($password);
  

  //connect to the server and select database
  mysql_connect("localhost", "root", "");
  $con = mysql_connect("localhost", "root", "");
  $username = mysql_real_escape_string($con, $username);
  $password = mysql_real_escape_string($con, $password);
  mysql_select_db("login_admis") or die("echec de connexion a la base de donne".mysql_error());

  //query the database for user
  $result = mysql_query("select * from admis where username = '$username' and password = '$password' ")
              or die("echec de connexion".mysql_error());
  $row = mysql_fetch_array($result);
  if ($row['username'] == $username && $row['password'] == $password)
  {
    echo"login success !!! welcome".$row['username']; 
  }else{
    echo"failed to login!";
  }
  //babci.com@hotmail.com
?>
>>>>>>> c2c715683cbdf8b4722a26e240c9b6206485da42
