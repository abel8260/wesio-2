<html>

<head>
  <title> perfil </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</head>

<body>

  <div class="container">
    <hr />
    <br />
    <a href="./index.php"> <button type="button" class="btn btn-secondary">painel inicial</button></a>
    <br />
    <br />
    -> <a href="addrepo.html"> <button type="button" class="btn btn-secondary">editar repositorio</button></a>
    <br />
    <br />
    -> <a href="addsubrepo.html"> <button type="button" class="btn btn-secondary">editar subrepositório </button></a>
    <br />
    <br />
    -> <a href="addmstrepo.html"> <button type="button" class="btn btn-secondary">editar master repositório </button></a>
    <br />
    <hr />
    <br />
    -> <a href="invest.php"> <button type="button" class="btn btn-secondary">atualizar likes</button></a>
    <hr />
    <br /> <span>Master:</span>
    <?php
    session_start(); 
  
    include('../src/db/conexao.php');
    $usuarioo = $_SESSION['usuario']  ;
     $sql = $pdo->prepare("SELECT * FROM mst_repo_profile4 ");
        
        $sql-> execute();
    
        $info = $sql -> fetchALL(); 
        foreach ($info as $key => $value ){
    
        
          echo '<div class="card" style="width: 18rem;">';
          echo '<div class="card-body">';
          echo '<h5 class="card-title">'.$value['titulo'].'</h5>';
          echo '<p class="card-text">'.$value['conteudo'].'</p>';
          echo '</div>';
          echo '</div>';
          
        } 
    
    ?>
    

    <br />
    <br /> <span>repósitório:</span>
    <?php
     
  
    include('../src/db/conexao.php');
    $usuarioo = $_SESSION['usuario']  ;
     $sql = $pdo->prepare("SELECT * FROM repo_0w ");
        
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
    <br /> 
    <br /><span>sub-repositórios:</span>
    <?php
    
  
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
  </div><!-- div do container-->
</body>


</html>