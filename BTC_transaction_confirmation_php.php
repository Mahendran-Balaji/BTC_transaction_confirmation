      <?php
          $getBTCddress = "";
          
          $getConfirmation=file_get_contents('https://blockchain.info/q/addressbalance/'.$getBTCddress.'?confirmations=3');
          
          $confirmation=($getConfirmation/100000000);
          if($confirmation>0)
          {
              return 'payment Received';
          }
          else
          {
              return '0 of 1';
          }
    ?>
