console.log('test');

function sortTable(columnName){
    var sort = $("#sort").val();
    $.ajax({
     url:'openList.php',
     type:'post',
     data:{columnName:columnName,sort:sort},
     success: function(response){
    
      $("#empTable tr:not(:first)").remove();
    
      $("#empTable").append(response);
      if(sort == "asc"){
        $("#sort").val("desc");
      }else{
        $("#sort").val("asc");
      }
    
     }
    });
   }