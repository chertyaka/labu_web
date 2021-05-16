<?

$array = array(
    $_GET['name'], $_GET['surname'],
    $_GET['email'], $_GET['mail_in'],
    $_GET['fav_subj'],
);
$r = 0;

for ($i = 0; $i <= 4; $i++)
    {
        if ($array[$i] == '')  $r = 1;
    }


switch($r)
{
    case 0:
        ?>
            <h2>Дякуємо! Наступна інформація була успішно надіслана</h2>
            <br>
            <b>Контактна інформація</b>
        <?
        echo "<br>Прізвище та ім'я: $array[1] $array[0]<br>
        Електронна пошта: $array[2] <br>
        Поштовий індекс: $array[3]<br>
        Улюблений предмет: $array[4]";
        break;
    case 1:
        echo "Ви не заповнили всі поля";
        break;
}



?>