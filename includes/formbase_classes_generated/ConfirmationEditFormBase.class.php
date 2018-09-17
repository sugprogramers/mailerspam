<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
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
	 * @subpackage FormBaseObjects
	 */
	abstract class ConfirmationEditFormBase extends QForm {
		// Local instance of the ConfirmationMetaControl
		/**
		 * @var ConfirmationMetaControlGen mctConfirmation
		 */
		protected $mctConfirmation;

		// Controls for Confirmation's Data Fields
		protected $lblIdConfirmation;
		protected $calCreateDateTime;
		protected $txtFromSms;
		protected $txtBodySms;
		protected $txtCodeSms;
		protected $txtPhoneSms;
		protected $txtEmailCreated;
		protected $txtPasswordCreated;
		protected $txtIpCreated;
		protected $txtVerified;
		protected $txtDomainCreated;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		/**
		 * @var QButton Save
		 */
		protected $btnSave;
		/**
		 * @var QButton Delete
		 */
		protected $btnDelete;
		/**
		 * @var QButton Cancel
		 */
		protected $btnCancel;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}

		protected function Form_Run() {
			parent::Form_Run();
		}

		protected function Form_Create() {
			parent::Form_Create();

			// Use the CreateFromPathInfo shortcut (this can also be done manually using the ConfirmationMetaControl constructor)
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctConfirmation = ConfirmationMetaControl::CreateFromPathInfo($this);

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
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
			$this->btnSave->CausesValidation = true;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxAction('btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'), QApplication::Translate('Confirmation'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctConfirmation->EditMode;
		}

		/**
		 * This Form_Validate event handler allows you to specify any custom Form Validation rules.
		 * It will also Blink() on all invalid controls, as well as Focus() on the top-most invalid control.
		 */
		protected function Form_Validate() {
			// By default, we report the result of validation from the parent
			$blnToReturn = parent::Form_Validate();

			// Custom Validation Rules
			// TODO: Be sure to set $blnToReturn to false if any custom validation fails!
			

			$blnFocused = false;
			foreach ($this->GetErrorControls() as $objControl) {
				// Set Focus to the top-most invalid control
				if (!$blnFocused) {
					$objControl->Focus();
					$blnFocused = true;
				}

				// Blink on ALL invalid controls
				$objControl->Blink();
			}

			return $blnToReturn;
		}

		// Button Event Handlers

		protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the ConfirmationMetaControl
			$this->mctConfirmation->SaveConfirmation();
			$this->RedirectToListPage();
		}

		protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the ConfirmationMetaControl
			$this->mctConfirmation->DeleteConfirmation();
			$this->RedirectToListPage();
		}

		protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->RedirectToListPage();
		}

		// Other Methods

		protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/confirmation_list.php');
		}
	}
?>
