<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test avec AJAX avec Jquery </title>
  </head>
  <body>


   <form action="" method="post" >
		<p>
 			 <button type="button" id="myBtn">afficher les données</button> 
 		</p>
	</form>
<div id="ajaxBox"></div>

<script src="jquery.min.js"></script>
<script >

$(document).ready(function(){
});

$(document).ready(function(){

     $('#myBtn').click(function(){	
         // var Email	= $('input[name=email_validation]').val(); cette syntexe si vous voulez recuperer un input par exemple
         // vous pouvez le faire par son nom ou bien avec son ID
		    $.ajax({
		        type: "POST",
		        dataType: 'json',
		        url: 'traitement.php',
		      //  data: 'email='+Email,    // la si vous avez des paramètres a 
		      //envoyer il faut les mettre dans DATA et vous allez
		      // les recuperées dans votre fichier de traitement spécifier dans URL avec POST faite un var_dump ($_POST) 
		      // vous allez comprendre .mais pas ici si juste une indication
		        success: function(Reponse)
			     {
		            if (Reponse.Reussi)
		            {
		            	   document.getElementById('ajaxBox').innerHTML = 
		            	   '<span style="color:green;font-weight:bold">' +Reponse.Content+ '</span>';
				      }
		            else	
		            {
		            	 	document.getElementById('ajaxBox').innerHTML = 
		            	 	'<span style="color:red;font-weight:bold">'+Reponse.Message+'</span>';
		            }
		            
			        }
		      });
		 
	     });

});
  


</script>


  </body>
</html>
