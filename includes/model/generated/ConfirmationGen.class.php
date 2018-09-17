<?php
	/**
	 * The abstract ConfirmationGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Confirmation subclass which
	 * extends this ConfirmationGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Confirmation class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdConfirmation the value for intIdConfirmation (Read-Only PK)
	 * @property QDateTime $CreateDateTime the value for dttCreateDateTime 
	 * @property string $FromSms the value for strFromSms 
	 * @property string $BodySms the value for strBodySms 
	 * @property string $CodeSms the value for strCodeSms 
	 * @property string $PhoneSms the value for strPhoneSms 
	 * @property string $EmailCreated the value for strEmailCreated 
	 * @property string $PasswordCreated the value for strPasswordCreated 
	 * @property string $IpCreated the value for strIpCreated 
	 * @property integer $Verified the value for intVerified (Not Null)
	 * @property string $DomainCreated the value for strDomainCreated 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ConfirmationGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column confirmation.IdConfirmation
		 * @var integer intIdConfirmation
		 */
		protected $intIdConfirmation;
		const IdConfirmationDefault = null;


		/**
		 * Protected member variable that maps to the database column confirmation.CreateDateTime
		 * @var QDateTime dttCreateDateTime
		 */
		protected $dttCreateDateTime;
		const CreateDateTimeDefault = null;


		/**
		 * Protected member variable that maps to the database column confirmation.FromSms
		 * @var string strFromSms
		 */
		protected $strFromSms;
		const FromSmsMaxLength = 50;
		const FromSmsDefault = null;


		/**
		 * Protected member variable that maps to the database column confirmation.BodySms
		 * @var string strBodySms
		 */
		protected $strBodySms;
		const BodySmsDefault = null;


		/**
		 * Protected member variable that maps to the database column confirmation.CodeSms
		 * @var string strCodeSms
		 */
		protected $strCodeSms;
		const CodeSmsMaxLength = 50;
		const CodeSmsDefault = null;


		/**
		 * Protected member variable that maps to the database column confirmation.PhoneSms
		 * @var string strPhoneSms
		 */
		protected $strPhoneSms;
		const PhoneSmsMaxLength = 50;
		const PhoneSmsDefault = null;


		/**
		 * Protected member variable that maps to the database column confirmation.EmailCreated
		 * @var string strEmailCreated
		 */
		protected $strEmailCreated;
		const EmailCreatedMaxLength = 50;
		const EmailCreatedDefault = null;


		/**
		 * Protected member variable that maps to the database column confirmation.PasswordCreated
		 * @var string strPasswordCreated
		 */
		protected $strPasswordCreated;
		const PasswordCreatedMaxLength = 50;
		const PasswordCreatedDefault = null;


		/**
		 * Protected member variable that maps to the database column confirmation.IpCreated
		 * @var string strIpCreated
		 */
		protected $strIpCreated;
		const IpCreatedMaxLength = 50;
		const IpCreatedDefault = null;


		/**
		 * Protected member variable that maps to the database column confirmation.Verified
		 * @var integer intVerified
		 */
		protected $intVerified;
		const VerifiedDefault = null;


		/**
		 * Protected member variable that maps to the database column confirmation.DomainCreated
		 * @var string strDomainCreated
		 */
		protected $strDomainCreated;
		const DomainCreatedMaxLength = 50;
		const DomainCreatedDefault = null;


		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdConfirmation = Confirmation::IdConfirmationDefault;
			$this->dttCreateDateTime = (Confirmation::CreateDateTimeDefault === null)?null:new QDateTime(Confirmation::CreateDateTimeDefault);
			$this->strFromSms = Confirmation::FromSmsDefault;
			$this->strBodySms = Confirmation::BodySmsDefault;
			$this->strCodeSms = Confirmation::CodeSmsDefault;
			$this->strPhoneSms = Confirmation::PhoneSmsDefault;
			$this->strEmailCreated = Confirmation::EmailCreatedDefault;
			$this->strPasswordCreated = Confirmation::PasswordCreatedDefault;
			$this->strIpCreated = Confirmation::IpCreatedDefault;
			$this->intVerified = Confirmation::VerifiedDefault;
			$this->strDomainCreated = Confirmation::DomainCreatedDefault;
		}


		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a Confirmation from PK Info
		 * @param integer $intIdConfirmation
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Confirmation
		 */
		public static function Load($intIdConfirmation, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Confirmation::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Confirmation()->IdConfirmation, $intIdConfirmation)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Confirmations
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Confirmation[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Confirmation::QueryArray to perform the LoadAll query
			try {
				return Confirmation::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Confirmations
		 * @return int
		 */
		public static function CountAll() {
			// Call Confirmation::QueryCount to perform the CountAll query
			return Confirmation::QueryCount(QQ::All());
		}




		///////////////////////////////
		// QCUBED QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Internally called method to assist with calling Qcubed Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause object or array of QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
		 * @param boolean $blnCountOnly only select a rowcount
		 * @return string the query statement
		 */
		protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
			// Get the Database Object for this Class
			$objDatabase = Confirmation::GetDatabase();

			// Create/Build out the QueryBuilder object with Confirmation-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'confirmation');
			Confirmation::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('confirmation');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				try {
					$objConditions->UpdateQueryBuilder($objQueryBuilder);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if ($objOptionalClauses instanceof QQClause)
					$objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
				else if (is_array($objOptionalClauses))
					foreach ($objOptionalClauses as $objClause)
						$objClause->UpdateQueryBuilder($objQueryBuilder);
				else
					throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
			}

			// Get the SQL Statement
			$strQuery = $objQueryBuilder->GetStatement();

			// Prepare the Statement with the Query Parameters (if applicable)
			if ($mixParameterArray) {
				if (is_array($mixParameterArray)) {
					if (count($mixParameterArray))
						$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

					// Ensure that there are no other Unresolved Named Parameters
					if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
						throw new QCallerException('Unresolved named parameters in the query');
				} else
					throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
			}

			// Return the Objects
			return $strQuery;
		}

		/**
		 * Static Qcubed Query method to query for a single Confirmation object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Confirmation the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Confirmation::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Confirmation object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Confirmation::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem)
						$objToReturn[] = $objItem;
				}
				if (count($objToReturn)) {
					// Since we only want the object to return, lets return the object and not the array.
					return $objToReturn[0];
				} else {
					return null;
				}
			} else {
				// No expands just return the first row
				$objDbRow = $objDbResult->GetNextRow();
				if(null === $objDbRow)
					return null;
				return Confirmation::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Confirmation objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Confirmation[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Confirmation::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Confirmation::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Confirmation objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Confirmation::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and return the row_count
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Figure out if the query is using GroupBy
			$blnGrouped = false;

			if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
				if ($objClause instanceof QQGroupBy) {
					$blnGrouped = true;
					break;
				}
			}

			if ($blnGrouped)
				// Groups in this query - return the count of Groups (which is the count of all rows)
				return $objDbResult->CountRows();
			else {
				// No Groups - return the sql-calculated count(*) value
				$strDbRow = $objDbResult->FetchRow();
				return QType::Cast($strDbRow[0], QType::Integer);
			}
		}

		public static function QueryArrayCached(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Confirmation::GetDatabase();

			$strQuery = Confirmation::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/confirmation', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Confirmation::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Confirmation
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'confirmation';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'IdConfirmation', $strAliasPrefix . 'IdConfirmation');
			$objBuilder->AddSelectItem($strTableName, 'CreateDateTime', $strAliasPrefix . 'CreateDateTime');
			$objBuilder->AddSelectItem($strTableName, 'FromSms', $strAliasPrefix . 'FromSms');
			$objBuilder->AddSelectItem($strTableName, 'BodySms', $strAliasPrefix . 'BodySms');
			$objBuilder->AddSelectItem($strTableName, 'CodeSms', $strAliasPrefix . 'CodeSms');
			$objBuilder->AddSelectItem($strTableName, 'PhoneSms', $strAliasPrefix . 'PhoneSms');
			$objBuilder->AddSelectItem($strTableName, 'EmailCreated', $strAliasPrefix . 'EmailCreated');
			$objBuilder->AddSelectItem($strTableName, 'PasswordCreated', $strAliasPrefix . 'PasswordCreated');
			$objBuilder->AddSelectItem($strTableName, 'IpCreated', $strAliasPrefix . 'IpCreated');
			$objBuilder->AddSelectItem($strTableName, 'Verified', $strAliasPrefix . 'Verified');
			$objBuilder->AddSelectItem($strTableName, 'DomainCreated', $strAliasPrefix . 'DomainCreated');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Confirmation from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Confirmation::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Confirmation
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the Confirmation object
			$objToReturn = new Confirmation();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'IdConfirmation', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'IdConfirmation'] : $strAliasPrefix . 'IdConfirmation';
			$objToReturn->intIdConfirmation = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'CreateDateTime', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'CreateDateTime'] : $strAliasPrefix . 'CreateDateTime';
			$objToReturn->dttCreateDateTime = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAliasName = array_key_exists($strAliasPrefix . 'FromSms', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'FromSms'] : $strAliasPrefix . 'FromSms';
			$objToReturn->strFromSms = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'BodySms', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'BodySms'] : $strAliasPrefix . 'BodySms';
			$objToReturn->strBodySms = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'CodeSms', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'CodeSms'] : $strAliasPrefix . 'CodeSms';
			$objToReturn->strCodeSms = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'PhoneSms', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'PhoneSms'] : $strAliasPrefix . 'PhoneSms';
			$objToReturn->strPhoneSms = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'EmailCreated', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'EmailCreated'] : $strAliasPrefix . 'EmailCreated';
			$objToReturn->strEmailCreated = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'PasswordCreated', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'PasswordCreated'] : $strAliasPrefix . 'PasswordCreated';
			$objToReturn->strPasswordCreated = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'IpCreated', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'IpCreated'] : $strAliasPrefix . 'IpCreated';
			$objToReturn->strIpCreated = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'Verified', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Verified'] : $strAliasPrefix . 'Verified';
			$objToReturn->intVerified = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'DomainCreated', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'DomainCreated'] : $strAliasPrefix . 'DomainCreated';
			$objToReturn->strDomainCreated = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdConfirmation != $objPreviousItem->IdConfirmation) {
						continue;
					}

					// complete match - all primary key columns are the same
					return null;
				}
			}

			// Instantiate Virtual Attributes
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				$strVirtualPrefix = $strAliasPrefix . '__';
				$strVirtualPrefixLength = strlen($strVirtualPrefix);
				if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'confirmation__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Confirmations from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Confirmation[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
			$objToReturn = array();

			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Confirmation::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Confirmation::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Confirmation object,
		 * by IdConfirmation Index(es)
		 * @param integer $intIdConfirmation
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Confirmation
		*/
		public static function LoadByIdConfirmation($intIdConfirmation, $objOptionalClauses = null) {
			return Confirmation::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Confirmation()->IdConfirmation, $intIdConfirmation)
				),
				$objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Confirmation
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Confirmation::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `confirmation` (
							`CreateDateTime`,
							`FromSms`,
							`BodySms`,
							`CodeSms`,
							`PhoneSms`,
							`EmailCreated`,
							`PasswordCreated`,
							`IpCreated`,
							`Verified`,
							`DomainCreated`
						) VALUES (
							' . $objDatabase->SqlVariable($this->dttCreateDateTime) . ',
							' . $objDatabase->SqlVariable($this->strFromSms) . ',
							' . $objDatabase->SqlVariable($this->strBodySms) . ',
							' . $objDatabase->SqlVariable($this->strCodeSms) . ',
							' . $objDatabase->SqlVariable($this->strPhoneSms) . ',
							' . $objDatabase->SqlVariable($this->strEmailCreated) . ',
							' . $objDatabase->SqlVariable($this->strPasswordCreated) . ',
							' . $objDatabase->SqlVariable($this->strIpCreated) . ',
							' . $objDatabase->SqlVariable($this->intVerified) . ',
							' . $objDatabase->SqlVariable($this->strDomainCreated) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdConfirmation = $objDatabase->InsertId('confirmation', 'IdConfirmation');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`confirmation`
						SET
							`CreateDateTime` = ' . $objDatabase->SqlVariable($this->dttCreateDateTime) . ',
							`FromSms` = ' . $objDatabase->SqlVariable($this->strFromSms) . ',
							`BodySms` = ' . $objDatabase->SqlVariable($this->strBodySms) . ',
							`CodeSms` = ' . $objDatabase->SqlVariable($this->strCodeSms) . ',
							`PhoneSms` = ' . $objDatabase->SqlVariable($this->strPhoneSms) . ',
							`EmailCreated` = ' . $objDatabase->SqlVariable($this->strEmailCreated) . ',
							`PasswordCreated` = ' . $objDatabase->SqlVariable($this->strPasswordCreated) . ',
							`IpCreated` = ' . $objDatabase->SqlVariable($this->strIpCreated) . ',
							`Verified` = ' . $objDatabase->SqlVariable($this->intVerified) . ',
							`DomainCreated` = ' . $objDatabase->SqlVariable($this->strDomainCreated) . '
						WHERE
							`IdConfirmation` = ' . $objDatabase->SqlVariable($this->intIdConfirmation) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;


			// Return
			return $mixToReturn;
		}

		/**
		 * Delete this Confirmation
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdConfirmation)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Confirmation with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Confirmation::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`confirmation`
				WHERE
					`IdConfirmation` = ' . $objDatabase->SqlVariable($this->intIdConfirmation) . '');
		}

		/**
		 * Delete all Confirmations
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Confirmation::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`confirmation`');
		}

		/**
		 * Truncate confirmation table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Confirmation::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `confirmation`');
		}

		/**
		 * Reload this Confirmation from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Confirmation object.');

			// Reload the Object
			$objReloaded = Confirmation::Load($this->intIdConfirmation);

			// Update $this's local variables to match
			$this->dttCreateDateTime = $objReloaded->dttCreateDateTime;
			$this->strFromSms = $objReloaded->strFromSms;
			$this->strBodySms = $objReloaded->strBodySms;
			$this->strCodeSms = $objReloaded->strCodeSms;
			$this->strPhoneSms = $objReloaded->strPhoneSms;
			$this->strEmailCreated = $objReloaded->strEmailCreated;
			$this->strPasswordCreated = $objReloaded->strPasswordCreated;
			$this->strIpCreated = $objReloaded->strIpCreated;
			$this->intVerified = $objReloaded->intVerified;
			$this->strDomainCreated = $objReloaded->strDomainCreated;
		}



		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'IdConfirmation':
					/**
					 * Gets the value for intIdConfirmation (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdConfirmation;

				case 'CreateDateTime':
					/**
					 * Gets the value for dttCreateDateTime 
					 * @return QDateTime
					 */
					return $this->dttCreateDateTime;

				case 'FromSms':
					/**
					 * Gets the value for strFromSms 
					 * @return string
					 */
					return $this->strFromSms;

				case 'BodySms':
					/**
					 * Gets the value for strBodySms 
					 * @return string
					 */
					return $this->strBodySms;

				case 'CodeSms':
					/**
					 * Gets the value for strCodeSms 
					 * @return string
					 */
					return $this->strCodeSms;

				case 'PhoneSms':
					/**
					 * Gets the value for strPhoneSms 
					 * @return string
					 */
					return $this->strPhoneSms;

				case 'EmailCreated':
					/**
					 * Gets the value for strEmailCreated 
					 * @return string
					 */
					return $this->strEmailCreated;

				case 'PasswordCreated':
					/**
					 * Gets the value for strPasswordCreated 
					 * @return string
					 */
					return $this->strPasswordCreated;

				case 'IpCreated':
					/**
					 * Gets the value for strIpCreated 
					 * @return string
					 */
					return $this->strIpCreated;

				case 'Verified':
					/**
					 * Gets the value for intVerified (Not Null)
					 * @return integer
					 */
					return $this->intVerified;

				case 'DomainCreated':
					/**
					 * Gets the value for strDomainCreated 
					 * @return string
					 */
					return $this->strDomainCreated;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////


				case '__Restored':
					return $this->__blnRestored;

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
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'CreateDateTime':
					/**
					 * Sets the value for dttCreateDateTime 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttCreateDateTime = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FromSms':
					/**
					 * Sets the value for strFromSms 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFromSms = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BodySms':
					/**
					 * Sets the value for strBodySms 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strBodySms = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CodeSms':
					/**
					 * Sets the value for strCodeSms 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCodeSms = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PhoneSms':
					/**
					 * Sets the value for strPhoneSms 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPhoneSms = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'EmailCreated':
					/**
					 * Sets the value for strEmailCreated 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEmailCreated = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PasswordCreated':
					/**
					 * Sets the value for strPasswordCreated 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPasswordCreated = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IpCreated':
					/**
					 * Sets the value for strIpCreated 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strIpCreated = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Verified':
					/**
					 * Sets the value for intVerified (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intVerified = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DomainCreated':
					/**
					 * Sets the value for strDomainCreated 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDomainCreated = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string
		 */
		public function GetVirtualAttribute($strName) {
			if (array_key_exists($strName, $this->__strVirtualAttributeArray))
				return $this->__strVirtualAttributeArray[$strName];
			return null;
		}



		///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Confirmation"><sequence>';
			$strToReturn .= '<element name="IdConfirmation" type="xsd:int"/>';
			$strToReturn .= '<element name="CreateDateTime" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="FromSms" type="xsd:string"/>';
			$strToReturn .= '<element name="BodySms" type="xsd:string"/>';
			$strToReturn .= '<element name="CodeSms" type="xsd:string"/>';
			$strToReturn .= '<element name="PhoneSms" type="xsd:string"/>';
			$strToReturn .= '<element name="EmailCreated" type="xsd:string"/>';
			$strToReturn .= '<element name="PasswordCreated" type="xsd:string"/>';
			$strToReturn .= '<element name="IpCreated" type="xsd:string"/>';
			$strToReturn .= '<element name="Verified" type="xsd:int"/>';
			$strToReturn .= '<element name="DomainCreated" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Confirmation', $strComplexTypeArray)) {
				$strComplexTypeArray['Confirmation'] = Confirmation::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Confirmation::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Confirmation();
			if (property_exists($objSoapObject, 'IdConfirmation'))
				$objToReturn->intIdConfirmation = $objSoapObject->IdConfirmation;
			if (property_exists($objSoapObject, 'CreateDateTime'))
				$objToReturn->dttCreateDateTime = new QDateTime($objSoapObject->CreateDateTime);
			if (property_exists($objSoapObject, 'FromSms'))
				$objToReturn->strFromSms = $objSoapObject->FromSms;
			if (property_exists($objSoapObject, 'BodySms'))
				$objToReturn->strBodySms = $objSoapObject->BodySms;
			if (property_exists($objSoapObject, 'CodeSms'))
				$objToReturn->strCodeSms = $objSoapObject->CodeSms;
			if (property_exists($objSoapObject, 'PhoneSms'))
				$objToReturn->strPhoneSms = $objSoapObject->PhoneSms;
			if (property_exists($objSoapObject, 'EmailCreated'))
				$objToReturn->strEmailCreated = $objSoapObject->EmailCreated;
			if (property_exists($objSoapObject, 'PasswordCreated'))
				$objToReturn->strPasswordCreated = $objSoapObject->PasswordCreated;
			if (property_exists($objSoapObject, 'IpCreated'))
				$objToReturn->strIpCreated = $objSoapObject->IpCreated;
			if (property_exists($objSoapObject, 'Verified'))
				$objToReturn->intVerified = $objSoapObject->Verified;
			if (property_exists($objSoapObject, 'DomainCreated'))
				$objToReturn->strDomainCreated = $objSoapObject->DomainCreated;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Confirmation::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttCreateDateTime)
				$objObject->dttCreateDateTime = $objObject->dttCreateDateTime->qFormat(QDateTime::FormatSoap);
			return $objObject;
		}


		////////////////////////////////////////
		// METHODS for JSON Object Translation
		////////////////////////////////////////

		// this function is required for objects that implement the
		// IteratorAggregate interface
		public function getIterator() {
			///////////////////
			// Member Variables
			///////////////////
			$iArray['IdConfirmation'] = $this->intIdConfirmation;
			$iArray['CreateDateTime'] = $this->dttCreateDateTime;
			$iArray['FromSms'] = $this->strFromSms;
			$iArray['BodySms'] = $this->strBodySms;
			$iArray['CodeSms'] = $this->strCodeSms;
			$iArray['PhoneSms'] = $this->strPhoneSms;
			$iArray['EmailCreated'] = $this->strEmailCreated;
			$iArray['PasswordCreated'] = $this->strPasswordCreated;
			$iArray['IpCreated'] = $this->strIpCreated;
			$iArray['Verified'] = $this->intVerified;
			$iArray['DomainCreated'] = $this->strDomainCreated;
			return new ArrayIterator($iArray);
		}

		// this function returns a Json formatted string using the
		// IteratorAggregate interface
		public function getJson() {
			return json_encode($this->getIterator());
		}


	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdConfirmation
     * @property-read QQNode $CreateDateTime
     * @property-read QQNode $FromSms
     * @property-read QQNode $BodySms
     * @property-read QQNode $CodeSms
     * @property-read QQNode $PhoneSms
     * @property-read QQNode $EmailCreated
     * @property-read QQNode $PasswordCreated
     * @property-read QQNode $IpCreated
     * @property-read QQNode $Verified
     * @property-read QQNode $DomainCreated
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeConfirmation extends QQNode {
		protected $strTableName = 'confirmation';
		protected $strPrimaryKey = 'IdConfirmation';
		protected $strClassName = 'Confirmation';
		public function __get($strName) {
			switch ($strName) {
				case 'IdConfirmation':
					return new QQNode('IdConfirmation', 'IdConfirmation', 'Integer', $this);
				case 'CreateDateTime':
					return new QQNode('CreateDateTime', 'CreateDateTime', 'DateTime', $this);
				case 'FromSms':
					return new QQNode('FromSms', 'FromSms', 'VarChar', $this);
				case 'BodySms':
					return new QQNode('BodySms', 'BodySms', 'Blob', $this);
				case 'CodeSms':
					return new QQNode('CodeSms', 'CodeSms', 'VarChar', $this);
				case 'PhoneSms':
					return new QQNode('PhoneSms', 'PhoneSms', 'VarChar', $this);
				case 'EmailCreated':
					return new QQNode('EmailCreated', 'EmailCreated', 'VarChar', $this);
				case 'PasswordCreated':
					return new QQNode('PasswordCreated', 'PasswordCreated', 'VarChar', $this);
				case 'IpCreated':
					return new QQNode('IpCreated', 'IpCreated', 'VarChar', $this);
				case 'Verified':
					return new QQNode('Verified', 'Verified', 'Integer', $this);
				case 'DomainCreated':
					return new QQNode('DomainCreated', 'DomainCreated', 'VarChar', $this);

				case '_PrimaryKeyNode':
					return new QQNode('IdConfirmation', 'IdConfirmation', 'Integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

    /**
     * @property-read QQNode $IdConfirmation
     * @property-read QQNode $CreateDateTime
     * @property-read QQNode $FromSms
     * @property-read QQNode $BodySms
     * @property-read QQNode $CodeSms
     * @property-read QQNode $PhoneSms
     * @property-read QQNode $EmailCreated
     * @property-read QQNode $PasswordCreated
     * @property-read QQNode $IpCreated
     * @property-read QQNode $Verified
     * @property-read QQNode $DomainCreated
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeConfirmation extends QQReverseReferenceNode {
		protected $strTableName = 'confirmation';
		protected $strPrimaryKey = 'IdConfirmation';
		protected $strClassName = 'Confirmation';
		public function __get($strName) {
			switch ($strName) {
				case 'IdConfirmation':
					return new QQNode('IdConfirmation', 'IdConfirmation', 'integer', $this);
				case 'CreateDateTime':
					return new QQNode('CreateDateTime', 'CreateDateTime', 'QDateTime', $this);
				case 'FromSms':
					return new QQNode('FromSms', 'FromSms', 'string', $this);
				case 'BodySms':
					return new QQNode('BodySms', 'BodySms', 'string', $this);
				case 'CodeSms':
					return new QQNode('CodeSms', 'CodeSms', 'string', $this);
				case 'PhoneSms':
					return new QQNode('PhoneSms', 'PhoneSms', 'string', $this);
				case 'EmailCreated':
					return new QQNode('EmailCreated', 'EmailCreated', 'string', $this);
				case 'PasswordCreated':
					return new QQNode('PasswordCreated', 'PasswordCreated', 'string', $this);
				case 'IpCreated':
					return new QQNode('IpCreated', 'IpCreated', 'string', $this);
				case 'Verified':
					return new QQNode('Verified', 'Verified', 'integer', $this);
				case 'DomainCreated':
					return new QQNode('DomainCreated', 'DomainCreated', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('IdConfirmation', 'IdConfirmation', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>
