<!DOCTYPE html>

<html>



    <head>
        <title>Jaok</title>
        <meta charset="utf-8">
		<script>
		    var siffra = 0;

		
		    window.onload=fun;

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
			
			function fun(){
                document.getElementById("backgrun").style.backgroundColor = "blue";
            
            }
            
            function backgrund(){
                if(document.getElementById("backgrun").style.backgroundColor == "blue"){
                    document.getElementById("backgrun").style.backgroundColor = "green";
                    return;
                }
                if(document.getElementById("backgrun").style.backgroundColor == "green") {
                    document.getElementById("backgrun").style.backgroundColor = "white";
                    return
                }
                if(document.getElementById("backgrun").style.backgroundColor == "white") {
                    document.getElementById("backgrun").style.backgroundColor = "blue";
                    return;
                }
            }
			
			function ett(){
                siffra +=1;
                document.getElementById("siffra").innerHTML = siffra;
            }            
            function ettt(){
                siffra += 10;
                document.getElementById("siffra").innerHTML = siffra;
            }
            function etttt(){
                siffra += 100;
                document.getElementById("siffra").innerHTML = siffra;
            }
            function reset(){
                siffra = 0;
                document.getElementById("siffra").innerHTML = siffra;
            }
            
            function top_höger(){
                document.getElementById("flytta_hörne").style.top = "0";
                document.getElementById("flytta_hörne").style.right = "0";
                document.getElementById("flytta_hörne").style.bottom = "";
                document.getElementById("flytta_hörne").style.left = "";
            }
            function top_vänster(){
                document.getElementById("flytta_hörne").style.top = "0";
                document.getElementById("flytta_hörne").style.right = "";
                document.getElementById("flytta_hörne").style.bottom = "";
                document.getElementById("flytta_hörne").style.left = "0";
            }
            function botten_vänster(){
                document.getElementById("flytta_hörne").style.top = "";
                document.getElementById("flytta_hörne").style.right = "";
                document.getElementById("flytta_hörne").style.bottom = "0";
                document.getElementById("flytta_hörne").style.left = "0";
            }
            function botten_höger(){
                document.getElementById("flytta_hörne").style.top = "";
                document.getElementById("flytta_hörne").style.right = "0";
                document.getElementById("flytta_hörne").style.bottom = "0";
                document.getElementById("flytta_hörne").style.left = "";
            }
		
		
		</script>
		
		<style>
            *{
                margin: 0 0 0 5px;
                padding: 0;
            }
		    #backgrun {
                height: 50px;
                width: 50px;
                border: solid 4px black; 
            }
			
			#siffra{
                padding: 40px 40px 40px 40px;
                display: inline-block;
                background-color: aqua;
                text-align: center;
            }
			
            #flytta_hörne{
                width: 100px;
                padding: 30px 20px 30px 40px;
                background-color: bisque;
                position:absolute;
            }
		
		</style>
		
    </head>

    <body>
	
		<button onclick="hejsan()">Alert</button><br><br>
	
        <img onmouseout="smallimg()" onmouseover="bigimg()" src="lead_960.jpg" height="200px" id="pepe"/>
		
		<button onclick="dölj()">Dölj bild</button><br><br><br>
		
		<button onclick="färg()">Ändra färg</button><br><br>
		
		<button onclick="rensa()">rensa sidan</button><br><br>

	    <div onload="change()" id="backgrun" onclick="backgrund()"></div><br><br>
		
		<div id="siffra">0</div>
        <button onclick="ett()">1</button>
        <button onclick="ettt()">10</button>
        <button onclick="etttt()">100</button>
        <button onclick="reset()">Reset</button><br><br><br><br><br><br>

        <div id="flytta_hörne">
        <button onclick="top_höger()">top-höger</button><br><br>
        <button onclick="top_vänster()">top-vänster</button><br><br>
        <button onclick="botten_vänster()">botten-vänster</button><br><br>
        <button onclick="botten_höger()">botten-höger</button><br><br>
        </div>



    </body>


</html>