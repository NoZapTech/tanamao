<?php

function saudacao( $apelido = '' ) {
    date_default_timezone_set('America/Sao_Paulo');
    $hora = date('H');
    if( $hora >= 6 && $hora <= 12 )
        return 'Bom dia' . (empty($apelido) ? '' : ', ' . $apelido);
    else if ( $hora > 12 && $hora <=17  )
        return 'Boa tarde' . (empty($apelido) ? '' : ', ' . $apelido);
    else
        return 'Boa noite' . (empty($apelido) ? '' : ', ' . $apelido);
}
