<?=$cabecera;?>
    
<div class="card">
      <div class="card-body">
        <h5 class="card-title">Ingresar datos del libro</h5>
        <p class="card-text">

            <form method="post" action="<?=site_url('/actualizar')?>" enctype="multipart/form-data">
            
        <input type="hidden" name="id" value="<?=$libro['id']?>">   

            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" name="nombre" id="nombre" value="<?=$libro['nombre']?>" class="form-control" placeholder="" aria-describedby="helpId">
              
            </div>
        
            <div class="form-group">
              <label for="imagen">Imagen:</label>
              <br/>
              <img class="img-tumbnail" 
                          src="<?=base_url()?>/uploads/<?=$libro['imagen'];?>" 
                          width="100" alt="">
                <br/>
              <input type="file" class="form-control-file" name="imagen" id="imagen" placeholder="" aria-describedby="fileHelpId">
            </div>
            <button class="btn btn-success" type="submit">Actualizar</button>
              <a href="<?=base_url('listar');?>" class="btn btn-info">Cancelar</a>
        
            </form>
        </p>
      </div>
    </div>

<?=$pie;?>