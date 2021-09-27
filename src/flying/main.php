<?php

namespace flying;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

class main extends PluginBase{
    public function onEnable(){
        $this->getLogger()->info("Plugin enabled");
    }
    public function onLoad(){
        $this->getLogger()->info("Plugin loading");
    }
    public function onDisable(){
    $this->getLogger()->info("Plugin disabled");
    }
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool{
        if(!$sender instanceof Player) return false;
        switch (strtolower($cmd->getName())){
            case "fly":
                if((!$sender->isFlying()) || (!$sender->getAllowFlight())){

                    $sender->sendMessage("§2Fly mode Enabled");
                    $sender->setFlying(true);
                    $sender->setAllowFlight(true);
}
                else {
                    $sender->sendMessage("§cFly mode Disabled");
                    $sender->setFlying(false);
                    $sender->setAllowFlight(false);

                }
        }
        return false;
    }
//todo MAKE IT RAIN BONE MEAL ON YOU WHILE FLYING and also make them actually fly

}