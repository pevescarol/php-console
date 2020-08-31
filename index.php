<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php console</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="#" class="navbar-brand">Demo car</a>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Consola de PHP</h1>
          <p class="lead">Te explico algunos conceptos básicos de PHP</p>
        </div>
    </div>

    <div class="container">

        <?php include('person.php'); ?>
        <?php include('automotores/autos.php'); ?>
        <?php include('automatizacion/autos.php'); ?>
        <?php include('connection.php'); ?>


        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-dark text-white">
                <h3>Base de Datos</h3>
                    <?php
                        $persons = $connection->query('SELECT * from persons');

                        foreach($persons as $person){
                            echo "Nombre: " . $person['firstname'] . " - Apellido: " . $person['lastname'] . "<br>";
                        }

                        $conn = null;
                    ?>
                </div>
            </div>
        </div>
                

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Variables y tipo de datos</h3>
                    <?php
                        $name = "Carol";
                        $isOld = true;
                        $year = 1993;
                        $km = 54.4;

                        echo "Hola " . $name . ", naciste en el año " . $year . ", y estas a " . $km . " kilometros." . "<br>";
                        echo "La variable name es de tipo: " . gettype($name);
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-info text-white">
                    <h3>Operadores</h3>
                    <?php
                        $num1 = 1;
                        $num2 = 1;

                        $num1++;

                        echo "El resultado de la suma es: " . ($num1 + $num2) . "<br>";
                        echo "El resultado de la resta es: " . ($num1 - $num2) . "<br>";
                        echo "El resultado de la multiplicación es: " . ($num1 * $num2) . "<br>";
                        echo "El resultado de la división es: " . ($num1 / $num2) . "<br>";
                        echo "El resultado de la módulo es: " . ($num1 % $num2) . "<br>";

                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Condicional IF</h3>
                    <?php
                        $name = "Mc Fly";
                        $year = 1990;

                        if($year > 1950 && $year == 1990){
                            echo "Estas viniendo en esta epoca! <br>";
                        }

                        if($name == "Mc Fly" && $year == 1990){
                            echo "Eres el indicado!";
                        }else if($name == "Doc" && $year < 1990){
                            echo "Podrías ser el doc";
                        }else {
                            echo "No eres el indicado...";
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-info text-white">
                    <h3>Condicional SWITCH</h3>
                    <?php
                        $num = 8;

                        switch($num){
                            case 1:
                                echo "La calificación es muy baja";
                                break;
                            case 2:
                            case 4:
                                echo "La calificación sigue siendo baja";
                                break;
                            case 6: 
                                echo "La calificación es mediocre";
                                break;
                            case 8:
                                echo "La calificación es buena!";
                                break;   
                            case 10:
                                echo "La calificación es excelente!";
                                break;       
                            default:
                                echo "La calificación no es válida";       
                        }
                        /*
                        if($num == 1){
                            echo "La calificación es muy baja";
                        }else if($num == 2 || $num == 4){
                            echo "La calificación sigue siendo muy baja";
                        }else if($num == 6){
                            echo "La calificación es mediorcre";
                        }else if($num == 8){
                            echo "La calificación es buena!";
                        } else {
                            echo "La calificación no es válida";
                        }
                        */
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-success text-white">
                    <h3>Bucle While</h3>
                    <?php
                        $num = 0;

                        while($num <= 5){
                            echo "El número es: " . $num . "<br>";
                            $num++;
                        }
                    ?>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 m-2 bg-warning text-white">
                    <h3>Bucle For</h3>
                    <?php
                        for($i = 0; $i <= 5; $i++){
                            echo "El número es: " . $i . "<br>";
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Arrays</h3>
                    <?php
                        $nums = array(1, 4, 6, 7);

                        for($i=0; $i < count($nums); $i++){
                            echo $nums[$i] . "<br>";
                        }
                    ?>
                </div>
            </div>

            <div class="col-4">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Arrays</h3>
                    <?php
                        $names = array("Pepito", "Fulano", "Mengano", "Mengana");

                        for($i=0; $i < count($names); $i++){
                            echo $names[$i] . "<br>";
                        }
                    ?>
                </div>
            </div>

            <div class="col-4">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Foreach</h3>
                    <?php
                        $names = array("Pepito", "Fulano", "Mengano", "Mengana");

                        foreach($names as $name){
                            echo $name . "<br>";
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-danger text-white">
                    <h3>Break</h3>
                    <?php
                        $names = array("Benito", "Nina", "Mini", "Copito");

                        foreach($names as $name){
                            if($name == "Mini"){
                                break;
                            }

                            echo $name . "<br>";
                        }
                    ?>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 m-2 bg-warning text-white">
                    <h3>Continue</h3>
                    <?php
                        $names = array("Benito", "Nina", "Mini", "Copito");

                        foreach($names as $name){
                            if($name == "Mini"){
                                continue;
                            }

                            echo $name . "<br>";
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Funciones</h3>
                    <?php
                        function calc($operador, $num1, $num2){
                            switch($operador){
                                case "+":
                                    return $num1 + $num2;
                                    break;
                                case "-":
                                    return $num1 - $num2;
                                    break;
                                default: 
                                    return 0;
                            }
                        }

                        $resultado = calc("+", 3, 3);

                        echo "El resultado es: " . $resultado;
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-success text-white">
                    <h3>POO</h3>
                    <?php
                        class Mascota {
                            public $nombre;
                            public $tipo;
                            public $patas;

                            function __construct($nombre, $tipo, $patas){
                                $this->nombre = $nombre;
                                $this->tipo = $tipo;
                                $this->patas = $patas;
                            }

                            public function getDesc(){
                                if($this->patas == 0){
                                    return "Tu mascota es un " . $this->tipo . " y se llama " . $this->nombre . " y no tiene patas.";
                                } else{
                                    return "Tu mascota es un " . $this->tipo . " y se llama " . $this->nombre . " y tiene " . $this->patas . " patas.";
                                }
                                
                            }
                        }

                        $perro = new Mascota("Copito", "perro", 4);
                        $gato = new Mascota("Benito", "gato", 4);
                        $pez = new Mascota("Nemo", "pez", 0);
                        
                        echo $perro->getDesc() . "<br>";
                        echo $gato->getDesc() . "<br>";
                        echo $pez->getDesc() . "<br>";
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-info text-white">
                    <h3>Herencia</h3>
                    <?php
                        class Mascota2 {
                            public $nombre;
                            public $patas;

                            function __construct($nombre, $patas){
                                $this->nombre = $nombre;
                                $this->patas = $patas;
                            }

                            function eat(){
                                return "Estoy comiendo!";
                            }
                        }

                        class Perro extends Mascota2 {
                            function run(){
                                return "Estoy corriendo!";
                            }
                        }

                        class Gato extends Mascota2 {
                            
                        }

                        $tommy = new Perro("Tommy", 4);
                        $nina= new Gato("Nina", 4);

                        echo $tommy->run() . "<br>";
                        echo $nina->eat() . "<br>";
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-dark text-white">
                    <h3>Calculadora</h3>
                    <?php
                        class Calculadora {
                            public function sumar($num1, $num2){
                                return $num1 + $num2;
                            }

                            public function restar($num1, $num2){
                                return $num1 - $num2;
                            }
                        }

                        echo "El resultado de la suma es " . Calculadora::sumar(1, 1) . "<br>";
                        echo "El resultado de la resta es " . Calculadora::restar(5, 2) . "<br>";

                        /*
                        $calc = new Calculadora();
                        echo "El resultado de la suma es " . $calc->sumar(1, 1) . "<br>";
                        echo "El resultado de la resta es " . $calc->restar(5, 2) . "<br>";
                        */
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-info text-white">
                    <h3>Form POST</h3>
                    <form class="form-inline" method="post" action="#">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="saludo" class="sr-only">Saludo</label>
                            <input type="text" class="form-control" id="saludo" name="saludo" placeholder="Di algo...">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
                    </form>
                </div>
            </div>

            <div class="col-6">
                <div class="p-3 m-2 bg-success text-white">
                    <h3>Form POST</h3>
                    <?php
                        if(isset($_POST["saludo"])){
                            echo $_POST["saludo"];
                        } else {
                            echo "Esperando saludo...";
                        }
                            
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-info text-white">
                    <h3>Ejemplo calculadora</h3>
                    <form class="form-inline" method="post" action="#">
                        <div class="form-group mx-sm-1 mb-2">
                            <input type="number" class="form-control" id="num1" name="num1">
                        </div>
                        <div class="form-group mx-sm-1 mb-2">
                            <input type="number" class="form-control" id="num2" name="num2">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Sumar</button>
                    </form>
                </div>
            </div>

            <div class="col-6">
                <div class="p-3 m-2 bg-success text-white">
                    <h3>Resultado</h3>
                    <?php
                         if(isset($_POST['num1']) && isset($_POST['num2'])){
                             $result = $_POST['num1'] + $_POST['num2'];
                             echo "El resultado es " . $result;
                         } else {
                            echo "Esperando cálculo...";
                         }
                    ?>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-6">
                <div class="p-3 m-2 bg-danger text-white">
                    <h3>Form GET</h3>
                    <form class="form-inline" method="get" action="#">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="saludo" class="sr-only">Saludo</label>
                            <input type="text" class="form-control" id="saludo" name="saludo" placeholder="Di algo...">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
                    </form>
                </div>
            </div>

            <div class="col-6">
                <div class="p-3 m-2 bg-primary text-white">
                    <h3>Form GET</h3>
                    <?php
                        if(isset($_GET["saludo"])){
                            echo $_GET["saludo"];
                        } else {
                            echo "Esperando saludo...";
                        }
                            
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-dark text-white">
                <h3>Include</h3>
                    <?php 
                        $person = new Person("Car", "Reynolds");
                        echo $person->greetings();
                    ?>
                </div>
            </div>  
        </div>

        <div class="row">
            <div class="col-12">
                <div class="p-3 m-2 bg-info text-white">
                <h3>Namespaces</h3>
                    <?php 
                        $automotor = new \automotores\Auto("Mercedes Benz", 4, 4);
                        $automatizador = new \automatizacion\Auto("Bot", 10, "Martes 9 de Enero de 2021");

                        echo $automotor->getAuto() . "<br>";
                        echo $automatizador->getAuto() . "<br>";
                    ?>
                </div>
            </div>  
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>