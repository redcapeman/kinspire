<? 
echo $tree->generate($stuff, array('type' => 'ol', 'element' => 'tree')); 
?>
<div id="toolbar">
	<ul>
		<li><div align="center"><?php echo $html->link('New Folder', array('action'=>'add'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
	</ul>
</div>
