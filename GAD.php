<?php

namespace GAD;//我就是这么吊，，，

use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerMoveEvent;

use pocketmine\item\Item;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\inventory\Inventory;
use pocketmine\utils\Config;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
//哈哈哈哈哈哈哈。。小学生走开
class GAD extends PluginBase implements Listener{
public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this,$this);
$this->getLogger()->info("插件已加载哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈");
$this->saveDefaultConfig();
        $this->reloadConfig();
}
//我是PocketMine-GAD!
public function onDisable(){
$this->getLogger()->info("插件加载失败  我擦");
 }
public function onJoin(PlayerJoinEvent $event){
$player=$event->getPlayer();
$name=$player->getName();
$player->sendMessage("§e§lWelcome to §a§lGAD §e§lServer!");
}
public function onMove(PlayerMoveEvent $m){
$player=$m->getPlayer();
$name=$player->getName();
$world=$player->getLevel()->getName();
$item=$player->getItemInHand();
$id=$item->getName();
$GAD=$item->getcount();
$player->sendTip("§6§lID:§c§l $name §e§ltake§b§l:$id.§f§l(Count:$GAD) §a§lworld:§e§l $world" );
}
public function onRespawn(PlayerRespawnEvent $r){
$con=$this->getConfig();
$talk=$con->get("say");
$player=$r->getPlayer();
$player->sendMessage("$talk");
} 
//       
//
//          方块放置
public function onBlockPlace( BlockPlaceEvent $bo){
$player=$bo->getPlayer();
$item=$bo->getBlock();
$fk=$item->getName();//方块变量
$player->sendMessage("§a§lYou placed a§e§l". $fk ."§a§lthere!");
}
}



