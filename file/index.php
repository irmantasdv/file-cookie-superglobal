<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pamoka 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if (isset($_POST["upload"])) {
        $file_name = $_POST["file_name"];
        $file = $_FILES["file"];
        if ($_FILES['file']['size'] >  1000000) {
            echo ("File too big");
            exit();
        }
        var_dump($file);

        $file_dir = "uploads/";

        $file_name_array = explode(".", $file["name"]);

        $file_extension =  $file_name_array[1];

        $time = time();
        //time dabartinis laikas sekundemis nuo 1970
        $random_string = $file_name_array[0] . $time;


        $file_name_generated = $random_string . "." . $file_extension;

        $file_path = '/Users/bhava/Studijos/php/5-FILES-COOKIES-SESSIONS/files/' . $file_dir . $file_name_generated;

        $filename = $file_path;
        if (move_uploaded_file($file["tmp_name"], $file_path)) {
            echo "Failas sekmingai ikeltas";
        } else {
            echo "Failo ikelti nepavyko";
        }
    }


    ?>

    <form action="index.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="text" name="file_name">
        <button type="submit" name="upload">Upload</button>
    </form>
</body>

</html>