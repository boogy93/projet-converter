
<form>
    Celsius: <input type="number" name="cel">
    <input type="submit" value="Convert Celsius to Fahrenheit">
    <?php
    if (isset($fahMsg)) {
        echo $fahMsg;
    }
    ?>
</form>
<br>
<form>

    Fahrenheit: <input type="number" name="fah">
    <input type="submit" value="Convert Fahrenheit to Celsius">
    <?php
    if (isset($celMsg)) {
        echo $celMsg;
    }
    ?>
</form>