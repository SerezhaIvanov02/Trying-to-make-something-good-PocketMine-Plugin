<?php

namespace SIvanov;

class Something extends PluginBase implements Listener{

  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this); //GIVE SOME IDEAS FOR PLUGIN
  }

}
