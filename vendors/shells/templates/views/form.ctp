<?php
/* SVN FILE: $Id: form.ctp 7945 2008-12-19 02:16:01Z gwoo $ */
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
<?php echo "<?php echo \$form->create('{$modelClass}');?>\n";?>
<?php
		echo "\t<?php\n";
		foreach ($fields as $field) {
			if ($action == 'add' && $field == $primaryKey) {
				continue;
			} elseif (!in_array($field, array('created', 'modified', 'updated', 'id'))) {
				echo "echo \$this->element('cboxtop');\n";
				echo "\t\techo \$form->input('{$field}', array('class'=>'form', 'label'=>null));\n";
				echo "echo \$this->element('cboxbottom');\n";
			}
		}
		if (!empty($associations['hasAndBelongsToMany'])) {
			foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
				echo "echo \$this->element('cboxtop');\n";
				echo "\t\techo \$form->input('{$assocName}', array('class'=>'form', 'label'=>null, 'multiple'=>'checkbox'));\n";
				echo "echo \$this->element('cboxbottom');\n";
			}
		}
		echo "\t?>\n";
?>
<?php
	echo "<?php echo \$form->end('Submit');?>\n";
?>
