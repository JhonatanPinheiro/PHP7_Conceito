<?php
namespace Aritmetica;

use DivisionByZeroError;

        class NaoInteiroException extends \Exception {

        }

        function intdiv($a, $b){
            if($b == 0){
                throw new \DivisionByZeroError();
            }
            if($a % $b > 0){
                throw new NaoInteiroException();
            }else{
                return $a / $b;
            }

        }try {
            echo intdiv(8,0) . 'br';
        }catch(DivisionByZeroError $e){
            echo 'Divisão por zero <br>';
        }

        echo intdiv(0,2).'<br>';

    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>