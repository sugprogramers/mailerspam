<?php
	// This is the HTML template include file (.tpl.php) for confirmationEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblIdConfirmation->RenderWithName(); ?>

		<?php $_CONTROL->calCreateDateTime->RenderWithName(); ?>

		<?php $_CONTROL->txtFromSms->RenderWithName(); ?>

		<?php $_CONTROL->txtBodySms->RenderWithName(); ?>

		<?php $_CONTROL->txtCodeSms->RenderWithName(); ?>

		<?php $_CONTROL->txtPhoneSms->RenderWithName(); ?>

		<?php $_CONTROL->txtEmailCreated->RenderWithName(); ?>

		<?php $_CONTROL->txtPasswordCreated->RenderWithName(); ?>

		<?php $_CONTROL->txtIpCreated->RenderWithName(); ?>

		<?php $_CONTROL->txtVerified->RenderWithName(); ?>

		<?php $_CONTROL->txtDomainCreated->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
