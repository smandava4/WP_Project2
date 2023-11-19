<?php if (isset($player_being_configured)) : ?>
    <div class="player-info">
        <h2 id="scores">
            <?php
            if (isset($players)) {
                echo $players[$player_being_configured - 1]["score"];
            } ?>
        </h2>

        <div class="user-icon-wrapper">
            <img id="user-icon" src="./images/user-regular.svg" alt="User Icon">
        </div>

        <h1 id="names">
            <?php
            if (isset($players)) {
                echo $players[$player_being_configured - 1]["name"];
            } ?>
        </h1>


        <audio id="dice-sound" src="sounds/dicerollsound.mp3" preload="auto" autoplay="false"></audio>


        <input type="submit" name="user_guess" id="user_guess" <?php if ($player_turn != $player_being_configured) : ?> disabled <?php endif ?> value="ROLL" onclick="document.getElementById('dice-sound').autoplay = true" ;>


    </div>
<?php endif ?>