//***************************************************************************/

$( document ).ready(function()
{

	$("#btn").click(function()
	{	   
	  
	  $.post("../controller/controller.php", {"operation":"select"},
	    
	    function(data,status)
	    {
	      //alert("Data: " + data + "\nStatus: " + status);
	      
	      $("#data").html(data);
	    }); 	    
  	});  
 });
//***************************************************************************/