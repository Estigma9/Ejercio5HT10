<?php  
    
    $finales= array(null);
    $i = 0;
    
    $equipo1 = array(null, null);
    $equipo2 = array(null, null);
    $equipo3 = array(null, null);
    $equipo4 = array(null, null);
    

    $equipo1[0] = $_GET['semi1']; 
    $equipo1[1] = $_POST['golesSemi1']; 
    $equipo2[0] = $_GET['semi2']; 
    $equipo2[1] = $_POST['golesSemi2']; 
    $equipo3[0] = $_GET['semi3']; 
    $equipo3[1] = $_POST['golesSemi3']; 
    $equipo4[0] = $_GET['semi4']; 
    $equipo4[1] = $_POST['golesSemi4']; 
    

            
    if ($equipo1[1] == $equipo2[1]) {
        echo "Ingrese un resultado que no sea empate.";
    }
    else {
        if ($equipo1[1] < $equipo2[1]) {
            $finales[$i] = $equipo2[0];
            $i = $i + 1;
            //array_push($finales, $equipo2[0]);
        }
        else {
            $finales[$i] = $equipo1[0];
            $i = $i + 1;
        }
    }

    if ($equipo3[1] == $equipo4[1]) {
        echo "Ingrese un resultado que no sea empate.";
    }
    else {
        if ($equipo3[1] < $equipo4[1]) {
            $finales[$i] = $equipo4[0];
            $i = $i + 1;
        }
        else {
            $finales[$i] = $equipo3[0];
            $i = $i + 1;
        }
    }

    $finalista1 = $finales[0];
    $finalista2 = $finales[1];
    
?>

<form action="finales.php?
final1=<?php echo $finalista1 ?>
&final2=<?php echo $finalista2 ?>" method="post">
    
    <h1>Esta es la FINAL, no hay empates</h1>

    <?php 
        echo $finalista1 . ": ";
    ?>
    <input type="int" name = "golesFin1" value=""> 
    <p>  Vs. </p>

    <?php 
        echo $finalista2 . ": ";
    ?>
    <input type="int" name = "golesFin2" value=""> 
    
    <br> <br>
    <input value="¡El ganador!" type="submit">
</form>
