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
		$this->getLogger()->info("このプラグインは完全ネタです。入れないことをオススメします。");
		$this->getLogger()->info("死亡ログ荒らしにもなりサーバーの印象が低下する可能性もあります。");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onRespawn(PlayerRespawnEvent $event)
	{
		$player = $event->getPlayer();
		$name = $player->getName();
		if ($name == "sqmeru" || $name == "yurisi"　|| $name == "Nemuke47"　|| $name == "syoooooooooyu") {
			$player->kill();
		}
	}

	public function onJoin(PlayerJoinEvent $event)//めるさんは関数onJoinを二個作ったらしいですｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗｗ
	{
		$player = $event->getPlayer();
		$name = $player->getName();
		if ($name == "sqmeru" || $name == "yurisi"　|| $name == "Nemuke47"　|| $name == "syoooooooooyu") {
			$player->kill();
		}
	}//Q.関数2つ使うなって誰が決めた？A.https://qiita.com/yasumodev/items/cf3da2a2f5547358e780
}
