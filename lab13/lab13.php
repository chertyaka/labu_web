<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="regularku.php" method="GET" >
<div style="text-align:center; ">
        <h1 >Квартирний облік:</h1>
        <div  style="margin-top: 50px;"> 
            <h3>Номер квартири:</h3>    
            <input type="text" size="3" name='flat'>
        </div>
        <div >
            <h3>Прізвище власника:</h3>    
            <input type="text" name='surname'>
        </div>
        <div >
            <h3>Номер телефону:</h3>    
            <input type="text" name='phone'>
        </div>
        <div >
            <h3>Електронна пошта:</h3>    
            <input type="text" name='email'>
        </div>
        <div>
            <h3>Кількість проживаючих:</h3>    
            <input type="text" size="3" name="naibors">
        </div>
        <br>
        <div >
            <button>  Далі  </button>
        </div>
    </div>
</body>
</html>