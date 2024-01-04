<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "UTF-8">
    <title> Garage Motor ~ Always You </title>
    <meta name    = "viewport" content = "width=device-width, initial-scale=1">
    <link rel     = "icon" type = "image/png" sizes = "35x34" href ="./image/logo.jpg">
    <link rel     = "stylesheet" href = "./style/style.css">
    <link href    ="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head> 

<style>
    html, body {
    height: 100%;
    }
    .bar {
    background-color:black;
    display: flex;
    padding: 5px;
    z-index: auto;
    position: relative;
    justify-content: center;
    height: 74px;
    font-family: 'Times New Roman';
}
.title {
    font-size: 50px;
    color: White;
}
</style>

<body class="containers d-flex flex-column">

    <div class= "bar">   
    <h1 class= "title"> Garage Motors Always You </h1>
    </div>
    </div>
    </div>
    </div>
    <button class= "btn btn-secondary" type="btn" data-bs-toggle="collapse" data-bs-target="#collapseexample" aria-expanded="false" aria-controls="collapseexample">
    Pilihan
    </button>
          
        <div class="col-md-3 p-3 collapse" id="collapseexample">

        <div class="p-3 bg-primary mt-3">
            <a class="text-light" href="index.php?page=motor"> Motor </a>        
            </div>  
        <div class="p-3 bg-primary mt-3">
            <a class="text-light" href="index.php?page=penjualan_perhari"> Penjualan Perhari </a>       
            </div>
        <div class="p-3 bg-primary mt-3">
            <a class="text-light" href="index.php?page=penjualan_perminggu"> Penjualan Perminggu </a>       
            </div>
    </div>

    <div class="col p-4 h-100">
                    <div class="p-3">
                    <?php
                    include "../sql.php"; 
                    $halaman = isset($_GET['page']) ? $_GET['page'] : 'motor';

                    switch ($halaman) {
                    case 'motor':
                        include('motor.php'); 
                        break;

                        case 'penjualan_perminggu':
                        include('penjualan_perminggu.php'); 
                        break;

                        case 'penjualan_perminggu-edit':
                        include('penjualan_perminggu-edit.php'); 
                        break;
                            
                        case 'penjualan_perhari':
                        include('penjualan_perhari.php'); 
                        break;

                        case 'penjualan_perhari-edit':
                        include('penjualan_perhari-edit.php'); 
                        break;
        
                        case 'motor-add':
                        include('motor-add.php'); 
                        break;

                        case 'motor-edit':
                        include('motor-edit.php'); 
                        break;
    
                        case 'motor-delete':
                        include('motor-delete.php'); 
                        break;
                        
                        case 'penjualan_perminggu-delete':
                        include('penjualan_perminggu-delete.php'); 
                        break;
                        
                        case 'penjualan_perhari-delete':
                        include('penjualan_perhari-delete.php'); 
                        break;
                    }
                    ?>     
                </div>
        </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

