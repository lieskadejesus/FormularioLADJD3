<?php

class Hola 
{
function saludar(string $nombre = 'Anónimo', string $profesion = 'ninguna'): string
{
    return 'Hola, persona llamada ' . $nombre .'. Por lo que veo tu nombre mide ' . strlen($nombre) . ' carácteres. De profesión ' . $profesion . '.';
}
echo saludar();
// Hola, persona llamada Anónimo. Por lo que veo tu nombre mide 8 carácteres. De profesión ninguna.
echo saludar('Espartaco');
// Hola, persona llamada Espartaco. Por lo que veo tu nombre mide 9 carácteres. De profesión ninguna.
echo saludar('Picasso', 'pintor');
// Hola, persona llamada Picasso. Por lo que veo tu nombre mide 7 carácteres. De profesión pintor.
}

class helado 
{
    static funtion hay_helado($helado)
   {
    if($helado<=0)
    {echo "no hay helado";}else{echo "si hay helado";}   
   }
   static funtion queda_helado($helado)
   {
    if($helado<=0)
        {echo "no, ya no queda helado";}else{echo "si, aun hay helado";}
   }
}
echo "<br>------------------------------HELADITO------------------------------------";
echo "<br> Hay helado en la nevera?: ";
echo helado::hay_helado($hay);
echo "<br> Queda helado en la nevera?: ";
echo helado::queda_helado($helado)
echo "<br>Revisa si no queda helado en la nevera: ";
echo helado::si_no_hay($hay);

class Comunicacion 
{
    public $saludo = "Hola! <br>";
    // Con el constructor disparamos un echo cada vez que se instancia la clase
    function __construct(){
        echo $this->saludo;
    }
    // Si llamamos a este método, volvemos a instanciar la clase
    public function saludar(){
        $objeto = new self;
        return $objeto;
    }
}
$obj = new Comunicacion(); // Devuelve Hola!
$obj->saludar(); // Devuelve Hola!

?>