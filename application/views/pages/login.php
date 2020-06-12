<?php

    if (isset($_SESSION['user'])):

        header('Location: '.base_url('profile'));

    else: ?>

<div class="tabs">
    <div class="tab active" id="login_btn" data-active="true">Увійти</div>
    <div class="tab" id="register_btn">Зареєструватися</div>
</div>
<div class="form">
    <div class="login">
        <form method="post" action="<?= base_url('index.php/authorize') ?>">
            <div id="login_error_message">
                
            </div>
            <label>
                Login:
                <input type="text" id="loginLogin" name="login" required />
            </label>
            <label>
                Password:
                <input type="password" id="loginPass" name="pass" required />
            </label>
            <input class="submit_btn" id="loginSubmit" type="submit" value="Увійти" />
        </form>
    </div>
    <div class="register">
        <form method="post" action="<?= base_url('index.php/authorize/register') ?>">
            <div id="register_error_message">
                
            </div>
            <label>
                Login:
                <input type="text" id="registerLogin" name="login" required />
            </label>
            <label>
                Password:
                <input type="password" id="registerPass" name="pass" required />
            </label>
            <label>
                Repeat password:
                <input type="password" id="registerPassConfirmation" name="passConfirmation" />
            </label>
            <input class="submit_btn" id="registerSubmit" type="submit" value="Зареєструватися" />
        </form>
    </div>
</div>
<script type='module' src='<?=base_url('public/scripts/login.js')?>'></script>
    
<?php endif; ?>