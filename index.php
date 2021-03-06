<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel=icon href="/img/Foodies-04.svg" sizes="any" type="image/svg+xml">
    <script language="javascript" type="text/javascript" src="js/java.js"></script>
    <title>Foodies Carta Virtual</title>

    <!-- POP UP -->

<body>
    <div class="wrapper" id="pop-up">
        <div class="form-register">
            <a href="#" class="close">X</a>
            <div class="txt categContenidos" >
                <label for="fname" >First Name</label>
                <input class="controls" type="text" id="nombre" name="firstname" placeholder="Nombre" style="font-family:Gobold"><br>

                <label for="lname">Last Name</label>
                <input class="controls" type="text" id="apellido" name="lastname" placeholder="Apellido" style="font-family:Gobold;"><br>

                <label for="lname">Observation</label>
                <input class="controls" type="text" id="observaciones" name="tablenumber" style="font-family:Gobold" placeholder="Observaciones"><br>
                <label for="mesa1">Table Number</label>
                <select class="controls" id="mesas" name="Mesa" style="font-family:Gobold">
                    <option value="mesa1">1</option>
                    <option value="mesa2">2</option>
                    <option value="mesa3">3</option>
                    <option value="mesa4">4</option>
                    <option value="mesa5">5</option>
                    <option value="mesa6">6</option>
                    <option value="mesa7">7</option>
                    <option value="mesa8">8</option>
                    <option value="mesa9">9</option>
                    <option value="mesa10">10</option>
                    <option value="mesa11">11</option>
                    <option value="mesa12">12</option>
                </select><br>

                <input class="botons" type="submit" value="Subir pedido" onclick="formulario()">
                <p class="error" id="comentnombre"></p>
                <p class="error" id="comentapellido"></p>
                <!--<p class="error" id="La_orden">ALERTA DE CHECKBOX</p>-->

            </div>
        </div>
    </div>
    </div>

    <!-- MAIN BODY -->

    <div class="center bannerTitulo">
        <img src="img/Foodies-04.svg" alt="Foodies" class='logoFoodies'>
    </div>
    <!--------------------------MENU DE COMIDA------------------------------>
    <form action="/php/menu.php" method="POST">
        <div class="banner backTit1" id="banner1">
            <!--<p>Burguer Menu</p>-->
            <ul>
                <p id="burguer"><a class="categTitulo" hfer="#">Burguer Menu</a> <br><br>
                <ul>
                    <li class="primer_banner "><a hfer="#" class="categSubTitulos">Armalo Vos</a>
                        <ul class="categContenidos">
                            <li class="sub-banner1"><a hfer="#">Carne</a>
                                <!-- test -->
                                <ul>
                                    <li><input type="checkbox" class="armado_carne" name="c1" id="c1">
                                        <label for="c1">70% CARNE , 30% CERDO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_carne" name="c2" id="c2">
                                        <label for="c2">100% CARNE</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_carne" name="c3" id="c3">
                                        <label for="c3">100% POLLO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_carne" name="c4" id="c4">
                                        <label for="c4">VEGANA (POROTOS NEGROS)</label>
                                        <label class="precio">$100</label>
                                    </li>
                                </ul>
                                <div id='error'></div>
                            </li> <!-- test -->
                            <li class="sub-banner1"><a hfer="#">Pan</a>
                                <ul>
                                    <li><input type="checkbox" class="armado_pan" name="c5" id="c5">
                                        <label for="c5">BRIOCHE</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pan" name="c6" id="c6">
                                        <label for="c6">DE CAMPO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pan" name="c7" id="c7">
                                        <label for="c7">DE PAPA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pan" name="c8" id="c8">
                                        <label for="c8">DE REOMOLACHA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-banner1"><a hfer="#">Aderesos</a>
                                <ul>
                                    <li><input type="checkbox" class="armado_ad" name="c9" id="c9">
                                        <label for="c9">MAYONESA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ad" name="c10" id="c10">
                                        <label for="c10">KETCHUP</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ad" name="c11" id="c11">
                                        <label for="c11">MOSTAZA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ad" name="c12" id="c12">
                                        <label for="c12">PEPINO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ad" name="c13" id="c13">
                                        <label for="c13">CEBOLLA CARAMELIZADA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ad" name="c14" id="c14">
                                        <label for="c14">CEBOLLA MORADA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ad" name="c15" id="c15">
                                        <label for="c15">PANZETA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ad" name="c16" id="c16">
                                        <label for="c16">QUESO CHEDDAR</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ad" name="c17" id="c17">
                                        <label for="c17">QUESO ROQUEFORT</label>
                                        <label class="precio">$100</label>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </li>
                    <li class="primer_banner"><a hfer="#" class="categSubTitulos"> Los Combos</a>
                        <ul class="categContenidos">
                            <li class="sub-banner1"><input type="checkbox" name="c18" id="c18">
                                <label for="c18"><a href="#popad1">CLASSIC</a></label><a href=""></a>
                                <label class="precio">$100</label>
                                <ul>
                                    <li><a hfer="#">BURGER</a></li>
                                    <li><a hfer="#">TOMATE</a></li>
                                    <li><a hfer="#">LECHUGA</a></li>
                                    <li><a hfer="#">CEBOLLA MORADA</a></li>
                                    <li><a hfer="#">ADEREZO FOODIE</a></li>
                                </ul>
                            </li>
                            <li class="sub-banner1"><input type="checkbox" name="c19" id="c19">
                                <label for="c19"><a href="#popad2">VESPA IN LOVE</a></label>
                                <label class="precio">$100</label>
                                <ul>
                                    <li><a hfer="#">BURGER</a></li>
                                    <li><a hfer="#">PROVOLONE</a></li>
                                    <li><a hfer="#">CHUTNEY DE TOMATES CHERRIES</a></li>
                                    <li><a hfer="#">R??CULA</a></li>
                                    <li><a hfer="#">PESTO GENOV??S</a></li>
                                </ul>
                            </li>
                            <li class="sub-banner1"><input type="checkbox" name="c20" id="c20">
                                <label for="c20">FRENCH BURGUER</label>
                                <label class="precio">$100</label>
                                <ul>
                                    <li><a hfer="#">BURGER</a></li>
                                    <li><a hfer="#">CEBOLLA CARAMELIZADA</a></li>
                                    <li><a hfer="#">QUESO BRIE</a></li>
                                    <li><a hfer="#">HONGOS CONFITADOS</a></li>
                                    <li><a hfer="#">R??CULA</a></li>
                                    <li><a hfer="#">MOSTAZA A LA ANTIGUA</a></li>
                                </ul>
                            </li>
                            <li class="sub-banner1"><input type="checkbox" name="c21" id="c21">
                                <label for="c21">LONDON PARK</label>
                                <label class="precio">$100</label>
                                <ul>
                                    <li><a hfer="#">BURGER</a></li>
                                    <li><a hfer="#">QUESO CHEDDAR</a></li>
                                    <li><a hfer="#">BACON</a></li>
                                    <li><a hfer="#">R??CULA</a></li>
                                    <li><a hfer="#">CHUHTNEY DE CEBOLLA MORADA</a></li>
                                    <li><a hfer="#">PEPINO</a></li>
                                    <li><a hfer="#">ADEREZO FOODIE</a></li>
                                </ul>
                            </li>
                            <li class="sub-banner1"><input type="checkbox" name="c22" id="c22">
                                <label for="c22">OLD SCHOOL</label>
                                <label class="precio">$100</label>
                                <ul>
                                    <li><a hfer="#">BURGER</a></li>
                                    <li><a hfer="#">MORRONES ASADOS</a></li>
                                    <li><a hfer="#">AJIES EN VINAGRE</a></li>
                                    <li><a hfer="#">PANCETA</a></li>
                                    <li><a hfer="#">HUEVO</a></li>
                                    <li><a hfer="#">LECHUGA</a></li>
                                    <li><a hfer="#">MUZZARELLA</a></li>
                                    <li><a hfer="#">TOMATE</a></li>
                                </ul>
                            </li>
                            <li class="sub-banner1"><input type="checkbox" name="c23" id="c23">
                                <label for="c23">SAI BABA BURGUER</label>
                                <label class="precio">$100</label>
                                <ul>
                                    <li><a hfer="#">BURGER DE PAPA</a></li>
                                    <li><a hfer="#">HONGOS Y CEREALES</a></li>
                                    <li><a hfer="#">TOMATE</a></li>
                                    <li><a hfer="#">QUESO FUNDIDO</a></li>
                                    <li><a hfer="#">ESPINACA</a></li>
                                    <li><a hfer="#">CHUHTNEY DE CEBOLLA MORADA</a></li>
                                    <li><a hfer="#">MAYONESA DE CURRY</a></li>
                                </ul>
                            </li>
                            <li class="sub-banner1"><input type="checkbox" name="c24" id="c24">
                                <label for="c24">VEGAN BURGUER</label>
                                <label class="precio">$100</label>
                                <ul>
                                    <li><a hfer="#">BURGER DE QUINOA Y POROTOS NEGROS EN PAN DE REMOLACHA</a></li>
                                    <li><a hfer="#">LECHUGA</a></li>
                                    <li><a hfer="#">TOMATE</a></li>
                                    <li><a hfer="#">PALTA</a></li>
                                    <li><a hfer="#">MAYONESA DE ZANAHORIA</a></li>
                                </ul>
                            </li>
                            <li class="sub-banner1"><input type="checkbox" name="c25" id="c25">
                                <label for="c25">CHINGA TU MADRE</label>
                                <label class="precio">$100</label>
                                <ul>
                                    <li><a hfer="#">FOODIE BURGER</a></li>
                                    <li><a hfer="#">QUESO</a></li>
                                    <li><a hfer="#">CEBOLLA DESFLEMADA</a></li>
                                    <li><a hfer="#">GUACAMOLE</a></li>
                                    <li><a hfer="#">MA??Z FRITO</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                </p>
            </ul>
        </div>
        <div class="banner backTit2" id="banner2">
            <ul>
                <p id="Pizza"><a class="categTitulo titulo_tama??o" hfer="#">Pizzas</a><br><br>
                <ul>
                    <li class="segundo_banner"><a hfer="#" class="categSubTitulos">Armala Vos</a>
                        <ul class="categContenidos">
                            <li class="sub-banner2"><a hfer="#">Tama??o de la pizza</a>
                                <ul>
                                    <li><input type="checkbox" class="armado_pizza" name="c26" id="c26">
                                        <label for="c26">PEQUE??O</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza" name="c27" id="c27">
                                        <label for="c27">MEDIANO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza" name="c28" id="c28">
                                        <label for="c28">GRANDE</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza" name="c29" id="c29">
                                        <label for="c29">EXTRA GRANDE</label>
                                        <label class="precio">$100</label>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-banner2"><a hfer="#">Tipos de queso</a>
                                <ul>
                                    <li><input type="checkbox" class="armado_quesos" name="c30" id="c30">
                                        <label for="c30">QUESO MOZZARELLA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_quesos" name="c31" id="c31">
                                        <label for="c31">QUESO FETO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_quesos" name="c32" id="c32">
                                        <label for="c32">QUESO GORGONZOLA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_quesos" name="c33" id="c33">
                                        <label for="c33">QUESO CHEDDAR</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_quesos" name="c34" id="c34">
                                        <label for="c34">QUESO PARMESANO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_quesos" name="c35" id="c35">
                                        <label for="c35">QUESO RICOTA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-banner2"><a hfer="#">Ingredientes</a>
                                <ul>
                                    <li><input type="checkbox" class="armado_pizza_ingredientes" name="c36" id="c36">
                                        <label for="c36">SALSA DE TOMATE</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza_ingredientes" name="c37" id="c37">
                                        <label for="c37">TOMATE</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza_ingredientes" name="c38" id="c38">
                                        <label for="c38">ACELGA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza_ingredientes" name="c39" id="c39">
                                        <label for="c39">JAM??N</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza_ingredientes" name="c40" id="c40">
                                        <label for="c40">PEPINO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza_ingredientes" name="c41" id="c41">
                                        <label for="c41">CEBOLLA CARAMELIZADA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza_ingredientes" name="c42" id="c42">
                                        <label for="c42">CEBOLLA MORADA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza_ingredientes" name="c43" id="c43">
                                        <label for="c43">PANZETA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza_ingredientes" name="c44" id="c44">
                                        <label for="c44">ZANAHORIA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza_ingredientes" name="c45" id="c45">
                                        <label for="c45">PALMITO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza_ingredientes" name="c46" id="c46">
                                        <label for="c46">CHOCLO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza_ingredientes" name="c47" id="c47">
                                        <label for="c47">LOCOTE VERDE</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza_ingredientes" name="c48" id="c48">
                                        <label for="c48">LOCOTE ROJO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza_ingredientes" name="c49" id="c49">
                                        <label for="c49">ALBAHACA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza_ingredientes" name="c50" id="c50">
                                        <label for="c50">OR??GANO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza_ingredientes" name="c51" id="c51">
                                        <label for="c51">ANCHOAS</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza_ingredientes" name="c52" id="c52">
                                        <label for="c52">ALCAPARRAS</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza_ingredientes" name="c53" id="c53">
                                        <label for="c53">HUEVO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza_ingredientes" name="c54" id="c54">
                                        <label for="c54">PEPPERONI</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pizza_ingredientes" name="c55" id="c55">
                                        <label for="c55">ACEITUNA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="segundo_banner"><a hfer="#" class="categSubTitulos">Tipos de pizzas</a>
                        <ul class="categContenidos">
                            <li class="sub-banner2"><input type="checkbox" name="c56" id="c56">
                                <label for="c56">MARGARITA</label>
                                <label class="precio">$100</label>
                                <ul>
                                    <li><a hfer="#">SALSA DE TOMATE</a></li>
                                    <li><a hfer="#">QUESO MOZZARELLA</a></li>
                                    <li><a hfer="#">ALBAHACA</a></li>
                                    <li><a hfer="#">OR??GANO</a></li>
                                    <li><a hfer="#">ACEITUNA</a></li>
                                </ul>
                            </li>
                            <li class="sub-banner2"><input type="checkbox" name="c57" id="c57">
                                <label for="c57">NAPOLITANA</label>
                                <label class="precio">$100</label>
                                <ul>
                                    <li><a hfer="#">SALSA DE TOMATE</a></li>
                                    <li><a hfer="#">QUESO MOZZARELLA</a></li>
                                    <li><a hfer="#">ALCAPARRAS</a></li>
                                    <li><a hfer="#">ANCHOAS</a></li>
                                    <li><a hfer="#">OR??GANO</a></li>
                                    <li><a hfer="#">ACEITUNA</a></li>
                                </ul>
                            </li>
                            <li class="sub-banner2"><input type="checkbox" name="c58" id="c58">
                                <label for="c58">CUATRO QUESOS</label>
                                <label class="precio">$100</label>
                                <ul>
                                    <li><a hfer="#">SALSA DE TOMATE</a></li>
                                    <li><a hfer="#">QUESO MOZZARELLA</a></li>
                                    <li><a hfer="#">QUESO PARMESANO</a></li>
                                    <li><a hfer="#">QUESO FETO</a></li>
                                    <li><a hfer="#">QUESO GORGONZOLA</a></li>
                                    <li><a hfer="#">OR??GANO</a></li>
                                    <li><a hfer="#">ACEITUNA</a></li>
                                </ul>
                            </li>
                            <li class="sub-banner2"><input type="checkbox" name="c59" id="c59">
                                <label for="c59">CARBONARA</label>
                                <label class="precio">$100</label>
                                <ul>
                                    <li><a hfer="#">SALSA DE TOMATE</a></li>
                                    <li><a hfer="#">QUESO MOZZARELLA</a></li>
                                    <li><a hfer="#">BACON</a></li>
                                    <li><a hfer="#">JAM??N</a></li>
                                    <li><a hfer="#">HUEVO</a></li>
                                    <li><a hfer="#">OR??GANO</a></li>
                                    <li><a hfer="#">ACEITUNA</a></li>
                                </ul>
                            </li>
                            <li class="sub-banner2"><input type="checkbox" name="c60" id="c60">
                                <label for="c60">PEPPERONI</label>
                                <label class="precio">$100</label>
                                <ul>
                                    <li><a hfer="#">SALSA DE TOMATE</a></li>
                                    <li><a hfer="#">MUZZARELLA</a></li>
                                    <li><a hfer="#">PEPPERONI</a></li>
                                    <li><a hfer="#">OR??GANO</a></li>
                                    <li><a hfer="#">ACEITUNA</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                </p>
            </ul>
        </div>
        <div class="banner backTit3" id="banner3">
            <ul>
                <p id="ensaladas"><a class="categTitulo titulo_tama??o" hfer="#">Ensaladas</a><br><br>
                <ul>
                    <li class="tercer_banner"><a hfer="#" class="categSubTitulos">Preparate tu ensalada</a>
                        <ul class="categContenidos">
                            <li class="sub-banner3"><a hfer="#">Tama??o de la ensalada</a>
                                <ul>
                                    <li><input type="checkbox" class="armado_ensalada" name="c61" id="c61">
                                        <label for="c61">PEQUE??O</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c62" id="c62">
                                        <label for="c62">MEDIANO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c63" id="c63">
                                        <label for="c63">GRANDE</label>
                                        <label class="precio">$100</label>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-banner3"><a hfer="#">Ingredientes</a>
                                <ul>
                                    <li><input type="checkbox" class="armado_ensalada" name="c64" id="c64">
                                        <label for="c64">LECHUGA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c65" id="c65">
                                        <label for="c65">TOMATE</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c66" id="c66">
                                        <label for="c66">REPOLLO VERDE</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c67" id="c67">
                                        <label for="c67">REPOLLO MORADO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c68" id="c68">
                                        <label for="c68">AGUACATE</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c69" id="c69">
                                        <label for="c69">TROZOS DE PAN</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c70" id="c70">
                                        <label for="c70">ACELGA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c71" id="c71">
                                        <label for="c71">JAM??N</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c72" id="c72">
                                        <label for="c72">PEPINO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c73" id="c73">
                                        <label for="c73">CEBOLLA CARAMELIZADA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c74" id="c74">
                                        <label for="c74">CEBOLLA MORADA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c75" id="c75">
                                        <label for="c75">PANZETA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c76" id="c76">
                                        <label for="c76">ZANAHORIA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c77" id="c77">
                                        <label for="c77">PALMITO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c78" id="c78">
                                        <label for="c78">CHOCLO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c79" id="c79">
                                        <label for="c79">LOCOTE VERDE</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c80" id="c80">
                                        <label for="c80">LOCOTE ROJO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c81" id="c81">
                                        <label for="c81">ALBAHACA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c82" id="c82">
                                        <label for="c82">OR??GANO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c83" id="c83">
                                        <label for="c83">ANCHOAS</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c84" id="c84">
                                        <label for="c84">ALCAPARRAS</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c85" id="c85">
                                        <label for="c85">HUEVO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c86" id="c86">
                                        <label for="c86">PEPPERONI</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_ensalada" name="c87" id="c87">
                                        <label for="c87">ACEITUNA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </li>
                    <li class="tercer_banner"><a hfer="#" class="categSubTitulos">Ensaladas ya preparadas</a>
                        <ul class="categContenidos">
                            <li class="sub-banner3"><input type="checkbox" ame="c88" id="c88">
                                <label for="c88">ENSALADA NORMAL</label>
                                <label class="precio">$100</label>
                                <ul>
                                    <li><a hfer="#">LECHUGA</a></li>
                                    <li><a hfer="#">TOMATE</a></li>
                                    <li><a hfer="#">ALBAHACA</a></li>
                                    <li><a hfer="#">ALCAPARRAS</a></li>
                                    <li><a hfer="#">LOCOTE ROJO</a></li>
                                    <li><a hfer="#">LOCOTE VERDE</a></li>
                                </ul>
                            </li>
                            <li class="sub-banner3"><input type="checkbox" name="c89" id="c89">
                                <label for="c89">ENSALADA ITALIANA</label>
                                <label class="precio">$100</label>
                                <ul>
                                    <li><a hfer="#">CEBOLLA MORADA</a></li>
                                    <li><a hfer="#">TOMATE</a></li>
                                    <li><a hfer="#">ACEITUNA</a></li>
                                    <li><a hfer="#">ALBAHACA</a></li>
                                    <li><a hfer="#">AGUACATE</a></li>

                                </ul>
                            </li>
                            <li class="sub-banner3"><input type="checkbox" name="c90" id="c90">
                                <label for="c90">ENSALADA NICOISE</label>
                                <label class="precio">$100</label>
                                <ul>
                                    <li><a hfer="#">LECHUGA</a></li>
                                    <li><a hfer="#">HUEVO</a></li>
                                    <li><a hfer="#">ALCAPARRAS</a></li>
                                    <li><a hfer="#">ACEITUNA</a></li>
                                    <li><a hfer="#">TOMATE</a></li>
                                    <li><a hfer="#">CEBOLLA MORADA</a></li>
                                </ul>
                            </li>
                            <li class="sub-banner3"><input type="checkbox" ame="c91" id="c91">
                                <label for="c91">ENSALADA CESAR</label>
                                <label class="precio">$100</label>
                                <ul>
                                    <li><a hfer="#">LECHUGA</a></li>
                                    <li><a hfer="#">ANCHOAS</a></li>
                                    <li><a hfer="#">ALBAHACA</a></li>
                                    <li><a hfer="#">HUEVO</a></li>
                                    <li><a hfer="#">TROZOS DE PAN</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                </p>
            </ul>
        </div>
        <div class="banner backTit4" id="banner4">
            <ul>
                <p id="pasta_salsas"><a class="categTitulo titulo_tama??o" hfer="#">Pastas y salsas</a><br><br>
                <ul>
                    <li class="cuatro_banner"><a hfer="#" class="categSubTitulos">Arma tu plato</a>
                        <ul class="categContenidos">
                            <li class="sub-banner4"><a hfer="#">Tipos de salsas</a>
                                <ul>
                                    <li><input type="checkbox" class="armado_salsas" name="c92" id="c92">
                                        <label for="c92">SALSA BLANCA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_salsas" name="c93" id="c93">
                                        <label for="c93">SALSA ROJA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_salsas" name="c94" id="c94">
                                        <label for="c94">SALSA VERDE</label>
                                        <label class="precio">$100</label>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-banner4"><a hfer="#">Tipos de pastas</a>
                                <ul>
                                    <li><input type="checkbox" class="armado_fideos" name="c95" id="c95">
                                        <label for="c95">MO??ITO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_fideos" name="c96" id="c96">
                                        <label for="c96">??OQUIS</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_fideos" name="c97" id="c97">
                                        <label for="c97">SPAGHETTI</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_fideos" name="c98" id="c98">
                                        <label for="c98">RAVIOLES</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_fideos" name="c99" id="c99">
                                        <label for="c99">PASTA DE COLORES</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_fideos" name="c100" id="c100">
                                        <label for="c100">TORTELLINI</label>
                                        <label class="precio">$100</label>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-banner4"><a hfer="#">Elegir adicionales</a>
                                <ul>
                                    <li><input type="checkbox" class="armado_pasta" name="c101" id="c101">
                                        <label for="c101">TOMATE</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pasta" name="c102" id="c102">
                                        <label for="c102">QUESO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pasta" name="c103" id="c103">
                                        <label for="c103">ACELGA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pasta" name="c104" id="c104">
                                        <label for="c104">JAM??N</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pasta" name="c105" id="c105">
                                        <label for="c105">PEPINO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pasta" name="c106" id="c106">
                                        <label for="c106">CEBOLLA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pasta" name="c107" id="c107">
                                        <label for="c107">CEBOLLA MORADA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pasta" name="c108" id="c108">
                                        <label for="c108">ZANAHORIA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pasta" name="c109" id="c109">
                                        <label for="c109">PALMITO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pasta" name="c110" id="c110">
                                        <label for="c110">CHOCLO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pasta" name="c111" id="c111">
                                        <label for="c111">LOCOTE VERDE</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pasta" name="c112" id="c112">
                                        <label for="c112">LOCOTE ROJO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pasta" name="c113" id="c113">
                                        <label for="c113">ALBAHACA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pasta" name="c114" id="c114">
                                        <label for="c114">OR??GANO</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pasta" name="c115" id="c115">
                                        <label for="c115">PEPPERONI</label>
                                        <label class="precio">$100</label>
                                    </li>
                                    <li><input type="checkbox" class="armado_pasta" name="c116" id="c116">
                                        <label for="c116">ACEITUNA</label>
                                        <label class="precio">$100</label>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </li>
                    <li class="cuatro_banner"><a hfer="#" class="categSubTitulos">Pastas preparadas</a>
                        <ul class="categContenidos">
                            <li class="sub-banner4"><input type="checkbox" ame="c117" id="c117">
                                <label for="c117">PASTA NORMAL</label>
                                <label class="precio">$100</label>
                                <ul>
                                    <li><a hfer="#">??OQUIS</a></li>
                                    <li><a hfer="#">SALSA ROJA</a></li>
                                    <li><a hfer="#">TOMATE</a></li>
                                    <li><a hfer="#">CEBOLLA</a></li>
                                    <li><a hfer="#">LOCOTE ROJO</a></li>
                                    <li><a hfer="#">LOCOTE VERDE</a></li>
                                </ul>
                            </li>
                            <li class="sub-banner4"><input type="checkbox" name="c118" id="c118">
                                <label for="c118">PASTA ITALIANA</label>
                                <label class="precio">$100</label>
                                <ul>
                                    <li><a hfer="#">SPAGHETTI</a></li>
                                    <li><a hfer="#">SALSA BLANCA</a></li>
                                    <li><a hfer="#">PALMITO</a></li>
                                    <li><a hfer="#">QUESO</a></li>
                                    <li><a hfer="#">ZANAHORIA</a></li>
                                    <li><a hfer="#">JAM??N</a></li>

                                </ul>
                            </li>
                            <li class="sub-banner4"><input type="checkbox" name="c119" id="c119">
                                <label for="c119">PASTA DE RAVIOLES</label>
                                <label class="precio">$100</label>
                                <ul>
                                    <li><a hfer="#">RAVIOLES</a></li>
                                    <li><a hfer="#">SALSA VERDE</a></li>
                                    <li><a hfer="#">ALCAPARRAS</a></li>
                                    <li><a hfer="#">ACELGA</a></li>
                                    <li><a hfer="#">QUESO</a></li>
                                    <li><a hfer="#">CEBOLLA MORADA</a></li>
                                </ul>
                            </li>
                            <li class="sub-banner4"><input type="checkbox" ame="c120" id="c120">
                                <label for="c120">PASTA MO??ITO</label>
                                <label class="precio">$100</label>
                                <ul>
                                    <li><a hfer="#">MO??ITO</a></li>
                                    <li><a hfer="#">SALSA BLANCA</a></li>
                                    <li><a hfer="#">QUESO</a></li>
                                    <li><a hfer="#">ALBAHACA</a></li>
                                    <li><a hfer="#">HUEVO</a></li>
                                    <li><a hfer="#">JAM??N</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                </p>
            </ul>
        </div>
        <div class="banner backTit5" id="banner5">
            <ul>
                <p id="quinto_banner"><a class="categTitulo titulo_tama??o" hfer="#">Cafeter??a</a>
                <ul class="categContenidos">
                    <li class="sub-banner5"><a hfer="#">Cafe</a>
                        <ul>
                            <li><input type="checkbox" class="Cafe" name="c121" id="c121">
                                <label for="c121">CAF?? ESPRESSO</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Cafe" name="c122" id="c122">
                                <label for="c122">CAPUCCINO</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Cafe" name="c123" id="c123">
                                <label for="c123">AMERICANO</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Cafe" name="c124" id="c124">
                                <label for="c124">CAFE CON LECHE</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Cafe" name="c125" id="c125">
                                <label for="c125">CAFE CARAMEL MACCHIATO</label>
                                <label class="precio">$100</label>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-banner5"><a hfer="#">Acompa??ante</a>
                        <ul>
                            <li><input type="checkbox" class="Acompa??ante" name="c126" id="c126">
                                <label for="c126">TOSTADO</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Acompa??ante" name="c127" id="c127">
                                <label for="c127">TOSTADO CENTENO</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Acompa??ante" name="c128" id="c128">
                                <label for="c128">TOSTADO HOGAZA</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Acompa??ante" name="c129" id="c129">
                                <label for="c129">TOSTADO INGLES</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Acompa??ante" name="c130" id="c130">
                                <label for="c130">HUEVOS REVUELTO</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Acompa??ante" name="c131" id="c131">
                                <label for="c131">CONITO DE DULCE DE LECHE</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Acompa??ante" name="c132" id="c132">
                                <label for="c132">ALFAJOR DE CHOCOLATE</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Acompa??ante" name="c133" id="c133">
                                <label for="c133">MACARONS PETIT</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Acompa??ante" name="c134" id="c134">
                                <label for="c134">ENSALADA DE FRUTAS</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Acompa??ante" name="c135" id="c135">
                                <label for="c135">TRUFAS DE CHOCOLATE</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Acompa??ante" name="c136" id="c136">
                                <label for="c136">MEDIALUNAS</label>
                                <label class="precio">$100</label>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-banner5"><a hfer="#">Croissant</a>
                        <ul>
                            <li><input type="checkbox" class="Croissant" name="c137" id="c137">
                                <label for="c137">CROISSANT DE ALMENDRAS</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Croissant" name="c138" id="c138">
                                <label for="c138">CROISSANT DE DULCE DE LECHE</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Croissant" name="c139" id="c139">
                                <label for="c139">CROISSANT DE CREMA PASTELERA</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Croissant" name="c140" id="c140">
                                <label for="c140">CROISSANT DE FRUTAS</label>
                                <label class="precio">$100</label>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-banner5"><a hfer="#">Tortas</a>
                        <ul>
                            <li><input type="checkbox" class="Tortas" name="c141" id="c141">
                                <label for="c141">TORTA HUMEDA</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Tortas" name="c142" id="c142">
                                <label for="c142">TARTA DE MANZANA</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Tortas" name="c143" id="c143">
                                <label for="c143">TORTA DE OREO</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Tortas" name="c144" id="c144">
                                <label for="c144">TORTA ROJEL</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Tortas" name="c145" id="c145">
                                <label for="c145">TORTA AMORE</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Tortas" name="c146" id="c146">
                                <label for="c146">TORTA PALACE</label>
                                <label class="precio">$100</label>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-banner5"><a hfer="#">Postres</a>
                        <ul>
                            <li><input type="checkbox" class="Postres" name="c147" id="c147">
                                <label for="c147">BROWNIE</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Postres" name="c148" id="c148">
                                <label for="c148">CHEESECAKE</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Postres" name="c149" id="c149">
                                <label for="c149">CREMA AMERICANA</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Postres" name="c150" id="c150">
                                <label for="c150">CHOCOTORTA</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Postres" name="c151" id="c151">
                                <label for="c151">CHEESECAKE DE FRUTOS ROJOS</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Postres" name="c152" id="c152">
                                <label for="c152">BROWNIE CON HELADO</label>
                                <label class="precio">$100</label>
                            </li>
                        </ul>
                    </li>

                </ul>
                </p>
            </ul>
        </div>
        <div class="banner backTit6" id="banner6">
            <ul>
                <p id="sexto_banner"><a class="categTitulo titulo_tama??o" hfer="#">Agregados</a>
                <ul class="categContenidos">
                    <li class="sub-banner6"><a hfer="#">Papas</a>
                        <ul>
                            <li><input type="checkbox" class="Papas" name="c153" id="c153">
                                <label for="c153">CLASICAS</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Papas" name="c154" id="c154">
                                <label for="c154">RUSTICAS</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Papas" name="c155" id="c155">
                                <label for="c155">PAPAS CON CHEDDAR</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Papas" name="c156" id="c156">
                                <label for="c156">PAPAS CON CHEDDAR Y PANZETA</label>
                                <label class="precio">$100</label>
                            </li>
                        </ul>

                    </li>
                    <li class="sub-banner6"><a hfer="#">Salsas</a>
                        <ul>
                            <li><input type="checkbox" class="Salsas" name="c157" id="c157">
                                <label for="c157">VEGETALES SALTEADOS Y PESTO</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Salsas" name="c158" id="c158">
                                <label for="c158">SALSA BECHAMEL</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Salsas" name="c159" id="c159">
                                <label for="c159">SALSA POMODORO</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Salsas" name="c160" id="c160">
                                <label for="c160">SALSA BOLOGNESA</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Salsas" name="c161" id="c161">
                                <label for="c161">SALSA FILETTO</label>
                                <label class="precio">$100</label>
                            </li>
                        </ul>
                    </li>
                </ul>
                </p>
            </ul>
        </div>
        <div class="banner backTit7" id="banner7">
            <ul>
                <p id="septimo_banner"><a class="categTitulo titulo_tama??o" hfer="#">Bebidas</a>
                <ul class="categContenidos">
                    <li class="sub-banner7"><a hfer="#">Agua</a>
                        <ul>
                            <li><input type="checkbox" class="Agua" name="c162" id="c162">
                                <label for="c162">AGUA</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Agua" name="c163" id="c163">
                                <label for="c163">AGUA CON GAS</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Agua" name="c164" id="c164">
                                <label for="c164">AGUA SABORIZADA</label>
                                <label class="precio">$100</label>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-banner7"><a hfer="#">Gaseosas</a>
                        <ul>
                            <li><input type="checkbox" class="Gaseosa" name="c165" id="c165">
                                <label for="c165">COCA COLA</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Gaseosa" name="c166" id="c166">
                                <label for="c166">COCA COLA ZERO</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Gaseosa" name="c167" id="c167">
                                <label for="c167">COCA COLA LIGHT</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Gaseosa" name="c168" id="c168">
                                <label for="c168">SPRITE</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Gaseosa" name="c169" id="c169">
                                <label for="c169">FANTA</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Gaseosa" name="c170" id="c170">
                                <label for="c170">PASO DE LOS TOROS</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Gaseosa" name="c171" id="c171">
                                <label for="c171">SCHWEPPES</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Gaseosa" name="c172" id="c172">
                                <label for="c172">AGUA TONICA</label>
                                <label class="precio">$100</label>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-banner7"><a hfer="#">Jugos</a>
                        <ul>
                            <li><input type="checkbox" class="Jugos" name="c173" id="c173">
                                <label for="c173">NARANJA</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Jugos" name="c174" id="c174">
                                <label for="c174">MANDARINA</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Jugos" name="c175" id="c175">
                                <label for="c175">MANZANA</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Jugos" name="c176" id="c176">
                                <label for="c176">LIMON</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Jugos" name="c177" id="c177">
                                <label for="c177">POMELO</label>
                                <label class="precio">$100</label>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-banner7"><a hfer="#">Cervezas</a>
                        <ul>
                            <li><input type="checkbox" class="Cervezas" name="c178" id="c178">
                                <label for="c178">SOL</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Cervezas" name="c179" id="c179">
                                <label for="c179">HEINEKEN</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Cervezas" name="c180" id="c180">
                                <label for="c180">CORONA EXTRA</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Cervezas" name="c181" id="c181">
                                <label for="c181">QUILMES</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Cervezas" name="c182" id="c182">
                                <label for="c182">PILSEN</label>
                                <label class="precio">$100</label>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-banner7"><a hfer="#">Tragos</a>
                        <ul>
                            <li><input type="checkbox" class="Tragos" name="c183" id="c183">
                                <label for="c183">VINO BLANCO</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Tragos" name="c184" id="c184">
                                <label for="c184">VINO TINTO</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Tragos" name="c185" id="c185">
                                <label for="c185">NEGRONI</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Tragos" name="c186" id="c186">
                                <label for="c186">MARTINI</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Tragos" name="c187" id="c187">
                                <label for="c187">VODKA</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Tragos" name="c188" id="c188">
                                <label for="c188">MANHATTAN</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Tragos" name="c189" id="c189">
                                <label for="c189">CAIPIRINHA</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Tragos" name="c190" id="c190">
                                <label for="c190">MARGARITA</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Tragos" name="c191" id="c191">
                                <label for="c191">DAIKIRI</label>
                                <label class="precio">$100</label>
                            </li>
                            <li><input type="checkbox" class="Tragos" name="c192" id="c192">
                                <label for="c192">LONG ISLAND</label>
                                <label class="precio">$100</label>
                            </li>
                        </ul>
                    </li>
                </ul>
                </p>
            </ul>
        </div>
        <a  href="#pop-up" class="login-but categSubTitulos">Enviar Orden</a>
        <!--onclick="pedidoseguro()"-->
        <br>
    </form>
    <!--
    <footer>
        I??a, Fiore y ????
    </footer> 
    -->
    
    <div class="modal1" id="popad1">
        <div class="contenedor1">
            <header>??Bienvenidos!</header>
            <label for="btn-modal1"><a href="#">X</a></label>
        </div>
    </div>
    

    <div class="modal2" id="popad2">
        <div class="contenedor2">
            <header>??Bienvenidos!</header>
            <label for="btn-modal2"><a href="#">X</a></label>
        </div>
    </div>
</body>

<!----------------------------------------PHP -->
<?php
//validamos datos del servidor 
//conectamos a la base de datos
include "php\conexion.php" ;
$connection = conectar();
//-----------VARIABLES
//variables keys

//$id_formulario = $_POST["id_formulario"];//ERROR

//variables fijas

//$nombre = $_POST["nombre"];    //ERROR
//$apellido = $_POST["apellido"]; //ERROR
//$observaciones = $_POST["observaciones"]; //ERROR
//$n_de_mesa = $_POST["nmesa"]; //ERROR

//AUXILIARES PARA PRUEBAS DE SERVIDOR 
$id_formulario = 1;
$nombre = "mateo"; //
$apellido = "denti";//
$observaciones = "ninguna";//
$n_de_mesa = 1;//
$armado1_combos="c3";
$armado2_="c6";
$bebida="c124";

// Variables predefinidas en caso de error
//$armado1_combos=NULL;
//$armado2_=NULL;
//$bebida=NULL;

//variables de menu
$i=1;
$total = 192 +1;
$contador=0;
$adicionales = array();
// detecta checkbox True y determina variable equivalente

while($i<$total)
{
    if(isset($_POST['c'.strval($i)]))
    {
        if(($i>=1 and $i<=4) or ($i>=18 and $i<=29) or ($i>=56 and $i<=63) or ($i>=88 and $i<=94) or ($i>=117 and $i<=120))
        {
            $armado1_combos = $_POST['c'+String($i)];
        }
        if(($i>=5 and $i<=8) or ($i>=30 and $i<=35) or ($i>=95 and $i<=100))
        {
            $armado2_ = $_POST['c'+String($i)];
        }
        if(($i>=121 and $i<=125) or ($i>=162 and $i<=192))
        {
            $bebida = $_POST['c'+String($i)];
        }
        else{
            $contador+=1;
            array_push($adicionales, ('c'.strvar($i))); //Associative Arrays
        }  
    }
    $i+=1;
}
for($x = (intval($contador)+1); $x < 21; $x++)
{
    array_push($adicionales, NULL); //echo var_dump($adicionales); //var_dump => TODO & print_r => LISTA LIMPIA
}

//verificamos la conexion a la base de datos
if(!$connection)
        {
            echo "" . mysql_error();
        }
    else
        {
            echo "<br>- Si, pero no a lo que quer??as";
        }
        // indicamos el nombre de la base de datos
        $db = "base";                    //<------ nombre de base de datos entre comillas => DONE
        //indicamos seleccionar a la base de datos
        $db = mysqli_select_db($connection,$db);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else{
        echo "";
        }
        //insertamos datos de registro al mysql xamp, indicando el nombre de la tabla y sus atributos

        // PRIMERO formulario_orden (IMPRIMIR)
        $instrucction_SQL1 = "INSERT INTO formulario_orden( id_formulario , nombre , apellido , observaciones , n_de_mesa ) 
                                VALUES ( '$id_formulario','$nombre','$apellido','$observaciones', '$n_de_mesa')";
        /*
        echo "<br>";
        echo "<br>".$instrucction_SQL1; 
        echo "<br>";        
        */ 
        // SEGUNDO pedido_menu (IMPRIMIR)
        $instrucction_SQL2 = "INSERT INTO pedido_menu( id_formulario , armado1_combos , armado2_ , bebida ) 
                                VALUES ( '$id_formulario','$armado1_combos','$armado2_','$bebida')"; 
        /*
        echo "<br>".$instrucction_SQL2;  
        echo "<br>";
        */
        // TERCERO tabla_adicionales (IMPRIMIR)
        $instrucction_SQL3 = "INSERT INTO tabla_adicionales( id_formulario , adic1 , adic2 , adic3 , adic4 , adic5 , adic6 , adic7 , adic8 , adic9 , adic10 , adic11 , adic12 , adic13 , adic14 , adic15 , adic16 , adic17 , adic18 , adic19 , adic20)
                                VALUES ( '$id_formulario','$adicionales[0]','$adicionales[1]','$adicionales[2]','$adicionales[3]','$adicionales[4]','$adicionales[5]','$adicionales[6]','$adicionales[7]','$adicionales[8]','$adicionales[9]','$adicionales[10]','$adicionales[11]','$adicionales[12]','$adicionales[13]','$adicionales[14]','$adicionales[15]','$adicionales[16]','$adicionales[17]','$adicionales[18]','$adicionales[19]')"; 
        /*
        echo "<br>".$instrucction_SQL3;
        echo "<br>";
        */

        //envio resultado de tablas y genero las relevantes
        $resultado1 = mysqli_query($connection,$instrucction_SQL1);
        $resultado2 = mysqli_query($connection,$instrucction_SQL2); //con nuevos valores, retorna true
        $resultado3 = mysqli_query($connection,$instrucction_SQL3);
        
//cerramos conexion con db
mysqli_close( $connection );
?>

</html>