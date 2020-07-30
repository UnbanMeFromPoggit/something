<?php

namespace something;

use pocketmine\PluginBase;

class Main extends PluginBase{

    public function onEnable(): void{
        $this->getLogger()->notice("Hello world");
    }
}
