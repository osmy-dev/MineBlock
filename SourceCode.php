<?php

namespace osmy\mineblock;

use pocketmine\Server;

use pocketmine\player\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;

use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\event\block\BlockBreakEvent;

class MineBlock extends PluginBase implements Listener {

  

  public $prefix = "§7[§bMineBlock§7] §r";

  

  public function onEnable(): void {

    $this->getLogger()->info("§aPlugin Enabled By OsmyNetwork Development!!!!!!!!!!!");

    $this->getServer()->getPluginManager()->registerEvents($this,$this);

  }

  

  public function onDisable(): void {

    $this->getLogger()->info("Plugin Disabled By OsmyNetwork Development!!!!!!!");

  }

  

  public function onJoin(PlayerJoinEvent $event) {

    $p = $event->getPlayer();

    

    $p->sendMessage($this->prefix . "§aThanks For Download This Plugin");

    $p->sendMessage($this->prefix . "§aThis Plugin Made By OsmyNetwork Development!");

  }

  

  public function onBreak(BlockBreakEvent $event) {

    $b = $event->getBlock();

    $p = $event->getPlayer();

    $m = array("§cNever Gonna Give You Up", "§cBlock: Dont Torch Me!!");

    

    $p->sendMessage($m[array_rand($m)]);

    $event->cancel();

  }

}
