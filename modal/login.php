<style>

  .modal-body {

    max-height: calc(100vh - 210px);
    overflow-y: auto;
}

 #head{
        background-color: black;
        color: white;
        
    }
</style>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" id="head">
        <h4 class="modal-title"><p align="center">Login</p></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
  <div class="portada">

    <div class="registro">
      
      <form method="post" class="login" autocomplete="off">    
              <div class="form-group">              
                  <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                </div>

                <div class="form-group">              
                  <input type="text" class="form-control" id="pwd" name="pwd" placeholder="Contraseña">
                </div>

            <div class="form-group">

              <input type="hidden" name="enviar" class="form-control" value="si">
       
            </div>        

              <button type="submit" class="btn btn-primary btn-block">Entrar</button>        
          </form>
    </div>
<div class="blur"></div>  
  </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
      </div>

    </div>
  </div>
</div>