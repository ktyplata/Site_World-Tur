
<?php
              if($this->session->userdata('autentificado')){


              	?>
<h1 style="float: left; color: wheat; margin-left: 5%;"> Bienvenid@ <?php  echo $this->session->userdata('user'); 
	?> al CPanel  </h1> 
            <?php	
              }  else { ?>
                  <?php echo "<script>
        alert('No se quien eres');
        
        </script>";?>
            <?php
                  redirect('Admin/login');
}
              ?>


        


            <?php
                if(!$this->session->userdata('autentificado')){
                    	 ?>
                   <?php
               }else{
               	?>
<a  href="<?php echo base_url();?>index.php/Usuarios/cerrarSesion"><button  class="btn btn-warning" style="color: white; margin-top: 10px; float: right; margin-right: 5%;"> Cerrar Sesion</button></a>
<?php
                        }
                        ?>
<br>

<script src="https://code.jquery.com/jquery-3.0.0.js" integrity="sha256-jrPLZ+8vDxt2FnE1zvZXCkCcebI/C8Dt5xyaQBjxQIo="
			  crossorigin="anonymous"></script>
<div class="col-sm-6 col-sm-offset-2" >
    
    
    
<h1 class="mbr-header__text">Modificar Clientes</h1>

        


<?php echo validation_errors(); ?>
<form action="<?php echo base_url();?>index.php/Cliente/upCliente" method="post">

    <?php foreach($clientes as $n){ ?>

    
   <input type="hidden" name ="idCliente" value="<?php echo $n->idCliente; ?>">
 
        <label for="NombreC" >Nombre </label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-user"></i> </span>
         <input class="form-control" type="text" id="NombreC" name="NombreC" placeholder="Nombre Cliente" required="required" value="<?php echo $n->NombreC; ?>">
        
    </div>
        
       
        <label  for="Telefono">Teléfono</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-phone"></i> </span>  
         <input class="form-control" type="tel" id="Telefono" name="Telefono" placeholder="Teléfono" required="required" value="<?php echo $n->Telefono; ?>">
    </div>
        
        
         <label  for="Direccion">Dirección</label>
    <div class="form-group input-group">
         <span class="input-group-addon"><i class="fa fa-home"></i> </span>  
         <input class="form-control" type="text" id="Direccion" name="Direccion" placeholder="Dirección" required="required" value="<?php echo $n->Direccion; ?>">
    </div>
        
          
    <div class="form-group">
           <input type="submit"  name="submit" onclick="return confirmar()"   value="Modificar" class="btn btn-success btn-lg"  required="required" >
           <a  href="<?php echo base_url();?>index.php/Cliente/getCliente"><button style="float:right;" type="button"   class="btn btn-info btn-lg" > Cancelar</button></a>
    </div>
    <?php } ?>
</form>

                     
          <?php
        echo $this->pagination->create_links(); 
        ?>                  
                       

                   
</div>


<script type="text/javascript">
            function confirmar(){
        if(confirm('¿Realmente deseas modificar este cliente ?'))
            return true;
        
                else
                    return false;
        }
        </script>    