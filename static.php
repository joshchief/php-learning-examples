<html>
    <body>
        
        <?php 

            class Foo
            {
                public static $my_static = 'blast';

                public function staticValue()
                {
                    return self::$my_static;
                }
            }

            class Bar extends Foo
            {
                public function fooStatic()
                {
                    return parent::$my_static;
                }
            }

            $foo = new Foo;
            echo $foo->$my_static;
        ?>


    </body>
</html>