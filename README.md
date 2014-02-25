Hi!

this is my smarty function, that helped me when mixing codeigniter, smarty and hmvc


Installation

Put the file, function.can.php, in Smarty plugins folder.

Ex.: Smarty/3.1.16/libs/plugins/



Usage

{if {can do=access on=Reports}}
	Something here
{/if}

when

    do - is the action in the resource

    on - the controller is trying to catch


Thanks,
 Breno Costa
 breeno.costa[at]gmail.com
 @bcfreakdev
 http://bc.freakdev.org/
