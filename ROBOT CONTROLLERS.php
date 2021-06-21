<!DOCTYPE html>
<html lang="en">

<head>
    <title>Robot Controllers</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
</head>
<!-- Styling of content -->
<style>
    /***************************
RESET
****************************/
    * {
        list-style: none;
    }

    main {
        background-color: #222;
        position: relative;
        border-radius: 10px;
        padding: 15px 25px;
        width: 100%;
        max-width: 960px;
        display: flex;
        flex-direction: column;
        text-align: center;


    }

    /***************************
  BODY
  ****************************/
    body {
        background-color: rgb(69, 76, 93);
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    /***************************
  TYPOGRAPHY
  ****************************/
    h1 {
        font: 20px Oswald;
        font-size: 30px;
        font-family: 'Press Start 2P', cursive;
        text-transform: uppercase;
        color: rgba(216, 222, 235, 0.404);
        font-weight: 700;
        text-shadow: #000 0px 1px;
        border-top: 1px solid #000;
        border-bottom: 1px solid #3A3A3A;
        padding: 20px;
        text-align: center;
        text-shadow: #000 0px 1px 2px;
    }

    /***************************
  FORM
  ****************************/
    .form {
        width: 500px;
        margin-top: 10px;
        margin: 0 auto;
        position: relative;
    }

    .label {
        display: block;
        font: 18px Oswald;
        color: rgba(216, 222, 235, 0.404);
        font-weight: 700;
        text-shadow: #000 0px 1px 2px;
        position: flex;
        flex-direction: column;
        text-align: left;
        margin-left: 4px;
    }

    /*The Range Bar*/
    input[type="range"] {
        -webkit-appearance: none;
        width: 87%;
        padding: 2px;
        margin-top: 10px;
        box-shadow: inset 4px 6px 10px -4px rgba(0, 0, 0, 0.3), 0 1px 1px -1px rgba(255, 255, 255, 0.3);
        background: rgba(0, 0, 0, 0.2);
        overflow: hidden;
        outline: none;
        border: 1px solid rgba(0, 0, 0, 0.7);
    }

    /*The Range Dial*/
    input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        width: 20px;
        height: 20px;
        background: #333;
        position: relative;
        z-index: 3;
        box-shadow: inset 4px 6px 10px -4px rgba(0, 0, 0, 0.3), 0 1px 1px -1px rgba(255, 255, 255, 0.3);
    }

    input[type="range"]::-webkit-slider-thumb:hover {
        cursor: pointer;
    }

    input[type="text"] {
        width: 40px;
        font-size: 15px;
        background-color: #222;
        color: whitesmoke;
        text-align: center;
        position: relative;
        bottom: 8px;
        box-shadow: 0 0.5em 0.5em -0.4em rgb(95, 104, 129);

    }

    .range2,
    .range3,
    .range4 {
        margin-top: 20px 15px;
    }

    .buttons {
        display: flex;
        justify-content: center;
        justify-items: center;
    }

    button {
        margin: 20px;
        width: 70px;
        background: none;
        color: rgb(164, 167, 175);
        border: 2px solid;
        padding: 6px 6px;
        font-size: 1em;
        transition: all 0.25s;
        border-radius: 5px;
    }

    button:hover {
        border-color: rgb(69, 76, 93);
        color: white;
        box-shadow: 0 0.5em 0.5em -0.4em rgb(69, 76, 93);
        transform: translateY(-0.5em);
        cursor: pointer;
        border-radius: 5px;
    }


    #ba {
        font: 20px Oswald;
        font-size: 25px;
        font-family: 'Press Start 2P', cursive;
        text-transform: uppercase;
        color: whitesmoke;
        font-weight: 700;
        text-shadow: #000 0px 1px;
        border-top: 1px solid #000;
        border-bottom: 1px solid #3A3A3A;
        padding: 20px;
        text-align: center;
        text-shadow: #000 0px 1px 2px;
    }
</style>

<body>
    <main>
        <span class="borderBottom"></span>
        <h1>Robot Controllers</h1>
        <span class="borderTop"></span>

        <!--Form Container-->
        <div class="form">
            <form action="ROBOT CONTROLLERS.php" method="post">
                <div class="range1">
                    <label for="range" class="label">Base:</label>
                    <input type="range" min="0" max="180" value="0" id="get" onchange="fetch()">
                    <input type="text" id="put" placeholder="0" name="Base" value="<?php
                                                                                    if (isset($_POST['Base'])) { //to show the selected value even when the page refreshed 
                                                                                        if (isset($_POST['save'])) {
                                                                                            echo $_POST['Base'];
                                                                                        }
                                                                                    } ?>"></input>
                </div>
                <div class="range2">
                    <label for="range" class="label">shoulder:</label>
                    <input type="range" min="0" max="180" value="0" id="get1" onchange="fetch1()">
                    <input type="text" id="put1" placeholder="0" name="shoulder" value="<?php
                                                                                        if (isset($_POST['shoulder'])) {
                                                                                            if (isset($_POST['save'])) {
                                                                                                echo $_POST['shoulder'];
                                                                                            }
                                                                                        } ?>"></input>
                </div>
                <div class=" range3">
                    <label for="range" class="label">Elbow:</label>
                    <input type="range" min="0" max="180" value="0" id="get2" onchange="fetch2()">
                    <input type="text" id="put2" placeholder="0" name="Elbow" value="<?php
                                                                                        if (isset($_POST['Elbow'])) {
                                                                                            if (isset($_POST['save'])) {
                                                                                                echo $_POST['Elbow'];
                                                                                            }
                                                                                        } ?>"></input>
                </div>
                <div class=" range4">
                    <label for="range" class="label">Wrist:</label>
                    <input type="range" min="0" max="180" value="0" id="get3" onchange="fetch3()">
                    <input type="text" id="put3" placeholder="0" name="Wrist" value="<?php
                                                                                        if (isset($_POST['Wrist'])) {
                                                                                            if (isset($_POST['save'])) {
                                                                                                echo $_POST['Wrist'];
                                                                                            }
                                                                                        } ?>"></input>
                </div>
                <div class=" range4">
                    <label for="range" class="label">Gripper:</label>
                    <input type="range" min="0" max="180" value="0" id="get4" onchange="fetch4()">
                    <input type="text" id="put4" placeholder="0" name="Gripper" value="<?php {
                                                                                            if (isset($_POST['save'])) {
                                                                                                if (isset($_POST['Gripper'])) echo $_POST['Gripper'];
                                                                                            }
                                                                                        } ?>"></input>
                </div>
                <div class=" range5">
                    <label for="range" class="label">Engine</label>
                    <input type="range" min="0" max="180" value="0" id="get5" onchange="fetch5()">
                    <input type="text" id="put5" placeholder="0" name="Engine" value="<?php
                                                                                        if (isset($_POST['Engine'])) {
                                                                                            if (isset($_POST['save'])) {
                                                                                                echo $_POST['Engine'];
                                                                                            }
                                                                                        } ?>"></input>
                </div>
                <div class="buttons">
                    <button id="b1" name="save" type="submit">Save</button>
                    <button id="b2" name="run" type="submit">Run</button>
                </div>
            </form>
            <!-- DataBase connection & Insert data int database -->
            <?php
            error_reporting(E_ALL & ~E_NOTICE);
            ini_set('display_errors', 1);
            $Base = $_POST["Base"];
            $shoulder = $_POST["shoulder"];
            $Elbow = $_POST["Elbow"];
            $Wrist = $_POST["Wrist"];
            $Gripper = $_POST["Gripper"];
            $Engine = $_POST["Engine"];

            $conn = new mysqli('localhost', 'root', '', 'ROBOT_CONTROLLERS');
            if (isset($_POST["save"])) {
                $stmt = $conn->prepare("INSERT INTO Engines (Base,Shoulder,Elbow,Wrist,Gripper,Engine) VALUES (?,?,?,?,?,?)");
                $stmt->bind_param("iiiiii", $Base, $shoulder, $Elbow, $Wrist, $Gripper, $Engine);
                $stmt->execute();
                echo "Saved successfully";
            }

            if (isset($_POST["run"])) {
                $stmt = $conn->prepare("INSERT INTO Run VALUES (NULL,1);");
                $stmt->execute();
                echo "Ran successfully";
            }
            ?>
        </div>
    </main>
    <!-- connect the range bar with text box -->
    <script class="numbwers">
        function fetch() {
            let get = document.getElementById("get").value;
            document.getElementById("put").value = get;
        }

        function fetch1() {
            let get = document.getElementById("get1").value;
            document.getElementById("put1").value = get;
        }

        function fetch2() {
            let get = document.getElementById("get2").value;
            document.getElementById("put2").value = get;
        }

        function fetch3() {
            let get = document.getElementById("get3").value;
            document.getElementById("put3").value = get;
        }

        function fetch4() {
            let get = document.getElementById("get4").value;
            document.getElementById("put4").value = get;
        }

        function fetch5() {
            let get = document.getElementById("get5").value;
            document.getElementById("put5").value = get;
        }
    </script>
</body>

</html>