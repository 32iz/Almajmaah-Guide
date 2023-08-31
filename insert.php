<?php require "connection.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Sign Up Page </title>
    <style media="screen">
      body{
        text-align: center;
        font-family: cursive;
        background: url('SU_BG.png');
        background-repeat: no-repeat;
        background-size: cover;
      }
      #SU_tbl{
        padding: 20px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 150px;
        text-align: left;
        font-size: 20px;
        background-color: rgba(255,255,255,0.8);
        border-radius: 10px;
        border: solid 5px gray;
        box-shadow: 0px 0px 10px #888888;
        width: 450px;
        height: 450px;
      }
      #tbl_header, #SU_btn{
        text-align: center;
        color: darkred;
      }
      #box{
        border-radius: 5px;
        color: darkred;
      }
      #The_btn{
        color: darkred;
        font-size: 15px;
        padding: 3px 10px;
        font-family: cursive;
        border-radius: 10px;
        cursor: pointer;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.4);
      }
      #Thx{
        color: darkgreen;
        font-weight: bold;
        text-align: center;
        font-size: 30px;
      }
      #exist{
        color: red;
        font-weight: bold;
        text-align: center;
        font-size: 30px;
      }
      #try, #Cont2Home{
        text-align: center;
      }
      #try_btn, #Cont2Home_btn{
        font-size: 15px;
        padding: 3px 10px;
        font-family: cursive;
        border-radius: 10px;
        cursor: pointer;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.4);
      }
      #try_btn:hover{background-color: rgba(184,184,184,0.5);}
    </style>
  </head>
  <body>
      <table id="SU_tbl">
        <?php
          $F_Name = $_POST['F_Name'];
          $M_Name = $_POST['M_Name'];
          $L_Name = $_POST['L_Name'];
          $Password = $_POST['Password'];
          $Email = $_POST['Email'];
          $Phone = $_POST['Phone'];
          $Gender = $_POST['Gender'];
          $Age = $_POST['Age'];

            $sql = mysqli_query($conn, "SELECT * FROM Registration WHERE Email = '$Email'");
            if (mysqli_num_rows($sql) > 0){
              echo "<tr> <td id='exist'> <h2>E-Mail is Already exist!!!</h2> </td> </tr>";
              echo "<tr> <td id='try'> <a href='SignUp.html'><button id='try_btn' type='button' name='TryAgain'>&#10094; Try Again</button></a> </td> </tr>";
            }
            else {
              $sql = "INSERT INTO Registration (F_Name, M_Name, L_Name, Password, Email, Phone, Gender, Age)
                      VALUES ('$F_Name', '$M_Name', '$L_Name', '$Password', '$Email', '$Phone', '$Gender', '$Age')";
              if ($conn -> query($sql) === TRUE)
              {
                echo "<tr> <td id='Thx'> <h2>Thank You</h2> <br> For Signing Up! </td> </tr>";
                echo "<tr> <td id='Cont2Home'> <a href='index.html'><button id='Cont2Home_btn' type='button' name='Cont2Home'>Continue To Home &#10095;</button> </td> </tr>";
              }
              else
              {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
            }
          $conn -> close();
        ?>
      </table>
  </body>
</html>
