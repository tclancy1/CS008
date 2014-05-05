<nav>
    <ul>
        <?php
        if ($path_parts['filename'] == "home") {
            print '<li class="activePage">Home</li>';
        } else {
            print '<li class="heads"><a href="home.php">Home</a></li>';
        }
        if ($path_parts['filename'] == "form") {
            print '<li class="activePage">Order</li>';
        } else {
            print '<li class="tails"><a href="form.php">Order</a></li>';
        }
        if ($path_parts['filename'] == "menu") {
            print '<li class="activePage">Menu</li>';
        } else {
            print '<li class="heads"><a href="menu.php">Menu</a></li>';
        }
        if ($path_parts['filename'] == "pics") {
            print '<li class="activePage">Pics</li>';
        } else {
            print '<li class="tails"><a href="pics.php">Pics</a></li>';
        }
        if ($path_parts['filename'] == "history") {
            print '<li class="activePage">History</li>';
        } else {
            print '<li class="heads"><a href="history.php">History</a></li>';
        }
        if ($path_parts['filename'] == "nutrition") {
            print '<li class="activePage">Nutrition</li>';
        } else {
            print '<li class="tails"><a href="nutrition.php">Nutrition</a></li>';
        }
        ?>
    </ul>
</nav>

