<?php

namespace pocketmine\network\protocol;

class BossEventPacket extends DataPacket{
    const NETWORK_ID = Info::BOSS_EVENT_PACKET;

    const ADD = 0;
    const UPDATE = 1;
    const REMOVE = 2;

    public $eid;
    public $type;
    public $int2;
    public $int3;
    public $float1;
    public $float2;
    public $short;
    public $string1;
    public $string2;

    public function decode(){
    }

    public function encode(){
        $this->reset();
        $this->putVarInt($this->eid);
        $this->putUnsignedVarInt($this->type);
        
        
        $this->putString($this->string1);
        $this->putLFloat($this->float1);
        $this->putLShort($this->short);
        $this->putUnsignedVarInt($this->int2);
        $this->putUnsignedVarInt($this->int3);
        $this->putLFloat($this->float2);
        $this->putString($this->string2);
    }

}
