   <style>
    #tamModal{
      width: 50% !important;
    }
    
    .modal-dialog-center {
      margin-top: 15%; 
    }
    .modal-title{
      color: white;
    }

  .modal-body {

    max-height: calc(100vh - 210px);
    overflow-y: auto;
}
    </style>

  <div class="modal fade" id="modal_afiliacion">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" id="head">
          <h4 class="modal-title" align="center" id="titulo">PLAN BÁSICO</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        
        <div class="modal-body">

     <form name="form" method="post" action="ajax/afiliaciones.php" autocomplete="off" id="form" action="javascript:void(0)"><!--Formulario de Afiliacion-->

      <div class="form-group col-md-6">
        <label for="uname">Nombre Completo:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre completo" name="name" >
      </div>

      <div class="form-group col-md-6">
        <label for="pwd">DUI:</label>
        <input type="text" class="form-control" id="dui" name="dui" placeholder="Escriba su dui sin guiones" name="pswd" >
        <span class="help-block-msj"></span>  
      </div>

      <div class="form-group col-md-4">
        <label for="celular">Celular:</label>
        <input type="text" class="form-control" id="celular" name="celular" placeholder="Escriba su celular de contacto" name="celular" >  
      </div>

      <div class="form-group col-md-4">
        <label for="pwd">Correo:</label>
        <input type="email" class="form-control" id="correo" name="correo" placeholder="Escriba su correo" name="celular" >  
      </div>

      <div class="form-group col-md-4">
        <label for="sel1">Tipo tarjeta</label>
        <select class="form-control" id="tipo_tarjeta" name="tipo_tarjeta">
        <option value="0">Seleccione su tipo de Tarjeta</option>
        <option value="debito">Tarjeta de Debito</option>
        <option value="credito">Tarjeta de Crédito</option>
        
        </select> 
      </div>


      <div class="form-group col-md-4">

      <label for="sel1">Fecha Cobro</label>        

       <select class="form-control" name="periodo_pago" id="periodo_pago">
         
       </select>

      </div>


      <div class="form-group col-md-6">
        <label for="pwd">Numero de Tarjeta:</label>
        <input type="text" class="form-control" id="n_tarjeta" name="n_tarjeta" placeholder="Escriba su numero de tarjeta" >  
      </div>


      <div class="form-group col-md-6">
        <label for="pwd">Fecha Vencimiento tarjeta:</label>
        <input type="date" class="form-control" id="vencimiento_tar" name="vencimiento_tar" placeholder="Fecha de vencimiento tarjeta" name="celular" >  
      </div>

      
 <div class="form-group col-md-12">      
       
 <label for="comment">Terminos y condiciones:</label>
  <textarea class="form-control" rows="3" id="comment">Por este medio AUTORIZO a OPTICA AV PLUS de El Salvador, para cargar de forma MENSUAL sobre la tarjeta de Credito descrita en
la información general de este formulario.
Declaro que OPTICA AV PLUS de El Salvador, me ha explicado de forma comprensible, la manera del funcionamiento del servicvio de
cargos automaticos; por lo que ACEPTO que si en caso de que fuera denegada la respectiva transacción, OPTICA AV PLUS, podrá
cancelar temporalmente el servicio contratado hasta que el cargo sea efectivo.
Es responsabilidad de Tarjetahabiente la verificación de la exactitud de los datos en este formulario, así como de informar a OPTICA
AV PLUS de los cambios en fechas de vencimientos o de plasticos, para seguir con la debida programación de cobro mensual para
la desactivación de este deberá de informar con cinco días de anticipación, para lo cual se le generara un nuevo formulario en cual se
denomina cancelación del cargo automático.</textarea>

</div>

<div class="form-group col-md-12"> 

  <input type="checkbox" name="input_checkbox" id="input_checkbox"> Acepto terminos y Condiciones
    <input type="hidden" name="tipo_plan" id="tipo_plan">
    <input type="hidden" name="cuota" id="cuota" value="6.99">

   
</div>
      <br/>

<button type="submit" id='submitbtn' class="btn btn-blue btn-block">Afiliarme</button>

    </form><!--Fin Formulario de Afiliacion-->

        </div><!-- Fin Modal body -->

<div>
  
</div>
