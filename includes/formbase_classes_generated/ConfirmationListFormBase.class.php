<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Confirmation class.  It uses the code-generated
	 * ConfirmationDataGrid control which has meta-methods to help with
	 * easily creating/defining Confirmation columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both confirmation_list.php AND
	 * confirmation_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class ConfirmationListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list Confirmations
		/**
		 * @var ConfirmationDataGrid dtgConfirmations
		 */
		protected $dtgConfirmations;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}
//		protected function Form_Validate() {}

		protected function Form_Run() {
			parent::Form_Run();
		}

		protected function Form_Create() {
			parent::Form_Create();

			// Instantiate the Meta DataGrid
			$this->dtgConfirmations = new ConfirmationDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgConfirmations->CssClass = 'datagrid';
			$this->dtgConfirmations->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgConfirmations->Paginator = new QPaginator($this->dtgConfirmations);
			$this->dtgConfirmations->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/confirmation_edit.php';
			$this->dtgConfirmations->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for confirmation's properties, or you
			// can traverse down QQN::confirmation() to display fields that are down the hierarchy)
			$this->dtgConfirmations->MetaAddColumn('IdConfirmation');
			$this->dtgConfirmations->MetaAddColumn('CreateDateTime');
			$this->dtgConfirmations->MetaAddColumn('FromSms');
			$this->dtgConfirmations->MetaAddColumn('BodySms');
			$this->dtgConfirmations->MetaAddColumn('CodeSms');
			$this->dtgConfirmations->MetaAddColumn('PhoneSms');
			$this->dtgConfirmations->MetaAddColumn('EmailCreated');
			$this->dtgConfirmations->MetaAddColumn('PasswordCreated');
			$this->dtgConfirmations->MetaAddColumn('IpCreated');
			$this->dtgConfirmations->MetaAddColumn('Verified');
			$this->dtgConfirmations->MetaAddColumn('DomainCreated');
		}
	}
?>
