<!DOCTYPE html>

<html>



    <head>
        <title>Jaok</title>
        <meta charset="utf-8">
		<script>
		    function hejsan(){
                alert("hejsan Joakim");
            }
			
			function bigimg(){
                document.getElementById("pepe").style.height = "500px";
            }   
            function smallimg(){
                document.getElementById("pepe").style.height = "200px";
            }
			
			function dölj(){
                document.getElementById("pepe").style.display = "none";
            }
			
			function färg(){
                document.body.style.backgroundColor = "black";
            }
		
		    function rensa(){
                document.body.innerHTML = "Hej Joakim";
            }
		
		
		</script>
		
		<style>
		
		
		</style>
		
    </head>

    <body>
	
		<button onclick="hejsan()">Alert</button><br><br>
	
        <img onmouseout="smallimg()" onmouseover="bigimg()" src="lead_960.jpg" height="200px" id="pepe"/>
		
		<button onclick="dölj()">Dölj bild</button><br><br><br>
		
		<button onclick="färg()">Ändra färg</button><br><br>
		
		<button onclick="rensa()">rensa sidan</button><br><br>





    </body>


</html>