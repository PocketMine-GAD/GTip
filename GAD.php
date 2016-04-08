<?php

namespace GAD;

use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerMoveEvent;

use pocketmine\item\Item;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\Server;
use sutip\CallbackTask;
use onebone\economyapi\EconomyAPI;
use pocketmine\level\Level; 
use pocketmine\inventory\Inventory;
use pocketmine\utils\Config;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
//哈哈哈哈哈哈哈。。小学生走开
class GAD extends PluginBase implements Listener{
public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this,$this);
$this->getLogger()->info("插件已加载");
}

public function onDisable(){
$this->getLogger()->info("插件加载失败  我擦");
 }
public function onJoin(PlayerJoinEvent $event){
$player=$event->getPlayer();
$name=$player->getName();
$player->sendMessage("欢迎来到GAD的服务器");
}
}

 
