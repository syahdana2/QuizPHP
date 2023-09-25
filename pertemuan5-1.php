<?php
// Matriks pertama (5x5)
$matrix1 = array(
    array(1, 1, 1, 1, 1),
    array(1, 1, 1, 1, 1),
    array(1, 1, 1, 1, 1),
    array(1, 1, 1, 1, 1),
    array(1, 1, 1, 1, 1)
);

// Matriks kedua (5x5)
$matrix2 = array(
    array(1, 1, 1, 1, 1),
    array(1, 1, 1, 1, 1),
    array(1, 1, 1, 1, 1),
    array(1, 1, 1, 1, 1),
    array(1, 1, 1, 1, 1)
);

    // matriks hasil
    $resultMatrix = array();

    // Ukuran matriks pertama
    $rows1 = count($matrix1); // baris 
    $cols1 = count($matrix1[0]); // kolom

    // Ukuran matriks kedua
    $rows2 = count($matrix2); // baris
    $cols2 = count($matrix2[0]); // kolom

    // Inisialisasi matriks hasil dengan nol
    for ($i = 0; $i < $rows1; $i++) {
        for ($j = 0; $j < $cols2; $j++) {
            $resultMatrix[$i][$j] = 0;
        }
    }

    // Menghitung hasil perkalian matriks
    for ($i = 0; $i < $rows1; $i++) {
        for ($j = 0; $j < $cols2; $j++) {
            for ($k = 0; $k < $cols1; $k++) {
                $resultMatrix[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
            }
        }
    }

    // Menampilkan matriks hasil
    echo "Soal 1 :<br>";
    echo "Hasil perkalian matriks:<br>";
    for ($i = 0; $i < $rows1; $i++) {
        for ($j = 0; $j < $cols2; $j++) {
            echo $resultMatrix[$i][$j] . " ";
        }
        echo "<br>";
    }
?>

<?php
echo "<hr> Soal 2 :<br>";

// Jumlah Baris
$n = 5;

for ($i = 1; $i <= $n; $i++) {
    // Loop untuk mencetak spasi di sebelah kiri
    for ($j = $n; $j > $i; $j--) {
        echo "&nbsp;&nbsp;&nbsp;";
    }

    // Loop untuk mencetak angka dari $i hingga 1
    for ($k = $i; $k >= 1; $k--) {
        echo $k . " ";
    }

    echo "<br>"; // Pindah ke baris berikutnya setelah selesai mencetak setiap baris
}
?>


