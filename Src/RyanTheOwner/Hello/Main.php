<?php

namespace RyanTheOwner\Hello;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
/** A plugin made by RyanTheOwner w/ the help of Raccoon Undercover. I am a developer in progress and hope to proceed greatly.
*/
class Loader extends PluginBase implements Listener{

    public function onLoad() {
        $this->getLogger()->info("Plugin is being enabled. Please wait..");
    }
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("Plugin has been enabled succesfully. Looking for errors. (If no errors found, then you should be fine.");
    }
    public function onDisable() {
        $this->getLogger()->info("Plugin has been disabled. Did the server stop?");
    }

    public function onPlayerJoinEvent(PlayerJoinEvent $event){
        $player = $event->getPlayer();
        $player->sendMessage("Hello!");
    }
}
