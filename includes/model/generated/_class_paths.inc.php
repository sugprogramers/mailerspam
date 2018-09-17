<?php
	// ClassPaths for the Administrator class
		QApplicationBase::$ClassFile['administrator'] = __MODEL__ . '/Administrator.class.php';
		QApplicationBase::$ClassFile['qqnodeadministrator'] = __MODEL__ . '/Administrator.class.php';
		QApplicationBase::$ClassFile['qqreversereferencenodeadministrator'] = __MODEL__ . '/Administrator.class.php';
		QApplicationBase::$ClassFile['administratormetacontrol'] = __META_CONTROLS__ . '/AdministratorMetaControl.class.php';
		QApplicationBase::$ClassFile['administratordatagrid'] = __META_CONTROLS__ . '/AdministratorDataGrid.class.php';

	// ClassPaths for the Confirmation class
		QApplicationBase::$ClassFile['confirmation'] = __MODEL__ . '/Confirmation.class.php';
		QApplicationBase::$ClassFile['qqnodeconfirmation'] = __MODEL__ . '/Confirmation.class.php';
		QApplicationBase::$ClassFile['qqreversereferencenodeconfirmation'] = __MODEL__ . '/Confirmation.class.php';
		QApplicationBase::$ClassFile['confirmationmetacontrol'] = __META_CONTROLS__ . '/ConfirmationMetaControl.class.php';
		QApplicationBase::$ClassFile['confirmationdatagrid'] = __META_CONTROLS__ . '/ConfirmationDataGrid.class.php';

?>