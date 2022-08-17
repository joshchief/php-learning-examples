<html>
    <body>
        
        <?php 

            abstract class Dump
            {
                abstract public function dump($data);
            }

            class WebDumper extends Dump
            {
                public function dump($data)
                {
                    echo "<pre>";
                    var_dump($data);
                    echo "</pre>";
                }
            }

            class ConsoleDumper extends Dump
            {
                public function dump($data)
                {
                    echo "CLI";
                }
            }

            class DumperFactory
            {
                public static function getDumper()
                {
                    return PHP_SAPI === 'cli'
                        ? new ConsoleDumper()
                        : new WebDumper();
                }
            }

            $dumper = DumperFactory::getDumper();
            $dumper->dump('PHP abstract class is awesome!');
        ?>
    

    </body>
</html>