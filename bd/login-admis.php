<?php
  session_start();
  $conn = mysqli_connect("localhost", "root", "", "Projet_Universite");
  if(!$conn){
    echo "connection failed!";
  }

  if(isset($_POST['nameadmis']) && isset($_POST['passwordadmis']))
  {
    function validate($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $nameadmis = validate($_POST['nameadmis']);
    $passwordadmis = htmlspecialchars($_POST['passwordadmis']); //validate($_POST['passwordadmis']);
    $passwordadmis = md5($passwordadmis);
    if(empty($nameadmis))
    {
      header("Location: /Projet-Universite/admis/index.php?error=User Name is required");
      exit();
    }
    else if(empty($passwordadmis))
    {
      header("Location: /Projet-Universite/admis/index.php?error=Password is required");
      exit();
    }
    else
    {
      $sql = "SELECT * FROM singup_admis WHERE AddressMail='$nameadmis' OR 	numTelephone='$nameadmis' AND motDepass='$passwordadmis'";
      $result = mysqli_query($conn,$sql);// 

      if(mysqli_num_rows($result) === 1)
      {
        $row = mysqli_fetch_assoc($result);
        if($row['AddressMail'] === $nameadmis || $row['numTelephone'] === $nameadmis && $row['motDepass'] === $passwordadmis)
        {
          echo "login";
          $_SESSION['AddressMail'] = $row['AddressMail'];
          $_SESSION['numTelephone'] = $row['numTelephonel'];
          $_SESSION['id'] = $row['id'];
          
          header("Location: /Projet-Universite/admis/Administrateur.php");
          exit();
        }
        else
        {
          header("Location: /Projet-Universite/admis/index.php?error=Incorect User name or password");
          exit();
        }
        
      }
      else
      {
        header("Location: /Projet-Universite/admis/index.php?error=Incorect User name or password");
        exit();
      }
    }
  }
  else
  {
    header("Location: /Projet-Universite/admis/index.php");
    exit();
  }
?>