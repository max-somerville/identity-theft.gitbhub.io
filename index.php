<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <nav>
                <ul class="nav_list">
                    <li><a href="#">User list</a></li>
                    <li><a href="form.php">Add user</a></li>
                </ul>
            <nav>
        </header>
        <main>
            <div class="tittle">
                <h1>List of users</h1>
            </div>
            <div class="list">
            <!--THIS IS AN EXAMPLE OF THE DIV CODE!
                <div class="item">
                    <ul>
                        <li>First mame: Max</li>
                        <li>Last name: Somerville</li>
                        <li>Age: 19</li>
                        <li>Occupation: Student</li>
                    </ul>
                </div> 
            -->
                <?php include 'add_user.php'?>
            </div>
        </main>
    </body>
</html> 