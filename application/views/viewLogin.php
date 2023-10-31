<h2>LOGIN CUY</h2>

<form action="<?php echo site_url('LoginDURCOK/loginVerification')?>" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="Username" required>
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="Password" required>
    <br>

    <?php
    // Periksa apakah ada flashdata error yang telah diatur
    if ($this->session->flashdata('error')) {
        echo '<div class="error-message">' . $this->session->flashdata('error') . '</div>';
    }
    ?>
    
    <input type="submit" value="Login">
</form>