<section id="greetings">
    <h2>Вітаю! Ти набрав: <?php echo $playerScore ?> із <?php echo $maxScore ?> балів.</h2>
    <p id="evaluation">
        <?php 
        if ($playerScore > $maxScore * 2 / 3) {
                echo 'На більшість питань ти відповів правильно. Тож ти знаєш, як надавати першу допомогу. Але нехай твої знання залишаться виключно теоретичними';
            }
            else if ($playerScore > $maxScore / 3) {
                echo 'В деяких ситуаціях ти зможеш надати першу допомогу. Але, щоб бути більш впевненим в своїх діях, ми радимо пройти тренінг з Першої допомоги. Реєструйся за посиланням вище.';
            }
            else echo 'Навички надання першої допомоги вкрай важливі в нашому житті. Щоб бути корисним та впевненим в кризовій ситуації, пройди тренінг з Першої допомоги. Реєструйся за посиланням вище.'
        ?>
    </p>
</section>