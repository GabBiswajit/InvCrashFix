<?php

declare(strict_types=1);

namespace muqsit\invcrashfix;

use muqsit\simplepackethandler\SimplePacketHandler;
use pocketmine\network\mcpe\NetworkSession;
use pocketmine\network\mcpe\protocol\ContainerClosePacket;
use pocketmine\plugin\PluginBase;

final class Loader extends PluginBase{

	public function onEnable() : void{
		$this->getLogger()->info("This Plugin Don't Need!");
}
