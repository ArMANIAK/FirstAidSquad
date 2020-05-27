<script type='module' src='<?=base_url('public/scripts/solo.js')?>'></script>
<section id="game_field">
    <div class="toggleSound" data-sound="on"></div>

    <img id="question_card" src='<?=base_url('public/img/cards/card-01.png')?>' alt='' />
    <audio id='question_sound' src='' autoplay></audio>
    <div id='justification' tabindex="-1"></div>
    <div id="counters">
        <div id="score">Твій рахунок: 0</div>
        <div id="countdown">Залишилось часу: 90</div>
    </div>
    <div>
        <div id="answers">
            <div id='answer1' tabindex="0"></div>
            <div id='answer2' tabindex="0"></div>
            <div id='answer3' tabindex="0"></div>
            <div id='answer4' tabindex="0"></div>
        </div>
        <div id='confirm'>Дати відповідь</div>
    </div>
</section>