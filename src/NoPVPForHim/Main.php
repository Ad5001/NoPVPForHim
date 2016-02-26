<?php
namespace NoPVPForHim;

/*
                         _______________________________________________________________
                        /                 NoPVPForHim Plugin by Ad5001 !                  \
                        /               This plugin is work in progress!                \
                        /  Feel free to make issues or/and help me correcting bugs :)   \
                        -----------------------------------------------------------------
*/

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\level\Level;
use pocketmine\Player;
use pocketmine\IPlayer;
use pocketmine\server;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\plugin\PluginBase;
   class Main extends PluginBase {
          public function onCommand(CommandSender $sender, Command $command, $label, array $args){
                 switch($command->getName()) {
                         case "canthit":
                          if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /canthit <add|remove> <player>");
                            return true;
                           } else {
							   if($sender->hasPermission("nopvpforhim.command.canthit")){
								   switch($args[0]) {
									   case "add":
									   $player = $this->getServer()->getPlayer($args[1]);
									   if(!$player instanceof Player){
										   $sender->sendMessage("§4§l[Error]§r§4 Player not found");
										   } else {
											   // In creation
                                            }
									    case "remove":
										   $player = $this->getServer()->getPlayer($args[1]);
										   if(!$player instanceof Player){
										   $sender->sendMessage("§4§l[Error]§r§4 Player not found");
										   } else {
											   // In creation
                                            }
                                    }
                                }
						   }
                           return true;
                           break;
                         case "notakedamage":
                          if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /notakedamage <add|remove> <player>");
                            return true;
                           } else {
							   if($sender->hasPermission("nopvpforhim.command.notakedamage")){
								   switch($args[0]) {
									   case "add":
									   $player = $this->getServer()->getPlayer($args[1]);
									   if(!$player instanceof Player){
										   $sender->sendMessage("§4§l[Error]§r§4 Player not found");
										   } else {
											   // In creation
                                            }
									  case "remove":
										   $player = $this->getServer()->getPlayer($args[1]);
									       if(!$player instanceof Player){
										   $sender->sendMessage("§4§l[Error]§r§4 Player not found");
										   } else {
											   // In creation
                                            }
                                    }
                                }
						   }
						   return true;
						   break;
                         case "nopvp":
                           if(count($args) < 2){
                            $sender->sendMessage("§4Usage: /nopvp <add|remove> <player>");
                            return true;
                           } else {
							   if($sender->hasPermission("nopvpforhim.command.nopvp")){
								   switch($args[0]) {
									   case "add":
									   $player = $this->getServer()->getPlayer($args[1]);
									   if(!$player instanceof Player){
										   $sender->sendMessage("§4§l[Error]§r§4 Player not found");
										   } else {
											   // In creation
                                            }
										case "remove":
										   $player = $this->getServer()->getPlayer($args[1]);
									   if(!$player instanceof Player){
										   $sender->sendMessage("§4§l[Error]§r§4 Player not found");
										   } else {
											   // In creation
                                            }
                                    }
                                }
						   }
                           return true;
                           break;
		 	                            }
						}
   public function onHit(EntityDamageEvent $ev) {
    if($event instanceof EntityDamageByEntityEvent) {
      $player = $ev->getEntity();
	  $playername = $player->getName();
      $hiter = $ev->getDamager();
	  $hitername = $hiter->getName();
      if($playername == $notakedamageplayers[$player] ) {
        if($player instanceof Player) {
          $ev->setCancelled(true);
          $hiter->sendMessage("§4You can't hit that player");
        }
      } elseif($hitername === $canthit[$player] ) {
		  if($hiter instanceof Player) {
			  $ev->setCancelled(true);
			  $hiter->sendMessage("§4You are not able to hit anyone");
	  }
    }
  }
					  }
                    public function onEnable() {
                 $this->getLogger()->info("NoPVPForHim has been enable!");
          }
   }
?>
