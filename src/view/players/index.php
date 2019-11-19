<ul class="players__list">
<?php
  foreach($players as $player){
    ?>
    <li class='player'>
        <img src="<?php echo str_replace("/4/","/10/",$player["Photo"]);?>" alt="Profile picture <?php echo $player["Name"];?>" class="player__pic">
        <span class='player__name'><?php echo $player["Name"];?></span>
        <span class='player__stat'><?php echo $player["Age"];?>, <?php echo $player["Nationality"];?></span>
        <span class='player__info'><?php echo $player["Club"];?></span>
        <span class='player__more'>more</span>
    </li>
    <?php
  }
?>
</ul>
