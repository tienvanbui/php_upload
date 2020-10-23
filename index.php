<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Upload Page</title>
</head>

<body>
    <?php
    define("PATH_UPLOAD", "fileup/");
    $state = $_GET['state'] ?? '';
    $img = $_GET['img'] ?? '';
    ?>
    <div class="container">
        <?php if ($state == "success" && $img != '') : ?>
        <div class="row">

            <img src="<?= PATH_UPLOAD . $img; ?>" alt="">

        </div>
        <?php endif; ?>
    </div>

    <div class=" container">
        <div class="row">
            <form method="post" action="upload.php" enctype="multipart/form-data">
                <label for="upfile">Chose your file</label>
                <input type="file" name="file"><br>
                <button type="submit" name="btnUpload" class="btn btn-primary">Upload File</button>
            </form>
        </div>
    </div>
</body>

</html>