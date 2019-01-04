<?php
namespace RyanTheOwner\Hello;

use pocketmine\Player;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
/** A plugin made by RyanTheOwner w/ the help of Raccoon Undercover. I am a developer in progress and hope to proceed greatly.
*/
class Main implements Listener{

  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
 
   public function _construct(Player $player, PlayerJoinEvent $event){
     $this->player = $player;
     $this->playerJoinEvent = $event;
   }
   
   public function onPlayerJoinEvent(){
     $player->$event;
     $player->sendMessage("Hello!");
   }
}
