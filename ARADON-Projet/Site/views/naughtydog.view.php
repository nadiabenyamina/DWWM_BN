<?php ob_start() ?>

<div class="ng">
    <p class="story">
        Established in 1984, Naughty Dog is one of the most successful and prolific game development studios in the world and a flagship 
        first-party studio within PlayStation Studios. From creating the iconic Crash Bandicoot and Jak and Daxter series to modern franchises 
        like Uncharted and The Last of Us, Naughty Dog is responsible for some of the most critically acclaimed and commercially successful 
        games on Sony's PlayStation platforms. Through its use of cutting-edge technology and evocative, character-driven storytelling, 
        Naughty Dog has received hundreds of industry and media awards, while developing a passionate fan base of millions of players around 
        the globe.

        Naughty Dog's recent releases include 2016's Uncharted 4: A Thief's End, winner of numerous Game of the Year awards, 
        and 2017's Uncharted: The Lost Legacy—a new standalone adventure in the Uncharted series. By December 2017, total global sales 
        for the Uncharted franchise surpassed 41.7 million copies sold.

        Naughty Dog's latest title is The Last of Us Part II, the much-anticipated sequel to 2013's The Last of Us, which is available now 
        for PlayStation 4.

        Naughty Dog is a wholly-owned subsidiary of Sony Interactive Entertainment located in Santa Monica, California. 
        For more information, follow us on Twitter, Facebook, or Instagram.
    </p>
    <img src="images/ng-full.png" alt="">
</div>

<?php
$content = ob_get_clean();
require "template.php";
?>