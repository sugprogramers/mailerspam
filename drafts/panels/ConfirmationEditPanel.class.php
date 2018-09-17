<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the Confirmation class.  It uses the code-generated
	 * ConfirmationMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Confirmation columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 *
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both confirmation_edit.php AND
	 * confirmation_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 */
	class ConfirmationEditPanel extends QPanel {
		// Local instance of the ConfirmationMetaControl
		/**
		 * @var ConfirmationMetaControl
		 */
		protected $mctConfirmation;

		// Controls for Confirmation's Data Fields
		public $lblIdConfirmation;
		public $calCreateDateTime;
		public $txtFromSms;
		public $txtBodySms;
		public $txtCodeSms;
		public $txtPhoneSms;
		public $txtEmailCreated;
		public $txtPasswordCreated;
		public $txtIpCreated;
		public $txtVerified;
		public $txtDomainCreated;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		/**
		 * @var QButton Save
		 */
		public $btnSave;
		/**
		 * @var QButton Delete
		 */
		public $btnDelete;
		/**
		 * @var QButton Cancel
		 */
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $intIdConfirmation = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = __DOCROOT__ . __PANEL_DRAFTS__ . '/ConfirmationEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the ConfirmationMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctConfirmation = ConfirmationMetaControl::Create($this, $intIdConfirmation);

			// Call MetaControl's methods to create qcontrols based on Confirmation's data fields
			$this->lblIdConfirmation = $this->mctConfirmation->lblIdConfirmation_Create();
			$this->calCreateDateTime = $this->mctConfirmation->calCreateDateTime_Create();
			$this->txtFromSms = $this->mctConfirmation->txtFromSms_Create();
			$this->txtBodySms = $this->mctConfirmation->txtBodySms_Create();
			$this->txtCodeSms = $this->mctConfirmation->txtCodeSms_Create();
			$this->txtPhoneSms = $this->mctConfirmation->txtPhoneSms_Create();
			$this->txtEmailCreated = $this->mctConfirmation->txtEmailCreated_Create();
			$this->txtPasswordCreated = $this->mctConfirmation->txtPasswordCreated_Create();
			$this->txtIpCreated = $this->mctConfirmation->txtIpCreated_Create();
			$this->txtVerified = $this->mctConfirmation->txtVerified_Create();
			$this->txtDomainCreated = $this->mctConfirmation->txtDomainCreated_Create();

			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('Confirmation'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctConfirmation->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the ConfirmationMetaControl
			$this->mctConfirmation->SaveConfirmation();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the ConfirmationMetaControl
			$this->mctConfirmation->DeleteConfirmation();
			$this->CloseSelf(true);
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->CloseSelf(false);
		}

		// Close Myself and Call ClosePanelMethod Callback
		protected function CloseSelf($blnChangesMade) {
			$strMethod = $this->strClosePanelMethod;
			$this->objForm->$strMethod($blnChangesMade);
		}

		
	}
?>