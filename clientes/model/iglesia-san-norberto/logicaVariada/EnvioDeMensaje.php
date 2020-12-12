<?php
class EnvioDeMensaje{
    function mensaje($mesaje,$pagina){
        header("Refresh: 0; URL=".$pagina);
        echo "<script>alert('$mesaje');</script>";
    }
}
?>