<?php include('header.php');?>
          
        <h1 class="text-center mb-30">
            PHP Fundamental
        </h1>
        
        <p class="lead">
            
  <center>
    <?php
      
      function pyramid($hm){
        for($i=1; $i<=$hm; $i++){
          for($j=1; $j<=$i; $j++){
            echo '*';
          }
          echo '<br/>';
        }
      }
      pyramid(5);
      
    ?>
  </center>
                
            
        </p>

<?php include('footer.php');?>
