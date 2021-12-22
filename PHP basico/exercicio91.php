<?php

abstract class Carro {
    protected int $discount = 0;
    protected bool $is4x4;
    protected bool $ret;
    protected bool $esportivo;

    public function desconto(): int {
        return $this->discount;
    }
}

class BWM extends Carro {
    public function __construct(bool $is4x4 = false, bool $ret = false, bool $esportivo = false) {
        if ($is4x4) $this->discount+= 5;
        if ($ret) $this->discount+= 7;
        if ($esportivo) $this->discount+= 9;
    }
}

class Mercedes extends Carro {
    public function __construct(bool $is4x4 = false, bool $ret = false, bool $esportivo = false) {
        if ($is4x4) $this->discount+= 10;
        if ($ret) $this->discount+= 18;
        if ($esportivo) $this->discount+= 19;
    }
}

class Uno extends Carro {
    public function __construct(bool $is4x4 = false, bool $esportivo = false) {
        if ($is4x4) $this->discount+= 10;
        if ($esportivo) $this->discount+= 15;
    }
}

function geradorDeCupom(Carro $car): string {
    return "Cupom {$car->desconto()}% off para passar no pedágio<br>";
}


echo geradorDeCupom(new BWM(true, false, true));
echo geradorDeCupom(new Mercedes(false, true, false));
echo geradorDeCupom(new Uno(true, false));

?>
