<?php
include('connect.php');
if(isset($_FILES['fichier']))
{
    $fichier = mysql_real_escape_string(htmlentities( $_FILES['fichier']['name']));

    $query = mysql_query("INSERT INTO telecharger(id,nom) VALUE('','$fichier')") or die(mysql_error());

    if($query == true)
    {

        move_uploaded_file($_FILES['fichier']['tmp_name'],'fichiers/'.$fichier);
        ?> 
        <script> alert('Votre fichier a correctement ete uploader');</script>

        <?php
    }else{
        ?>

        <script> alert('Erreur');</script>

<?php
    }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>download Document</title>
</head>
<body>
    <form method="POST" action="" enctype="multipart/form-data">

    <input type="file" name="fichier">
    <input type="Submit" value="uploader">

</body>
</html>