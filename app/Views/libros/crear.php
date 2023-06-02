<?=$cabecera?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Ingresar datos del libro</h5>
        <p class="card-text">

            <form method="post" action="<?=site_url('/guardar')?>" enctype="multipart/form-data">
            
            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" name="nombre"
              value="<?=old('nombre')?>" id="nombre" class="form-control" placeholder="" aria-describedby="helpId">
              
            </div>
        
            <div class="form-group">
              <label for="imagen">Imagen:</label>
              <input type="file" class="form-control-file" name="imagen" id="imagen" placeholder="" aria-describedby="fileHelpId">
            </div>
            <button class="btn btn-success" type="submit">Guardar</button>
            <a href="<?=base_url('listar');?>" class="btn btn-info">Cancelar</a>
        
            </form>
        </p>
      </div>
    </div>
    
   
<?=$pie?>