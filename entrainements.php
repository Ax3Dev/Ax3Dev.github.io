<html>

<head>
    <link rel="stylesheet" href="styles/entrainements.css" type="text/css" />
    <title>Entrainements</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>



<body>
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ?>
    <h1>Entrainements</h1>
    <a href="index.php">Index</a>
    <script src="app.js"></script>
    <p>Contenu de la page Entrainement</p>
    <?php
    include_once "includes/connect.php";
    include_once "daos/EntrainementsDao.php";
    include_once "test.php"
    ?>

    <p>Elève : Barrieux Axel</p>
    <?php


    ?> <p>Sélectionner le numéro de l'entraînement</p>
    <input type="button" value="Teacher" onclick="alert('TEST');" />
    <select id="choix_id" name="choix_id">
        <option value="0">Sélectionnez</option>
        <option value="1" onclick="getTraining1()">Entrainement
            <?php
            $mysqli = trainnumber_1();
            ?>
        </option>
        <option value="2" onclick="getTraining2()">Entrainement
            <?php
            $mysqli = trainnumber_2();
            ?>
        </option>
        <option value="3" onclick="getTraining3()">Entrainement
            <?php
            $mysqli = trainnumber_3();
            ?>
        </option>
        <option value="4" onclick="getTraining4()">Entrainement
            <?php
            $mysqli = trainnumber_4();
            ?>
        </option>
        <option value="5" onclick="getTraining5()">Entrainement
            <?php
            $mysqli = trainnumber_5();
            ?>
        </option>
        <option value="6" onclick="getTraining6()">Entrainement
            <?php
            $mysqli = trainnumber_6();
            ?>
        </option>
        <option value="7" onclick="getTraining7()">Entrainement
            <?php
            $mysqli = trainnumber_7();
            ?>
        </option>
        <option value="8" onclick="getTraining8()">Entrainement
            <?php
            $mysqli = trainnumber_8();
            ?>
        </option>
        <option value="9" onclick="getTraining9()">Entrainement
            <?php
            $mysqli = trainnumber_9();
            ?>
        </option>
        <option value="10" onclick="getTraining10()">Entrainement
            <?php
            $mysqli = trainnumber_10();
            ?>
        </option>
        <option value="11" onclick="getTraining11()">Entrainement
            <?php
            $mysqli = trainnunmber_11();
            ?>
        </option>
        <option value="12" onclick="getTraining12()">Entrainement
            <?php
            $mysqli = trainnumber_12();
            ?>
        </option>
        <option value="13" onclick="getTraining13()">Entrainement
            <?php
            $mysqli = trainnumber_13();
            ?>
        </option>
        <option value="14" onclick="getTraining14()">Entrainement
            <?php
            $mysqli = trainnumber_14();
            ?>
        </option>
    </select>


    <!-- Div contenant le tableau lié à l'entraînement 1 -->
    <div id="Training1" style="display:none;">
        <!-- Numéro d'entraînement tableau -->
        <div class="trainumb" id="first">Numéro de l'entraînement

        </div>
        <div class="numtrain" id="second">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <!-- Je travaille sur un moyen de faire plus propre -->
            <?php
            $mysqli = trainnumber_1();
            ?>
        </div>
        <div class="plys_ent1" id="ent1"> Motivation :
            <?php
            $mysqli = plys_ent1();
            ?>

        </div>
        <div class="datetrain1" id="d_train1">
            <?php
            $mysqli = traindate_1();
            ?>
        </div>
    </div>

    <!-- ----------------------------------------------------------------------------------------------  -->

    <!-- Div contenant le tableau lié à l'entraînement 2 -->
    <div id="Training2" style="display:none;">
        <!-- Numéro d'entraînement tableau -->
        <div class="trainumb2" id="first2">Numéro de l'entraînement

        </div>
        <div class="numtrain2" id="second2">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <!-- Je travaille sur un moyen de faire plus propre -->
            <?php
            $mysqli = trainnumber_2();
            ?>
        </div>
        <div class="plys_ent2" id="ent2"> Motivation :
            <?php
            $mysqli = plys_ent2();
            ?>

        </div>
        <div class="datetrain2" id="d_train2">
            <?php
            $mysqli = traindate_2();
            ?>
        </div>
    </div>

    <!-- ----------------------------------------------------------------------------------------------  -->

    <!-- Div contenant le tableau lié à l'entraînement 3 -->
    <div id="Training3" style="display:none;">
        <!-- Numéro d'entraînement tableau -->
        <div class="trainumb3" id="first3">Numéro de l'entraînement

        </div>
        <div class="numtrain3" id="second3">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <!-- Je travaille sur un moyen de faire plus propre -->
            <?php
            $mysqli = trainnumber_3();
            ?>
        </div>
        <div class="plys_ent3" id="ent3"> Motivation :
            <?php
            $mysqli = plys_ent3();
            ?>

        </div>
        <div class="datetrain3" id="d_train3">
            <?php
            $mysqli = traindate_3();
            ?>
        </div>
    </div>

    <!-- ----------------------------------------------------------------------------------------------  -->

    <!-- Div contenant le tableau lié à l'entraînement 4 -->
    <div id="Training4" style="display:none;">
        <!-- Numéro d'entraînement tableau -->
        <div class="trainumb4" id="first4">Numéro de l'entraînement

        </div>
        <div class="numtrain4" id="second4">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <!-- Je travaille sur un moyen de faire plus propre -->
            <?php
            $mysqli = trainnumber_4();
            ?>
        </div>
        <div class="plys_ent4" id="ent4"> Motivation :
            <?php
            $mysqli = plys_ent4();
            ?>

        </div>
        <div class="datetrain4" id="d_train4">
            <?php
            $mysqli = traindate_4();
            ?>
        </div>
    </div>

    <!-- ----------------------------------------------------------------------------------------------  -->

    <!-- Div contenant le tableau lié à l'entraînement 5 -->
    <div id="Training5" style="display:none;">
        <!-- Numéro d'entraînement tableau -->
        <div class="trainumb5" id="first5">Numéro de l'entraînement

        </div>
        <div class="numtrain5" id="second5">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <!-- Je travaille sur un moyen de faire plus propre -->
            <?php
            $mysqli = trainnumber_5();
            ?>
        </div>
        <div class="plys_ent5" id="ent5"> Motivation :
            <?php
            $mysqli = plys_ent5();
            ?>

        </div>
        <div class="datetrain5" id="d_train5">
            <?php
            $mysqli = traindate_5();
            ?>
        </div>
    </div>

    <!-- ----------------------------------------------------------------------------------------------  -->

    <!-- Div contenant le tableau lié à l'entraînement 6 -->
    <div id="Training6" style="display:none;">
        <!-- Numéro d'entraînement tableau -->
        <div class="trainumb6" id="first6">Numéro de l'entraînement

        </div>
        <div class="numtrain6" id="second6">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <!-- Je travaille sur un moyen de faire plus propre -->
            <?php
            $mysqli = trainnumber_6();
            ?>
        </div>
        <div class="plys_ent6" id="ent6"> Sa motivation ->
            <?php
            $mysqli = plys_ent6();
            ?>

        </div>
        <div class="datetrain6" id="d_train6">
            <?php
            $mysqli = traindate_6();
            ?>
        </div>
    </div>

    <!-- ----------------------------------------------------------------------------------------------  -->

    <!-- Div contenant le tableau lié à l'entraînement 7 -->
    <div id="Training7" style="display:none;">
        <!-- Numéro d'entraînement tableau -->
        <div class="trainumb7" id="first7">Numéro de l'entraînement

        </div>
        <div class="numtrain7" id="second7">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <!-- Je travaille sur un moyen de faire plus propre -->
            <?php
            $mysqli = trainnumber_7();
            ?>
        </div>
        <div class="plys_ent7" id="ent7"> Motivation :
            <?php
            $mysqli = plys_ent7();
            ?>

        </div>
        <div class="datetrain7" id="d_train7">
            <?php
            $mysqli = traindate_7();
            ?>
        </div>
    </div>

    <!-- ----------------------------------------------------------------------------------------------  -->

    <!-- Div contenant le tableau lié à l'entraînement 8 -->
    <div id="Training8" style="display:none;">
        <!-- Numéro d'entraînement tableau -->
        <div class="trainumb8" id="first8">Numéro de l'entraînement

        </div>
        <div class="numtrain8" id="second8">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <!-- Je travaille sur un moyen de faire plus propre -->
            <?php
            $mysqli = trainnumber_8();
            ?>
        </div>
        <div class="plys_ent8" id="ent8"> Motivation :
            <?php
            $mysqli = plys_ent8();
            ?>

        </div>
        <div class="datetrain8" id="d_train8">
            <?php
            $mysqli = traindate_8();
            ?>
        </div>
    </div>

    <!-- ----------------------------------------------------------------------------------------------  -->

    <!-- Div contenant le tableau lié à l'entraînement 9 -->
    <div id="Training9" style="display:none;">
        <!-- Numéro d'entraînement tableau -->
        <div class="trainumb9" id="first9">Numéro de l'entraînement

        </div>
        <div class="numtrain9" id="second9">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <!-- Je travaille sur un moyen de faire plus propre -->
            <?php
            $mysqli = trainnumber_9();
            ?>
        </div>
        <div class="plys_ent9" id="ent9"> Motivation :
            <?php
            $mysqli = plys_ent9();
            ?>

        </div>
        <div class="datetrain9" id="d_train9">
            <?php
            $mysqli = traindate_9();
            ?>
        </div>
    </div>

    <!-- ----------------------------------------------------------------------------------------------  -->

    <!-- Div contenant le tableau lié à l'entraînement 10 -->
    <div id="Training10" style="display:none;">
        <!-- Numéro d'entraînement tableau -->
        <div class="trainumb10" id="first10">Numéro de l'entraînement

        </div>
        <div class="numtrain10" id="second10">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <!-- Je travaille sur un moyen de faire plus propre -->
            <?php
            $mysqli = trainnumber_10();
            ?>
        </div>
        <div class="plys_ent10" id="ent10"> Motivation :
            <?php
            $mysqli = plys_ent10();
            ?>

        </div>
        <div class="datetrain10" id="d_train10">
            <?php
            $mysqli = traindate_10();
            ?>
        </div>
    </div>

    <!-- ----------------------------------------------------------------------------------------------  -->

    <!-- Div contenant le tableau lié à l'entraînement 11 -->
    <div id="Training11" style="display:none;">
        <!-- Numéro d'entraînement tableau -->
        <div class="trainumb11" id="first11">Numéro de l'entraînement

        </div>
        <div class="numtrain11" id="second11">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <!-- Je travaille sur un moyen de faire plus propre -->
            <?php
            $mysqli = trainnunmber_11();
            ?>
        </div>
        <div class="plys_ent11" id="ent11"> Motivation :
            <?php
            $mysqli = plys_ent11();
            ?>

        </div>
        <div class="datetrain11" id="d_train11">
            <?php
            $mysqli = traindate_11();
            ?>
        </div>
    </div>

    <!-- ----------------------------------------------------------------------------------------------  -->

    <!-- Div contenant le tableau lié à l'entraînement 12 -->
    <div id="Training12" style="display:none;">
        <!-- Numéro d'entraînement tableau -->
        <div class="trainumb12" id="first12">Numéro de l'entraînement

        </div>
        <div class="numtrain12" id="second12">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <!-- Je travaille sur un moyen de faire plus propre -->
            <?php
            $mysqli = trainnumber_12();
            ?>
        </div>
        <div class="plys_ent12" id="ent12"> Motivation :
            <?php
            $mysqli = plys_ent12();
            ?>

        </div>
        <div class="datetrain12" id="d_train12">
            <?php
            $mysqli = traindate_12();
            ?>
        </div>
    </div>



    <!-- ----------------------------------------------------------------------------------------------  -->

    <!-- Div contenant le tableau lié à l'entraînement 13 -->
    <div id="Training13" style="display:none;">
        <!-- Numéro d'entraînement tableau -->
        <div class="trainumb13" id="first13">Numéro de l'entraînement

        </div>
        <div class="numtrain13" id="second13">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <!-- Je travaille sur un moyen de faire plus propre -->
            <?php
            $mysqli = trainnumber_13();
            ?>
        </div>
        <div class="plys_ent13" id="ent13"> Motivation :
            <?php
            $mysqli = plys_ent13();
            ?>

        </div>
        <div class="datetrain13" id="d_train13">
            <?php
            $mysqli = traindate_13();
            ?>
        </div>
    </div>

    <!-- ----------------------------------------------------------------------------------------------  -->

    <!-- Div contenant le tableau lié à l'entraînement 14 -->
    <div id="Training14" style="display:none;">
        <!-- Numéro d'entraînement tableau -->
        <div class="trainumb14" id="first14">Numéro de l'entraînement

        </div>
        <div class="numtrain14" id="second14">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <!-- Je travaille sur un moyen de faire plus propre -->
            <?php
            $mysqli = trainnumber_14();
            ?>
        </div>
        <div class="plys_ent14" id="ent14"> Motivation :
            <?php
            $mysqli = plys_ent14();
            ?>

        </div>
        <div class="datetrain14" id="d_train14">
            <?php
            $mysqli = traindate_14();
            ?>
        </div>
    </div>

</body>

</html>