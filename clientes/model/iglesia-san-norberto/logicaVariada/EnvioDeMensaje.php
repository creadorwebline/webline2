<?php
class EnvioDeMensaje{
    function mensaje($mensajeM,$pagina){
        ?>
    <html>
    <head> 
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript">
        function imprimir(impresion,pagina){
            swal({
                title:impresion,icon :"info"}).then((value) => {
                    window.location = '<?php echo $pagina; ?>';
                ;
                });
        }
        </script>
    </head>
    <body>
             <?php
            ?><script LANGUAGE="JavaScript">
            imprimir('<?php echo $mensajeM; ?>','<?php echo $pagina; ?>');</script>
            <?php
            /*
            codigo de respaldo
            //header("Refresh: 0; URL=".$pagina);
            //echo "<script>alert(".$mensajeM.");</script>";
            */ 
    }
}
?>
    </body>
</html>