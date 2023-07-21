<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Main</title>
</head>
<body>
    <div class="main_container">
        <div class="container_newcard">
            <div class="newcard">
                <form action="update.php" method="POST"enctype="multipart/form-data">
                    <input type="file" name="photo" id="">
                    <select class="selects_" name="phases" id="">
                        <option selected value="3">3х фазный</option>
                        <option value="1">однофазный</option>
                    </select>
                    <select class="selects_" name="type" id="">
                        <option selected value="air">AIR</option>
                        <option value="4a">4A</option>
                        <option value="inport">Импортный</option>
                    </select>
                    <div class="maininfo_container">
                        <div class="leftside">
                            <input placeholder="мощность" type="float" name="kw" id="powerinput">
                        </div>
                        <div class="rightside">
                            <select name="rpm" id="rpmselect">
                                <option value="">обороты</option>
                                <option value="3000">3000</option>
                                <option value="1500">1500</option>
                                <option value="1000">1000</option>
                                <option value="750">750</option>
                            </select>
                        </div>
                    </div>
                    <input placeholder="количество секции" type="number" name="count_section" id="">
                    <input placeholder="количество проводников" type="number" name="number_of" id="">
                    <input placeholder="количество витков" type="number" name="w" id="provod">
                    <input placeholder="количество пустых пазов" type="number" name="empty_cell" id="">
                    <select class="selects_"  name="a" id="paralels">
                        <option value="">количество паралелей</option>
                        <option value="1">1 паралель</option>
                        <option value="2">2 паралель</option>
                        <option value="3">3 паралель</option>
                    </select>

                    <!-- <div id="knop"></div>
                    <button id="myButton" onclick="CreateTextField()">+ провод</button></br>
                    <input placeholder="провод" type="text" name="w2" class="hidden_input">
                    <input placeholder="провод" type="text" name="w1" class="hidden_input">
                    <input placeholder="провод" type="text" name="w3" class="hidden_input">

                    <div id="knop2"></div>
                    <button id="myButton" onclick="CreateTextField2()">+ разные витки</button>
                    <input placeholder="витки" type="text" name="u1" class="hidden_input">
                    <input placeholder="витки" type="text" name="u2" class="hidden_input">
                    <input placeholder="витки" type="text" name="u3" class="hidden_input"> -->

                    <input placeholder="из" type="tel" name="in_kg" id="">
                    <input placeholder="вх" type="tel" name="out_kg" id="">
                    <div class="input_container">
                        <div class="up_container">
                            <label id="ppp" for="trst1" onclick="changeColor(1)">треугольник</label>
                            <label id="ppp2" for="trst2" onclick="changeColor(2)">звезда</label>
                        </div>
                        <div class="down_container">
                            <input type="radio" name="triangle_star" id="trst1" value="trst1">
                            <input type="radio" name="triangle_star" id="trst2" value="trst2">   
                        </div>
                    </div>

                    <textarea name="info" id="" cols="22" rows="3"></textarea>
                    <button id="myButton" type="submit">Add</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>