<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- My Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <title>#EvdeKal - Türkiye İstatistikleri</title>
</head>
<body>
    <div class="container-fluid bg-light p-5 text-center my-3">
        <h1 class="">Covid-19 Virüs-Türkiye İstatistikler</h1>
        <h5 class="text-muted">Türkiye'deki Covid-19 hakkında toplam bilgilere erişebilirsiniz.</h5>
    </div>

    <div class="container my-5">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>Toplam Vaka Sayısı</h5>
                <?php 
                $vaka = file_get_contents('https://covid19bilgi.saglik.gov.tr/tr/'); 
                preg_match_all('@<span class="_VWvqNvR9 _YBr3HJqx _3JdPm85O" data-id="_YBr3HJqx" data-name="title">(.*?)</span>@si',$vaka,$baslik);
        
                $cikti = implode("", $baslik[1]);
        
                echo $cikti;
                
                ?>
            </div>
            <div class="col-4 text-success">
                <h5>Toplam İyileşen Hasta Sayısı</h5>
                <?php 
                $iyilesen = file_get_contents('https://covid19bilgi.saglik.gov.tr/tr/');
                preg_match_all('@<span class="_VWvqNvR9 _m0d3HQ6p _3JdPm85O" data-id="_m0d3HQ6p" data-name="title">(.*?)</span>@si',$iyilesen,$baslik);
        
                $cikti = implode("", $baslik[1]);
        
                echo $cikti;
                
                ?>
            </div>
            <div class="col-4 text-danger">
                <h5>Toplam Ölü Sayısı</h5>
                <?php 
                $olu = file_get_contents('https://covid19bilgi.saglik.gov.tr/tr/');
                preg_match_all('@<span class="_VWvqNvR9 _40m7HaVp _3JdPm85O" data-id="_40m7HaVp" data-name="title">(.*?)</span>@si',$olu,$baslik);
        
                $cikti = implode("", $baslik[1]);
        
                echo $cikti;
                
                ?>
            </div>
        </div>
    </div>

    <div class="container bg-light p-3 my-5 text-center">
        <h5 class="text-info">"Can sıkıntısı, solunum sıkıntısından iyidir."</h5>
        <p class="text-muted">#EvdeKal</p>
    </div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">Copyright &copy;2020, <a href="https://github.com/ByPerPer" target="_blank">ByPerPer</a></span>
        </div>
    </footer>

</body>
</html>