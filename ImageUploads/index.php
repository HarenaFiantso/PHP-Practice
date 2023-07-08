<?php
    // Vérification si l'image est bien reçue
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {

        $error = 1;

        // Vérification de la taille de l'image
        if ($_FILES['image']['size'] <= 3000000) {

            // Vérification de l'extension
            $informationsImage = pathinfo($_FILES['image']['name']);
            $extensionImage = $informationsImage['extenstion'];
            $extensionsArray = array('jpg', 'png', 'jpeg', 'gif');

            if (in_Array($extensionImage, $extensionsArray)) {
                $address = 'uploads/'.time().rand().rand().'.'.$extensionImage;

                move_uploaded_file($_FILES['image']['tmp_name'], $address);
                $error = 0;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=" width=device-width, initial-scale=1.0">
    <title>StockImage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to StockImage</h1>
    </header>

    <div class="container">
        <h1>Upload an Image</h1>

        <?php
            if (isset($error) && $error == 0) {
                echo '<div class="presentation-image">
                        <img src="'.$address.'" id="image"/>
                        <br />
                        <input type="text" value="http://localhost/'. $address. '">
                    </div>';
            }
        ?>

        <form method="post" action="index.php" enctype="multipart/form-data">
            <input type="file" required name="image" />
            <br />
            <button type="submit">Uploads</button>
        </form>
    </div>
</body>
</html>