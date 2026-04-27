<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bakery Picker </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Untuk sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <!-- Untuk oswald -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">

    <!-- Untuk bitcount -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Prop+Double+Ink:wght@100..900&display=swap"
        rel="stylesheet">

    <!-- Untuk JQuery (Biar tooltipny berfungsi)-->

    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>


    <style>
        .jumbotron {
            background-color: red;
            padding: 5px;
            border-radius: 0.5;
        }

        .open-sans-title {
            font-family: "Open Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: light;
            font-size: xx-large;
            font-variation-settings:
                "wdth" 100;
        }

        .oswald-title {
            font-family: "Oswald";
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: light;
            font-size: xx-large;
            font-variation-settings:
                "wdth" 100;
        }

        .bitcount-title {
            font-family: "Bitcount Prop Double Ink";
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: light;
            font-size: xx-large;
            font-variation-settings:
                "wdth" 100;
        }

        .tocenter {
            text-align: center;
            font-size: x-large;
            border: 50px;
        }

        .mediabold {
            font-weight: bold;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .subscribe-button:hover {
            color: rgb(41, 118, 211);
            border-radius: 200px;
            height: 100px;
            background-color: aliceblue;
        }

        .join-button:active {

            background-color: rgb(0, 200, 100);

        }

        .title {
            text-align: center;
            font-size: 30px;
            color: rgb(23, 89, 203);
        }

        .imgtitle {
            text-align: center;
            font-size: x-small;
        }

        .imgformat {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }


        a:link {
            text-decoration: magenta;
        }

        a:hover {
            text-decoration: magenta;
        }

        a:visited {
            text-decoration: magenta;
        }
    </style>
</head>

<body>

    <div class="jumbotron">
        <h1> Welcome to Bakery Picker</h1>
        <h2> Website yang membantu anda dalam mencari bakery yang sedang dicari!! </h2>
        <p>Selamat Memilih Tujuan Bakery / Menu anda </p>
        <button class="join-button"> <a href="https://github.com/FahmiGF/FE5026241200">Source github </a> </button>

    </div>

    <div class="container">
        <div class="row">
            <div class="col 4">
                <h3>Bakery 1</h3>
                <p class="bitcount-title"> <b>Igor Bakery </b></p>
                <a href="https://www.igors-pastry.com/sby" data-toggle="tooltip"
                    title="Pencet ini untuk mengecek di websitenya!" target="_blank">Click
                    this link to check</a>
                <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/c36a069c-402d-4314-84a8-4149936ef0cc_restaurant-image_1593449319550.jpg?auto=format"
                    class="img-fluid" alt="Igor's Bakery">
                <button class="subscribe-button"> Beli Sekarang! </button>
            </div>
            <div class="col 4">
                <h3>Bakery 2</h3>
                <p class="bitcount-title"> <b>Bon Ami Bakery</b></p>
                <a href="https://www.bonami.co.id/home.php" data-toggle="tooltip"
                    title="Pencet ini untuk mengecek di websitenya!" target="_blank">Click
                    this link to check</a>
                <img src="https://bonami.co.id/data/menu/Pastry/Cover.jpg" class="img-fluid" alt="Bon Ami">
                <button class="subscribe-button"> Beli Sekarang! </button>
            </div>
            <div class="col 4">
                <h3>Bakery 3</h3>
                <p class="bitcount-title"> <b>Laritta Bakery </b></p>
                <a href="https://www.larittabakery.com/" data-toggle="tooltip"
                    title="Pencet ini untuk mengecek di websitenya!" target="_blank">Click
                    this link to check </a>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpNEy4BxmVBQnqOCFYWau7zsktC6X8o2Qrhg&s"
                    class="img-fluid" alt="Laritta Bakery">
                <button class="subscribe-button"> Beli Sekarang! </button>
            </div>
        </div>
    </div>

    <p class="title">
        <span id="bikinjaditengah"><br> <br>
            Sejarah dan tentang bakery-bakery tersebut </span>
    </p>
    <p>
        <center> <img src="https://statik.tempo.co/data/2014/08/30/id_320044/320044_620.jpg" width="600px" height="400px" alt="">
        </center>
    </p>
    <p class="imgtitle"> Bentuk tampak depan Igor's Bakery
    </p>

    <p>
        </a> Pada tahun 1989, Igo dan Ratna selesai menempuh kuliah di Sekolah Tinggi Perhotelan Bandung, mendapat
        tawaran kerja di Hilton Hotel London untuk terjun sebagai cook professional.
        Di tahun 1991 pindah ke Switzerland,
        Igo bekerja di Brasserie Lipp - top 10 Michelin restaurant di Geneva kemudian pindah ke Hyatt Hotel Montreux
        sementara Ratna bekerja di Movenpick Hotel Zurich.
        Setelah itu mereka memperdalam ilmu perhotelan di Hotel Institute Montreux. </p>

    <p> Pengalaman yang panjang setelah lebih dari 14 tahun di Inggris, Switzerland, Jepang dan Indonesia sebagai
        professional di dunia perhotelan dan pastry bakery didukung pendidikan yang menunjang membuat Igo dan Ratna
        percaya diri memulai dengan membawa pengalaman dan pelajaran internasionalnya,
        ke tingkatan usaha bisnis Igor's Pastry. Igor's Pastry diambil dari nama Igo sebagai Director yang mengelola
        seluruh aspek manajemen dan marketing sedangkan Pastry Chef Ratna yang mengelola keseluruhan proses produksi.
        Menu-menu klasik dan baru selalu ditawarkan dan untuk melayani tingginya kesadaran masyarakat akan kesehatan,
        Igor's Pastry menawarkan produk yang sugar free, egg free, gluten free, kasein free, flour free, low carbohidrat
        dan hi-fibre dalam aneka produk pastry, bakery, cookies, ice cream, snack dan pudding.
        Igor's Pastry juga melayani delivery order. Kami yakin ramuan sukses dari bahan baku terbaik dan menjunjung
        etika bisnis yang tinggi sehingga pelanggan mendapatkan nilai yang sesuai bahkan pelanggan loyal tidak jarang
        minta menu baru sebagai inspirasi tambahan.</p>

    <p>
        <center><img src="https://www.larittabakery.com/wp-content/uploads/2018/04/outlet-laritta.webp" width="600px"
                height="400px" alt="" class="imgformat"></center>
    </p>
    <p class="imgtitle"> Bentuk tampak depan Laritta Bakery
    </p>

    <p> Berdirinya Laritta Bakery diawali dari sebuah usaha rumahan di Jakarta. Lim Rita Sari, pendiri Rita’s Cookies
        (cikal bakal Laritta Bakery) mulai menerima pesanan kue tart dari rumah. Tak disangka, kue tart buatannya
        disukai oleh banyak orang.
        Kenikmatan Kue Tart buatan Rita menyebar dari mulut ke mulut hingga sampai ke orang nomor satu di Indonesia.
        Kesuksesannya di Jakarta tidak membuatnya lupa akan kota kelahirannya. Pada 1975, Rita pindah ke Surabaya dan
        mendirikan usaha salon khusus wanita.
        Namun, hasratnya untuk terus membuat kue tidak pernah padam. Ditengah kesibukannya mengelola salon, Rita terus
        membuat kue kering yang diberikannya untuk pelanggan salon maupun untuk kerabat-kerabat di momen-momen khusus.

        Hal tersebut terus berlanjut hingga krisis ekonomi melanda Indonesia pada 1998. Rita membuat pilihan yang dapat
        dibilang nekat ketika itu. Rita justru memulai usaha bakery. Usaha tersebut berjalan lancar,
        hingga akhirnya pada 2002, outlet pertama Rita’s Cookies didirikan. Saat itu, fokus Rita adalah membuat kue
        kering (cookies).
        Bisnis Rita’s Cookies terus maju hingga pada tahun 2010, Rita merasakan perkembangan bisnisnya melambat. Setelah
        berpikir panjang dan melakukan diskusi dengan keluarganya,
        Rita memutuskan untuk melakukan perombakan manajemen untuk mengembangkan usahanya.
    </p>

    <p>
        <center><img src="https://www.bonami.co.id/images/home/home-image-grid-11b.jpg" width="600px" height="400px"
                alt="" class="imgformat"></center>
    </p>
    <p class="imgtitle"> Bentuk tampak depan Bon Ami Bakery
    </p>

    <p> Bon Ami Bakery didirikan pada 1989 dengan membawa resep otentik keluarga. Berawal dari sebuah ruko di Jalan
        Manyar Kertoarjo, saat ini Bon Ami Bakery memiliki 16 outlet di Surabaya dan Tangerang.
        Bon Ami diambil dari Bahasa Perancis yang berarti "Sahabat". Kesan itulah yang selalu diusung dalam setiap
        outlet, bahwa penikmat suguhan Bon Ami akan selalu disambut sebagai sahabat.

        Aneka pilihan homemade goodies, mulai dari suguhan tradisional seperti heici, risoles, pastel, hingga beragam
        roti manis maupun savoury tersedia untuk Sahabat Bon Ami nikmati. Baik sebagai buah tangan, hantaran,
        maupun camilan bersama keluarga dan sahabat. Penggunaan bahan berkualitas, pengolahan higienis, dan pelayanan
        segenap hati menjadi kunci dalam Bon Ami Bakery berbagi sukacita.

        Bon Ami Bakery berharap untuk dapat terus menyajikan cita rasa otentik kesukaan lintas generasi yang membawa
        Sahabat Bon Ami kepada kenangan akan momen-momen penuh kehangatan bersama orang-orang terkasih.
    </p>

    <div class="container tooltip">
        <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpNEy4BxmVBQnqOCFYWau7zsktC6X8o2Qrhg&s"
            data-toggle="tooltip" title="Hooray!"> Apakah anda yakin untuk membeli? </a>
    </div>

    <div class="mediabold tocenter">
        Pembuat Website: Saya sendiri
        <br>
        Pembuat Animasi: Saya sendiri
        <br>
        Credits: Bootstrap 4 W3Schools
        <br>
    </div>

    <p>
        <span>
            Media Sosial Yg bisa dihubungi
        </span>
        <br>
        @igors_pastry
        <br>
        @bonami_bakery
        <br>
        @laritta_bakery
        <br>
    </p>
</body>

</html>
