<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Books OL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lancamento.php">Lançamentos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="categoria.php?cat=Design">Design</a></li>
            <li><a class="dropdown-item" href="categoria.php?cat=Infraestrutura">Infraestrutura</a></li>
            <li><a class="dropdown-item" href="categoria.php?cat=Dados">Dados</a></li>
            <li><a class="dropdown-item" href="categoria.php?cat=Front-end">Front-end</a></li>
            <li><a class="dropdown-item" href="categoria.php?cat=Mobile">Mobile</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex navbar-form navbar-left" role="search" name="frmpesquisa" method="get" action="busca.php">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" name="txtbuscar">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="carrinho.php"><span class="glyphicon glyphicon-shopping-cart"> Carrinho</span></a></li>
        <li><a href="#">Contato</a></li>

          <?php if(empty($_SESSION['ID'])) { ?>
        <li><a href="formlogon.php">Logon <span class="glyphicon glyphicon-log-in"></span></a></li>
          <?php } else {
            
            if($_SESSION['STATUS'] == 0) {
            include 'include/conexao.php';
            $consulta_usuario = $cn->query("select nm_usuario from tbl_usuario where cd_usuario = '$_SESSION[ID]'");
            $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
          ?>

        <li><a href="areauser.php"><?php echo $exibe_usuario['nm_usuario']; ?> <span class="glyphicon glyphicon-user"></span></a></li>
        <li><a href="sair.php">Sair <span class="glyphicon glyphicon-log-out"></span></a></li>
          
          <?php } else { ?>
            <li><a href="adm.php"><button class="btn btn-sm btn-danger">Administrador</button></a></li>
            <li><a href="sair.php">Sair <span class="glyphicon glyphicon-log-out"></span></a></li>  
          <?php } }?>

        </ul>
    </div>
  </div>
</nav>