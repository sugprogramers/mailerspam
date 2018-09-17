<?php

class DialogEditConfirmation extends QDialogBox {

    public $mctConfirmation;
    public $txtEmail;
    public $txtPassword;
    public $txtFirstname;
    public $txtMiddlename;
    public $txtLastname;
    public $txtCountry;
    public $txtCity;
    public $txtPhone;
    public $txtBirthday;
    public $txtYearGraduation;
    public $lstStatus;
    public $txtStatus;
    public $txtCohort;
    public $txtMiningOption;
    public $lstMiningOption;
    public $txtWalletAddress;
    public $txtNumberMasterNode;
    
    public $txtIdConfirmation;
    public $txtCreateDateTime;
    public $txtFromSms;
    public $txtBodySms;
    public $txtCodeSms;
    public $txtPhoneSms;
    public $txtEmailCreated;
    public $txtPasswordCreated;
    public $txtIpCreated;
    public $txtVerified;
    public $txtDomainCreated;
    
   
    public $btnSave;
    public $btnCancel;
    public $strClosePanelMethod;
    
    public $lstVerified;
    public $alertTypes;

    public function __construct($objParentObject, $strClosePanelMethod, $strControlId = null) {
        // Call the Parent
        try {
            parent::__construct($objParentObject, $strControlId);
        } catch (QCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }

        $this->Width = 750;
        $this->Resizable = false;
        $this->isAutosize = true;
        $this->strTemplate = __DOCROOT__ . __SUBDIRECTORY__ . '/dialog/DialogEditConfirmation.tpl.php';
        $this->strClosePanelMethod = $strClosePanelMethod;

        // controles generados
        $this->mctConfirmation = ConfirmationMetaControl::CreateFromPathInfo($this);
        
        //$this->txtCreateDateTime = new $this->mctConfirmation->
        
        
        $this->txtFromSms = $this->mctConfirmation->txtFromSms_Create();
        $this->txtFromSms->Placeholder = "From";
        
        $this->txtBodySms = $this->mctConfirmation->txtBodySms_Create();
        $this->txtBodySms->Placeholder = "Body";
        $this->txtBodySms->CssClass = "form-control input-sm editHidden";
        
        $this->txtCodeSms = $this->mctConfirmation->txtCodeSms_Create();
        $this->txtCodeSms->Placeholder = "Code";
        
        $this->txtPhoneSms = $this->mctConfirmation->txtPhoneSms_Create();
        $this->txtPhoneSms->Placeholder = "Phone";
        
        $this->txtEmailCreated = $this->mctConfirmation->txtEmailCreated_Create();
        $this->txtEmailCreated->Placeholder = "Email";
        $this->txtPasswordCreated = $this->mctConfirmation->txtPasswordCreated_Create();
        $this->txtPasswordCreated->Placeholder = "Password";
        
        $this->txtIpCreated = $this->mctConfirmation->txtIpCreated_Create();
        $this->txtIpCreated->Placeholder = "IP";
        
        $this->txtDomainCreated = $this->mctConfirmation->txtDomainCreated_Create();
        $this->txtDomainCreated->Placeholder = "Domain";
         
        //buttons
        $this->btnSave = new QButton($this);
        $this->btnSave->HtmlEntities = FALSE;
        $this->btnSave->Text = '<i class="icon fa-check" aria-hidden="true"></i> Save';
        $this->btnSave->CssClass = "btn btn-primary btn-raised ";
        $this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));

        $this->btnCancel = new QButton($this);
        $this->btnCancel->HtmlEntities = FALSE;
        $this->btnCancel->Text = '<i class="icon fa-close" aria-hidden="true"></i> Cancel';
        $this->btnCancel->CssClass = "btn btn-danger btn-raised ";
        $this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));
        
        $this->lstVerified = new QListBox($this);
        
        $this->lstVerified = new QListBox($this);
        $this->lstVerified->CssClass = "form-control input-sm editHidden"; 
        foreach(getVerifiedStatus() as $x => $x_value) {
            $this->lstVerified->AddItem(new QListItem($x_value, $x));
        }
        
        $this->alertTypes = getAlertTypes();
        
    }

    // eventos buttons
    public function btnSave_Click($strFormId, $strControlId, $strParameter) {
        try {
            if(trim($this->txtFromSms->Text) ==""){
                throw new Exception("You must enter a valid Number");
            }
            if(trim($this->txtBodySms->Text) ==""){
                throw new Exception("You must enter a valid Body");
            }
            if(trim($this->txtCodeSms->Text) ==""){
                throw new Exception("You must enter a valid Code");
            }
            if(trim($this->txtPhoneSms->Text) ==""){
                throw new Exception("You must enter a valid Phone");
            }
            if(trim($this->txtIpCreated->Text) ==""){
                throw new Exception("You must enter a valid IP");
            }
            if(trim($this->txtDomainCreated->Text) ==""){
                throw new Exception("You must enter a valid Domain");
            }
            
            //cuando es new
            if ($this->mctConfirmation->objConfirmation->IdConfirmation == null) {
                $this->mctConfirmation->objConfirmation->CreateDateTime = QDateTime::Now();
            }
            
            $this->mctConfirmation->objConfirmation->Verified = $this->lstVerified->SelectedValue;
            //siempre
            
            //salvar
            $this->mctConfirmation->SaveConfirmation();
            $this->CloseSelf(TRUE);
            
        } catch (Exception $exc) {
            QApplication::ExecuteJavaScript("showDialogAlert('".$this->alertTypes['warning']."','".str_replace("'", "\'", $exc->getMessage())."');");
            //QApplication::ExecuteJavaScript("showWarning('Error: " . str_replace("'", "\'", $exc->getMessage()) . "');");
        }
    }

    public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
        $this->CloseSelf(FALSE);
    }

    //funciones de carga
    public function createNew() {
        $this->mctConfirmation->objConfirmation = new Confirmation();
        $this->mctConfirmation->Refresh();
    }

    public function loadDefault($id) {
        try {
            $obj = Confirmation::LoadByIdConfirmation(intval($id));
            $this->mctConfirmation->objConfirmation = $obj;
            $this->mctConfirmation->blnEditMode = TRUE;
            $this->mctConfirmation->Refresh();
        } catch (Exception $exc) {
            QApplication::ExecuteJavaScript("showWarning('Error " . str_replace("'", "\'", $exc->getMessage()) . "');");
        }
    }

    // aditional funciones
    public function CloseSelf($blnChangesMade) {
        $strMethod = $this->strClosePanelMethod;
        $this->objForm->$strMethod($blnChangesMade);
        $this->HideDialogBox();
    }

}

?>
