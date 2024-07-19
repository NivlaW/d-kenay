<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dapur Kenay - Rasa Bintang Lima Harga Kaki Lima </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!-- nav section -->
    <nav class="navbar sticky-top navbar-expand-md bg-light py-3">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand">Dapur Kenay</a>
            <!-- <div class="d-flex"></div> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-end flex-grow-0" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#order">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="view/login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!-- end nav section -->

    <!-- about section -->
    <section id="about">
        <div class="container-fluid container-lg">
          <div class="row justify-content-center">
            <div class="row product-strength-2">
              <div
                class="col-lg-6 d-flex justify-content-center flex-column kiri order-last order-lg-first"
                data-aos="fade-right"
              >
                <h3 class="title">Bahan Berkualitas Tinggi</h3>
                <p class="desc">
                Kami menggunakan bahan-bahan berkualitas tinggi untuk setiap hidangan, memastikan rasa yang lezat dan pengalaman kuliner yang memuaskan.
                </p>
              </div>
              <div
                class="col-lg-6 kanan order-first order-lg-last"
                data-aos="fade-left"
              >
                <img
                  src="assets/images/steak ayam.webp"
                  alt="Baju Belakang"
                  class="baju-belakang"
                />
              </div>
            </div>
            <div class="row product-strength-1">
              <div class="col-lg-6 kiri" data-aos="fade-right">
                <img
                  src="assets/images/steak ayam.webp"
                  alt="Baju Depan"
                  class="baju-depan"
                />
              </div>
              <div
                class="col-lg-6 d-flex justify-content-center flex-column kanan"
                data-aos="fade-left"
              >
                <h3 class="title">Makanan Enak, Harga Ramah!</h3>
                <p class="desc">
                Dapur Kenay menyajikan hidangan lezat dengan harga yang terjangkau. Kami menghadirkan berbagai menu, mulai dari masakan tradisional hingga kreasi modern, semuanya dengan kualitas terbaik untuk memanjakan lidah Anda.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- end about section -->

    <!-- order section -->
     <section id="order">
    <div class="container">
    <h1 class="text-center mt-3">Silahkan Pesan</h1>

    <form class="mt-4">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap Anda">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Alamat Email</label>
        <input type="email" class="form-control" id="email" placeholder="Masukkan alamat email Anda">
      </div>

      <div class="mb-3">
        <label for="pesan" class="form-label">Pesan Anda</label>
        <textarea class="form-control" id="pesan" rows="3"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Kirim Pesan</button>
    </form>
  </div>
  </section>
    <!-- end order section -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>