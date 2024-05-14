<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_order = $conn->prepare("DELETE FROM `admin` WHERE id = ?");
   $delete_order->execute([$delete_id]);
   header('location:admin_accounts.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas Admin</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom admin style link  -->
    <link rel="stylesheet" href="css/admin_style.css">

</head>

<body>

    <?php include 'admin_header.php' ?>

    <section class="accounts">

        <h1 class="heading">Contas Admin</h1>

        <div class="box-container">

            <div class="box">
                <p>Adicionar novo Admin</p>
                <a href="admin_register.php" class="option-btn">Registrar Admin</a>
            </div>

            <?php
      $select_accounts = $conn->prepare("SELECT * FROM `admin`");
      $select_accounts->execute();
      if($select_accounts->rowCount() > 0){
         while($fetch_accounts = $select_accounts->fetch(PDO::FETCH_ASSOC)){   
   ?>
            <div class="box">
                <p> User id : <span><?= $fetch_accounts['id']; ?></span> </p>
                <p> Usuário : <span><?= $fetch_accounts['name']; ?></span> </p>
                <div class="flex-btn">
                    <a href="admin_accounts.php?delete=<?= $fetch_accounts['id']; ?>"
                        onclick="return confirm('Deletar essa conta?')" class="delete-btn">Deletar</a>
                    <?php
            if($fetch_accounts['id'] == $admin_id){
               echo '<a href="admin_profile_update.php" class="option-btn">Atualizar</a>';
            }
         ?>
                </div>
            </div>
            <?php
         }
      }else{
         echo '<p class="empty">Nenhuma conta disponivel!</p>';
      }
   ?>

        </div>

    </section>



    <script src="js/admin_script.js"></script>

</body>

</html>