<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test View</title>
    <style>
        h1{
            color:red;
            margin-left:5px;
        }
        h2{
            color:blue;
            margin:5px;
        
        }
        p{
            color:green;
            margin-left:5px;
        }
        .imgBox{
            padding:0.25rem;
            margin-top:5px;
            margin-bottom:5px;
            border:1px solid #dee2e6;
            border-radius:0.25rem;
            width: 300px;

        }
        .box{
            border: 1 px solid rgba(0,0,0, 1.0);
            padding:5px;
            float:left;
            margin:5px;
            height:auto;
        }
    </style>
</head>
<body>
    <h1>Second 3D App Test View</h1>
    <p>If you are seeing the test Mode 3D  images Data, then your  basic MVC framework is working</p>
    <div class="box">
        <h2><?php echo $model1;  ?></h2>
        <img class="imgBox" src="assets/images/gallery_images/<?php echo $image3D_1;?>.png" alt="">
    </div>
    <div class="box">
        <h2><?php echo $model2;  ?></h2>
        <img class="imgBox" src="assets/images/gallery_images/<?php echo $image3D_2;?>.png" alt="">
    </div>
    <div class="box">
        <h2><?php echo $model3;  ?></h2>
        <img class="imgBox" src="assets/images/gallery_images/<?php echo $image3D_3;?>.png" alt="">
    </div>
    <div class="box">
        <h2><?php echo $model4;  ?></h2>
        <img class="imgBox" src="assets/images/gallery_images/<?php echo $image3D_4;?>.png" alt="">
    </div>
    <div class="box">
        <h2><?php echo $model5;  ?></h2>
        <img class="imgBox" src="assets/images/gallery_images/<?php echo $image3D_5;?>.png" alt="">
    </div>
    <div class="box">
        <h2><?php echo $model6;  ?></h2>
        <img class="imgBox" src="assets/images/gallery_images/<?php echo $image3D_6;?>.png" alt="">
    </div>
</body>
</html>