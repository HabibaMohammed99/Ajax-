<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> learn ajax </title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
    <h1 class="alert alert-success text-center p-3 m-0">Ajax with php && Mysql</h1>
    <div class="bg-danger p-3 mb-3 text-center">
        <button class="btn btn-info get-data">Get Data with Ajax</button>
    </div>

    <div class="container-fluid border p-5">
        <div class="row cont-data"></div>
    </div>
  
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
    $(".get-data").click(function(){
        $.ajax({
            type:"POST",
            url:"selectData.php",
            dataType:"html",
            data:{id:1},
            success:function(data){
                $(".cont-data").html(data);
            }

        })
    })
</script>

</body>
</html>