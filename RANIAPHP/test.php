<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test avec AJAX avec XMLHttpRequest</title>
  </head>
  <body>


   <form action="" method="post" >
		<p>
 			 <button type="button" id="myBtn">afficher les données</button> 
 		</p>
	</form>
<div id="ajaxBox"></div>


<script >

// cette fonction est un standard pour les anciens navigateurs
function getXMLHttpRequest() {
	var xhr = null;
	
	if (window.XMLHttpRequest || window.ActiveXObject) {
		if (window.ActiveXObject) {
			try {
				xhr = new ActiveXObject("Msxml2.XMLHTTP");
			} catch(e) {
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}
		} else {
			xhr = new XMLHttpRequest(); 
		}
	} else {
		alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
		return null;
	}
	
	return xhr;
}

//***************Fonction 
document.getElementById("myBtn").addEventListener("click", function(){
    var xhr = getXMLHttpRequest(); // appel à la fonction  getXMLHttpRequest()
	xhr.open("POST", "http://localhost/TPAJAX/traitement.php", true); // le lien a modifier selon votre dossier
	//add this line if the method is POST
	//xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");// cette ligne pour les formulaire pour l'instant on a besoin 
	xhr.send(null);
	xhr.addEventListener('readystatechange', function() 
	{
		  if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200 ) { 		  
		  var T = JSON.parse(xhr.responseText); // cette fonction pour lire le contenu JSON
		  if(T.Reussi=='true')
		    {

				document.getElementById('ajaxBox').innerHTML = '<span style="color:green;font-weight:bold">' +T.Content+ '</span>';
			}
			else
			{
				document.getElementById('ajaxBox').innerHTML = '<span style="color:red;font-weight:bold">'+T.Message+'</span>';
				
			}
    }
   
    
	});
});


</script>
  </body>
</html>
