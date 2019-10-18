<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="fonts/icomoon/style.css">
         <link rel="stylesheet" href="css/estilos.css">
         <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="js/jquery.min.js"></script>
<style>
       
        <style>
            li span {
                color:#fff;
                border:1px solid #ccc;
                background-color:#808080;
                margin-right:10px;
                padding: 0 2px;
                border-radius:4px;
                -moz-border-radius:4px;
                -webkit-border-radius:4px;
                -o-border-radius:4px;
                border-radius:4px;
                font-weight:bold;
                font-size:0.8em;
                cursor:pointer;
            }
            li{
                text-decoration: none;
            }
            ul{
                 list-style:none;
            }
        </style>
 
        <script>

function myFunction1() {


alert("Esta marca s encuentra disponible unicamente en Plan Premium y Preferencial");
}


  
function myFunction(numero) {

var txt = document.images[numero].name;

document.getElementById("nuevo_li").value = txt;

add_li();

}
        function add_li()
        {
            var nuevoLi=document.getElementById("nuevo_li").value;
            //var nuevoLi = document.images[].name;
            if(nuevoLi.length>0)
            {
                if(find_li(nuevoLi))
                {
                    var li=document.createElement('li');
                    li.id=nuevoLi;
                    li.innerHTML="<span onclick='eliminar(this)'>"+ nuevoLi+ '<button> Eliminar</button></span>';
                    document.getElementById("listaDesordenada").appendChild(li);
                }
            }
            return false;
        }
 

        function find_li(contenido)
        {
            var el = document.getElementById("listaDesordenada").getElementsByTagName("li");
            for (var i=0; i<el.length; i++)
            {
                if(el[i].innerHTML==contenido)
                    return false;
            }
            return true;
        }
 
        /**
         * Funcion para eliminar los elementos
         * Tiene que recibir el elemento pulsado
         */
        function eliminar(elemento)
        {
            var id=elemento.parentNode.getAttribute("id");
            node=document.getElementById(id);
            node.parentNode.removeChild(node);
        }
    </script>
    </head>
 
    <body>

    <div class="opciones">

        <ul>
            <li><a href="#"><i class="fa fa-eercast fa-2x" aria-hidden="true"></i>Seleccione Forma</a></li>
            <li><a href="#"><i class="fa fa-eercast fa-2x" aria-hidden="true"></i>Seleccione MArca</a></li>
            <li><a href="#"><i class="fa fa-eercast fa-2x" aria-hidden="true"></i>Seleccione lente</a></li>
            <li><a href="#"><i class="fa fa-eercast fa-2x" aria-hidden="true"></i> Seleccione el diseño</a></li>
        </ul>
        
    </div>

    <ul id="listaDesordenada">
        </ul>
        <p>
            <form>
           

                <!--<input type="text" id="nuevo_li">-->
                <!--<input type="text" id="nuevo_li">
                <br><input type="submit" onclick="return add_li()" value="añadir li">   -->
                <img src="images/andvas.png" alt="flower" width="150" height="113" name="And Vas" onclick="myFunction(0)"> 
                <img src="images/boss.png" alt="flower" width="150" height="113" name="Hugo Boss" onclick="myFunction1()"> 
                <img src="images/rayban.png" alt="flower" width="150" height="113" name="RayBan" onclick="myFunction(2)">   
            </form>
        </p>
<!--<p id="nuevo_li"></p>-->
<input type="text" id="nuevo_li">
    </body>
</html>