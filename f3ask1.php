<html>
<?php
$page_title = "Φυλλάδιο 3 - Άσκηση 1";
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
                    <label for="name">Σχολείο:</label>
                    <input type="text" name="school" required />
                </p>
                <br>
                <p class="input_group">
                    <label for="email">Email: </label><input type="email" name="email" required />
                </p>
                <p><input type="submit" value="Submit" /></p>
            </form>

            <?php
      if (isset($_POST['school'])) {
        if (isset($_POST['school'])) {
          if (
            strlen($_POST['school']) >
            3
          ) {
            create_notification("info", 'Σχολείο: ' . make_it_safe('school') . "<br />Email: " . make_it_safe('email') . "</div>");
          } else create_notification("error", "<strong>Error:</strong>Το όνομα του Σχολείου πρέπει να είναι μεγαλύτερο από 3 χαρακτήρες!");
        }
      } ?>
            <p>Source Code:</p>
            <pre class="prettyprint linenums">
&lt;html>
 &lt;body> 
      &lt;form method="POST">
   &lt;p class="input_group">
      &lt;label for="name">Σχολείο:&lt;/label>
      &lt;input type="text" name="school" required />
   &lt;/p>
   &lt;br>
   &lt;p class="input_group">
      &lt;label for="email">Email: &lt;/label
         >&lt;input type="email" name="email" required />
   &lt;/p>
   &lt;p>&lt;input type="submit" value="Submit" />&lt;/p>
&lt;/form>
    &lt;?php
if (isset($_POST['school'])) {if (isset($_POST['school'])) {
    if (strlen($_POST['school']) >
    3) { echo '&lt;div class="results">Σχολείο: ' . $_POST['school'] . "&lt;br />"; if
    (isset($_POST['email'])) echo "Email: " . $_POST['email'] . "&lt;/results>"; } else echo '
    &lt;p class="error" tabindex="0">
      &lt;strong>Error:&lt;/strong>Το όνομα
      του Σχολείου πρέπει να είναι μεγαλύτερο από 3 χαρακτήρες!&lt;br />
    &lt;/p>
    '; }} ?>
  &lt;/body>
&lt;/html>
</pre>
        </main>
    </section>
    <?php
  include("footer.php"); ?>
</body>

</html>