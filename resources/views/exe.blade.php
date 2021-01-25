<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exe</title>
</head>
<body>

    <!-- @include('common.header')

    @section('main')
    @show

    @include('common.footer') -->

    <div class="container">

            @foreach($db['response'] as $disco => $value)

        <div class="cd-container">
            <div class="cd">
                <img src="<?php echo $value['poster'] ?>" alt="poster">
                <h4 class="uppercase"><?php echo $value['title'] ?></h4>
                <p><?php echo $value['author'] ?></p>
                <p>Genere: <?php echo $value['genre'] ?></p>
                <p>Anno: <?php echo $value['year'] ?></p>
            </div>
        </div>

            @endforeach 
        
            
    </div>



 
    
</body>
</html>