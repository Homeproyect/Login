<?php
$var=


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <meta name="description" content="automatiza la luz eléctrica de tu casa" />
              <meta name="keywords" content="automatizacion,control de la luz eléctrica desde tu celular, página web "/>
       <style>
           
           h2{
               color: white;
               text-shadow:4px 4px 4px black;
           }
           
           #iniciosecion
           {
           
           text-color:red;
           
           background:#0f5b5b;
           
           border-radius:15%;
         
           position:relative;
           
         text-align:center;
         
         top:100px;
         
         width:150px ;
         height:100px ;
        
         }
         
         input{
         border-radius:25%;
         text-align:center;
     margin:10px 40px;
         }
         #boton{
             background:#95b7ff;
             width:150px ;
             height:30px ;
             border-radius:40%;
             box-shadow:4px 4px 3px black;
            
         }
         
         #registro{

             background: #bfeaff;
             
         }
         body{

             background-size: cover;
        background-repeat:no-repeat ;
        background-position: center;
        background-attachment:fixed;
                      background-image: url(tec1.jpg);
         }
       </style>
    <title>Título de la página</title>
</head>
<body>
    <center>
   <table id ="iniciosecion" name="uno">
       
       <tr>
           
           <th><h2>Inicia sesión</h2> 
               
           </th>
           
       </tr>
       <tr>
           <th>
           <form name="inicio1">   
           <input type="text" placeholder="usuario" name="usuario" value="" >
           </form>
           </th>
       </tr>
       <tr>
           <th>
               <form name="inicio2">
           <input type="password" placeholder="contraseña"  name="contraseña" value=""> </form>
           </th>
       </tr>
       <tr>
           <th>
               <input type="button" onclick= go() value="iniciar sesión" id="boton">
           </th>
       </tr>
       <tr>
           <th>
             <a href="registro.html"><input type="button" value=" Registrate" id="registro"></a>
           </th>
       </tr>
   </table>
  
       
   </center>
    
    <script laguage=Javascript >
        
        function go (){
     var usuario=document.inicio1.usuario.value; 
   var contraseña= document.inicio2.contraseña.value;
   
      if(usuario=='carlos' && contraseña== '1234') {
       
     location="onoff.html";
      
      }
      
      else{
          alert("el usuario o la contraseña es incorrecta por favor vuelve a intentarlo");
          
      }
      }
        
    </script>
    
</body>
</html>
