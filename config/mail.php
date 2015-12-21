<?php

return [

'driver' => 'smtp',
'host' => 'smtp.gmail.com',
'port' => 587,
'from' => array('address' => 'email@gmail.com', 'name' => "Remetente"),
'encryption' => 'tls',
'username' => 'ericas.rodriguess@gmail.com',
'password' => 'Kiramenicase13',
'sendmail' => '/usr/sbin/sendmail -bs',
'pretend' => false,

];
