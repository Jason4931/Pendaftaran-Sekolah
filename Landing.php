<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="align-items-center bg-body-tertiary" style="overflow-x: hidden;">
    <nav class="navbar bg-body-secondary w-100 border-bottom">
        <div class="container-fluid">
        <div class="d-block w-100" id="navbarScroll">
            <img class="" src="./Logo SMKN 4.jpeg" alt="" width="95px">
            <div class="d-flex float-end">
            <span class="mx-2 text-end"><a href="#" class="btn bg-primary py-1 my-2 text-white">Menu</a></span>
            <div class="dropdown-center">
                <button class="mx-2 text-end btn bg-primary py-1 my-2 text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Kontak
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#" onclick="nokontak()">+62 0877-8096-6355</a></li>
                </ul>
            </div>
            <span class="mx-2 text-end"><a href="/Pendaftaran Sekolah/?login" class="btn bg-primary py-1 my-2 text-white">Login</a></span>
            </div>
        </div>
        </div>
    </nav>
    <div class="container my-4 pt-4 pb-2">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <br>
                <h3 class="card-title" style="color:#03D8F5">Pendaftaran Sekolah SMK Negeri 4 Malang</h3>
                <h2 class="card-title" style="color:#0C5C8A">Website Pendaftaran</h2>
                <br><br>
                <p class="card-text" style="text-align: justify;"><b>
                Mulailah daftar di sekolah SMK Negeri 4 Malang!<br>
                Sekolah berkualitas dan pilihan SMK terbaik!<br><br><br><br></b>
                <a class="btn bg-primary w-50 py-2 my-4 text-white" href="/Pendaftaran Sekolah/?login">Mulai Daftar Disini</a>
                </p>
            </div>
        </div>
    </div><br><br><br>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top bg-body-secondary">
        <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
        </a>
        <button onclick="copy()" style="border:0px"><h4><span class="mb-3 mb-md-0">Share</span></h4></button>
        <button onclick="copy()" style="border:0px"><i class="fa fa-share-alt mx-2" style="font-size:36px"></i></button>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <a href="https://twitter.com/smkn4malang" target="_blank" class="text-black"><i class="fa fa-twitter mx-2" style="font-size:36px"></i></a>
        <a href="https://www.instagram.com/smkn4malang.official/" target="_blank" class="text-black"><i class="fa fa-instagram mx-2" style="font-size:36px"></i></a>
        <a href="https://www.youtube.com/c/SMKN4MalangOfficial" target="_blank" class="text-black"><i class="fa fa-youtube-play mx-2" style="font-size:36px"></i></a>
        </ul>
    </footer>
    <script>
    function copy() {
        navigator.clipboard.writeText("http://localhost/Pendaftaran%20Sekolah/");
    }
    function nokontak() {
        navigator.clipboard.writeText("+62 0877-8096-6355");
    }
</script>
</body>
</html>