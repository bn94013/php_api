<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>api天氣預報</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="css/style.css">



</head>
<body>
    
    <div class="jumbotron backImage text-center">
        <div class="container">
            <h1 class="display-4 text-danger mt-5 font-weight-bold">天氣預報</h1>
            <p class="lead p-3 mb-2 bg-dark text-white mt-3"> 請在下面框輸入您要查詢的城市名稱 </p>

            <form action="" method="">
                <div class="form-group col-md-7 mx-auto">
                    <input id="city" type="text" class="form-control mt-4" name="city" placeholder="例如:Taichung,Taipei,Kaohsiung...America,Japan">
                </div>
            </form>

            <button id="findMySelect" type="submit" class="btn btn-warning btn-lg">查詢</button>    

            <div class="col-8 mx-auto mt-4">
                <div id="success" class="alert alert-success text-left">查詢成功</div>
                <div id="fail" class="alert alert-danger">查詢錯誤，請重新輸入</div>
                <div id="noCity" class="alert alert-danger">請輸入城市名稱</div>
            </div>

        </div>
    </div>


    <script type="text/javascript" src="js/index.js">

    </script>
</body>
</html>