&laquo;<span id="cfsFormEditableLabelShell" title="<?php _e('Click to Edit', CFS_LANG_CODE)?>">
	<span id="cfsFormEditableLabel"><?php echo $this->form['label']?></span>
	<?php echo htmlCfs::text('form_label', array(
		'attrs' => 'id="cfsFormEditableLabelTxt"'
	))?>
	<i id="cfsFormLabelEditMsg" class="fa fa-fw fa-pencil"></i>
</span>&raquo;&nbsp;
<span>
	<?php echo htmlCfs::selectbox('shortcode_example', array('options' => array(
			'shortcode' => __('Shortcode', CFS_LANG_CODE),
			'php_code' => __('PHP code', CFS_LANG_CODE),
			'widget' => __('Widget', CFS_LANG_CODE),
		), 'attrs' => 'class="chosen" style="width:100px;" id="cfsFormShortcodeExampleSel"',
	))?>:
	<span id="cfsFormShortcodeShell" style="display: none;">
		<?php echo htmlCfs::text('cfsCopyTextCode', array(
			'value' => esc_html('['. CFS_SHORTCODE. ' id='. $this->form['id']. ']'),
			'attrs' => 'class="cfsCopyTextCode"'));?>
	</span>
	<span id="cfsFormPhpCodeShell" style="display: none;">
		<?php echo htmlCfs::text('cfsCopyTextCode', array(
			'value' => esc_html('<?php echo do_shortcode("['. CFS_SHORTCODE. ' id=\''. $this->form['id']. '\']");?>'),
			'attrs' => 'class="cfsCopyTextCode"'));?>
	</span>
	<span id="cfsFormWidgetShell" style="display: none;">
		<a target="_blank" class="button" style="background-color: #fff; margin-bottom: 10px;" href="<?php echo admin_url('widgets.php')?>"><?php _e('Add Contact Form Widget', CFS_LANG_CODE)?></a>
	</span>
</span>
<span id="cfsFormMainControllsShell" style="float: right; padding-right: 95px;">
	<button class="button button-primary cfsFormSaveBtn" title="<?php _e('Save all changes', CFS_LANG_CODE)?>">
		<i class="fa fa-fw fa-save"></i>
		<?php _e('Save', CFS_LANG_CODE)?>
	</button>
	<button class="button button-primary cfsFormCloneBtn" title="<?php _e('Clone to New Form', CFS_LANG_CODE)?>">
		<i class="fa fa-fw fa-files-o"></i>
		<?php _e('Clone', CFS_LANG_CODE)?>
	</button>
	<button class="button button-primary cfsFormPreviewBtn">
		<i class="fa fa-fw fa-eye"></i>
		<?php _e('Preview', CFS_LANG_CODE)?>
	</button>
	<button class="button button-primary cfsFormSwitchActive" data-txt-off="<?php _e('Turn Off', CFS_LANG_CODE)?>" data-txt-on="<?php _e('Turn On', CFS_LANG_CODE)?>">
		<i class="fa fa-fw"></i>
		<span></span>
	</button>
	<button class="button button-primary cfsFormRemoveBtn">
		<i class="fa fa-fw fa-trash-o"></i>
		<?php _e('Delete', CFS_LANG_CODE)?>
	</button>
</span>
<div style="clear: both; height: 0;"></div>
<div id="cfsFormSaveAsCopyWnd" style="display: none;">
	<form id="cfsFormSaveAsCopyForm">
		<label>
			<?php _e('New Name', CFS_LANG_CODE)?>:
			<?php echo htmlCfs::text('copy_label', array('value' => $this->form['label']. ' '. __('Copy', CFS_LANG_CODE), 'required' => true))?>
		</label>
		<div id="cfsFormSaveAsCopyMsg"></div>
		<?php echo htmlCfs::hidden('mod', array('value' => 'forms'))?>
		<?php echo htmlCfs::hidden('action', array('value' => 'saveAsCopy'))?>
		<?php echo htmlCfs::hidden('id', array('value' => $this->form['id']))?>
	</form>
</div>
