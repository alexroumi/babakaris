<html>
<?php
$page_title = "Σχεδιασμός και Ανάπτυξη Διαδικτυακών Εφαρμογών - 2021-2022 - ΓΠΛ1";
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
        <!-- notification area start -->
        <div class="notification-area">
            <?php
            // create_notification("info", "Αυτή η σελίδα είναι υπό κατασκευή και δεν είναι διαθέσιμη ακόμα.");
            // create_notification("error", "Αυτή η σελίδα είναι υπό κατασκευή και δεν είναι διαθέσιμη ακόμα.");
            // create_notification("warn", "Αυτή η σελίδα είναι υπό κατασκευή και δεν είναι διαθέσιμη ακόμα.");
            ?>
            <!-- <div class="results notification"><span class="material-icons">
                    info
                </span>ahsdjlahdjakshkjh</div>
            <div class="error notification"> <span class="material-icons"> error
                </span><strong>Error:</strong>Το όνομα
                του
                Σχολείου πρέπει να είναι μεγαλύτερο από 3 χαρακτήρες!<br /></div> -->
        </div>
        <!-- notification area end -->

        <div class="container">
            <aside>
                <ul>
                    <li>Φυλλάδιο 2:</li>
                    <ul>
                        <li><a href="f2ask1.php" target="_blank">Άσκηση 1</a></li>
                        <li><a href="f2ask2.php" target="_blank">Άσκηση 2</a></li>
                    </ul>
                    <li>Φυλλάδιο 3:</li>
                    <ul>
                        <li><a href="f3ask1.php" target="_blank">Άσκηση 1</a></li>
                    </ul>
                </ul>
            </aside>
            <main>
                Εδώ θα βρείτε όλες τις ασκήσεις από τα Φυλλάδια που έχουμε κάνει στο μάθημα "Σχεδιασμός και Ανάπτυξη
                Διαδικτυακών Εφαρμογών" όπου διδάσκεται η γλώσσα <strong>PHP</strong> με τους καθηγητές
                <strong>Βαμβακάρη
                    Μιχαήλ</strong> και <strong>Λήδα Καρακίτσου</strong>
            </main>
        </div>
    </section>
    <?php include("footer.php"); ?>
</body>

</html>