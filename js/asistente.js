$(document).ready(ocultar);


function myFunction1() 
    {
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
                    li.innerHTML="<span onclick='eliminar(this)'>"+'<h1>'+ nuevoLi+'&nbsp;'+'<span class="icon-bin2"></span></span>'+'</h1>';
                    document.getElementById("lista").appendChild(li);
                }
            }
            return false;
    }
 

    function find_li(contenido)
        {
            var el = document.getElementById("lista").getElementsByTagName("li");
            for (var i=0; i<el.length; i++)
            {
                if(el[i].innerHTML==contenido)
                    return false;
            }
            return true;
    }
 
        /*** Funcion para eliminar los elementos
         * Tiene que recibir el elemento pulsado*/
    function eliminar(elemento)
        {
            var id=elemento.parentNode.getAttribute("id");
            node=document.getElementById(id);
            node.parentNode.removeChild(node);
    }


    function ocultar(){

        document.getElementById("content").style.display = "none";
    }

    function mostrar(){

        document.getElementById("content").style.display = "block";
    }

    function mostrar_ocultar(){

        var caja =  document.getElementById("content");

        if (caja.style.display == "none") {

        mostrar();
        }
    }
   