<?php
/* SVN FILE: $Id: view.ctp 7945 2008-12-19 02:16:01Z gwoo $ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-18 18:16:01 -0800 (Thu, 18 Dec 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<div class="right">
<?php
foreach ($fields as $field) {
	$isKey = false;
	if (!empty($associations['belongsTo'])) {
		foreach ($associations['belongsTo'] as $alias => $details) {
			if ($field === $details['foreignKey']) {
				$isKey = true;
				echo "\t<?php if (\${$singularVar}['{$alias}']['{$details['displayField']}']): ?>\n";
				echo "\t\t<?php echo \$this->element('yboxsmallrighttop'); ?>\n";
				echo "\t\t\t" . Inflector::humanize(Inflector::underscore($alias)) . "\n";
				echo "\t\t<?php echo \$this->element('yboxbottom'); ?>\n";
				echo "\t\t<?php echo \$this->element('cboxsmallrighttop'); ?>\n";
				echo "\t\t\t<?php echo \$html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller'=> '{$details['controller']}', 'action'=>'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n";
				echo "\t\t<?php echo \$this->element('cboxbottom'); ?>\n";
				echo "\t<?php endif; ?>\n";
				break;
			}
		}
	}
}
?>
</div>

<div class="nullbox">
<?php
if (!empty($associations['hasOne'])) :
	foreach ($associations['hasOne'] as $alias => $details): ?>
	<div class="related">
		<?php echo "<?php  __('Related ".Inflector::humanize($details['controller'])."');?>";?>
	<?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])):?>\n";?>
		<dl><?php echo "\t<?php \$i = 0; \$class = ' class=\"altrow\"';?>\n";?>
	<?php
			foreach ($details['fields'] as $field) {
				echo "\t\t<dt<?php if (\$i % 2 == 0) echo \$class;?>><?php __('".Inflector::humanize($field)."');?></dt>\n";
				echo "\t\t<dd<?php if (\$i++ % 2 == 0) echo \$class;?>>\n\t<?php echo \${$singularVar}['{$alias}']['{$field}'];?>\n&nbsp;</dd>\n";
			}
	?>
		</dl>
	<?php echo "<?php endif; ?>\n";?>
		<div class="actions">
			<ul>
				<li><?php echo "<?php echo \$html->link(__('Edit ".Inflector::humanize(Inflector::underscore($alias))."', true), array('controller'=> '{$details['controller']}', 'action'=>'edit', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?></li>\n";?>
			</ul>
		</div>
	</div>
	<?php
	endforeach;
endif;

foreach ($fields as $field) {
	$isKey = false;
	if ($isKey !== true) {
		echo "<?php if (\${$singularVar}['{$modelClass}']['{$field}']): ?>\n";
		echo "\t<?php echo \$this->element('yboxmediumtop'); ?>\n";
		echo "\t\t" . Inflector::humanize($field) . "\n";
		echo "\t<?php echo \$this->element('yboxbottom'); ?>\n";
		echo "\t<?php echo \$this->element('cboxmediumtop'); ?>\n";
		echo "\t\t<?php echo \${$singularVar}['{$modelClass}']['{$field}']; ?>\n";
		echo "\t<?php echo \$this->element('cboxbottom'); ?>\n";
		echo "\t<div class=\"reset\"></div>\n";
		echo "<?php endif; ?>\n";
	}
}
if (empty($associations['hasMany'])) {
	$associations['hasMany'] = array();
}
if (empty($associations['hasAndBelongsToMany'])) {
	$associations['hasAndBelongsToMany'] = array();
}
$relations = array_merge($associations['hasMany'], $associations['hasAndBelongsToMany']);
$i = 0;
foreach ($relations as $alias => $details):
	$otherSingularVar = Inflector::variable($alias);
	$otherPluralHumanName = Inflector::humanize($details['controller']);
	?>
<?php echo "\n<?php if (!empty(\${$singularVar}['{$alias}'])):?>\n";?>
	<br>
	<?php echo "<?php echo \$this->element('yboxtop'); ?>\n"; ?>
	<?php echo "<?php __('Related {$otherPluralHumanName}');?>";?>
	<?php echo "<?php echo \$this->element('yboxbottom'); ?>\n"; ?>
	<?php echo "<?php echo \$this->element('cboxtop'); ?>\n"; ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
<?php
			foreach ($details['fields'] as $field) {
				echo "\t\t<th><?php __('".Inflector::humanize($field)."'); ?></th>\n";
			}
?>
		<th class="actions"><?php echo "<?php __('Actions');?>";?></th>
	</tr>
<?php
echo "\t<?php
		\$i = 0;
		foreach (\${$singularVar}['{$alias}'] as \${$otherSingularVar}):
			\$class = null;
			if (\$i++ % 2 == 0) {
				\$class = ' class=\"altrow\"';
			}
		?>\n";
		echo "\t\t<tr<?php echo \$class;?>>\n";

				foreach ($details['fields'] as $field) {
					echo "\t\t\t<td><?php echo \${$otherSingularVar}['{$field}'];?></td>\n";
				}

				echo "\t\t\t<td class=\"actions\">\n";
				echo "\t\t\t\t<?php echo \$html->link(__('View', true), array('controller'=> '{$details['controller']}', 'action'=>'view', \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
				echo "\t\t\t\t<?php echo \$html->link(__('Edit', true), array('controller'=> '{$details['controller']}', 'action'=>'edit', \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
				echo "\t\t\t\t<?php echo \$html->link(__('Delete', true), array('controller'=> '{$details['controller']}', 'action'=>'delete', \${$otherSingularVar}['{$details['primaryKey']}']), null, sprintf(__('Are you sure you want to delete # %s?', true), \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
				echo "\t\t\t</td>\n";
			echo "\t\t</tr>\n";

echo "\t<?php endforeach; ?>\n";
?>
	</table>
	<div class="actions">
		<ul>
			<li><?php echo "<?php echo \$html->link(__('New ".Inflector::humanize(Inflector::underscore($alias))."', true), array('controller'=> '{$details['controller']}', 'action'=>'add'));?>";?> </li>
		</ul>
	</div>
<?php echo "<?php echo \$this->element('cboxbottom'); ?>\n"; ?>
<?php echo "<?php endif; ?>\n";?>
<?php endforeach;?>
</div>