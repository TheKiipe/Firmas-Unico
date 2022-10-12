<?php
    
    //Fuentes
    $font= __DIR__ . "/" . "GothamRounded-Book.otf";
    $fontNegr= __DIR__ . "/" . "Gotham Rounded Bold.otf";
    
        
    //Definicion de Indicativo
    $city= $_POST['ciudad'];
    if($city == "Barranquilla")
    {
        $indicativo= "605";
    } else if($city == "Cali" or $city == "Pasto" or $city == "Yumbo")
        {
            $indicativo= "602";
        } else if($city == "Dosquebradas")
            {
                $indicativo= "606";
            }   else if ($city == "Neiva" or $city == "Villavicencio")
                {
                    $indicativo= "608";
                }
    
    //Separacion e Indicativo de Telefono
    $phone= $_POST['telefono'];
    $arrPhone= str_split($phone);
    $phone= "+(" . $indicativo . ") " . $arrPhone[0] . $arrPhone[1] . $arrPhone[2] . " " . $arrPhone[3] . $arrPhone[4] . $arrPhone[5] . $arrPhone[6];                  

    //Tamaño de Nombre
    if(strlen($_POST['name'])<=20)
    {
        $tamañoNombre= 95;
    } else if (strlen($_POST['name']) >=21)
    {
        $tamañoNombre= 70;
    }

    //Condicional de numero telefonico
    if(empty($_POST['celular'])){
        //En caso de no tener numero Telefonico
              
        //Imagen
        $rutaImagen = "../Imagen/Firma-Fundacion.png";
        $imagen = imagecreatefrompng($rutaImagen);
        $angulo = 0;

        //colores
        $rojo= imagecolorallocate($imagen, 0, 92, 173);
        $gris= imagecolorallocate($imagen, 91, 91, 91);
        $masGris= imagecolorallocate($imagen, 110, 110, 110);
        $negro= imagecolorallocate($imagen, 0, 0, 0);

        //Nombre
        $size=$tamañoNombre;
        $x = 230;
        $y = 270;
        $nameText = strtoupper ($_POST['name']);
        imagettftext($imagen, $size, $angulo, $x, $y, $rojo, $font, $nameText);
        
        //Cargo
        $size=70;
        $x=230;
        $y=380;
        $cargoText= $_POST['cargo'];
        imagettftext($imagen, $size, $angulo, $x, $y, $gris, $font, $cargoText);
        
        //Mail
        $size=60;
        $x=530;
        $y=580;
        $mailText= $_POST['mail'];
        imagettftext($imagen, $size, $angulo, $x, $y, $masGris, $font, $mailText);
        
        //Telefono
        $size=60;
        $x=530;
        $y=730;
        $telefonoText= "+(" . $indicativo . ") " . $_POST['telefono'];
        imagettftext($imagen, $size, $angulo, $x, $y, $masGris, $font, $phone);

        //Celular
        $size=60;
        $x=530;
        $y=900;
        $celular="----------";
        imagettftext($imagen, $size, $angulo, $x, $y, $masGris, $font, $celular);

        //Ciudad
        $size=60;
        $x=530;
        $y=1080;
        $ciudadText= $_POST['ciudad']." - Colombia";
        imagettftext($imagen, $size, $angulo, $x, $y, $masGris, $font, $ciudadText);
        header("Content-Type: image/png");
        $descarga= "Firma Corporativa -" . $_POST['name'] . ".png";
        header('Content-Disposition: attachment; filename="' . $descarga . '"');
        imagepng($imagen);
    } else{
        //EN caso de si tener numero celular
        //Separacion de Celular
        $celular= $_POST['celular'];
        $arrCelular= str_split($celular);
        $celular= $arrCelular[0] . $arrCelular[1] . $arrCelular[2] . " " . $arrCelular[3] . $arrCelular[4] . $arrCelular[5] . " " . $arrCelular[6] . $arrCelular[7] . $arrCelular[8] . $arrCelular[9]; 

        //Imagen
        $rutaImagen = "../Imagen/Firma-Fundacion.png";
        $imagen = imagecreatefrompng($rutaImagen);
        $angulo = 0;

        //colores
        $rojo= imagecolorallocate($imagen, 0, 92, 173);
        $gris= imagecolorallocate($imagen, 91, 91, 91);
        $masGris= imagecolorallocate($imagen, 110, 110, 110);
        $negro= imagecolorallocate($imagen, 0, 0, 0);

        //Nombre
        $size=$tamañoNombre;
        $x = 230;
        $y = 270;
        $nameText = strtoupper ($_POST['name']);
        imagettftext($imagen, $size, $angulo, $x, $y, $rojo, $font, $nameText);
        
        //Cargo
        $size=70;
        $x=230;
        $y=380;
        $cargoText= $_POST['cargo'];
        imagettftext($imagen, $size, $angulo, $x, $y, $gris, $font, $cargoText);
        
        //Mail
        $size=60;
        $x=530;
        $y=580;
        $mailText= $_POST['mail'];
        imagettftext($imagen, $size, $angulo, $x, $y, $masGris, $font, $mailText);
        
        //Telefono
        $size=60;
        $x=530;
        $y=730;
        $telefonoText= "+(" . $indicativo . ") " . $_POST['telefono'];
        imagettftext($imagen, $size, $angulo, $x, $y, $masGris, $font, $phone);

        //Celular
        $size=60;
        $x=530;
        $y=900;
        imagettftext($imagen, $size, $angulo, $x, $y, $masGris, $font, $celular);

        //Ciudad
        $size=60;
        $x=530;
        $y=1080;
        $ciudadText= $_POST['ciudad']." - Colombia";
        imagettftext($imagen, $size, $angulo, $x, $y, $masGris, $font, $ciudadText);
        header("Content-Type: image/png");
        $descarga= "Firma Corporativa -" . $_POST['name'] . ".png";
        header('Content-Disposition: attachment; filename="' . $descarga . '"');
        imagepng($imagen);


    }
    

  
    
    
?>

