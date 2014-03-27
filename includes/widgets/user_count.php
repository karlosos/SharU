<div class="aside">
    <h2 class="widget">Users</h2>
    <form action="login.php" method="post">
        <?php
        $user_count = user_count();
        $suffix = ($user_count != 1) ? 's' : '';
        ?>
        We current have <?php echo $user_count; ?> registered user<?php echo $suffix ?>.
    </form>
</div>