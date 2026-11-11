<?php
declare(strict_types=1);
function additioner(float $a,float $b):float
{
return $a+$b;

}

function soustrict(float $a,float $b):float
{
return $a-$b;

}
function multi(float $a,float $b):float
{
return $a*$b;

}
function div(float $a,float $b):float
{
    if ($b!==null)
return $a/$b;

}
echo additioner(5.2,7.3);
echo soustrict(4.4,3.3);
echo multi(3,0);
echo div(3,4);
