<?
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