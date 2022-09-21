<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pamoka 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<!-- $_FILES -superglobals filams ikelti  reikia enctype type/uzkodavimo tipas, nes siaip duomenys kuoduojami kaip textas, o reikia kito-->

<body>
    <?php
    //tikriname ar mygtukas paspaustas
    if (isset($_POST["upload"])) {
        $file_name = $_POST["file_name"];
        $file = $_FILES["file"];
        if($_FILES['file']['size'] >  1000000) {
            echo("File too big");
            exit();
        }
        var_dump($file);


        // failo aplankas
        $file_dir = "uploads/";

        $file_name_array = explode(".", $file["name"]);
        //failo pletini
        $file_extension =  $file_name_array[1];

        $time = time();
        //time dabartinis laikas sekundemis nuo 1970
        $random_string = $file_name_array[0] . $time;


        $file_name_generated = $random_string . "." . $file_extension;


        // var_dump('FILE NAME: ' . $file_name_generated);




        $file_path = '/Users/bhava/Studijos/php/5-FILES-COOKIES-SESSIONS/files/' . $file_dir . $file_name_generated;
        // var_dump('FILE PATH: ' . $file_path);
 
$filename = $file_path;
$testfile = '/Users/bhava/Studijos/php/5-FILES-COOKIES-SESSIONS/files/uploads/image01663762459.jpeg';
echo 'size: ' . filesize($testfile) . ' bytes';

        //leisti ikelti tik jpg
        //apriboti ikelimo failo didi
        //ir t.t.

        //move_uploaded_file - perkeliame faila i kita vieta
        //jeigu ikelimas sekmingas - true, ir ikelia faila
        //jeigu ne - false, ir neikelia failo
        // vieta is kur keliame, vieta i kuria keliame
        if (move_uploaded_file($file["tmp_name"], $file_path)) {
            echo "Failas sekmingai ikeltas";
        } else {
            echo "Failo ikelti nepavyko";
        }

        //  var_dump( $file_path);
    }


    ?>

    <form action="index.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="text" name="file_name">
        <button type="submit" name="upload">Upload</button>
    </form>
</body>

</html>