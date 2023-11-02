     

        <script type="text/javascript" src="<?php echo base_url(); ?>utilitarios/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>utilitarios/js/modulos/main.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>utilitarios/js/sweetalert/sweetalert_2.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>utilitarios/js/loadingoverlay/loadingoverlay.min2.1.js"></script>
<?php

    if(isset($js) && is_array($js))
    {
        foreach ($js as $key => $value) 
        {
            foreach ($value as $val_e) {
                $url = base_url()."utilitarios/js/".$key."/".$val_e;
?>
        <script type="text/javascript" src="<?php echo $url."?rand=".rand(); ?>"></script>
<?php
            }

        }        
    }
?>
</body>

</html>