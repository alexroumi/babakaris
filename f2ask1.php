<html>
<?php $page_title = "Φυλλάδιο 2 - Άσκηση 1";
include("utils.php");
include("./header.php");
?>

<body>
    <section>
        <header>
            <div class="header">
                <p><?php echo $page_title; ?></p>
            </div>
        </header>
        <div class="notification-area">
            <?php if (is_mobile()) {
                create_notification('warn', "Για καλύτερη εμπειρία χρησιμοποιήστε υπολογιστή");
            } ?>
        </div>
        <main>
            <form method="POST">
                <p class="input_group">
                    <label for="num1">Αριθμός 1:</label>
                    <input type="number" name="num1" required />
                </p>
                <br>
                <p class="input_group">
                    <label for="num2">Αριθμός 2: </label><input type="number" name="num2" required />
                </p>
                <p><input type="submit" value="Submit" /></p>
            </form>
            <?php
            if (isset($_POST['num1'])) create_notification("info", 'Αριθμός 1: ' . make_it_safe('num1') . "<br />Αριθμός 2: " . make_it_safe('num2') . "<br />Σύνολο: " . strval(make_it_safe('num1') + make_it_safe('num2')) . "</div>");
            ?>
            <p>Source Code:</p>
            <pre class="prettyprint linenums">
&lt;html>
 &lt;body> 
      &lt;form method="POST">
        &lt;p class="input_group">
          &lt;label for="num1">Αριθμός 1:</label>
          &lt;input type="number" name="num1" required />
        &lt;/p>
        &lt;br>
          &lt;p class="input_group">
          &lt;label for="num2">Αριθμός 2: </label
          >&lt;input type="number" name="num2" required />
        &lt;/p>
        &lt;p>&lt;input type="submit" value="Submit" /></p>
      &lt;/form>
      &lt;?php
if (isset($_POST['num1']))
    echo '&lt;div class="results">Αριθμός 1: ' . $_POST['num1'] . "&lt;br />";
if (isset($_POST['num2']))
    echo "Αριθμός 2: " . $_POST['num2'] . "&lt;br />Σύνολο: " . strval($_POST['num1'] + $_POST['num2']) . "&lt;/div>";
?>
  &lt;/body>
&lt;/html>
</pre>
        </main>
    </section>
    <?php include("./footer.php"); ?>
</body>

</html>