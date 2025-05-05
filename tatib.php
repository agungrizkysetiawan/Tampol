<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap">
    <title>Tatib</title>
    <style>
        /* Reset some default styles */
        body, h1, h2, p, table {
            margin: 0;
            padding: 0;
        }

        /* Basic styling */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f7f7;
            color: #333;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: center; /* Mengubah teks menjadi tengah */
            border-bottom: 1px solid #ddd;
        }

        th {
            padding: 10px;
            text-align: center;
            background-color: #3498db;
            color: #fff;
            border-right: 1px solid #ddd; /* Menambahkan garis kanan pada kolom header */
        }

        td {
            padding: 10px;
            text-align: center;
            border-right: 1px solid #ddd; /* Menambahkan garis kanan pada kolom data */
        }
        td:last-child {
            border-right: none;
        }

        /* Mengatur lebar kolom "No" */
        th:first-child,
        td:first-child {
            width: 5%; /* Sesuaikan dengan kebutuhan Anda */
        }

        /* Mengatur lebar kolom "Tingkat" */
        th:last-child,
        td:last-child {
            width: 10%; /* Sesuaikan dengan kebutuhan Anda */
        }

        tr:hover {
            background-color:grey;
        }

        /* Media queries for responsiveness */
        @media (max-width: 768px) {
            h1 {
                font-size: 24px;
            }

            table {
                margin-top: 10px;
            }
        }
        .container {
            display: flex;
            align-items: center;
            margin: 20px;
        }

        .circle {
            width: 40px;
            height: 40px;
            min-width: 40px; /* Menambahkan ukuran minimum lebar */
            min-height: 40px; /* Menambahkan ukuran minimum tinggi */
            border-radius: 50%;
            background-color: #3498db;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            margin-right: 10px;
            font-family: Arial, sans-serif;
        }

        .rank {
            font-weight: bold;
            font-size: 18px;
        }

        .sanksi {
            flex-grow: 1;
        }
    </style>
</head>
<body>
    <h1>Tabel Pelanggaran Tatib</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Pelanggaran</th>
                <th>Tingkat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Berkomunikasi dengan tidak sopan, baik tertulis atau tidak tertulis
kepada mahasiswa, dosen, karyawan, atau orang lain </td>
                <td>Ⅴ</td> <!-- Mengurangi teks "Tingkat" menjadi "T" -->
            </tr>
            <tr>
                <td>2</td>
                <td>Berbusana tidak sopan dan tidak rapi. Yaitu antara lain adalah:
berpakaian ketat, transparan, memakai t-shirt (baju kaos tidak
berkerah), tank top, hipster, you can see, rok mini, backless, celana
pendek, celana tiga per empat, legging, model celana atau baju
koyak, sandal, sepatu sandal di lingkungan kampus
</td>
                <td>Ⅳ</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Mahasiswa Iaki-laki berambut tidak rapi, gondrong yaitu panjang
rarnbutnya melewati batas alis mata di bagian depan, telinga di
bagian sarnping atau menyentuh kerah baju di bagian leher</td>
                <td>Ⅳ</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Mahasiswa berarnbut dengan model punk, dicat selain hitam dan/
atau skinned.</td>
                <td>Ⅳ</td> <!-- Mengurangi teks "Tingkat" menjadi "T" -->
            </tr>
            <tr>
                <td>5</td>
                <td>Makan, atau minum di dalam ruang kuliah/ laboratorium/ bengkel.</td>
                <td>Ⅳ</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Melanggar peraturan/ ketentuan yang berlaku di Polinema baik di
Jurusan/ Program Studi </td>
                <td>Ⅲ</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Tidak menjaga kebersihan di seluruh area Polinema </td>
                <td>Ⅲ</td> <!-- Mengurangi teks "Tingkat" menjadi "T" -->
            </tr>
            <tr>
                <td>8</td>
                <td>Membuat kegaduhan yang mengganggu pelaksanaan perkuliahan
atau praktikum yang sedang berlangsung</td>
                <td>Ⅲ</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Merokok di luar area kawasan merokok</td>
                <td>Ⅲ</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Bermain kartu, game online di area kampus</td>
                <td>Ⅲ</td> <!-- Mengurangi teks "Tingkat" menjadi "T" -->
            </tr>
            <tr>
                <td>11</td>
                <td>Mengotori atau mencoret-coret meja, kursi, tembok, dan lain-lain di
lingkungan Polinema </td>
                <td>Ⅲ</td>
            </tr>
            <tr>
                <td>12</td>
                <td>Bertingkah laku kasar atau tidak sopan kepada mahasiswa, dosen,
dan/atau karyawan.</td>
                <td>Ⅲ</td>
            </tr>
            <tr>
                <td>13</td>
                <td>Merusak sarana dan prasarana yang ada di area Polinema</td>
                <td>Ⅱ</td> <!-- Mengurangi teks "Tingkat" menjadi "T" -->
            </tr>
            <tr>
                <td>14</td>
                <td>Tidak menjaga ketertiban dan keamanan di seluruh area Polinema
(misalnya: parkir tidak pada tempatnya, konvoi selebrasi wisuda
dll)</td>
                <td>Ⅱ</td>
            </tr>
            <tr>
                <td>15</td>
                <td>Melakukan pengotoran/ pengrusakan barang milik orang lain
termasuk milik Politeknik Negeri Malang </td>
                <td>Ⅱ</td>
            </tr>
            <tr>
                <td>16</td>
                <td>Mengakses materi pornografi di kelas atau area kampus </td>
                <td>Ⅱ</td> <!-- Mengurangi teks "Tingkat" menjadi "T" -->
            </tr>
            <tr>
                <td>17</td>
                <td>Membawa dan/atau menggunakan senjata tajam dan/atau senjata
api untuk hal kriminal </td>
                <td>Ⅱ</td>
            </tr>
            <tr>
                <td>18</td>
                <td>Melakukan perkelahian, serta membentuk geng/ kelompok yang
bertujuan negatif.</td>
                <td>Ⅱ</td>
            </tr>
            <tr>
                <td>19</td>
                <td> Melakukan kegiatan politik praktis di dalam kampus </td>
                <td>Ⅱ</td> <!-- Mengurangi teks "Tingkat" menjadi "T" -->
            </tr>
            <tr>
                <td>20</td>
                <td>Melakukan tindakan kekerasan atau perkelahian di dalam kampus. </td>
                <td>Ⅱ</td>
            </tr>
            <tr>
                <td>21</td>
                <td>Melakukan penyalahgunaan identitas untuk perbuatan negatif</td>
                <td>Ⅱ</td>
            </tr>
            <tr>
                <td>22</td>
                <td>Mengancam, baik tertulis atau tidak tertulis kepada mahasiswa,
dosen, dan/atau karyawan.</td>
                <td>Ⅱ</td> <!-- Mengurangi teks "Tingkat" menjadi "T" -->
            </tr>
            <tr>
                <td>23</td>
                <td>Mencuri dalam bentuk apapun</td>
                <td>Ⅰ/Ⅱ</td>
            </tr>
            <tr>
                <td>24</td>
                <td>Melakukan kecurangan dalam bidang akademik, administratif, dan
keuangan.</td>
                <td>Ⅰ/Ⅱ</td>
            </tr>
            <tr>
                <td>25</td>
                <td>Melakukan pemerasan dan/atau penipuan </td>
                <td>Ⅰ/Ⅱ</td> <!-- Mengurangi teks "Tingkat" menjadi "T" -->
            </tr>
            <tr>
                <td>26</td>
                <td>Melakukan pelecehan dan/atau tindakan asusila dalam segala
bentuk di dalam dan di luar kampus</td>
                <td>Ⅰ/Ⅱ</td>
            </tr>
            <tr>
                <td>27</td>
                <td>Berjudi, mengkonsumsi minum-minuman keras, dan/ atau
bermabuk-mabukan di lingkungan dan di luar lingkungan Kampus
Polinema
</td>
                <td>Ⅰ/Ⅱ</td>
            </tr>
            <tr>
                <td>28</td>
                <td>Mengikuti organisasi dan atau menyebarkan faham-faham yang
dilarang oleh Pemerintah.</td>
                <td>Ⅰ/Ⅱ</td> <!-- Mengurangi teks "Tingkat" menjadi "T" -->
            </tr>
            <tr>
                <td>29</td>
                <td>Melakukan pemalsuan data / dokumen / tanda tangan.</td>
                <td>Ⅰ/Ⅱ</td>
            </tr>
            <tr>
                <td>30</td>
                <td>Melakukan plagiasi (copy paste) dalam tugas-tugas atau karya ilmiah</td>
                <td>Ⅰ/Ⅱ</td>
            </tr>
            <tr>
                <td>31</td>
                <td>Tidak menjaga nama baik Polinema di masyarakat dan/ atau
mencemarkan nama baik Polinema melalui media apapun</td>
                <td>Ⅰ</td> <!-- Mengurangi teks "Tingkat" menjadi "T" -->
            </tr>
            <tr>
                <td>32</td>
                <td>Melakukan kegiatan atau sejenisnya yang dapat menurunkan
kehormatan atau martabat Negara, Bangsa dan Polinema. </td>
                <td>Ⅰ</td>
            </tr>
            <tr>
                <td>33</td>
                <td>Menggunakan barang-barang psikotropika dan/ atau zat-zat Adiktif
lainnya</td>
                <td>Ⅰ</td>
            </tr>
            <tr>
                <td>34</td>
                <td>Mengedarkan serta menjual barang-barang psikotropika dan/ atau
zat-zat Adiktif lainnya</td>
                <td>Ⅰ</td> <!-- Mengurangi teks "Tingkat" menjadi "T" -->
            </tr>
            <tr>
                <td>35</td>
                <td>Terlibat dalam tindakan kriminal dan dinyatakan bersalah oleh
Pengadilan</td>
                <td>Ⅰ</td>
            </tr>
        </tbody>
    </table>
    <br>
    <h1>Sanksi</h1>
    <div class="container">
        <div class="circle">Ⅴ</div>
        <div>
            <div class="rank">Tingkat V</div>
            <div class="sanksi">&nbsp;Sanksi atas pelanggaran Tingkat V yang dilakukan oleh mahasiswa berupa:<br>
            &nbsp;&nbsp;Teguran lisan disertai dengan surat pernyataan tidak mengulangi perbuatan
tersebut, dibubuhi materai, ditandatangani mahasiswa yang &nbsp;&nbsp;bersangkutan dan
DPA</div>
        </div>
    </div>
    <div class="container">
        <div class="circle">Ⅳ</div>
        <div>
            <div class="rank">Tingkat IV</div>
            <div class="sanksi">&nbsp;Sanksi atas pelanggaran Tingkat IV yang dilakukan oleh mahasiswa berupa:<br>
            &nbsp;&nbsp;Teguran tertulis disertai dengan surat pernyataan tidak mengulangi perbuatan             &nbsp;&nbsp;tersebut, dibubuhi materai, ditandatangani mahasiswa yang &nbsp;&nbsp;bersangkutan dan
DPA</div>
        </div>
    </div>
    <div class="container">
        <div class="circle">Ⅲ</div>
        <div>
            <div class="rank">Tingkat III</div>
            <div class="sanksi">&nbsp;Sanksi atas pelanggaran Tingkat III yang dilakukan oleh mahasiswa berupa:<br>
            &nbsp;&nbsp;a. Membuat surat pernyataan tidak mengulangi perbuatan tersebut, dibubuhi
materai, ditandatangani mahasiswa yang bersangkutan dan DPA;<br>
&nbsp;&nbsp;b. Melakukan tugas khusus, misalnya bertanggungjawab untuk memperbaiki
atau membersihkan kembali, dan tugas-tugas lainnya.</div>
        </div>
    </div>
    <div class="container">
        <div class="circle">Ⅱ</div>
        <div>
            <div class="rank">Tingkat II</div>
            <div class="sanksi">&nbsp;Sanksi atas pelanggaran Tingkat III yang dilakukan oleh mahasiswa berupa:<br>
            &nbsp;&nbsp;a. Membuat surat pernyataan tidak mengulangi perbuatan tersebut, dibubuhi
materai, ditandatangani mahasiswa yang bersangkutan dan DPA;<br>
&nbsp;&nbsp;b. Melakukan tugas khusus, misalnya bertanggungjawab untuk memperbaiki
atau membersihkan kembali, dan tugas-tugas lainnya.</div>
        </div>
    </div>
    <div class="container">
        <div class="circle">Ⅰ</div>
        <div>
            <div class="rank">Tingkat I</div>
            <div class="sanksi">&nbsp;Sanksi atas pelanggaran tingkat I yang dilakukan oleh mahasiswa berupa:<br>
            &nbsp;&nbsp;a. Dinonaktifkan (Cuti Akademik/ Terminal) selama dua semester dan/atau;<br>
            &nbsp;&nbsp;b. Diberhentikan sebagai mahasiswa</div>
        </div>
    </div>
</body>
</html>
