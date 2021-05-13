<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/form.css">
    </head>
    <body>
        <header>
            <nav>
                <ul class="nav_list">
                    <li><a href="index.php">User list</a></li>
                    <li><a href="#">Add user</a></li>
                </ul>
            <nav>
        </header>
        <main>
            <div class="tittle">
                <h1>Create a user</h1>
            </div>
            <form action="connect.php" method="post">
            <div>
                <label for="f_name">First name:</label>
                <input type="text" name="f_name" id="f_name">
            </div>
            <div>
                <label for="l_name">Last name:</label>
                <input type="text" name="l_name" id="l_name">
            </div>
            <div>
                <label for="u_age">Age:</label>
                <input type="number" name="u_age" id="u_age">
            </div>
            <div>
                <label for="u_opc">occupation</label>
                <input type="text" name="u_opc" id="u_opc">
            </div>
                <input type="submit" name="" id="Submit">
            </form>
        </main>
    </body>
</html> 