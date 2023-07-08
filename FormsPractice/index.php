<?php
    /*
        PRATIQUE D'ENVOIE D'UN FICHIER AVEC PHP
        Le but de cette exercice pratique est de pratique, bien évidemment, l'envoi des fichiers avec PHP à l'aide 
        d'une formulaire.
    */

    // Envoie du fichier avec un script PHP
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        if ($_FILES['image']['size'] <= 3000000) {
            $informationImage = pathinfo($_FILES['image']['name']);
            $extensionImage = $informationImage['extension'];
            $extensionArray = array('png', 'gif', 'jpg', 'jpeg');

            if (in_Array($extensionImage, $extensionArray)) {
                move_uploaded_file($_FILES['image']['tmp_name'], 
                'uploads/'. time(). rand().rand().$extensionImage);
                echo "Envoie bien réussi ! ";
            }
        }
    }

    echo '<form method="post" action="index.php" enctype="multipart/form-data">
            <h1>This is a form</h1>
            <input type="file" name="image"/> <br />
            <button type="submit">Send</button>
        </form>';
?>