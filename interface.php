<html>
    <body>
        
        <?php 

            interface Customer
            {
                public function getName();
            }

            class Database implements Customer
            {
                public function getName()
                {
                    return 'Hi';
                }
            }

            interface Client extends Customer
            {
                public function getName();
            }
        ?>
    

    </body>
</html>