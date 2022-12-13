<?php
$title = "Login";
$description = "This is the description of the Login page";
require './templates/header.php';
?>

<main class="loginMain">
    <section>
        <div >
            <form method="post" action="registersave.php">
                <h2 class="loginText">Create a new account</h2>
                <input name="firstName" type="text" placeholder="First Name" required/>
                <input name="lastName" type="text" placeholder="Last Name" required />
                <input name="email" type="email" placeholder="Email" required />
                <input name="password" type="password" placeholder="Password" required />
                <input name="confirm" type="password" placeholder="Confirm Password" required />
                <input type="submit" name="submit" value="Create" />
            </form>

        </div>
        <div>
            <h2 class="loginText">Sign In</h2>
            <form method="post" action="validate.php">
                <input name="email" type="email" placeholder="Email" required />
                <input name="password" type="password" placeholder="Password" required />
                <input type="submit" value="Login" />
            </form>
        </div>
    </section>
</main>
<?php
 require './templates/footer.php'
?>