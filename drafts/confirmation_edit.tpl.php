<?php
	// This is the HTML template include file (.tpl.php) for the confirmation_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('Confirmation') . ' - ' . $this->mctConfirmation->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctConfirmation->TitleVerb); ?></h2>
		<h1><?php _t('Confirmation')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lblIdConfirmation->RenderWithName(); ?>

		<?php $this->calCreateDateTime->RenderWithName(); ?>

		<?php $this->txtFromSms->RenderWithName(); ?>

		<?php $this->txtBodySms->RenderWithName(); ?>

		<?php $this->txtCodeSms->RenderWithName(); ?>

		<?php $this->txtPhoneSms->RenderWithName(); ?>

		<?php $this->txtEmailCreated->RenderWithName(); ?>

		<?php $this->txtPasswordCreated->RenderWithName(); ?>

		<?php $this->txtIpCreated->RenderWithName(); ?>

		<?php $this->txtVerified->RenderWithName(); ?>

		<?php $this->txtDomainCreated->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>