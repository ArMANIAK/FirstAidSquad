</header>
<nav>
    <img src="<?=base_url('public/img/general/TCHKHU.png')?>" alt='Логотип Товариства Червоного Хреста України' />
    <ul>
        <li><a href="http://redcross.org.ua" target="_blank">Товариство Червоного Хреста України</a></li>
        <li><a href="https://forms.office.com/Pages/ResponsePage.aspx?id=3mXHzJAJ1EmoDylOKKH5IzVmTTZIlmtCvrHFDQ5dqWBUNVBOTzNGSlVJQVFQTU1OWFdFQVZQUjhQUy4u" target="_blank">Зареєструватися на тренінг</a></li>
        <li><a id="startGame" href="<?=base_url('index.php/quiz/solomode')?>">Перевірити знання</a></li>

        <?php if (isset($_SESSION['user'])): ?>
        <li><a id="startMPGame" href="<?=base_url('index.php/quiz/multiplayer')?>">Грати з іншими</a></li>
        <li><a href="<?=base_url('index.php/user')?>">Мій профіль</a></li>
        <?php else: ?>
        <li><a href="<?=base_url('index.php/authorize')?>">Увійти/зареєструватися</a></li>
        <?php endif; ?>
    </ul>
</nav>
<main>