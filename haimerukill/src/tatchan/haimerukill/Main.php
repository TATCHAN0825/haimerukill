<?php

declare(strict_types=1);

namespace tatchan\haimerukill;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
class Main extends PluginBase implements Listener
{

	public function onEnable(): void
	{
		$this->getLogger()->info("とりあえずメルを殺します");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onRespawn(PlayerRespawnEvent $event)
	{
		$player = $event->getPlayer();
		$name = $player->getName();
		if ($name == "sqmeru" || $name == "yurisi"　|| $name == "Nemuke47") {
			$player->kill();
		}
	}

	public function onJoin(PlayerJoinEvent $event)//めるさんは関数onJoinを二個作ったらしいですｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗ
	{
		$player = $event->getPlayer();
		$name = $player->getName();
		if ($name == "sqmeru" || $name == "yurisi"　|| $name == "Nemuke47") {
			$player->kill();
		}
	}
}
