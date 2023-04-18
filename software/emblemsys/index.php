<html>

<head>
    <title> Pagina inicial </title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
</head>

<body>

   <div class="row">
      <div class="col-sm-12 bg-light p-3 border"><i>publicações subs recentes:</i> </div>
      <div class="col-3">
         <?php
    
         session_start();
         include('../src/db/conexao.php');
         $usuarioo = $_SESSION['usuario']  ;
         $sql = $pdo->prepare("SELECT * FROM sub_repo_0z  ");
             
             $sql-> execute();
         
             $info = $sql -> fetchALL(); 
             foreach ($info as $key => $value ){
         
             
               echo '<div class="card" style="width: 18rem;">';
               echo '<div class="card-body">';
               echo '<h5 class="card-title">'.$value['user_1'].'</h5>';
               echo '<p class="card-text">'.$value['nome'].'</p>';
               echo '</div>';
               echo '</div>';
               
             } 
         
         ?>
         <div class="card" style="width: 18rem;">
            
            <div class="card-body">
               <h5 class="card-title"><b>favs do user</b> 

               </h5>
               <h5 class="nav-email-subtitle">favoritos :</h5>
        <ul class="nav nav-pills nav-stacked nav-email mb-20 rounded shadow">
            
<?php





    $sql=$pdo->prepare("SELECT * FROM mst_repo_profile4 ORDER BY id desc LIMIT 5;");
    
   

    $sql-> execute();

    $info = $sql -> fetchALL(); 
    foreach ($info as $key => $value ){

    
       echo "<li>";

    
      echo"<i class='fa fa-folder-open'></i>-> ".$value['titulo'];

      

      

    

      echo "</li>";


    } 

?>



            </div>
         </div>
         <div class="card" style="width: 18rem;">
            <div class="card-body">
               <h5 class="card-title"><b>subs do user</b> 

               </h5>
               <h5 class="nav-email-subtitle">sub repósitorio:</h5>
        <ul class="nav nav-pills nav-stacked nav-email mb-20 rounded shadow">
                   <?php




 $sql=$pdo->prepare("SELECT * FROM sub_repo_0z  ");
    
   

    $sql-> execute();

    $info = $sql -> fetchALL(); 
    foreach ($info as $key => $value ){

    
       echo "<li>";

      
      echo"<i class='fa fa-folder-open'></i>".$value['nome'];

      

      

  

      echo "</li>";


    } 

?>
            </div>
         </div>
      </div>
      <div class="col-9">
         <div class="card text-center">
            <div class="card text-center">
               <div class="card-header">
                  <ul class="nav nav-tabs card-header-tabs">
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                           +
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <li><a class="dropdown-item" href="./addmstrepo.html">add master repositório </a></li>
                           <li><a class="dropdown-item" href="./addsubrepo.html">add sub repositório </a></li>
                           <li><a class="dropdown-item" href="./addrepo.html">add repósitório </a></li>
                           <li>
                              <hr class="dropdown-divider">
                           </li>
                           <li><a class="dropdown-item" href="./invest_add.html">atualizar likes </a></li>
                        </ul>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="./profileREPO.php">perfil</a>
                     </li>

                  </ul>
               </div>
               <div class="card-body">












                  <div class="card-group">
                  <?php
     
  
     include('../src/db/conexao.php');
     $usuarioo = $_SESSION['usuario']  ;
      $sql = $pdo->prepare("SELECT * FROM repo_0w  ORDER BY id_0w ASC LIMIT 3 ");
         
         $sql-> execute();
     
         $info = $sql -> fetchALL(); 
         foreach ($info as $key => $value ){
     
         
           echo '<div class="card" style="width: 18rem;">';
           echo '<div class="card-body">';
           echo '<h5 class="card-title">'.$value['repo_name'].'</h5>';
           echo '<p class="card-text">'.$value['repo_msg'].'</p>';
           echo '<p class="card-text"> '.' '.$value['repo_invest'].'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
           <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
         </svg>';
           echo '</div>';
           echo '</div>';
           
         } 
     
     ?>
                  </div>






                  <div class="card-group">
                  <?php
     
  
     include('../src/db/conexao.php');
     $usuarioo = $_SESSION['usuario']  ;
      $sql = $pdo->prepare("SELECT * FROM repo_0w ORDER BY id_0w ASC LIMIT 3 OFFSET 3");
         
         $sql-> execute();
     
         $info = $sql -> fetchALL(); 
         foreach ($info as $key => $value ){
     
         
           echo '<div class="card" style="width: 18rem;">';
           echo '<div class="card-body">';
           echo '<h5 class="card-title">'.$value['repo_name'].'</h5>';
           echo '<p class="card-text">'.$value['repo_msg'].'</p>';
           echo '<p class="card-text"> '.' '.$value['repo_invest'].'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
           <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
         </svg>';
           echo '</div>';
           echo '</div>';
           
         } 
     
     ?>
                  </div>







               </div>
            </div>
         </div>
         <br>








      </div>











   </div>
   </div>



   </div>








</body>

</html>