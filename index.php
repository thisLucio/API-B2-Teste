<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Doctor Who - Lucio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/table.css">
    
</head>
<div class="container">      
    <table border="1" class="table">
                   <thead class="thead-light">
                       <tr>
                           <th>Encarnação</th>
                           <th>DoctorID</th>
                         
                           
                       </tr>
                   </thead>
                   <tbody>
      <?php
                $url = "https://api.catalogopolis.xyz/v1/doctors";
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                $resultado = json_decode(curl_exec($ch));

             //   var_dump($resultado);

              foreach($resultado as $ator){?>
                            <tr>
                               <th><?=$ator->incarnation ?></th>
                               <th><?=
                                    $ator->id
                                    ?></th>
                            
                         <?php }
                         $jsonData = json_encode($resultado);
                         file_put_contents('resultadoSergin.json', $jsonData);
                       ?>
                   </tbody>
              </table>

 </body>
</div>
</html>