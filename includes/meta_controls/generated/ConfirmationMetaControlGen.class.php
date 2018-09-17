<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Confirmation class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Confirmation object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ConfirmationMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 *
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read Confirmation $Confirmation the actual Confirmation data class being edited
	 * @property QLabel $IdConfirmationControl
	 * @property-read QLabel $IdConfirmationLabel
	 * @property QDateTimePicker $CreateDateTimeControl
	 * @property-read QLabel $CreateDateTimeLabel
	 * @property QTextBox $FromSmsControl
	 * @property-read QLabel $FromSmsLabel
	 * @property QTextBox $BodySmsControl
	 * @property-read QLabel $BodySmsLabel
	 * @property QTextBox $CodeSmsControl
	 * @property-read QLabel $CodeSmsLabel
	 * @property QTextBox $PhoneSmsControl
	 * @property-read QLabel $PhoneSmsLabel
	 * @property QTextBox $EmailCreatedControl
	 * @property-read QLabel $EmailCreatedLabel
	 * @property QTextBox $PasswordCreatedControl
	 * @property-read QLabel $PasswordCreatedLabel
	 * @property QTextBox $IpCreatedControl
	 * @property-read QLabel $IpCreatedLabel
	 * @property QIntegerTextBox $VerifiedControl
	 * @property-read QLabel $VerifiedLabel
	 * @property QTextBox $DomainCreatedControl
	 * @property-read QLabel $DomainCreatedLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ConfirmationMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Confirmation objConfirmation
		 * @access protected
		 */
		protected $objConfirmation;
		/**
		 * @var QForm|QControl objParentObject
		 * @access protected
		 */
		protected $objParentObject;
		/**
		 * @var string strTitleVerb
		 * @access protected
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean blnEditMode
		 * @access protected
		 */
		protected $blnEditMode;

		// Controls that allow the editing of Confirmation's individual data fields
		/**
		 * @var QLabel lblIdConfirmation
		 * @access protected
		 */
		protected $lblIdConfirmation;
		/**
		 * @var QDateTimePicker calCreateDateTime
		 * @access protected
		 */
		protected $calCreateDateTime;
		/**
		 * @var QTextBox txtFromSms
		 * @access protected
		 */
		protected $txtFromSms;
		/**
		 * @var QTextBox txtBodySms
		 * @access protected
		 */
		protected $txtBodySms;
		/**
		 * @var QTextBox txtCodeSms
		 * @access protected
		 */
		protected $txtCodeSms;
		/**
		 * @var QTextBox txtPhoneSms
		 * @access protected
		 */
		protected $txtPhoneSms;
		/**
		 * @var QTextBox txtEmailCreated
		 * @access protected
		 */
		protected $txtEmailCreated;
		/**
		 * @var QTextBox txtPasswordCreated
		 * @access protected
		 */
		protected $txtPasswordCreated;
		/**
		 * @var QTextBox txtIpCreated
		 * @access protected
		 */
		protected $txtIpCreated;
		/**
		 * @var QIntegerTextBox txtVerified
		 * @access protected
		 */
		protected $txtVerified;
		/**
		 * @var QTextBox txtDomainCreated
		 * @access protected
		 */
		protected $txtDomainCreated;

		// Controls that allow the viewing of Confirmation's individual data fields
		/**
		 * @var QLabel lblCreateDateTime
		 * @access protected
		 */
		protected $lblCreateDateTime;
		/**
		 * @var QLabel lblFromSms
		 * @access protected
		 */
		protected $lblFromSms;
		/**
		 * @var QLabel lblBodySms
		 * @access protected
		 */
		protected $lblBodySms;
		/**
		 * @var QLabel lblCodeSms
		 * @access protected
		 */
		protected $lblCodeSms;
		/**
		 * @var QLabel lblPhoneSms
		 * @access protected
		 */
		protected $lblPhoneSms;
		/**
		 * @var QLabel lblEmailCreated
		 * @access protected
		 */
		protected $lblEmailCreated;
		/**
		 * @var QLabel lblPasswordCreated
		 * @access protected
		 */
		protected $lblPasswordCreated;
		/**
		 * @var QLabel lblIpCreated
		 * @access protected
		 */
		protected $lblIpCreated;
		/**
		 * @var QLabel lblVerified
		 * @access protected
		 */
		protected $lblVerified;
		/**
		 * @var QLabel lblDomainCreated
		 * @access protected
		 */
		protected $lblDomainCreated;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ConfirmationMetaControl to edit a single Confirmation object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Confirmation object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ConfirmationMetaControl
		 * @param Confirmation $objConfirmation new or existing Confirmation object
		 */
		 public function __construct($objParentObject, Confirmation $objConfirmation) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ConfirmationMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Confirmation object
			$this->objConfirmation = $objConfirmation;

			// Figure out if we're Editing or Creating New
			if ($this->objConfirmation->__Restored) {
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			} else {
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
		 }

		/**
		 * Static Helper Method to Create using PK arguments
		 * You must pass in the PK arguments on an object to load, or leave it blank to create a new one.
		 * If you want to load via QueryString or PathInfo, use the CreateFromQueryString or CreateFromPathInfo
		 * static helper methods.  Finally, specify a CreateType to define whether or not we are only allowed to
		 * edit, or if we are also allowed to create a new one, etc.
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ConfirmationMetaControl
		 * @param integer $intIdConfirmation primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Confirmation object creation - defaults to CreateOrEdit
 		 * @return ConfirmationMetaControl
		 */
		public static function Create($objParentObject, $intIdConfirmation = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdConfirmation)) {
				$objConfirmation = Confirmation::Load($intIdConfirmation);

				// Confirmation was found -- return it!
				if ($objConfirmation)
					return new ConfirmationMetaControl($objParentObject, $objConfirmation);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Confirmation object with PK arguments: ' . $intIdConfirmation);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ConfirmationMetaControl($objParentObject, new Confirmation());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ConfirmationMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Confirmation object creation - defaults to CreateOrEdit
		 * @return ConfirmationMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdConfirmation = QApplication::PathInfo(0);
			return ConfirmationMetaControl::Create($objParentObject, $intIdConfirmation, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ConfirmationMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Confirmation object creation - defaults to CreateOrEdit
		 * @return ConfirmationMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdConfirmation = QApplication::QueryString('intIdConfirmation');
			return ConfirmationMetaControl::Create($objParentObject, $intIdConfirmation, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdConfirmation
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdConfirmation_Create($strControlId = null) {
			$this->lblIdConfirmation = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdConfirmation->Name = QApplication::Translate('Id Confirmation');
			if ($this->blnEditMode)
				$this->lblIdConfirmation->Text = $this->objConfirmation->IdConfirmation;
			else
				$this->lblIdConfirmation->Text = 'N/A';
			return $this->lblIdConfirmation;
		}

		/**
		 * Create and setup QDateTimePicker calCreateDateTime
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calCreateDateTime_Create($strControlId = null) {
			$this->calCreateDateTime = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calCreateDateTime->Name = QApplication::Translate('Create Date Time');
			$this->calCreateDateTime->DateTime = $this->objConfirmation->CreateDateTime;
			$this->calCreateDateTime->DateTimePickerType = QDateTimePickerType::DateTime;
			return $this->calCreateDateTime;
		}

		/**
		 * Create and setup QLabel lblCreateDateTime
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblCreateDateTime_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblCreateDateTime = new QLabel($this->objParentObject, $strControlId);
			$this->lblCreateDateTime->Name = QApplication::Translate('Create Date Time');
			$this->strCreateDateTimeDateTimeFormat = $strDateTimeFormat;
			$this->lblCreateDateTime->Text = sprintf($this->objConfirmation->CreateDateTime) ? $this->objConfirmation->CreateDateTime->qFormat($this->strCreateDateTimeDateTimeFormat) : null;
			return $this->lblCreateDateTime;
		}

		protected $strCreateDateTimeDateTimeFormat;


		/**
		 * Create and setup QTextBox txtFromSms
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtFromSms_Create($strControlId = null) {
			$this->txtFromSms = new QTextBox($this->objParentObject, $strControlId);
			$this->txtFromSms->Name = QApplication::Translate('From Sms');
			$this->txtFromSms->Text = $this->objConfirmation->FromSms;
			$this->txtFromSms->MaxLength = Confirmation::FromSmsMaxLength;
			return $this->txtFromSms;
		}

		/**
		 * Create and setup QLabel lblFromSms
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFromSms_Create($strControlId = null) {
			$this->lblFromSms = new QLabel($this->objParentObject, $strControlId);
			$this->lblFromSms->Name = QApplication::Translate('From Sms');
			$this->lblFromSms->Text = $this->objConfirmation->FromSms;
			return $this->lblFromSms;
		}

		/**
		 * Create and setup QTextBox txtBodySms
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtBodySms_Create($strControlId = null) {
			$this->txtBodySms = new QTextBox($this->objParentObject, $strControlId);
			$this->txtBodySms->Name = QApplication::Translate('Body Sms');
			$this->txtBodySms->Text = $this->objConfirmation->BodySms;
			$this->txtBodySms->TextMode = QTextMode::MultiLine;
			return $this->txtBodySms;
		}

		/**
		 * Create and setup QLabel lblBodySms
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblBodySms_Create($strControlId = null) {
			$this->lblBodySms = new QLabel($this->objParentObject, $strControlId);
			$this->lblBodySms->Name = QApplication::Translate('Body Sms');
			$this->lblBodySms->Text = $this->objConfirmation->BodySms;
			return $this->lblBodySms;
		}

		/**
		 * Create and setup QTextBox txtCodeSms
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCodeSms_Create($strControlId = null) {
			$this->txtCodeSms = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCodeSms->Name = QApplication::Translate('Code Sms');
			$this->txtCodeSms->Text = $this->objConfirmation->CodeSms;
			$this->txtCodeSms->MaxLength = Confirmation::CodeSmsMaxLength;
			return $this->txtCodeSms;
		}

		/**
		 * Create and setup QLabel lblCodeSms
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCodeSms_Create($strControlId = null) {
			$this->lblCodeSms = new QLabel($this->objParentObject, $strControlId);
			$this->lblCodeSms->Name = QApplication::Translate('Code Sms');
			$this->lblCodeSms->Text = $this->objConfirmation->CodeSms;
			return $this->lblCodeSms;
		}

		/**
		 * Create and setup QTextBox txtPhoneSms
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPhoneSms_Create($strControlId = null) {
			$this->txtPhoneSms = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPhoneSms->Name = QApplication::Translate('Phone Sms');
			$this->txtPhoneSms->Text = $this->objConfirmation->PhoneSms;
			$this->txtPhoneSms->MaxLength = Confirmation::PhoneSmsMaxLength;
			return $this->txtPhoneSms;
		}

		/**
		 * Create and setup QLabel lblPhoneSms
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPhoneSms_Create($strControlId = null) {
			$this->lblPhoneSms = new QLabel($this->objParentObject, $strControlId);
			$this->lblPhoneSms->Name = QApplication::Translate('Phone Sms');
			$this->lblPhoneSms->Text = $this->objConfirmation->PhoneSms;
			return $this->lblPhoneSms;
		}

		/**
		 * Create and setup QTextBox txtEmailCreated
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEmailCreated_Create($strControlId = null) {
			$this->txtEmailCreated = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEmailCreated->Name = QApplication::Translate('Email Created');
			$this->txtEmailCreated->Text = $this->objConfirmation->EmailCreated;
			$this->txtEmailCreated->MaxLength = Confirmation::EmailCreatedMaxLength;
			return $this->txtEmailCreated;
		}

		/**
		 * Create and setup QLabel lblEmailCreated
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEmailCreated_Create($strControlId = null) {
			$this->lblEmailCreated = new QLabel($this->objParentObject, $strControlId);
			$this->lblEmailCreated->Name = QApplication::Translate('Email Created');
			$this->lblEmailCreated->Text = $this->objConfirmation->EmailCreated;
			return $this->lblEmailCreated;
		}

		/**
		 * Create and setup QTextBox txtPasswordCreated
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPasswordCreated_Create($strControlId = null) {
			$this->txtPasswordCreated = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPasswordCreated->Name = QApplication::Translate('Password Created');
			$this->txtPasswordCreated->Text = $this->objConfirmation->PasswordCreated;
			$this->txtPasswordCreated->MaxLength = Confirmation::PasswordCreatedMaxLength;
			return $this->txtPasswordCreated;
		}

		/**
		 * Create and setup QLabel lblPasswordCreated
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPasswordCreated_Create($strControlId = null) {
			$this->lblPasswordCreated = new QLabel($this->objParentObject, $strControlId);
			$this->lblPasswordCreated->Name = QApplication::Translate('Password Created');
			$this->lblPasswordCreated->Text = $this->objConfirmation->PasswordCreated;
			return $this->lblPasswordCreated;
		}

		/**
		 * Create and setup QTextBox txtIpCreated
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtIpCreated_Create($strControlId = null) {
			$this->txtIpCreated = new QTextBox($this->objParentObject, $strControlId);
			$this->txtIpCreated->Name = QApplication::Translate('Ip Created');
			$this->txtIpCreated->Text = $this->objConfirmation->IpCreated;
			$this->txtIpCreated->MaxLength = Confirmation::IpCreatedMaxLength;
			return $this->txtIpCreated;
		}

		/**
		 * Create and setup QLabel lblIpCreated
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIpCreated_Create($strControlId = null) {
			$this->lblIpCreated = new QLabel($this->objParentObject, $strControlId);
			$this->lblIpCreated->Name = QApplication::Translate('Ip Created');
			$this->lblIpCreated->Text = $this->objConfirmation->IpCreated;
			return $this->lblIpCreated;
		}

		/**
		 * Create and setup QIntegerTextBox txtVerified
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtVerified_Create($strControlId = null) {
			$this->txtVerified = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtVerified->Name = QApplication::Translate('Verified');
			$this->txtVerified->Text = $this->objConfirmation->Verified;
			$this->txtVerified->Required = true;
			return $this->txtVerified;
		}

		/**
		 * Create and setup QLabel lblVerified
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblVerified_Create($strControlId = null, $strFormat = null) {
			$this->lblVerified = new QLabel($this->objParentObject, $strControlId);
			$this->lblVerified->Name = QApplication::Translate('Verified');
			$this->lblVerified->Text = $this->objConfirmation->Verified;
			$this->lblVerified->Required = true;
			$this->lblVerified->Format = $strFormat;
			return $this->lblVerified;
		}

		/**
		 * Create and setup QTextBox txtDomainCreated
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDomainCreated_Create($strControlId = null) {
			$this->txtDomainCreated = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDomainCreated->Name = QApplication::Translate('Domain Created');
			$this->txtDomainCreated->Text = $this->objConfirmation->DomainCreated;
			$this->txtDomainCreated->MaxLength = Confirmation::DomainCreatedMaxLength;
			return $this->txtDomainCreated;
		}

		/**
		 * Create and setup QLabel lblDomainCreated
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDomainCreated_Create($strControlId = null) {
			$this->lblDomainCreated = new QLabel($this->objParentObject, $strControlId);
			$this->lblDomainCreated->Name = QApplication::Translate('Domain Created');
			$this->lblDomainCreated->Text = $this->objConfirmation->DomainCreated;
			return $this->lblDomainCreated;
		}



		/**
		 * Refresh this MetaControl with Data from the local Confirmation object.
		 * @param boolean $blnReload reload Confirmation from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objConfirmation->Reload();

			if ($this->lblIdConfirmation) if ($this->blnEditMode) $this->lblIdConfirmation->Text = $this->objConfirmation->IdConfirmation;

			if ($this->calCreateDateTime) $this->calCreateDateTime->DateTime = $this->objConfirmation->CreateDateTime;
			if ($this->lblCreateDateTime) $this->lblCreateDateTime->Text = sprintf($this->objConfirmation->CreateDateTime) ? $this->objConfirmation->CreateDateTime->qFormat($this->strCreateDateTimeDateTimeFormat) : null;

			if ($this->txtFromSms) $this->txtFromSms->Text = $this->objConfirmation->FromSms;
			if ($this->lblFromSms) $this->lblFromSms->Text = $this->objConfirmation->FromSms;

			if ($this->txtBodySms) $this->txtBodySms->Text = $this->objConfirmation->BodySms;
			if ($this->lblBodySms) $this->lblBodySms->Text = $this->objConfirmation->BodySms;

			if ($this->txtCodeSms) $this->txtCodeSms->Text = $this->objConfirmation->CodeSms;
			if ($this->lblCodeSms) $this->lblCodeSms->Text = $this->objConfirmation->CodeSms;

			if ($this->txtPhoneSms) $this->txtPhoneSms->Text = $this->objConfirmation->PhoneSms;
			if ($this->lblPhoneSms) $this->lblPhoneSms->Text = $this->objConfirmation->PhoneSms;

			if ($this->txtEmailCreated) $this->txtEmailCreated->Text = $this->objConfirmation->EmailCreated;
			if ($this->lblEmailCreated) $this->lblEmailCreated->Text = $this->objConfirmation->EmailCreated;

			if ($this->txtPasswordCreated) $this->txtPasswordCreated->Text = $this->objConfirmation->PasswordCreated;
			if ($this->lblPasswordCreated) $this->lblPasswordCreated->Text = $this->objConfirmation->PasswordCreated;

			if ($this->txtIpCreated) $this->txtIpCreated->Text = $this->objConfirmation->IpCreated;
			if ($this->lblIpCreated) $this->lblIpCreated->Text = $this->objConfirmation->IpCreated;

			if ($this->txtVerified) $this->txtVerified->Text = $this->objConfirmation->Verified;
			if ($this->lblVerified) $this->lblVerified->Text = $this->objConfirmation->Verified;

			if ($this->txtDomainCreated) $this->txtDomainCreated->Text = $this->objConfirmation->DomainCreated;
			if ($this->lblDomainCreated) $this->lblDomainCreated->Text = $this->objConfirmation->DomainCreated;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC CONFIRMATION OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Confirmation instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveConfirmation() {
			try {
				// Update any fields for controls that have been created
				if ($this->calCreateDateTime) $this->objConfirmation->CreateDateTime = $this->calCreateDateTime->DateTime;
				if ($this->txtFromSms) $this->objConfirmation->FromSms = $this->txtFromSms->Text;
				if ($this->txtBodySms) $this->objConfirmation->BodySms = $this->txtBodySms->Text;
				if ($this->txtCodeSms) $this->objConfirmation->CodeSms = $this->txtCodeSms->Text;
				if ($this->txtPhoneSms) $this->objConfirmation->PhoneSms = $this->txtPhoneSms->Text;
				if ($this->txtEmailCreated) $this->objConfirmation->EmailCreated = $this->txtEmailCreated->Text;
				if ($this->txtPasswordCreated) $this->objConfirmation->PasswordCreated = $this->txtPasswordCreated->Text;
				if ($this->txtIpCreated) $this->objConfirmation->IpCreated = $this->txtIpCreated->Text;
				if ($this->txtVerified) $this->objConfirmation->Verified = $this->txtVerified->Text;
				if ($this->txtDomainCreated) $this->objConfirmation->DomainCreated = $this->txtDomainCreated->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Confirmation object
				$this->objConfirmation->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Confirmation instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteConfirmation() {
			$this->objConfirmation->Delete();
		}



		///////////////////////////////////////////////
		// PUBLIC GETTERS and SETTERS
		///////////////////////////////////////////////

		/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				// General MetaControlVariables
				case 'Confirmation': return $this->objConfirmation;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Confirmation fields -- will be created dynamically if not yet created
				case 'IdConfirmationControl':
					if (!$this->lblIdConfirmation) return $this->lblIdConfirmation_Create();
					return $this->lblIdConfirmation;
				case 'IdConfirmationLabel':
					if (!$this->lblIdConfirmation) return $this->lblIdConfirmation_Create();
					return $this->lblIdConfirmation;
				case 'CreateDateTimeControl':
					if (!$this->calCreateDateTime) return $this->calCreateDateTime_Create();
					return $this->calCreateDateTime;
				case 'CreateDateTimeLabel':
					if (!$this->lblCreateDateTime) return $this->lblCreateDateTime_Create();
					return $this->lblCreateDateTime;
				case 'FromSmsControl':
					if (!$this->txtFromSms) return $this->txtFromSms_Create();
					return $this->txtFromSms;
				case 'FromSmsLabel':
					if (!$this->lblFromSms) return $this->lblFromSms_Create();
					return $this->lblFromSms;
				case 'BodySmsControl':
					if (!$this->txtBodySms) return $this->txtBodySms_Create();
					return $this->txtBodySms;
				case 'BodySmsLabel':
					if (!$this->lblBodySms) return $this->lblBodySms_Create();
					return $this->lblBodySms;
				case 'CodeSmsControl':
					if (!$this->txtCodeSms) return $this->txtCodeSms_Create();
					return $this->txtCodeSms;
				case 'CodeSmsLabel':
					if (!$this->lblCodeSms) return $this->lblCodeSms_Create();
					return $this->lblCodeSms;
				case 'PhoneSmsControl':
					if (!$this->txtPhoneSms) return $this->txtPhoneSms_Create();
					return $this->txtPhoneSms;
				case 'PhoneSmsLabel':
					if (!$this->lblPhoneSms) return $this->lblPhoneSms_Create();
					return $this->lblPhoneSms;
				case 'EmailCreatedControl':
					if (!$this->txtEmailCreated) return $this->txtEmailCreated_Create();
					return $this->txtEmailCreated;
				case 'EmailCreatedLabel':
					if (!$this->lblEmailCreated) return $this->lblEmailCreated_Create();
					return $this->lblEmailCreated;
				case 'PasswordCreatedControl':
					if (!$this->txtPasswordCreated) return $this->txtPasswordCreated_Create();
					return $this->txtPasswordCreated;
				case 'PasswordCreatedLabel':
					if (!$this->lblPasswordCreated) return $this->lblPasswordCreated_Create();
					return $this->lblPasswordCreated;
				case 'IpCreatedControl':
					if (!$this->txtIpCreated) return $this->txtIpCreated_Create();
					return $this->txtIpCreated;
				case 'IpCreatedLabel':
					if (!$this->lblIpCreated) return $this->lblIpCreated_Create();
					return $this->lblIpCreated;
				case 'VerifiedControl':
					if (!$this->txtVerified) return $this->txtVerified_Create();
					return $this->txtVerified;
				case 'VerifiedLabel':
					if (!$this->lblVerified) return $this->lblVerified_Create();
					return $this->lblVerified;
				case 'DomainCreatedControl':
					if (!$this->txtDomainCreated) return $this->txtDomainCreated_Create();
					return $this->txtDomainCreated;
				case 'DomainCreatedLabel':
					if (!$this->lblDomainCreated) return $this->lblDomainCreated_Create();
					return $this->lblDomainCreated;
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			try {
				switch ($strName) {
					// Controls that point to Confirmation fields
					case 'IdConfirmationControl':
						return ($this->lblIdConfirmation = QType::Cast($mixValue, 'QControl'));
					case 'CreateDateTimeControl':
						return ($this->calCreateDateTime = QType::Cast($mixValue, 'QControl'));
					case 'FromSmsControl':
						return ($this->txtFromSms = QType::Cast($mixValue, 'QControl'));
					case 'BodySmsControl':
						return ($this->txtBodySms = QType::Cast($mixValue, 'QControl'));
					case 'CodeSmsControl':
						return ($this->txtCodeSms = QType::Cast($mixValue, 'QControl'));
					case 'PhoneSmsControl':
						return ($this->txtPhoneSms = QType::Cast($mixValue, 'QControl'));
					case 'EmailCreatedControl':
						return ($this->txtEmailCreated = QType::Cast($mixValue, 'QControl'));
					case 'PasswordCreatedControl':
						return ($this->txtPasswordCreated = QType::Cast($mixValue, 'QControl'));
					case 'IpCreatedControl':
						return ($this->txtIpCreated = QType::Cast($mixValue, 'QControl'));
					case 'VerifiedControl':
						return ($this->txtVerified = QType::Cast($mixValue, 'QControl'));
					case 'DomainCreatedControl':
						return ($this->txtDomainCreated = QType::Cast($mixValue, 'QControl'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}
?>