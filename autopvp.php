<?php

namespace MCPEGamerJP\autopvp

use pocketmine\plugin\pluginbase;

class autopvp extends pluginbase{

      public function onEnable(){
            $this->getLogger()->info("test");
           }


      public function onDisable(){
            $this->getLogger()->info("test");
           }
           
 }
 
 foreach(Server::getInstance()->getOnlinePlayers() as $player){
    $this->playerList[$player->getName()] = $this->getPlayerData($player); //what am I doing xD
}
