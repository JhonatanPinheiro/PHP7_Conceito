<!DOCTYPE html>
<html>

<head> </head>

<body>
    <div class="title">Modificadores de Acesso </div>
    <hr><br>
    <?php
        class A{
            public $publico = '<strong> Publico </strong>';
            protected $protegido = '<strong> Protegido </strong>';
            private $privado = '<strong> Privado </strong>';

            public function mostrarA(){
                #$this->naoMostrar();
                echo "(Classe A) Publico = {$this->publico}<br>";
                echo "(Classe A) Protegido = {$this->protegido}<br>";
                echo "(Classe A) Privado = {$this->privado}<br>";
            }

            protected function vaiPorHeranca(){
                echo "Serei transmitido por Herança!<br>"; 
            }

            private function naoMostrar(){
                echo "Não vou Imprimir <br>"; 
            }
        }


        $a1 = new A();
        $a1->mostrarA();

        echo '<hr>';
        
        #Public - Podemos chamar em qualquer lugar
        #Protect - Podemos chamar dentro da própria Classe Criado ou por meio de Herança e seus filhos herdadas. Porém diretamente não será póssivel
        #Private - Podemos chamar apenas dentro da própria CLasse

        class B extends A{
            public function mostrarB(){
                echo "(Classe B) Publico = {$this->publico}<br>";
                echo "(Classe B) Protegido = {$this->protegido}<br>";
                echo "(Classe B) Privado = {$this->privado}<br>";

                parent::vaiPorHeranca();
            }
        }

        $b1 = new B();
        $b1->mostrarA();
        echo '<br>';
        $b1->mostrarB();


    ?>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

<style></style>