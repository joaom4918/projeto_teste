<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo e(route('site.home')); ?>"><i class="fas fa-home"> Pagina inicial</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('admin.fornecedores.cotacoes')); ?>"><i class="fas fa-clipboard-list"> Cotações</i></a>
          </li>
        </ul>
      
      </div>
    </div>
  </nav> <?php /**PATH /opt/lampp/htdocs/projeto_teste/resources/views/layout/includes/menu.blade.php ENDPATH**/ ?>