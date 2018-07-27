(function (){
    $('[data-toggle="tooltip"]').tooltip({
        container: 'body'
    });
})();




function deleteItem(id, controller){
    
    swal({
        title: "Estas seguro de eliminar el registro?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Si, eliminar!",
        cancelButtonText: "No, cancelar!",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            
            var url = "/ProjectoFinal/"+ controller +"?action=eliminar&id="+ id; 
            $.ajax({           
                url: url,  
                method: 'GET',
                success: function (response){
                    
                    console.log(response);
                }
             });
             
            var row = $("#row-"+id);
            row.remove();
            swal("Eliminado!", "En registro se elimino.", "success");
            
            
        } else {
            swal("Cancelado", "Eliminacion  cancelado", "error");
        }
    });
}