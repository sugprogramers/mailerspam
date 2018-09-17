<?php
	/**
	 * This is the abstract Panel class for the List All functionality
	 * of the Confirmation class.  This code-generated class
	 * contains a datagrid to display an HTML page that can
	 * list a collection of Confirmation objects.  It includes
	 * functionality to perform pagination and sorting on columns.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QPanel which extends this ConfirmationListPanelBase
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent re-
	 * code generation.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 *
	 */
	class ConfirmationListPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Confirmations
		/**
		 * @var ConfirmationDataGrid
		 */
		public $dtgConfirmations;

		// Other public QControls in this panel
		/**
		 * @var QButton CreateNew
		 */
		public $btnCreateNew;
		/**
		 * @var QControlProxy ProxyEdit
		 */
		public $pxyEdit;

		// Callback Method Names
		/**
		 * @var string SetEditPanelMethod
		 */
		protected $strSetEditPanelMethod;
		/**
		 * @var string CloseEditPanelMethod
		 */
		protected $strCloseEditPanelMethod;

		public function __construct($objParentObject, $strSetEditPanelMethod, $strCloseEditPanelMethod, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Record Method Callbacks
			$this->strSetEditPanelMethod = $strSetEditPanelMethod;
			$this->strCloseEditPanelMethod = $strCloseEditPanelMethod;

			// Setup the Template
			$this->Template = __DOCROOT__ . __PANEL_DRAFTS__ . '/ConfirmationListPanel.tpl.php';

			// Instantiate the Meta DataGrid
			$this->dtgConfirmations = new ConfirmationDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgConfirmations->CssClass = 'datagrid';
			$this->dtgConfirmations->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgConfirmations->Paginator = new QPaginator($this->dtgConfirmations);
			$this->dtgConfirmations->ItemsPerPage = 8;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$this->pxyEdit = new QControlProxy($this);
			$this->pxyEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'pxyEdit_Click'));
			$this->dtgConfirmations->MetaAddEditProxyColumn($this->pxyEdit, 'Edit', 'Edit');

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

			// Setup the Create New button
			$this->btnCreateNew = new QButton($this);
			$this->btnCreateNew->Text = QApplication::Translate('Create a New') . ' ' . QApplication::Translate('Confirmation');
			$this->btnCreateNew->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCreateNew_Click'));
		}

		public function pxyEdit_Click($strFormId, $strControlId, $strParameter) {
			$strParameterArray = explode(',', $strParameter);
			$objEditPanel = new ConfirmationEditPanel($this, $this->strCloseEditPanelMethod, $strParameterArray[0]);

			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}

		public function btnCreateNew_Click($strFormId, $strControlId, $strParameter) {
			$objEditPanel = new ConfirmationEditPanel($this, $this->strCloseEditPanelMethod, null);
			$strMethodName = $this->strSetEditPanelMethod;
			$this->objForm->$strMethodName($objEditPanel);
		}
	}
?>