<?php

echo "<strong>_POST array:</strong> <br>";

print_r($_POST);

echo "<br><br><br>";
if (!empty($_POST)) {
    $message = "Вам пришло сообщение с сайта: \n"
    . "Количество копий: " . $_POST['copyCount'] . "\n"
    . "Заверенную/Незаверенную: " . $_POST['certified'] . "\n"
    . "Все страницы/Только заполненные страницы:" . $_POST['allPages'] . "\n"
    . "Коментарий: \n " . $_POST['message1'];

    $resultMail = mail("r.mamedbekov@yandex.ru", "Сообщение с сайта", $message);
    
    if ($resultMail) {
        echo "Сообщение отарвленно успешно <br>";
    } else {
        echo "Что-то пошло не так. Письмо не отправленно";
    }
} 

?>

<script>
    var x, y;
    var x = document.getElementById("check");
    function boom() {
        if (document.getElementById("x1").checked)
        y = document.getElementById("x1").value;
        
        else if (document.getElementById("x2").checked)
        y = document.getElementById("x2").value;

        else 
        y = "kuch nhi";
        x.innerHTML = y;
    }

    var z = document.getElementById('rdio');
    z.addEventListener("click", boom);

</script>

<script>
    var x2, y2;
    var x2 = document.getElementById("check2");
    function boom2() {
        if (document.getElementById("x11").checked)
        y2 = document.getElementById("x11").value;
        
        else if (document.getElementById("x22").checked)
        y2 = document.getElementById("x22").value;

        else 
        y2 = "kuch nhi";
        x2.innerHTML = y2;
    }

    var z2 = document.getElementById('rdio2');
    z2.addEventListener("click2", boom2);

</script>

<script type="text/javascript">
    function showDiv(select){
        if(select.value==1){
            document.getElementById('hidden_div').style.display = "none";
            document.getElementById('hidden_div2').style.display = "block";
        } else{
            document.getElementById('hidden_div').style.display = "block";
            document.getElementById('hidden_div2').style.display = "none";
        }
    } 
</script>

<!--Выбор формы в select-->
<select id="test" name="form_select" onchange="showDiv(this)">
    <option value="" disabled selected>Выберите тип заявки</option>
    <option value="0">Копия трудовой книжки</option>
    <option value="1">Справка с места работы</option>
</select>

<!--Первая форма-->
<div id="hidden_div" style="display:none;">
<form action="index.php" method="post" >

    <label>Укажите кол-во копий</label><br>
    <input type="text" name="copyCount" placeholder="Кол-во копий"><br>

    <label>Заверенную/Незаверенную</label><br>
    <input type="radio" id="x1" name="certified" checked="checked" value="Да">Да
    <input type="radio" id="x2" name="certified" checked="checked" value="Нет">Нет<br>

    <label>Все страницы/Только заполненные страницы</label><br>
    <input type="radio" id="x11" name="allPages" checked="checked" value="Да">Да
    <input type="radio" id="x22" name="allPages" checked="checked" value="Нет">Нет<br>
      
    <textarea name="message1" id="" cols="30" rows="10" placeholder="Коментарий"></textarea><br>
    <input type="submit" value="Отправить заявку">
</form>
</div>

<!--Вторая форма-->
<div id="hidden_div2" style="display:none;">
<form action="index.php" method="post" >

    <label>Укажите кол-во копий</label><br>
    <input type="text" name="copyCount2" placeholder="Ваш Email"><br>

    <label>Заверенную/Незаверенную</label><br>
    <input type="radio" id="x1" name="certified2" checked="checked" value="Да">Да
    <input type="radio" id="x2" name="certified2" checked="checked" value="Нет">Нет<br>

    <label>Указать мою должность</label><br>
    <input type="radio" id="x11" name="position" checked="checked" value="Да">Да
    <input type="radio" id="x22" name="position" checked="checked" value="Нет">Нет<br>

    <label>Указать структурное подразделение</label><br>
    <input type="radio" id="x11" name="organunit" checked="checked" value="Да">Да
    <input type="radio" id="x22" name="organunit" checked="checked" value="Нет">Нет<br>

    <label>Указать мою заработную плату</label><br>
    <input type="radio" id="x11" name="salary" checked="checked" value="Да">Да
    <input type="radio" id="x22" name="salary" checked="checked" value="Нет">Нет<br>

    <label>Указать нахождение в отпуске</label><br>
    <input type="radio" id="x11" name="vacation" checked="checked" value="Да">Да
    <input type="radio" id="x22" name="vacation" checked="checked" value="Нет">Нет<br>
      
    <textarea name="message2" id="" cols="30" rows="10" placeholder="Коментарий"></textarea><br>
    <input type="submit" value="Отправить заявку">
</form>
</div>
