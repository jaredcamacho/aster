<?php
$nomcom = $_GET['nomcom'];
$correo = $_GET['correo'];
$plan = $_GET['plan'];
$metodo = $_GET['rgb'];

if(isset($_GET['rgb']))
{
    $metodo = $_GET['rgb'];
}
else
{
    echo "Indefinido";
}
if(isset($resultado['plan']))
{
    $plan = $resultado['plan'];
    switch($plan)
    {
        case '1 Semana':
            echo "1 semana";
            break;
        case '1 mes con anuncios':
            echo "1 mes con anuncios";
            break;
        case '1 mes sin anuncios':
            echo "1 mes sin anuncios";
            break;
        case '3 meses':
            echo "3 meses";
            break;
        case '1 año':
            echo "1 año";
            break;
    }
}
echo $nomcom, ", usted pagó con ", $metodo, " y ha contratado ", $plan, " de Aster, le enviaremos toda la información a través de su correo: ", $correo, "<br>";
echo "¡Muchas gracias y que disfrute!";
?>