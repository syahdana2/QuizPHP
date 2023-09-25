Soal 1
![soal1](https://github.com/syahdana2/QuizPHP/assets/144450729/e2fa15b9-b312-4dc8-8aae-619133328d21)

1. Inisialisasi Matriks Pertama dan Kedua:
Matriks pertama ($matrix1) dan matriks kedua ($matrix2) diinisialisasi dengan nilai-nilai yang sama, yaitu matriks 5x5 di mana semua elemennya adalah 1.

2. Inisialisasi Matriks Hasil:
Matriks hasil ($resultMatrix) juga diinisialisasi dengan ukuran yang sama (5x5) dan semua elemennya diatur ke 0.

3. Menghitung Ukuran Matriks:
Variabel $rows1, $cols1, $rows2, dan $cols2 digunakan untuk menyimpan jumlah baris dan kolom dari matriks pertama dan kedua.

4. Perkalian Matriks:
Terdapat dua perulangan bersarang. Yang pertama ($i dan $j) digunakan untuk mengakses setiap elemen dari matriks hasil. Yang kedua ($k) digunakan untuk mengalikan matriks pertama dengan matriks kedua sesuai dengan aturan perkalian matriks.

5. Menampilkan Matriks Hasil:
Setelah perkalian matriks selesai, hasilnya ditampilkan dalam bentuk matriks dengan perulangan untuk mencetak setiap elemen.

soal 2
![image](https://github.com/syahdana2/QuizPHP/assets/144450729/f43f36b2-e5b4-46f8-9e4f-6898f8ca9975)

1. Inisialisasi Variabel:
$n digunakan untuk menyimpan jumlah baris dalam pola piramida. Dalam contoh ini, jumlah baris adalah 5.

2. Loop Pertama (Baris):
Loop pertama (for ($i = 1; $i <= $n; $i++)) digunakan untuk mengontrol berapa banyak baris yang akan dicetak dalam pola.

3. Loop Kedua (Spasi di Sebelah Kiri):
Loop kedua (for ($j = $n; $j > $i; $j--)) digunakan untuk mencetak spasi di sebelah kiri piramida. Jumlah spasi yang dicetak berkurang seiring dengan bertambahnya nomor baris.

4. Loop Ketiga (Mencetak Angka):
Loop ketiga (for ($k = $i; $k >= 1; $k--)) digunakan untuk mencetak angka dari $i hingga 1 dalam baris saat ini. Ini mencetak angka-angka yang berkurang dari atas ke bawah.

5.Mencetak Baris Baru:
Setelah selesai mencetak semua angka dalam satu baris, kita mencetak tag <br> untuk pindah ke baris berikutnya.

hasil Kode pemrograman
![image](https://github.com/syahdana2/QuizPHP/assets/144450729/6f451436-0062-424d-8324-1449ed5b32a4)
