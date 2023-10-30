<?php
$produk = [
    ["Kaos Desain Custom Satuan Suka suka", 100000, 50, "Bahan Cotton combed 24s premium, Size: S - XXL, untuk custom bisa chat admin untuk melanjutkan proses.","https://cdn.discordapp.com/attachments/1076951986542489642/1166287868914835466/WhatsApp_Image_2023-10-24_at_15.23.07.jpg?ex=6549f138&is=65377c38&hm=be34b0bd5a974de2f755fd2a9a6c84bec78d8d283404c4dcb011d7a77eb51c68&"],
    ["Oversize Desain Custom Satuan Suka suka", 110000, 50, "Bahan Cotton combed 20s premium, Size: S - XXL, untuk custom bisa chat admin untuk melanjutkan proses.","https://cdn.discordapp.com/attachments/1076951986542489642/1166288476082274324/WhatsApp_Image_2023-10-24_at_15.23.17.jpg?ex=6549f1c9&is=65377cc9&hm=0aa1a0b7570170ac47ecc62284545c871a0c78ff2c758e4d0080adf9d1fd88f5&"],
    ["Crewneck Desain Custom suka - suka", 135000, 10, "Bahan Cotton place premium, Size: S - XXL, untuk custom bisa chat admin untuk melanjutkan proses.","https://media.discordapp.net/attachments/1076951986542489642/1166305825661386833/WhatsApp_Image_2023-10-24_at_15.23.44.jpg?ex=654a01f1&is=65378cf1&hm=e00c6c5b7831d9e0b120cc9f10c48888ef5713e91d7b2245c0b0caac3342777c&=&width=530&height=530"],
    ["Hoodie Desain Custom Satuan Suka suka ", 155000, 50, "Bahan Cotton place premium, Size: S - XXL, untuk custom bisa chat admin untuk melanjutkan proses.","https://media.discordapp.net/attachments/1076951986542489642/1166305825959198781/WhatsApp_Image_2023-10-24_at_15.23.29.jpg?ex=654a01f1&is=65378cf1&hm=7f5df5dfe650665731078b9f1aae3032c9d7b7a9b548e652ff1f606c6bafbb03&=&width=528&height=530"],
    ["Kaos Spongebob Aku jelek dan aku bangga ", 80000, 50, "Bahan Cotton combed 24s premium, Size: S - XXL.","https://media.discordapp.net/attachments/1076951986542489642/1166305825359417394/WhatsApp_Image_2023-10-24_at_15.24.02.jpg?ex=654a01f1&is=65378cf1&hm=014ee6ba0a25cbdd11a4e09fc0d370ae19196424d9cf64383c6d5fc332981c1e&=&width=528&height=530"],
    ["Kaos Patrick Tidak ada abadi di dunia ini ", 80000, 50, "Bahan Cotton combed 24s premium, Size: S - XXL.","https://media.discordapp.net/attachments/1076951986542489642/1166305824814153828/WhatsApp_Image_2023-10-24_at_15.24.16.jpg?ex=654a01f1&is=65378cf1&hm=f40be7e98c2904ee235bb78c6343c18196decd9ec5ba652476985724c290a038&=&width=531&height=530"],
    ["Kaos Squidward Kenapa Setiap kali aku bersenang ", 80000, 50, "Bahan Cotton combed 24s premium, Size: S - XXL.","https://media.discordapp.net/attachments/1076951986542489642/1166305824369541181/WhatsApp_Image_2023-10-24_at_15.24.31.jpg?ex=654a01f1&is=65378cf1&hm=df47d161f12ff38fbaaffa600eac4b19537d860a83f0ac4d28ae17eeda551103&=&width=533&height=530"],
    ["Kaos Tuan krab Uang lebih manis daripada madu ", 80000, 50, "Bahan Cotton combed 24s premium, Size: S - XXL.","https://media.discordapp.net/attachments/1076951986542489642/1166305824096927825/WhatsApp_Image_2023-10-24_at_15.24.44.jpg?ex=654a01f1&is=65378cf1&hm=90ac40b89da4172b9a4af1aa3ac4329d24e012cbdc1ecb3fb04147c4d643f845&=&width=534&height=530"],
];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Baju</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body style = "background-color:grey"> 

  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img alt="Ga ada gambar" src="https://cdn.discordapp.com/attachments/1076951986542489642/1166375190075289741/logo_baju.webp?ex=654a428b&is=6537cd8b&hm=a0a6fca81ead918ad81106ab918acf9a589d12695879102e59db4aa3d8906651&" width="100"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


    <div class="container mt-4">
      <div class="row row-cols-1 row-cols-md-4 g-4">

<?php 
if ($produk) { // kalo datanya ada
   foreach ($produk as $data_produk) { 
    ?>
    <div class="col">
    <div class="card h-100">
    <img src="<?= $data_produk[4] ?>" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title"><?= $data_produk[0] ?></h5>
      <p class="card-text"><?= $data_produk[3] ?></p>
      <h6><?= "Harga: Rp " . number_format($data_produk[1], 0, ',', '.') ?></h6>
      <h6><?= "Stok: " . $data_produk[2] ?></h6><hr>
      <a href="#" class="btn btn-primary">Beli</a>
      
      </div>
    </div>
    </div>

    <?php }
}else { ?>
    <p>Tidak ada data</p>
<?php }?>

      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    

  </body>
</html>