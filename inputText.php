<?php
    $txtName="";
    $rdgLenguaje="";
    $chkphp="";
    $chkJavaScript="";
    $chkPython="";
    $lsAnime="";
    $txtCommit=""; 

    if($_POST){
        //exercise I
        $txtName = (isset($_POST['txtName'])) ? $_POST['txtName'] : "";
        $rdgLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";
        
        // exercise II
        $chkphp = (isset($_POST['chkphp']) == "true") ? "checked" : "";
        $chkJavaScript = (isset($_POST['chkJavaScript']) == "true") ? "checked" : ""; 
        $chkPython = (isset($_POST['chkPython']) == "true") ? "checked" : "";

        // exercise III
        $lsAnime=(isset($_POST['lsAnime'])) ? $_POST['lsAnime'] : "";

        // text area
        // existe un envío(POST) y es correcto, asignelo, de lo contrario dejelo en blnaco
        $txtCommit = (isset($_POST['txtCommit'])) ? $_POST['txtCommit'] : "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <!-- mensajes -->
    <strong>Hola</strong>:<?php echo $txtName;?><br />
    
    <strong>Tu lenguaje favorito es: </strong><?php echo $rdgLenguaje?><br/>
    
    <strong>Estas aprendiendo: </strong><br/>
    - <?php echo ($chkphp == "checked") ? "PHP" : ""; ?><br />
    - <?php echo ($chkJavaScript == "checked") ? "JavaScript":""; ?><br/>
    - <?php echo ($chkPython == "checked") ? "Python": ""; ?><br/>
    
    <strong>El anime que te gusta es: </strong><?php echo $lsAnime?><br/>

    <strong>Tu mensaje es: </strong><?php echo $txtCommit?>

    <form action="inputText.php" method="post">
        <input value="<?php echo $txtName;?>" type="text" name="txtName" id=""><br />
        
        <br/>¿Te gusta?:<br />
        php: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":"" ?> name="lenguaje" value="php" id=""><br/>
        JavaScript: <input type="radio" <?php echo ($rdgLenguaje=="JavaScript")?"checked":"" ?> name="lenguaje" value="JavaScript" id=""><br/>
        Python: <input type="radio" <?php echo ($rdgLenguaje=="Python")?"checked":"" ?> name="lenguaje" value="Python" id=""><br/>
        
        <br/>Estás aprendiendo...
        <br/>PHP <input type="checkbox" <?php echo $chkphp;?> name="chkphp" value="true" id="">
        <br/>JavaScript <input type="checkbox" <?php echo $chkJavaScript;?> name="chkJavaScript" value="true" id="">
        <br/>Python <input type="checkbox" <?php echo $chkPython;?> name="chkPython" value="true" id=""><br/>
        
        <br/>¿Qué anime te gusta?...<br/>
        <select name="lsAnime" id="">
            <option value="">Ninguna serie</option>
            <option value="Naruto" <?php echo ($lsAnime=="Naruto") ? "selected" : ""; ?> >Naruto</option>
            <option value="Bleach" <?php echo ($lsAnime=="Bleach") ? "selected" : ""; ?> >Bleach</option>
            <option value="Dragon Ball" <?php echo ($lsAnime=="Dragon Ball") ? "selected" : ""; ?> >Dragon Ball</option><br/>
        </select>

        <br/>¿Tienes alguna duda?<br/>
        <textarea name="txtCommit" id="" cols="30" rows="10">
            <?php echo $txtCommit?>
        </textarea><br/>
                
        <input type="submit" value="Enviar información">
    </form>  
</body>
</html>