<?
function adicionar($conn,$codigo,$nombre,$precio,$marca)
{
    $var=1;
    $mysql_query="insert into table productos (codigo,nombre,precio,marca) values ('$codigo','$nombre','$precio','$marca')";
    odbc_exec($conn,$mysql) or die($var=0);
    return($var);

}
function modificar($conn,$codigo,$nombre,$precio,$marca)
{
    $var=1;
    $mysql="update productos set nombre='".$nombre."',precio='".$precio."',marca='".$marca."' where codigo='".$codigo."' ";	
    odbc_exec($conn,$mysql) or die($var=0);
    return($var);

}

function borrar ($conn,$codigo)
{
    $var=1;
    $mysql_query="delete from productos where codigo='".$codigo."' ";
    odbc_exec($conn,$mysql) or die($var=0);
    return($var);
}

function listo ($conn) {
$mysql="select productos.codigo,productos.nombre,precio from productos,marcas where productos.marcas=marcas.codigo";
$rs=odbc_exec($conn,$mysql);

echo "<table>"
while(odbc_fetch_row($rs))
 {
   echo "<tr>";
            $codigo= odbc_result ($rs, 1);
            $nombre= odbc_result ($rs, 2);
            $precio= odbc_result ($rs, 3);
            $marca= odbc_result ($rs, 4);
          echo "<td>".$codigo."</td>";
          echo "<td>".$nombre."</td>";
          echo "<td>".$precio."</td>";
          echo "<td>".$marca."</td>";

   echo "</tr>";

}
echo "</table>";

}





































?>
