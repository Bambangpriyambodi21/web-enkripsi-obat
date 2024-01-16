<?php include 'proses.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 4 - Vigenere Chiper</title>
	<link rel="stylesheet" href="style_resep.css">
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
                        <a class="nav-link" aria-current="page" href="./">Home</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" aria-current="page" href="resep.php">Data Resep</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="enkripsi_dekripsi.php">Enkripsi & Dekripsi</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" aria-current="page" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
	<div class="div1">
    <div class="container mb-5">
        <div class="my-5 text-center">
            <h3 class="fw-bold text-uppercase">Aplikasi Peresepan Obat Menggunakan Algoritma Vigenere Chiper</h3>
        </div>

        <div class="mb-5">
            <div class="row justify-content-center">
                <div class="col-6">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="kunci">Kunci</label>
                            <input type="text" name="kunci" id="kunci" class="form-control" placeholder="kunci..." value="<?= htmlspecialchars($kunci); ?>">
                            
                        </div>
                        <div class="mb-3">
                            <label for="code">Plaintext / Chipertext</label>
                            <textarea name="code" id="code" class="form-control" rows="10" placeholder="plaintext / chipertext..."></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="enkripsi" class="btn btn-success" onclick="validate(1)">Enkripsi</button>
                            <button type="submit" name="dekripsi" class="btn btn-success" onclick="validate(2)">Dekripsi</button>
                            <button type="reset" class="btn btn-secondary" onclick="btnReset()">Reset</button>
                            
                        </div>
                    </form>
                    
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="hasil">Hasil</label>
                        <textarea name="hasil" id="hasil" class="form-control" rows="15" placeholder="..." readonly><?= htmlspecialchars($code); ?></textarea>
                        
                    </div>
                </div>
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
            document.location = 'enkripsi_dekripsi.php';
        }
    </script>
</body>
</html>

