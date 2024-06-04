<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title"> TRAITS 02 </div>
    <hr><br>
    <?php
        trait validacao {
            public function validarString($str) {
                return isset($str) && $str !== '';
            }
        }

        trait validacaoMelhor {
            public function validarString($str) {
                return isset($str) && trim($str);
            }
        }

        class Usuario {
            use validacao, validacaoMelhor {
                validacaoMelhor::validarString insteadOf validacao;
                // validacao::validarString insteadOf validacaoMelhor;

                validacao::validarString as validacaoSimples;
            }
        }

        $usuario = new Usuario();
        var_dump($usuario->validarString(' '));
        echo '<br>';
        var_dump($usuario->validacaoSimples(' '));

    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>