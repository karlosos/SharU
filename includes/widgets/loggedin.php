<div class="aside">
    <h2 class="widget">Hello, <?php echo $user_data['first_name']; ?>!</h2>
    <form action="login.php" method="post">
        <ul>
            <li> <a href="logout.php">Logout</a> </li>
            <li> <a href="changepassword.php">Change password</a></li>
        </ul>
    </form>
</div>