<html>
<head>
    <title>Dashboard penjual</title>
    <link rel="stylesheet" type="text/css" href="resources/scss/penjual.scss">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body class="body-penjual">
<section id="sideMenu">
    <nav>
        <center><p>Hei <?= $_SESSION['user'] ?> !</p></center>
        <a href="?controller=home&action=homePenjual"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        <a class="active" href="?controller=tanam&action=showPenjualTanam"><i class="fa fa-leaf" aria-hidden="true"></i>
            Tanam</a>
        <a href="?controller=produk&action=tampilPenjualProduk"><i class="fa fa-shopping-bag" aria-hidden="true"></i>
            Produk</a>
        <a href="?controller=transaksi&action=showPenjualTransaksi"><i class="fa fa-shopping-cart"
                                                                       aria-hidden="true"></i> Transaksi</a>
    </nav>
</section>
<header>
    <div class="search-penjual">
        <i class="fa fa-search" aria-hidden="true"></i>
        <input type="text" name="" value="">
    </div>
    <div class="penjual-field">
        <a href="#" class="notification">
            <i class="fa fa-bell-o" aria-hidden="true"></i>
            <span class="circle-bell">3</span></a>
        <a href="logout.php">
            <div class="penjual-img"></div>
            <i class="fa fa-sign-out" aria-hidden="true"></i>
        </a>
    </div>
</header>
<section id="content-area">
    <div class="heading">
    </div>
    <div class="form-tanam-penjual">
        <form enctype="multipart/form-data" method="post">
            <input type="hidden" name="controller" value="produk">
            <input type="hidden" name="action" value="tambahPenjualProduk">
            <p>Nama Produk</p>
            <input type="text" name="nama_produk" placeholder="Nama Produk" required>
            <p>Harga</p>
            <input type="number" name="harga" placeholder="Harga Produk" required>
            <p>Stok</p>
            <input type="number" name="stok" placeholder="Stok Tanaman" required>
            <input name="foto_produk" type="file">
            <input type="submit" value="Input" name="input">
        </form>
    </div>
</section>
</body>

</html>