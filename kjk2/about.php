<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 6 - Vigenere Chiper</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">KJK - Vigenere Chiper</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" aria-current="page" href="resep.php">Data Resep</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="enkripsi_dekripsi.php">Enkripsi & Dekripsi</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container mb-5">
        <div class="mt-5 text-center">
            <h1 class="display-5 fw-bold text-uppercase">Keamanan Jaringan Komputer</h1>
            <div class="col-lg-8 mx-auto">
                <p class="lead mb-4">
                    Program ini bertujuan untuk melakukan pengamanan terhadap pendataan resep obat-obatan sehingga tidak terjadinya penyalahgunaan resep obat.
                </p>
            </div>
        </div>

        <div class="mb-4">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h6 class="text-center mb-3"></h6>
                </div>
            </div>
            <hr>
        </div>

        <h4 class="text-center mb-5 text-uppercase">Anggota Kelompok 4</h4>
        <div class="d-flex justify-content-center gap-5">
            
			<div class="d-flex flex-column align-items-center">
                <img src="assets/mila.PNG" alt="img" style="width:150px; height: 150px; border-radius: 50%; object-fit: cover;">
                <div class="mt-3 text-center">
                    <h5 class="mb-1">Jamilatul Aisyiah</h5>
                    <p class="m-0 text-muted">190631100048</p>
                </div>
            </div>
			
			<div class="d-flex flex-column align-items-center">
                <img src="assets/bambang.JPG" alt="img" style="width:150px; height: 150px; border-radius: 50%; object-fit: cover;">
                <div class="mt-3 text-center">
                    <h5 class="mb-1">Bambang Priyambodo</h5>
                    <p class="m-0 text-muted">190631100056</p>
                </div>
            </div>
			
			<div class="d-flex flex-column align-items-center">
                <img src="assets/bilqis.PNG" alt="img" style="width:150px; height: 150px; border-radius: 50%; object-fit: cover;">
                <div class="mt-3 text-center">
                    <h5 class="mb-1">Bilqis Faridah</h5>
                    <p class="m-0 text-muted">190631100060</p>
                </div>
            </div>			
			
			<div class="d-flex flex-column align-items-center">
                <img src="assets/arisa.PNG" alt="img" style="width:150px; height: 150px; border-radius: 50%; object-fit: cover;">
                <div class="mt-3 text-center">
                    <h5 class="mb-1">Arisa Yanuarima</h5>
                    <p class="m-0 text-muted">190631100061</p>
                </div>
            </div>

			<div class="d-flex flex-column align-items-center">
                <img src="assets/galih.PNG" alt="img" style="width:150px; height: 150px; border-radius: 50%; object-fit: cover;">
                <div class="mt-3 text-center">
                    <h5 class="mb-1">Galih Gumelar S.K.P</h5>
                    <p class="m-0 text-muted">190631100062</p>
                </div>
            </div>
			
            <div class="d-flex flex-column align-items-center">
                <img src="assets/ria.PNG" alt="img" style="width:150px; height: 150px; border-radius: 50%; object-fit: cover;">
                <div class="mt-3 text-center">
                    <h5 class="mb-1">Ria Alfina</h5>
                    <p class="m-0 text-muted">190631100065</p>
                </div>
            </div>


        </div>
    </div>

    <footer class="text-center py-3 bg-light">
        <div class="container">
            <p class="m-0 small">© 2023 Kelompok 6. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        function btnReset() {
            document.location = 'index.php';
        }
    </script>
</body>
</html>