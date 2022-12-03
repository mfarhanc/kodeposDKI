<?php
if (file_exists('code.json')) {
    $filename = 'code.json';
    $data = file_get_contents($filename); //data read from json file
    $codes = json_decode($data);  //decode a data
    $i = 1;

    $message = "<h3 class='text-success'>Kode Pos</h3>";
} else {
    $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Read a JSON File</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="table-container">
            <?php
            if (isset($message)) {
                echo $message;

            ?>
                <table id="tbstyle" cellpadding="10" border="1">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Provinsi</th>
                            <th>Kabupaten/Kota</th>
                            <th>Kecamatan</th>
                            <th>Kelurahan</th>
                            <th>Kode Pos</th>
                        </tr>
                        <?php foreach ($codes as $code) { ?>
                            <tr>
                                <td> <?= $i++; ?></td>
                                <td> <?= $code->province; ?> </td>
                                <td> <?= $code->city; ?> </td>
                                <td> <?= $code->district; ?> </td>
                                <td> <?= $code->ward; ?> </td>
                                <td> <?= $code->zipcode; ?> </td>
                            </tr>
                    <?php }
                    } else
                        echo $message;
                    ?>
                    </tbody>
                </table>
        </div>
    </div>
</body>

</html>