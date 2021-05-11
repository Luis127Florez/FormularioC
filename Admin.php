<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="CSS/Admin.css">
    <link rel="stylesheet" type="text/css" href="js/archivos/css/alertify.min.css">
    <link rel="stylesheet" type="text/css" href="js/archivos/css//themes/default.min.css"/>
    <link rel="stylesheet" type="text/css" href="js/archivos/css//themes/default.css"/>
    <link rel="stylesheet" type="text/css" href="js/archivos/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="js/archivos/css/alertify.rtl.css">
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
    <script type="text/javascript" src="js/archivos/jquery.js"></script>
     <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
     <script type="text/javascript" src="js/popper.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
  <br>
  <br>
<div class="container" style="max-width: 942px;" >
<form  id="theform"  method="" class="row g-3" >
         <div class="col-md-6">
           <label class="form-label">Nombre</label>
          <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Nombre">
          </div>
          <br>
          <div class="col-md-6">
          <label class="form-label">Apellido</label>
          <input type="text" class="form-control" name="Apellido" id="Apellido" placeholder="Apellido">
          </div>
          
          <br>
          <div class="col-md-12">
            <label for="inputAddress2">Numero de Identificacion</label>
            <input type="text" class="form-control" name="NumeroID" id="NumeroID" placeholder="Numero de Identificacion">
          </div>
          <br>
           <div class="col-md-12">
             <label for="inputAddress2">Dependencia Perteneciente</label>
            <select name="Dependencia" id="Dependencia" class="form-select" aria-label="Default select example">
             <option selected>Despliega para </option>
             <option value="D1">One</option>
           <option value="D2">Two</option>
            <option value="D3">Three</option>
           </select>
           </div>
        <br>
        <div class="col-md-6">
        <label for="inputAddress2">Fecha Inicio de Sintomas</label>
        <input type="date" class="form-control" name="FechaI_S" id="FechaI_S" placeholder="Numero de Identificacion">
       </div>
       <br>
        <div class="col-md-6">
        <label for="inputAddress2">Fecha de Diagnosticacion</label>
          <input type="date" class="form-control" name="Fecha_D" id="Fecha_D" placeholder="Numero de Identificacion">
           </div>
          <!-- <div class="form-group">
            <label for="exampleFormControlFile1">imagen</label>
            <input type="file" class="form-control-file" name="imagen" id="imagen">
          </div> -->
          <br>
          
             
</div>

</form>

<br>
<br>
<br>
<form action="" id="form_insert">
  <div class="container" style="max-width: 1033px;">

      <label for="" class="cedula_s">Ingrese la informacion de las personas con las cuales estubo en contacto.<br><br>
                <table class="table table-bordered" id="tablaC">    
                  <thead>
                    <tr>
                      <th>Tipo de contacto</th>
                      <th>Nombre Completo</th>
                      <th>Area</th>
                      <th>Fecha de Contacto</th>
                      <th></th>
                    </tr>
                  </thead>      
                  <tbody id="tableTbody">
                    <tr class="tr">
                      <td>
                         <select required name="Tipo_C[]" class="form-select">
                           <option selected>Despliega para</option>
                           <option value="D1">One</option>
                           <option value="D2">Two</option>
                           <option value="D3">Three</option>
                         </select>
                     </td>
                      <td>
                        <input type="text" required name="Nombre_D[]" id="" class="form-control">
                      </td>
                      <td>
                        <input type="text" required name="Area[]" id="" class="form-control">
                      </td>
                      <td>
                        <input type="date" required name="Fecha_C[]" id="" class="form-control">
                      </td>
                      <td>
                        <button type="button" class="btn btn-danger clickEliminar"onclick="deleteRow(this) "id="softwarePrimero">Eliminar</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div style="text-align: right">
                  <button type="button" class="btn btn-success" onclick="agregarFila()" id="BtnMas">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                   <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                   </svg>
                  </button>
                </div>    
  </div>

<br>
<div class="container" style="margin-left: 15%;">
<input type="submit" value="Guardar" class="btn btn-primary">
 </div>

</form>

</body>


      <footer>
        <script type="text/javascript" src="js/archivos/alertify.js"></script>
        <script type="text/javascript" src="js/archivos/alertify.min.js"></script>
        <script type="text/javascript" src="js/archivos/defaults.js"></script> -->
        <script type="text/javascript" src="js/archivos/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="js/archivos/jquery.validate.js"></script>
</html>