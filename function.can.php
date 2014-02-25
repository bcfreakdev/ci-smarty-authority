<?php

/**
 * usage :
views

{if {can do=access on=Reports}}
some html perhaps...
{/if}
 *
 *
 * @param $params
 * @param $smarty
 * @return bool
 */

function smarty_function_can( $params, $smarty )
{
    if(can($params['do'],$params['on'])){
        return true;
    }else{
        return false;
    }

}

?>