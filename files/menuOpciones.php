<?php
include_once "../mod/UsuarioBanco.php";
session_start ();
if (isset($_SESSION['usuario'])){
include_once "header.php";
?>
    <div class="caja-blanca">

        <!-- Validación de Usuario -->
        <div class="caja-areaP">
            <div class="numeros">
                <span class="numero-activo">Area Personal</span>
            </div>
        </div>
        <div class="navbar">
            <a class="active" href="../index.php"><i class="fa fa-fw fa-home"></i> Home</a>
            <a href="ingresar.php"><i class="fa fa-fw fa-search"></i> Ingresar</a>
            <a href="retirar.php"><i class="fa fa-fw fa-envelope"></i> Retirar</a>
            <a href="cambiarPin.php"><i class="fa fa-fw fa-user"></i> Cambiar Pin</a>
        </div>
        <?php
        include_once "footer.php";
        ?>
    </div>
    </body>
    </html>



<?php


}else{
    header ("Location:../index.php?mensaje=Usuario no autorizado");
}
?>
