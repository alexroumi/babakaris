<html>
<?php $page_title = "Φυλλάδιο 2 - Άσκηση 2";
include("utils.php");
include("header.php");
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
                    <label for="surname">Επώνυμο:</label>
                    <input type="text" name="surname" required />
                </p>
                <br>
                <p class="input_group">
                    <label for="name">Όνομα: </label><input type="text" name="name" required />
                </p>
                <br>
                <p class="input_group">
                    <label for="salary">Μισθός: </label><input type="number" name="salary" required />
                </p>
                <p><input type="submit" value="Submit" /></p>
            </form>
            <?php
            if (isset($_POST['surname'])) {
                create_notification("info", 'Επώνυμο: ' . make_it_safe('surname') . "<br />Όνομα: " . make_it_safe('name') . "<br />Μισθός (με κρατήσεις): " . strval(make_it_safe('salary') - make_it_safe('salary') * 0.1) . "</div>");
            }  ?>
            <p>Source Code:</p>
            <pre class="prettyprint linenums">
&lt;html>
 &lt;body> 
      &lt;form method="POST">
   &lt;p class="input_group">
      &lt;label for="surname">Επώνυμο:&lt;/label>
      &lt;input type="text" name="surname" required />
   &lt;/p>
   &lt;br>
   &lt;p class="input_group">
      &lt;label for="name">Όνομα: &lt;/label
         >&lt;input type="text" name="name" required />
   &lt;/p>
   &lt;br>
   &lt;p class="input_group">
      &lt;label for="salary">Μισθός: &lt;/label
         >&lt;input type="number" name="salary" required />
   &lt;/p>
   &lt;p>&lt;input type="submit" value="Submit" />&lt;/p>
&lt;/form>
     &lt;?php
if (isset($_POST['surname'])) {echo '&lt;div class="results">Επώνυμο: ' . $_POST['surname'] . "&lt;br />";
     echo "Όνομα: " . $_POST['name'] . "&lt;br />Μισθός (με κρατήσεις): " . strval($_POST['salary']-$_POST['salary']*0.1) . "&lt;/results>";}  ?>
  &lt;/body>
&lt;/html>
</pre>
        </main>
    </section>
    <?php include("footer.php"); ?>
</body>

</html>