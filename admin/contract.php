<!doctype html>
<html>
    <head>
        <title>Jatuh Tempo</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>No Skep</th>
                <th>Tgl Skep</th>
                <th>Jatuh Tempo (90 hari sejak tgl skep)</th>
                <th>Selisih Jatuh Tempo</th>
            </tr>
        <?php
//           mp     koneksi ke database dan pemilihan database
        $koneksi = mysqli_connect('localhost', 'root', '');
        $db = mysqli_select_db('rental');
//        jalankan query
        $query = mysqli_query("SELECT *,DATE_ADD(tgl_skep, INTERVAL 90 DAY) as jatuh_tempo, DATEDIFF(DATE_ADD(tgl_skep, INTERVAL 90 DAY), CURDATE()) as selisih FROM skep");
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $data['no_skep'] ?></td>
                <td><?php echo $data['tgl_skep'] ?></td>
                <td><?php echo $data['jatuh_tempo'] ?></td>
                <td><?php echo $data['selisih'].' hari lagi' ?></td>
            </tr>
        <?php
        }
        ?>
        </table>
    </body>
</html>