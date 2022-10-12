    function disablebox(){
        document.getElementById('celular').disabled=true;
        document.getElementById('celular').value="";
        document.getElementById('celular').placeholder="--------------------------------------------";
        document.getElementById('celularOn').disabled=false;
        document.getElementById('celularOff').disabled=true;
    }

    function enablebox(){
        document.getElementById('celular').disabled=false;
        document.getElementById('celular').placeholder="Escriba el numero celular del usuario";
        document.getElementById('celularOn').disabled=true;
        document.getElementById('celularOff').disabled=false;
    }

    function changeFormU(){
        document.getElementById('formulario').action="../php/creacionFirmaU.php";
    }

    function changeFormF(){
        document.getElementById('formulario').action="../php/creacionFirmaF.php";
    }

    
    
