<?php if(isset($_GET['lunghezza-password'])){
        $lunghezza = $_GET['lunghezza-password'];

        function generaPassword($lunghezza) {
            $caratteri = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
            $password = substr( str_shuffle( $caratteri ), 0, $lunghezza );
            return $password;
        } ?>

        <p>La password generata è: <?php echo generaPassword($lunghezza); ?> </p>
        
<?php } ?>