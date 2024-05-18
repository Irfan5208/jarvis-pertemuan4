<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
    <table>
        <tr>
            <td>Nama</td>
            <td>: <?= $_REQUEST['nama'] ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <?= $_REQUEST['tmp_lahir'] ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <?= $_REQUEST['tgl_lahir'] ?></td>
        </tr>
    </table>
<?php
} else {
    header('location: form.php');
}
?>