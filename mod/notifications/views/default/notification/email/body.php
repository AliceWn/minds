<!-- BODY -->
<table width="600" align="center" style="background:#FFFFFF; border-left:1px solid #CCC; border-right:1px solid #CCC; padding:16px 16px 0;">  
			<?php 
				echo elgg_view('notification/email/interval/'.$vars['entity']->subscription, $vars); 
			?>
</table><!-- END BODY -->
