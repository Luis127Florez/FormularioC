

function agregarFila(){
 var i = document.getElementById('tablaC').getElementsByTagName('tr').length - 2;
  i = i + 1;
  var tr = '<tr class="tr_'+i+'"><td><select required name="Tipo_C['+i+']" id="Tipo_C['+i+']" class="form-select" aria-label="Default select example"> <option selected>Despliega para </option> <option value="D1">One</option><option value="D2">Two</option><option value="D3">Three</option> </select></td><td><input type="text"  class="form-control" id="Nombre_D['+i+']" required name="Nombre_D['+i+']"></td> <td><input type="text"  class="form-control" id="Area['+i+']" required name="Area['+i+']"></td> <td><input type="date"  class="form-control" id="Fecha_C['+i+']" required name="Fecha_C['+i+']"> </td><td><button type="button" class="btn btn-danger clickEliminar" onclick="deleteRow(this)" id="softwarePrimero">Eliminar</button></td></tr>'
  $('#tableTbody').append(tr);
}
function deleteRow(btn) {
  var row = btn.parentNode.parentNode;
  row.parentNode.removeChild(row);
}




jQuery(document).on('submit','#theform', function(event) {
   event.preventDefault()
   jQuery.ajax({
    url: 'DataBase/insert.php',
    type: 'POST',
    dataType: 'json',
    data: $(this).serialize(),
   })
   .done(function(respuesta) {
       console.log(respuesta);
   })
   .fail(function(resp){
       console.log(resp);
   })
   .always(function() {
       console.log("complete");
   })

});


