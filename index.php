<?php 
$message = '';

if ( isset( $_GET['jobInfo'] ) ) {
    $message = "Количество экземпляров: $_GET[jobInfo]" . "\n"
    . "Заверенную/Незаверенную: $_GET[certified2]" . "\n"
    . "Указать мою должность: $_GET[position]" . "\n"
    . "Указать структурное подразделеие: $_GET[unit]" . "\n"
    . "Указать мою зароботную плату: $_GET[salary]" . "\n"
    . "Указать нахождение в отпуске: $_GET[vacation]" . "\n"
    . "Комментарий: " . "\n" . "$_GET[comment2]"
    ;


} elseif ( isset( $_GET['countCopy'] ) ) {
    $message = "Количество экземпляров: $_GET[countCopy]" . "\n"
    . "Заверенную/Незаверенную: $_GET[certified]" . "\n"
    . "Все страницы/Только заполненные страницы: $_GET[allPages]" . "\n"
    . "Комментарий: " . "\n" . " $_GET[comment1]"
    ;
}

mail('AShakhnovskij@mtsbank.ru', 'Вам письмо', $message);
?>

<style>
    .hidden{
    display: none;
    }
</style>

<div id="app">
    
    <select name="form_choose" id="form-select" class="js-form-choose">
        <option value="" selected>Выберите тип заявки</option>
        <option value="form-select-countCopy">Копию трудовой книжки</option>
        <option value="form-select-jobInfo">Справка с места работы</option>
    </select>

    <form action="/" method="get" class="form form-select-countCopy hidden">
        <label>Количество экземпляров</label><br>
        <input type="number" name="countCopy" placeholder=""><br>

        <label>Заверенную/Незаверенную</label><br>
        <input type="radio" id="certified1" name="certified" checked="checked" value="Да">Да
        <input type="radio" id="certified2" name="certified" checked="checked" value="Нет">Нет<br>
        
        <label>Все страницы/Только заполненные страницы</label><br>
        <input type="radio" id="allPages1" name="allPages" checked="checked" value="Да">Да
        <input type="radio" id="allPages2" name="allPages" checked="checked" value="Нет">Нет<br>

        <label>Комментраций</label><br>
        <input type="textarea" name="comment1"><br>

        <input type="submit" value="Send">
    </form>

    <form action="/" method="get" class="form form-select-jobInfo hidden">
        <label>Количество копий</label>
        <input type="number" name="jobInfo" placeholder=""><br>

        <label>Заверенную/Незаверенную</label><br>
        <input type="radio" id="certified3" name="certified2" checked="checked" value="Да">Да
        <input type="radio" id="certified4" name="certified2" checked="checked" value="Нет">Нет<br>
        
        <label>Указать мою должность</label><br>
        <input type="radio" id="position1" name="position" checked="checked" value="Да">Да
        <input type="radio" id="position2" name="position" checked="checked" value="Нет">Нет<br>

        <label>Указать струтурное подразделение</label><br>
        <input type="radio" id="unit1" name="unit" checked="checked" value="Да">Да
        <input type="radio" id="unit2" name="unit" checked="checked" value="Нет">Нет<br>
        
        <label>Указать мою зароботную плату</label><br>
        <input type="radio" id="salary1" name="salary" checked="checked" value="Да">Да
        <input type="radio" id="salary2" name="salary" checked="checked" value="Нет">Нет<br>

        <label>Указать нахождение в отпуске</label><br>
        <input type="radio" id="vacation1" name="vacation" checked="checked" value="Да">Да
        <input type="radio" id="vacation2" name="vacation" checked="checked" value="Нет">Нет<br>

        <label>Комментраций</label><br>
        <input type="textarea" name="comment2"><br>

        <input type="submit" value="Send">
    </form>
    
</div>

<script>
    var x, y;
    var x = document.getElementById("check");
    function boom() {
        if (document.getElementById("certified1").checked)
        y = document.getElementById("certified1").value;
        
        else if (document.getElementById("certified2").checked)
        y = document.getElementById("certified2").value;

        else 
        y = "kuch nhi";
        x.innerHTML = y;
    }

    var z = document.getElementById('rdio');
    z.addEventListener("click", boom);

</script>

<script>
    var x2, y2;
    var x2 = document.getElementById("check");
    function boom2() {
        if (document.getElementById("allPages1").checked)
        y2 = document.getElementById("allPages1").value;
        
        else if (document.getElementById("allPages2").checked)
        y2 = document.getElementById("allPages2").value;

        else 
        y2 = "kuch nhi";
        x2.innerHTML = y2;
    }

    var z2 = document.getElementById('rdio');
    z2.addEventListener("click", boom2);

</script>

<script>
    var x3, y3;
    var x3 = document.getElementById("check");
    function boom3() {
        if (document.getElementById("certified3").checked)
        y3 = document.getElementById("certified3").value;
        
        else if (document.getElementById("certified4").checked)
        y3 = document.getElementById("certified4").value;

        else 
        y3 = "kuch nhi";
        x3.innerHTML = y3;
    }

    var z3 = document.getElementById('rdio');
    z3.addEventListener("click", boom3);

</script>

<script>
    var x4, y4;
    var x4 = document.getElementById("check");
    function boom4() {
        if (document.getElementById("position1").checked)
        y4 = document.getElementById("position1").value;
        
        else if (document.getElementById("position2").checked)
        y4 = document.getElementById("position2").value;

        else 
        y4 = "kuch nhi";
        x4.innerHTML = y4;
    }

    var z4 = document.getElementById('rdio');
    z4.addEventListener("click", boom4);

</script>

<script>
    var x5, y5;
    var x5 = document.getElementById("check");
    function boom5() {
        if (document.getElementById("unit1").checked)
        y5 = document.getElementById("unit1").value;
        
        else if (document.getElementById("unit2").checked)
        y5 = document.getElementById("unit2").value;

        else 
        y5 = "kuch nhi";
        x5.innerHTML = y5;
    }

    var z5 = document.getElementById('rdio');
    z5.addEventListener("click", boom5);

</script>

<script>
    var x6, y6;
    var x6 = document.getElementById("check");
    function boom6() {
        if (document.getElementById("salary1").checked)
        y6 = document.getElementById("salary1").value;
        
        else if (document.getElementById("salary2").checked)
        y6 = document.getElementById("salary2").value;

        else 
        y6 = "kuch nhi";
        x6.innerHTML = y6;
    }

    var z6 = document.getElementById('rdio');
    z6.addEventListener("click", boom6);

</script>

<script>
    var x7, y7;
    var x7 = document.getElementById("check");
    function boom7() {
        if (document.getElementById("vacation1").checked)
        y7 = document.getElementById("vacation1").value;
        
        else if (document.getElementById("vacation2").checked)
        y7 = document.getElementById("vacation2").value;

        else 
        y7 = "kuch nhi";
        x7.innerHTML = y7;
    }

    var z7 = document.getElementById('rdio');
    z7.addEventListener("click", boom7);

</script>

<script>
var showElement = function( $str, $hide ){
        let $all = document.getElementsByClassName('form');
        $hide = ($hide) ? 'hidden' : '';

        for (let i = 0; i < $all.length; i++){
            $all[i].classList.add($hide);
        }
        document.getElementsByClassName($str)[0].classList.remove($hide);
    };

document.getElementById('form-select').onchange = function() {
        let selectedValue = this.options[this.selectedIndex].value;
        showElement(selectedValue, 1);
    };

</script>
