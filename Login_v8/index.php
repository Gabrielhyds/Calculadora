<!DOCTYPE html>
<html lang="en">

<head>
    <title>Calculator</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST">
                    <span class="login100-form-title">
						Calculadora
					</span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                        <input class="input100" type="number" name="numero1" placeholder="Digite um número">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Please enter password">
                        <input class="input100" type="number" name="numero2" placeholder="Digite um número">
                        <span class="focus-input100"></span>
                    </div><br>

                    <select class="input100" name="operacao" id="operacao" style="border:none;">
						<option value="1">
							Adição
						</option>
						<option value="2">
							Subtração
						</option>
						<option value="3">
							Multiplicação
						</option>
						<option value="4">
							divisão
						</option>
					</select><br>


                    <div class="container-login100-form-btn">
                        <div class="col-md-6">
                            <input class="login100-form-btn" type="submit" name="btncalcular" value="Calcular" >
                        </div>
                        <div class="col-md-6">
                            <button class="login100-form-btn" style="background:red;" type="reset" name="reset" >
							Limpar
						</button>
                        </div>
                    </div><br>
					<div class="wrap-input100 validate-input m-b-16">
						<?php
                            if(isset($_POST['btncalcular'])){
                                $n1 = $_POST['numero1'];
                                $n2 = $_POST['numero2'];
                                $operacao = $_POST['operacao'];
                                switch($operacao){
                                    case 1:
                                        $resultado = $n1 + $n2;
                                        echo "<h4>O resultado da conta é: $resultado</h4><br/>";
                                        break;
                                    case 2:
                                        $resultado = $n1 - $n2;
                                        echo "<h4>O resultado da conta é: $resultado</h4><br/>";
                                        break;
                                    case 3:
                                        $resultado = $n1 * $n2;
                                        echo "<h4>O resultado da conta é: $resultado</h4><br/>";
                                        break;
                                    case 4:
                                        $resultado = $n1 / $n2;
                                        echo "<h4>O resultado da conta é: $resultado</h4><br/>";
                                        break;
                                }
                            }
						?>
					</div>
                </form>
            </div>
        </div>
    </div>


    <!--===============================================================================================-->
    <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="assets/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="assets/js/main.js"></script>

</body>

</html>