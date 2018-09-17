<?php
	class QQN {
		/**
		 * @return QQNodeAdministrator
		 */
		static public function Administrator() {
			return new QQNodeAdministrator('administrator', null, null);
		}
		/**
		 * @return QQNodeConfirmation
		 */
		static public function Confirmation() {
			return new QQNodeConfirmation('confirmation', null, null);
		}
	}
?>