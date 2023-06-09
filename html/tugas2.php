<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Tugas 2 Pemweb</title>
		<link rel="stylesheet" href="../styles.css" />

        <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

        <link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
			crossorigin="anonymous"
		/>

		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
			integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
	</head>

	<body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Ridho Ahmad Fauzi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0 ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="https://ridho990.github.io/ft-unila/html/index.html">Tugas 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tugas 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tugas 3</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="utama">
            <nav id="navbar">
                <header>List Navigasi</header>
                <ul>
                    <li><a class="nav-link-li" href="#Variabel">Variabel</a></li>
                    <li><a class="nav-link-li" href="#if-else">If Else Statement</a></li>
                    <li><a class="nav-link-li" href="#Switch-statement">Switch Statement</a></li>
                    <li><a class="nav-link-li" href="#Loop-statement">Loop Statement</a></li>
                    <li><a class="nav-link-li" href="#Array-syntax">Array Syntax</a></li>
                    <li><a class="nav-link-li" href="#Function-statement">Function Syntax</a></li>
                    <li><a class="nav-link-li" href="#Fibonacci">Fibonacci</a></li>
                </ul>
            </nav >
            <main id="main-doc">
                <section id="Basic_Syntax" class="main-section">
                    <header ><h1>Bahasa PHP</h1></header>
                    <p>
                        Saya sangat senang dapat memperkenalkan website ini yang berfokus pada pembahasan pemrograman dasar bahasa PHP. Sebagai bahasa pemrograman yang populer dan banyak digunakan di seluruh dunia, PHP sangat penting bagi mereka yang ingin mempelajari dasar-dasar pemrograman web.
                    </p>
                    <p>
                        Di website ini, kami akan membahas topik-topik penting dalam pemrograman PHP seperti struktur dasar bahasa, variabel, operator, percabangan, dan pengulangan.
                        Kami berharap bahwa website ini akan menjadi sumber daya yang berguna bagi para pemula dan pengembang yang ingin meningkatkan keterampilan mereka dalam pemrograman PHP. Terima kasih telah mengunjungi website kami, dan jangan ragu untuk memberikan masukan atau saran apapun untuk membantu kami meningkatkan kualitas konten yang kami sajikan.
                    </p>
                </section>
    
                <section id="Variabel" class="main-section">
                    <header >
                        <h2>Variabel</h2>
                    </header>
                    <p><span class="grey">Variabel</span> dalam PHP adalah simbol atau nama yang digunakan untuk merepresentasikan sebuah nilai atau data yang dapat berubah-ubah selama proses eksekusi program. Variabel digunakan untuk menyimpan data sementara, seperti nilai yang diinput oleh user atau hasil operasi matematika atau logika dalam program.
                        Variabel dalam PHP dimulai dengan tanda dollar <span class="grey">($)</span> diikuti dengan nama variabel yang diinginkan. Nama variabel harus diawali dengan huruf atau underscore, dan selanjutnya dapat berisi kombinasi dari huruf, angka, dan underscore.</p>
                    <div class="img-source-code">
                        <img src="../images/variabel.png" alt="">
                    </div>
                    <p>
                        Pada contoh di atas, terdapat tiga variabel yaitu <span class="grey">$nama</span>, <span class="grey">$umur</span>, dan <span class="grey">$tinggi</span>. Variabel <span class="grey">$nama</span> diisi dengan nilai "John Doe", variabel <span class="grey">$umur</span> diisi dengan nilai 25, dan variabel <span class="grey">$tinggi</span> diisi dengan nilai 175.5. Kemudian, nilai dari masing-masing variabel tersebut ditampilkan pada halaman web menggunakan fungsi echo.
                    </p>
                </section>
    
                <section id="if-else" class="main-section">
                    <header ><h2>If Else</h2></header>
                    <p>
                        <span class="grey">If else</span> dalam PHP adalah salah satu struktur kontrol yang digunakan untuk mengambil keputusan pada saat menjalankan program. Struktur <span class="grey">if else</span> digunakan untuk mengevaluasi suatu kondisi dan mengeksekusi blok kode tertentu berdasarkan hasil evaluasi kondisi tersebut.
                    </p>
    
                    <div class="img-source-code">
                        <img src="../images/if-else.png" alt="">
                    </div>
                    <p>
                        Pada contoh di atas, terdapat variabel <span class="grey">$nilai</span> yang diisi dengan nilai 80. Kemudian, dilakukan evaluasi kondisi apakah nilai tersebut lebih besar atau sama dengan 75. Jika kondisi tersebut terpenuhi, maka akan ditampilkan pesan <span class="grey">"Anda lulus!"</span>. Namun jika tidak terpenuhi, maka akan ditampilkan pesan <span class="grey">"Anda tidak lulus!"</span>.
                    </p>
                    <p>
                        Selain struktur <span class="grey">if else</span>, terdapat juga struktur <span class="grey">if else if</span> yang digunakan untuk mengevaluasi beberapa kondisi secara berurutan. Contohnya sebagai berikut:
                    </p>
                    <div class="img-source-code">
                        <img src="../images/if-else2.png" alt="">
                    </div>
                    <p>
                        Pada contoh di atas, terdapat variabel <span class="grey">$nilai</span> yang diisi dengan nilai 80. Kemudian, dilakukan evaluasi kondisi secara berurutan, dimulai dari kondisi apakah nilai tersebut lebih besar atau sama dengan 90, kemudian dilanjutkan dengan kondisi apakah nilai tersebut lebih besar atau sama dengan 80, dan seterusnya. Jika tidak ada satu kondisi pun yang terpenuhi, maka akan ditampilkan pesan <span class="grey">"Anda mendapat nilai D atau E!"</span> .
                    </p>
                </section>
    
                <section id="Switch-statement" class="main-section">
                    <header ><h2>Switch</h2></header>
                    <p><span class="grey">Switch</span> dalam PHP digunakan untuk mengevaluasi ekspresi dan memilih satu dari beberapa blok kode yang akan dieksekusi berdasarkan nilai ekspresi. Ini mirip dengan penggunaan banyak if...else if...else statements tetapi memiliki sintaks yang lebih sederhana.</p>
                    <div class="img-source-code">
                        <img src="../images/switch.png" alt="">
                    </div>
                    <p>
                        Pertama, kita menentukan variabel <span class="grey">$day</span> dengan nilai "Tuesday". Kemudian, kita menggunakan switch untuk mengevaluasi nilai <span class="grey">$day</span>. Dalam setiap case, kita menyatakan nilai yang akan dievaluasi ("Monday", "Tuesday", "Wednesday", dll.) dan jika nilai itu sama dengan nilai <span class="grey">$day</span>, maka blok kode yang sesuai akan dieksekusi.Setiap blok kode diakhiri dengan kata kunci break. Jika kita tidak menambahkan kata kunci break, maka eksekusi akan dilanjutkan ke blok kode berikutnya, yang sering tidak diinginkan.Terakhir, kita menambahkan blok kode default. Blok kode ini akan dieksekusi jika nilai <span class="grey">$day</span> tidak cocok dengan nilai di setiap case. Sehingga outputnya adalah <span class="grey">"Today is Tuesday"</span>
                    </p>
                </section>
    
                <section id="Loop-statement" class="main-section">
                    <header ><h2>Loop</h2></header>
                    <p><span class="grey">Loop</span> dalam PHP adalah struktur kendali yang memungkinkan kita untuk melakukan perulangan suatu kode secara terus-menerus selama kondisi tertentu terpenuhi. Terdapat tiga jenis loop yang umum digunakan dalam PHP, yaitu:</p>
                    <h3>For Loop</h3>
                    <p><span class="grey">For loop</span> digunakan untuk mengulang suatu kode sejumlah tertentu kali dengan menggunakan variabel perulangan. Syntax <span class="grey">for loop</span> pada PHP adalah sebagai berikut:</p>
                    <div class="img-source-code">
                        <img src="../images/for-loop.png" alt="">
                    </div>
                    <h3>While Loop</h3>
                    <p>
                        <span class="grey">While loop</span> digunakan untuk mengulang suatu kode selama kondisi yang ditentukan terpenuhi. Syntax <span class="grey">While loop</span> pada PHP adalah sebagai berikut:
                    </p>
                    <div class="img-source-code">
                        <img src="../images/while-loop.png" alt="">
                    </div>
                    <h3>Do While Loop</h3>
                    <p>
                        <span class="grey">Do While loop</span> juga digunakan untuk mengulang suatu kode selama kondisi yang ditentukan terpenuhi. Perbedaan antara <span class="grey">while loop</span> dengan <span class="grey">do while loop</span> adalah <span class="grey">do while loop</span> akan mengeksekusi kode setidaknya satu kali sebelum mengecek kondisi. Syntax <span class="grey">do while loop</span> pada PHP adalah sebagai berikut:
                    </p>
                    <div class="img-source-code">
                        <img src="../images/do-while.png" alt="">
                    </div>
                </section>
    
                <section id="Array-syntax" class="main-section">
                    <header ><h2>Array</h2></header>
                    <p><span class="grey">Array</span> dalam PHP adalah sebuah tipe data yang digunakan untuk menyimpan kumpulan data dengan tipe yang sama, seperti <span class="grey">String</span>, <span class="grey">Integer</span>, atau bahkan <span class="grey">array</span>. <span class="grey">Array</span> sangat berguna ketika kita ingin menyimpan banyak data dalam satu variabel dan dapat dengan mudah mengaksesnya dengan indeks atau kunci tertentu. Berikut adalah penjelasan singkat tentang <span class="grey">array</span> dalam PHP beserta contoh source code-nya:</p>

                    <h3>Array Numerik</h3>
                    <p><span class="grey">Array numerik</span> adalah <span class="grey">array</span> yang mengasosiasikan nilai-nilai dengan indeks numerik yang dimulai dari 0. Berikut adalah contoh <span class="grey">array numerik</span> dalam PHP:</p>
                    <div class="img-source-code">
                        <img src="../images/array-numerik.png" alt="">
                    </div>
                    
                    <h3>Array Asosiatif</h3>
                    <p>
                        Array asosiatif adalah array yang mengasosiasikan nilai-nilai dengan kunci-kunci yang ditentukan sendiri. Kunci-kunci ini dapat berupa string atau integer. Berikut adalah contoh array asosiatif dalam PHP:
                    </p>
                    <div class="img-source-code">
                        <img src="../images/array-assosiatif.png" alt="">
                    </div>
                    
                    <h3>Array Multidimensi</h3>
                    <p>
                        Array multidimensi adalah array yang memiliki satu atau lebih array di dalamnya. Dalam PHP, array multidimensi dapat didefinisikan dengan cara seperti ini:
                    </p>
                    <div class="img-source-code">
                        <img src="../images/array-multidimensi.png" alt="">
                    </div>
                </section>
                
                <section id="Function-statement" class="main-section">
                    <header><h2>Function</h2></header>
                    <p><span class="grey">Function</span> dalam PHP adalah blok kode yang dapat digunakan berulang kali dalam sebuah program. <span class="grey">Function</span> dapat digunakan untuk mengorganisir kode menjadi bagian-bagian kecil yang terpisah dan mudah dikelola. Untuk membuat <span class="grey">function</span> dalam PHP, digunakan kata kunci "<span class="grey">function</span>" diikuti dengan nama <span class="grey">function</span> dan parameter (jika ada). Berikut adalah contoh penggunaan <span class="grey">function</span> dalam PHP:</p>

                    <div class="img-source-code">
                        <img src="../images/array-multidimensi.png" alt="">
                    </div>
                    <p>Pertama, kita mendefinisikan function hitungLuasPersegi dengan menerima satu parameter $sisi. Dalam function, kita menghitung luas persegi dengan rumus $luas = $sisi * $sisi. Kemudian, kita mengembalikan nilai $luas menggunakan kata kunci return. Selanjutnya, kita memanggil function hitungLuasPersegi dengan memberikan nilai $sisi sebesar 5. Hasil penghitungan luas persegi kemudian disimpan ke dalam variabel $luas_persegi. Terakhir, kita mencetak hasilnya menggunakan echo.</p>
                </section>
                
                <section id="Fibonacci" class="main-section">
                    <header><h2>Fibonacci Loop</h2></header>
                    <div class="img-source-code">
                        <img src="../images/fibonacci-loop.png" alt="">
                    </div>

                    <header><h2>Fibonacci Rekursif</h2></header>
                    <div class="img-source-code">
                        <img src="../images/fibon-rekursif.png" alt="">
                    </div>
                </section>
                <section class="fibonacci-calc">
                    <p class="dalam-fibonacci">Program Sederhana Fibonacci Dengan PHP</p>
                    <form method="post">
                        <input class="form" type="text" name="num1" value="" placeholder="Enter a number"/> </td>
                        <input class= "button-submit" type="submit" name="submit" value="Submit"/> </td>
                    </form>
                        <?php
                            function Fibonacci($number)
                            {
                                // if and else if to generate first two numbers
                                if ($number == 0)
                                    return 0;
                                else if ($number == 1)
                                    return 1;
                                // Recursive Call to get the upcoming numbers
                                else
                                    return (Fibonacci($number-1) + Fibonacci($number-2));
                            }

                            if(isset($_POST['submit']))
                            {
                                $n = $_POST['num1'];
                                echo '<p class = "series-of" >';
                                echo "Hasil dari fibonacci $n adalah :"."";
                                echo '</p>';
                                echo '<div class="hasil-fibonacci">';
                                for ($counter = 0; $counter < $n; $counter++)
                                {
                                    // echo Fibonacci($counter),'   ';
                                    echo '<div class="number"> <p>' . Fibonacci($counter) . '</p></div>';
                                }
                                echo '</div>';
                                return 0;
                            }
                        ?>
                </section>
            </main>
        </div>
        <footer>
            <p>Mata Kuliah Pemrogramman Web</p>
        </footer>
        <script
			src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
			integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
			integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
			crossorigin="anonymous"
		></script>
	</body>
</html>
