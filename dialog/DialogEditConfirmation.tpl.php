<style>
    .editHidden{
        z-index:9999 !important;
    }
</style>
<div class="dialog-content">

    <div class="form-horizontal">
 <style>
       @media (min-width: 768px)
       {
           .unidos  {
               padding-left: 0 !important;
           } 
       }
       .form-group {
    margin-bottom: 10px;
}
       </style>
       <div id="alertDialogContent"></div>
        <div class="form-group row">
            <label class="col-sm-4 control-label">From</label>
            <div class="col-sm-8">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="icon wb-user" aria-hidden="true"></i>
                    </span>
                    <?php $_CONTROL->txtFromSms->RenderWithError(); ?>
                </div>                     
            </div>
        </div>
       
       <div class="form-group row">
            <label class="col-sm-4 control-label">Body</label>
            <div class="col-sm-8">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="icon wb-user" aria-hidden="true"></i>
                    </span>
                    <?php $_CONTROL->txtBodySms->RenderWithError(); ?>
                </div>                     
            </div>
        </div>
       
       <div class="form-group row">
            <label class="col-sm-4 control-label">Code / Phone</label>
            <div class="col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="icon wb-user" aria-hidden="true"></i>
                    </span>
                    <?php $_CONTROL->txtCodeSms->RenderWithError(); ?>
                </div>                     
            </div>
            <div class="col-sm-4 unidos">
                <?php $_CONTROL->txtPhoneSms->RenderWithError(); ?>
            </div>
        </div>
       
       <div class="form-group row">
            <label class="col-sm-4 control-label">Email / Password</label>
            <div class="col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="icon wb-user" aria-hidden="true"></i>
                    </span>
                    <?php $_CONTROL->txtEmailCreated->RenderWithError(); ?>
                </div>                     
            </div>
            <div class="col-sm-4 unidos">
                <?php $_CONTROL->txtPasswordCreated->RenderWithError(); ?>
            </div>
        </div>
       
       
       <div class="form-group row">
            <label class="col-sm-4 control-label">IP / Verified</label>
            <div class="col-sm-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="icon wb-user" aria-hidden="true"></i>
                    </span>
                    <?php $_CONTROL->txtIpCreated->RenderWithError(); ?>
                </div>                     
            </div>
            <div class="col-sm-4 unidos">
                <?php $_CONTROL->lstVerified->RenderWithError(); ?>
            </div>
        </div>
       
       <div class="form-group row">
            <label class="col-sm-4 control-label">Domain</label>
            <div class="col-sm-8">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="icon wb-user" aria-hidden="true"></i>
                    </span>
                    <?php $_CONTROL->txtDomainCreated->RenderWithError(); ?>
                </div>                     
            </div>
        </div>
    </div>

</div>
<!-- start ui-dialog-footer -->
<div class="dialog-footer ui-helper-clearfix">
    <div class="dialog-buttons ui-dialog-buttonset">
        <?php $_CONTROL->btnSave->Render(); ?>
        &nbsp;&nbsp;
        <?php $_CONTROL->btnCancel->Render(); ?>
    </div>
</div>
