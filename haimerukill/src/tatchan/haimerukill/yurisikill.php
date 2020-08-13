<?php
declare(strict_types=1);

namespace sqmeru\haimerukill;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\plugin\PLuginBase;
use pocketmine\event\Listener;

class yurisikill extends PLuginBase implements Listener
{
    public function onEnable(): void{
        $this->getLogger()->info("腹立つんでとりあえずゆりしーを殺します");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onRespawn(PlayerRespawnEvent $event){
        $r = rand(0, 1);
        if($r == 0){
            $player = $event->getPlayer();
            $name = $player->getName();
            if($name == "yurisi"){
                $player->kill();
            }
        }
    }

    public function onJoin(PlayerJoinEvent $event){
        $r = rand(0, 1);
        if($r == 0){
            $player = $event->getPlayer();
            $name = $player->getName();
            if($name === "yurisi"){
                $player->kill();
            }
        }
    }
}
