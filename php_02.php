<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
       
    <div class ="container mt-5">
    <h1>เลขคู่เลขคี่</h1>
    <?php
    for($i =1 ; $i <=100; $i++){
    ?>
        <div class="row">
             <div class="h2 col text-end">
                <?php
                echo $i." =";
                ?>

             </div>
            <div class="h2 col text-start">
              <?php
              if ($i % 2 ==0) {
                echo "เลขคู่";
              }else{
                echo "เลขคี่";
              }
              ?>
             </div>
        </div>
    <?php
    }?>

    </div>  
    </body>
</html>