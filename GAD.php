<?php

namespace GAD;//this plugin is very simple!!  :)

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
//You can help me to finish and improve this plugin,because i am a 15 years boy and i am new in pocketmine plugin!!!!!
class GAD extends PluginBase implements Listener{
public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this,$this);
$this->getLogger()->info("##################################");
$this->getLogger()->info("GTip Enable!!");
$this->getLogger()->info(" ########################################");
$this->saveDefaultConfig();
        $this->reloadConfig();
}
//i am PocketMine-GAD!
//Github:@PocketMine-GAD
//twitter:@嚻兏縈飓
//QQ:2296342883
public function onDisable(){
$this->getLogger()->info("################GTip disable!##############");
 }
public function onJoin(PlayerJoinEvent $event){
$player=$event->getPlayer();
$gad=$this->getConfig();
$welcome=$gad->get("welcome");
$name=$player->getName();
$player->sendTip("$name. $welcome");
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
//tomorrow will add handitem!



