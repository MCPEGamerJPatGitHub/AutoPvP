<?php

namespace MCPEGamerJP\autopvp

use pocketmine\plugin/pluginbase;

class autopvp extends pluginbase{

      public function onEnable(){
           }


      public function onDisable(){
           }
           
 }
 
 foreach(Server::getInstance()->getOnlinePlayers() as $player){
    $this->playerList[$player->getName()] = $this->getPlayerData($player);
}
