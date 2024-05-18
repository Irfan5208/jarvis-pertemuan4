<?php
$array = [1, 2, 3, 4, 5];

echo $array[1];
echo "<br/><pre>";
print_r($array);
echo "</pre>";

// array associative
$umur = ["Irfan" => 33, "Alex" =>14];
$umur ["Mamar"] = 20;
$umur ["Mumun"] = 21;
echo "<br/><pre>";
print_r($umur);
echo "</pre>";

foreach($umur as $nama => $umur){
    echo "Namanya : $nama <br/> Umurnya : $umur <br/>";
}

// array multidimensi
$buahBuahan = [
    ["nama" => "Apel", "warna" => "merah"],
    ["nama" => "Jeruk", "warna" => "kuning"],
    ["nama" => "Mangga", "warna" => "kuning"],
    ["nama" => "Durian", "warna" => "hijau"],
];

echo "<br/><pre>";
// print_r($buahBuahan);
echo "</pre>";

?>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Warna</th>
    </tr>
    <?php foreach ( $buahBuahan as $buah ) { ?>
        <tr>
            <td><?php echo $buah['nama']?></td>
            <td><?= $buah['warna']?></td>
        </tr>
        <?php } ?>
</table>