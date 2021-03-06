<?php
	/**
	 * The abstract UserGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the User subclass which
	 * extends this UserGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the User class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdUser the value for intIdUser (Read-Only PK)
	 * @property string $Email the value for strEmail (Unique)
	 * @property string $Password the value for strPassword (Not Null)
	 * @property string $FirstName the value for strFirstName (Not Null)
	 * @property string $MiddleName the value for strMiddleName (Not Null)
	 * @property string $LastName the value for strLastName (Not Null)
	 * @property string $Country the value for strCountry (Not Null)
	 * @property string $City the value for strCity (Not Null)
	 * @property string $Phone the value for strPhone (Not Null)
	 * @property QDateTime $Birthday the value for dttBirthday 
	 * @property string $YearGraduation the value for strYearGraduation (Not Null)
	 * @property string $Cohort the value for strCohort (Not Null)
	 * @property string $ImageDriver the value for strImageDriver (Not Null)
	 * @property string $ImagePhoto the value for strImagePhoto (Not Null)
	 * @property integer $MiningOption the value for intMiningOption (Not Null)
	 * @property integer $StatusUser the value for intStatusUser (Not Null)
	 * @property string $Mac the value for strMac (Not Null)
	 * @property string $TokenMac the value for strTokenMac (Not Null)
	 * @property integer $StatusTokenMac the value for intStatusTokenMac (Not Null)
	 * @property string $WalletAddress the value for strWalletAddress (Not Null)
	 * @property integer $NumberMasterNode the value for intNumberMasterNode (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class UserGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column user.IdUser
		 * @var integer intIdUser
		 */
		protected $intIdUser;
		const IdUserDefault = null;


		/**
		 * Protected member variable that maps to the database column user.Email
		 * @var string strEmail
		 */
		protected $strEmail;
		const EmailMaxLength = 50;
		const EmailDefault = null;


		/**
		 * Protected member variable that maps to the database column user.Password
		 * @var string strPassword
		 */
		protected $strPassword;
		const PasswordMaxLength = 50;
		const PasswordDefault = null;


		/**
		 * Protected member variable that maps to the database column user.FirstName
		 * @var string strFirstName
		 */
		protected $strFirstName;
		const FirstNameMaxLength = 100;
		const FirstNameDefault = null;


		/**
		 * Protected member variable that maps to the database column user.MiddleName
		 * @var string strMiddleName
		 */
		protected $strMiddleName;
		const MiddleNameMaxLength = 100;
		const MiddleNameDefault = null;


		/**
		 * Protected member variable that maps to the database column user.LastName
		 * @var string strLastName
		 */
		protected $strLastName;
		const LastNameMaxLength = 100;
		const LastNameDefault = null;


		/**
		 * Protected member variable that maps to the database column user.Country
		 * @var string strCountry
		 */
		protected $strCountry;
		const CountryMaxLength = 100;
		const CountryDefault = null;


		/**
		 * Protected member variable that maps to the database column user.City
		 * @var string strCity
		 */
		protected $strCity;
		const CityMaxLength = 100;
		const CityDefault = null;


		/**
		 * Protected member variable that maps to the database column user.Phone
		 * @var string strPhone
		 */
		protected $strPhone;
		const PhoneMaxLength = 20;
		const PhoneDefault = null;


		/**
		 * Protected member variable that maps to the database column user.Birthday
		 * @var QDateTime dttBirthday
		 */
		protected $dttBirthday;
		const BirthdayDefault = null;


		/**
		 * Protected member variable that maps to the database column user.YearGraduation
		 * @var string strYearGraduation
		 */
		protected $strYearGraduation;
		const YearGraduationMaxLength = 50;
		const YearGraduationDefault = null;


		/**
		 * Protected member variable that maps to the database column user.Cohort
		 * @var string strCohort
		 */
		protected $strCohort;
		const CohortMaxLength = 60;
		const CohortDefault = null;


		/**
		 * Protected member variable that maps to the database column user.ImageDriver
		 * @var string strImageDriver
		 */
		protected $strImageDriver;
		const ImageDriverMaxLength = 100;
		const ImageDriverDefault = null;


		/**
		 * Protected member variable that maps to the database column user.ImagePhoto
		 * @var string strImagePhoto
		 */
		protected $strImagePhoto;
		const ImagePhotoMaxLength = 100;
		const ImagePhotoDefault = null;


		/**
		 * Protected member variable that maps to the database column user.MiningOption
		 * @var integer intMiningOption
		 */
		protected $intMiningOption;
		const MiningOptionDefault = null;


		/**
		 * Protected member variable that maps to the database column user.StatusUser
		 * @var integer intStatusUser
		 */
		protected $intStatusUser;
		const StatusUserDefault = null;


		/**
		 * Protected member variable that maps to the database column user.Mac
		 * @var string strMac
		 */
		protected $strMac;
		const MacMaxLength = 100;
		const MacDefault = null;


		/**
		 * Protected member variable that maps to the database column user.TokenMac
		 * @var string strTokenMac
		 */
		protected $strTokenMac;
		const TokenMacMaxLength = 100;
		const TokenMacDefault = null;


		/**
		 * Protected member variable that maps to the database column user.StatusTokenMac
		 * @var integer intStatusTokenMac
		 */
		protected $intStatusTokenMac;
		const StatusTokenMacDefault = null;


		/**
		 * Protected member variable that maps to the database column user.WalletAddress
		 * @var string strWalletAddress
		 */
		protected $strWalletAddress;
		const WalletAddressMaxLength = 100;
		const WalletAddressDefault = null;


		/**
		 * Protected member variable that maps to the database column user.NumberMasterNode
		 * @var integer intNumberMasterNode
		 */
		protected $intNumberMasterNode;
		const NumberMasterNodeDefault = null;


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
			$this->intIdUser = User::IdUserDefault;
			$this->strEmail = User::EmailDefault;
			$this->strPassword = User::PasswordDefault;
			$this->strFirstName = User::FirstNameDefault;
			$this->strMiddleName = User::MiddleNameDefault;
			$this->strLastName = User::LastNameDefault;
			$this->strCountry = User::CountryDefault;
			$this->strCity = User::CityDefault;
			$this->strPhone = User::PhoneDefault;
			$this->dttBirthday = (User::BirthdayDefault === null)?null:new QDateTime(User::BirthdayDefault);
			$this->strYearGraduation = User::YearGraduationDefault;
			$this->strCohort = User::CohortDefault;
			$this->strImageDriver = User::ImageDriverDefault;
			$this->strImagePhoto = User::ImagePhotoDefault;
			$this->intMiningOption = User::MiningOptionDefault;
			$this->intStatusUser = User::StatusUserDefault;
			$this->strMac = User::MacDefault;
			$this->strTokenMac = User::TokenMacDefault;
			$this->intStatusTokenMac = User::StatusTokenMacDefault;
			$this->strWalletAddress = User::WalletAddressDefault;
			$this->intNumberMasterNode = User::NumberMasterNodeDefault;
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
		 * Load a User from PK Info
		 * @param integer $intIdUser
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User
		 */
		public static function Load($intIdUser, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return User::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::User()->IdUser, $intIdUser)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Users
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call User::QueryArray to perform the LoadAll query
			try {
				return User::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Users
		 * @return int
		 */
		public static function CountAll() {
			// Call User::QueryCount to perform the CountAll query
			return User::QueryCount(QQ::All());
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
			$objDatabase = User::GetDatabase();

			// Create/Build out the QueryBuilder object with User-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'user');
			User::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('user');

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
		 * Static Qcubed Query method to query for a single User object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return User the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = User::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new User object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = User::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return User::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of User objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return User[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = User::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return User::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of User objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = User::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = User::GetDatabase();

			$strQuery = User::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/user', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = User::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this User
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'user';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'IdUser', $strAliasPrefix . 'IdUser');
			$objBuilder->AddSelectItem($strTableName, 'Email', $strAliasPrefix . 'Email');
			$objBuilder->AddSelectItem($strTableName, 'Password', $strAliasPrefix . 'Password');
			$objBuilder->AddSelectItem($strTableName, 'FirstName', $strAliasPrefix . 'FirstName');
			$objBuilder->AddSelectItem($strTableName, 'MiddleName', $strAliasPrefix . 'MiddleName');
			$objBuilder->AddSelectItem($strTableName, 'LastName', $strAliasPrefix . 'LastName');
			$objBuilder->AddSelectItem($strTableName, 'Country', $strAliasPrefix . 'Country');
			$objBuilder->AddSelectItem($strTableName, 'City', $strAliasPrefix . 'City');
			$objBuilder->AddSelectItem($strTableName, 'Phone', $strAliasPrefix . 'Phone');
			$objBuilder->AddSelectItem($strTableName, 'Birthday', $strAliasPrefix . 'Birthday');
			$objBuilder->AddSelectItem($strTableName, 'YearGraduation', $strAliasPrefix . 'YearGraduation');
			$objBuilder->AddSelectItem($strTableName, 'Cohort', $strAliasPrefix . 'Cohort');
			$objBuilder->AddSelectItem($strTableName, 'ImageDriver', $strAliasPrefix . 'ImageDriver');
			$objBuilder->AddSelectItem($strTableName, 'ImagePhoto', $strAliasPrefix . 'ImagePhoto');
			$objBuilder->AddSelectItem($strTableName, 'MiningOption', $strAliasPrefix . 'MiningOption');
			$objBuilder->AddSelectItem($strTableName, 'StatusUser', $strAliasPrefix . 'StatusUser');
			$objBuilder->AddSelectItem($strTableName, 'Mac', $strAliasPrefix . 'Mac');
			$objBuilder->AddSelectItem($strTableName, 'TokenMac', $strAliasPrefix . 'TokenMac');
			$objBuilder->AddSelectItem($strTableName, 'StatusTokenMac', $strAliasPrefix . 'StatusTokenMac');
			$objBuilder->AddSelectItem($strTableName, 'WalletAddress', $strAliasPrefix . 'WalletAddress');
			$objBuilder->AddSelectItem($strTableName, 'NumberMasterNode', $strAliasPrefix . 'NumberMasterNode');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a User from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this User::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return User
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the User object
			$objToReturn = new User();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'IdUser', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'IdUser'] : $strAliasPrefix . 'IdUser';
			$objToReturn->intIdUser = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'Email', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Email'] : $strAliasPrefix . 'Email';
			$objToReturn->strEmail = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'Password', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Password'] : $strAliasPrefix . 'Password';
			$objToReturn->strPassword = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'FirstName', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'FirstName'] : $strAliasPrefix . 'FirstName';
			$objToReturn->strFirstName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'MiddleName', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'MiddleName'] : $strAliasPrefix . 'MiddleName';
			$objToReturn->strMiddleName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'LastName', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'LastName'] : $strAliasPrefix . 'LastName';
			$objToReturn->strLastName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'Country', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Country'] : $strAliasPrefix . 'Country';
			$objToReturn->strCountry = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'City', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'City'] : $strAliasPrefix . 'City';
			$objToReturn->strCity = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'Phone', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Phone'] : $strAliasPrefix . 'Phone';
			$objToReturn->strPhone = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'Birthday', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Birthday'] : $strAliasPrefix . 'Birthday';
			$objToReturn->dttBirthday = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'YearGraduation', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'YearGraduation'] : $strAliasPrefix . 'YearGraduation';
			$objToReturn->strYearGraduation = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'Cohort', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Cohort'] : $strAliasPrefix . 'Cohort';
			$objToReturn->strCohort = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'ImageDriver', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'ImageDriver'] : $strAliasPrefix . 'ImageDriver';
			$objToReturn->strImageDriver = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'ImagePhoto', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'ImagePhoto'] : $strAliasPrefix . 'ImagePhoto';
			$objToReturn->strImagePhoto = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'MiningOption', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'MiningOption'] : $strAliasPrefix . 'MiningOption';
			$objToReturn->intMiningOption = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'StatusUser', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'StatusUser'] : $strAliasPrefix . 'StatusUser';
			$objToReturn->intStatusUser = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'Mac', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'Mac'] : $strAliasPrefix . 'Mac';
			$objToReturn->strMac = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'TokenMac', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'TokenMac'] : $strAliasPrefix . 'TokenMac';
			$objToReturn->strTokenMac = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'StatusTokenMac', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'StatusTokenMac'] : $strAliasPrefix . 'StatusTokenMac';
			$objToReturn->intStatusTokenMac = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'WalletAddress', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'WalletAddress'] : $strAliasPrefix . 'WalletAddress';
			$objToReturn->strWalletAddress = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'NumberMasterNode', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'NumberMasterNode'] : $strAliasPrefix . 'NumberMasterNode';
			$objToReturn->intNumberMasterNode = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdUser != $objPreviousItem->IdUser) {
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
				$strAliasPrefix = 'user__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Users from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return User[]
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
					$objItem = User::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = User::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single User object,
		 * by IdUser Index(es)
		 * @param integer $intIdUser
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User
		*/
		public static function LoadByIdUser($intIdUser, $objOptionalClauses = null) {
			return User::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::User()->IdUser, $intIdUser)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load a single User object,
		 * by Email Index(es)
		 * @param string $strEmail
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return User
		*/
		public static function LoadByEmail($strEmail, $objOptionalClauses = null) {
			return User::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::User()->Email, $strEmail)
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
		 * Save this User
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `user` (
							`Email`,
							`Password`,
							`FirstName`,
							`MiddleName`,
							`LastName`,
							`Country`,
							`City`,
							`Phone`,
							`Birthday`,
							`YearGraduation`,
							`Cohort`,
							`ImageDriver`,
							`ImagePhoto`,
							`MiningOption`,
							`StatusUser`,
							`Mac`,
							`TokenMac`,
							`StatusTokenMac`,
							`WalletAddress`,
							`NumberMasterNode`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strEmail) . ',
							' . $objDatabase->SqlVariable($this->strPassword) . ',
							' . $objDatabase->SqlVariable($this->strFirstName) . ',
							' . $objDatabase->SqlVariable($this->strMiddleName) . ',
							' . $objDatabase->SqlVariable($this->strLastName) . ',
							' . $objDatabase->SqlVariable($this->strCountry) . ',
							' . $objDatabase->SqlVariable($this->strCity) . ',
							' . $objDatabase->SqlVariable($this->strPhone) . ',
							' . $objDatabase->SqlVariable($this->dttBirthday) . ',
							' . $objDatabase->SqlVariable($this->strYearGraduation) . ',
							' . $objDatabase->SqlVariable($this->strCohort) . ',
							' . $objDatabase->SqlVariable($this->strImageDriver) . ',
							' . $objDatabase->SqlVariable($this->strImagePhoto) . ',
							' . $objDatabase->SqlVariable($this->intMiningOption) . ',
							' . $objDatabase->SqlVariable($this->intStatusUser) . ',
							' . $objDatabase->SqlVariable($this->strMac) . ',
							' . $objDatabase->SqlVariable($this->strTokenMac) . ',
							' . $objDatabase->SqlVariable($this->intStatusTokenMac) . ',
							' . $objDatabase->SqlVariable($this->strWalletAddress) . ',
							' . $objDatabase->SqlVariable($this->intNumberMasterNode) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdUser = $objDatabase->InsertId('user', 'IdUser');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`user`
						SET
							`Email` = ' . $objDatabase->SqlVariable($this->strEmail) . ',
							`Password` = ' . $objDatabase->SqlVariable($this->strPassword) . ',
							`FirstName` = ' . $objDatabase->SqlVariable($this->strFirstName) . ',
							`MiddleName` = ' . $objDatabase->SqlVariable($this->strMiddleName) . ',
							`LastName` = ' . $objDatabase->SqlVariable($this->strLastName) . ',
							`Country` = ' . $objDatabase->SqlVariable($this->strCountry) . ',
							`City` = ' . $objDatabase->SqlVariable($this->strCity) . ',
							`Phone` = ' . $objDatabase->SqlVariable($this->strPhone) . ',
							`Birthday` = ' . $objDatabase->SqlVariable($this->dttBirthday) . ',
							`YearGraduation` = ' . $objDatabase->SqlVariable($this->strYearGraduation) . ',
							`Cohort` = ' . $objDatabase->SqlVariable($this->strCohort) . ',
							`ImageDriver` = ' . $objDatabase->SqlVariable($this->strImageDriver) . ',
							`ImagePhoto` = ' . $objDatabase->SqlVariable($this->strImagePhoto) . ',
							`MiningOption` = ' . $objDatabase->SqlVariable($this->intMiningOption) . ',
							`StatusUser` = ' . $objDatabase->SqlVariable($this->intStatusUser) . ',
							`Mac` = ' . $objDatabase->SqlVariable($this->strMac) . ',
							`TokenMac` = ' . $objDatabase->SqlVariable($this->strTokenMac) . ',
							`StatusTokenMac` = ' . $objDatabase->SqlVariable($this->intStatusTokenMac) . ',
							`WalletAddress` = ' . $objDatabase->SqlVariable($this->strWalletAddress) . ',
							`NumberMasterNode` = ' . $objDatabase->SqlVariable($this->intNumberMasterNode) . '
						WHERE
							`IdUser` = ' . $objDatabase->SqlVariable($this->intIdUser) . '
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
		 * Delete this User
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdUser)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this User with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`user`
				WHERE
					`IdUser` = ' . $objDatabase->SqlVariable($this->intIdUser) . '');
		}

		/**
		 * Delete all Users
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`user`');
		}

		/**
		 * Truncate user table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = User::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `user`');
		}

		/**
		 * Reload this User from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved User object.');

			// Reload the Object
			$objReloaded = User::Load($this->intIdUser);

			// Update $this's local variables to match
			$this->strEmail = $objReloaded->strEmail;
			$this->strPassword = $objReloaded->strPassword;
			$this->strFirstName = $objReloaded->strFirstName;
			$this->strMiddleName = $objReloaded->strMiddleName;
			$this->strLastName = $objReloaded->strLastName;
			$this->strCountry = $objReloaded->strCountry;
			$this->strCity = $objReloaded->strCity;
			$this->strPhone = $objReloaded->strPhone;
			$this->dttBirthday = $objReloaded->dttBirthday;
			$this->strYearGraduation = $objReloaded->strYearGraduation;
			$this->strCohort = $objReloaded->strCohort;
			$this->strImageDriver = $objReloaded->strImageDriver;
			$this->strImagePhoto = $objReloaded->strImagePhoto;
			$this->intMiningOption = $objReloaded->intMiningOption;
			$this->intStatusUser = $objReloaded->intStatusUser;
			$this->strMac = $objReloaded->strMac;
			$this->strTokenMac = $objReloaded->strTokenMac;
			$this->intStatusTokenMac = $objReloaded->intStatusTokenMac;
			$this->strWalletAddress = $objReloaded->strWalletAddress;
			$this->intNumberMasterNode = $objReloaded->intNumberMasterNode;
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
				case 'IdUser':
					/**
					 * Gets the value for intIdUser (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdUser;

				case 'Email':
					/**
					 * Gets the value for strEmail (Unique)
					 * @return string
					 */
					return $this->strEmail;

				case 'Password':
					/**
					 * Gets the value for strPassword (Not Null)
					 * @return string
					 */
					return $this->strPassword;

				case 'FirstName':
					/**
					 * Gets the value for strFirstName (Not Null)
					 * @return string
					 */
					return $this->strFirstName;

				case 'MiddleName':
					/**
					 * Gets the value for strMiddleName (Not Null)
					 * @return string
					 */
					return $this->strMiddleName;

				case 'LastName':
					/**
					 * Gets the value for strLastName (Not Null)
					 * @return string
					 */
					return $this->strLastName;

				case 'Country':
					/**
					 * Gets the value for strCountry (Not Null)
					 * @return string
					 */
					return $this->strCountry;

				case 'City':
					/**
					 * Gets the value for strCity (Not Null)
					 * @return string
					 */
					return $this->strCity;

				case 'Phone':
					/**
					 * Gets the value for strPhone (Not Null)
					 * @return string
					 */
					return $this->strPhone;

				case 'Birthday':
					/**
					 * Gets the value for dttBirthday 
					 * @return QDateTime
					 */
					return $this->dttBirthday;

				case 'YearGraduation':
					/**
					 * Gets the value for strYearGraduation (Not Null)
					 * @return string
					 */
					return $this->strYearGraduation;

				case 'Cohort':
					/**
					 * Gets the value for strCohort (Not Null)
					 * @return string
					 */
					return $this->strCohort;

				case 'ImageDriver':
					/**
					 * Gets the value for strImageDriver (Not Null)
					 * @return string
					 */
					return $this->strImageDriver;

				case 'ImagePhoto':
					/**
					 * Gets the value for strImagePhoto (Not Null)
					 * @return string
					 */
					return $this->strImagePhoto;

				case 'MiningOption':
					/**
					 * Gets the value for intMiningOption (Not Null)
					 * @return integer
					 */
					return $this->intMiningOption;

				case 'StatusUser':
					/**
					 * Gets the value for intStatusUser (Not Null)
					 * @return integer
					 */
					return $this->intStatusUser;

				case 'Mac':
					/**
					 * Gets the value for strMac (Not Null)
					 * @return string
					 */
					return $this->strMac;

				case 'TokenMac':
					/**
					 * Gets the value for strTokenMac (Not Null)
					 * @return string
					 */
					return $this->strTokenMac;

				case 'StatusTokenMac':
					/**
					 * Gets the value for intStatusTokenMac (Not Null)
					 * @return integer
					 */
					return $this->intStatusTokenMac;

				case 'WalletAddress':
					/**
					 * Gets the value for strWalletAddress (Not Null)
					 * @return string
					 */
					return $this->strWalletAddress;

				case 'NumberMasterNode':
					/**
					 * Gets the value for intNumberMasterNode (Not Null)
					 * @return integer
					 */
					return $this->intNumberMasterNode;


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
				case 'Email':
					/**
					 * Sets the value for strEmail (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEmail = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Password':
					/**
					 * Sets the value for strPassword (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPassword = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FirstName':
					/**
					 * Sets the value for strFirstName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFirstName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MiddleName':
					/**
					 * Sets the value for strMiddleName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMiddleName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LastName':
					/**
					 * Sets the value for strLastName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLastName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Country':
					/**
					 * Sets the value for strCountry (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCountry = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'City':
					/**
					 * Sets the value for strCity (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCity = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Phone':
					/**
					 * Sets the value for strPhone (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPhone = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Birthday':
					/**
					 * Sets the value for dttBirthday 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttBirthday = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'YearGraduation':
					/**
					 * Sets the value for strYearGraduation (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strYearGraduation = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Cohort':
					/**
					 * Sets the value for strCohort (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCohort = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ImageDriver':
					/**
					 * Sets the value for strImageDriver (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strImageDriver = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ImagePhoto':
					/**
					 * Sets the value for strImagePhoto (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strImagePhoto = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MiningOption':
					/**
					 * Sets the value for intMiningOption (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intMiningOption = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'StatusUser':
					/**
					 * Sets the value for intStatusUser (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intStatusUser = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Mac':
					/**
					 * Sets the value for strMac (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMac = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TokenMac':
					/**
					 * Sets the value for strTokenMac (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTokenMac = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'StatusTokenMac':
					/**
					 * Sets the value for intStatusTokenMac (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intStatusTokenMac = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'WalletAddress':
					/**
					 * Sets the value for strWalletAddress (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strWalletAddress = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NumberMasterNode':
					/**
					 * Sets the value for intNumberMasterNode (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intNumberMasterNode = QType::Cast($mixValue, QType::Integer));
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
			$strToReturn = '<complexType name="User"><sequence>';
			$strToReturn .= '<element name="IdUser" type="xsd:int"/>';
			$strToReturn .= '<element name="Email" type="xsd:string"/>';
			$strToReturn .= '<element name="Password" type="xsd:string"/>';
			$strToReturn .= '<element name="FirstName" type="xsd:string"/>';
			$strToReturn .= '<element name="MiddleName" type="xsd:string"/>';
			$strToReturn .= '<element name="LastName" type="xsd:string"/>';
			$strToReturn .= '<element name="Country" type="xsd:string"/>';
			$strToReturn .= '<element name="City" type="xsd:string"/>';
			$strToReturn .= '<element name="Phone" type="xsd:string"/>';
			$strToReturn .= '<element name="Birthday" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="YearGraduation" type="xsd:string"/>';
			$strToReturn .= '<element name="Cohort" type="xsd:string"/>';
			$strToReturn .= '<element name="ImageDriver" type="xsd:string"/>';
			$strToReturn .= '<element name="ImagePhoto" type="xsd:string"/>';
			$strToReturn .= '<element name="MiningOption" type="xsd:int"/>';
			$strToReturn .= '<element name="StatusUser" type="xsd:int"/>';
			$strToReturn .= '<element name="Mac" type="xsd:string"/>';
			$strToReturn .= '<element name="TokenMac" type="xsd:string"/>';
			$strToReturn .= '<element name="StatusTokenMac" type="xsd:int"/>';
			$strToReturn .= '<element name="WalletAddress" type="xsd:string"/>';
			$strToReturn .= '<element name="NumberMasterNode" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('User', $strComplexTypeArray)) {
				$strComplexTypeArray['User'] = User::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, User::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new User();
			if (property_exists($objSoapObject, 'IdUser'))
				$objToReturn->intIdUser = $objSoapObject->IdUser;
			if (property_exists($objSoapObject, 'Email'))
				$objToReturn->strEmail = $objSoapObject->Email;
			if (property_exists($objSoapObject, 'Password'))
				$objToReturn->strPassword = $objSoapObject->Password;
			if (property_exists($objSoapObject, 'FirstName'))
				$objToReturn->strFirstName = $objSoapObject->FirstName;
			if (property_exists($objSoapObject, 'MiddleName'))
				$objToReturn->strMiddleName = $objSoapObject->MiddleName;
			if (property_exists($objSoapObject, 'LastName'))
				$objToReturn->strLastName = $objSoapObject->LastName;
			if (property_exists($objSoapObject, 'Country'))
				$objToReturn->strCountry = $objSoapObject->Country;
			if (property_exists($objSoapObject, 'City'))
				$objToReturn->strCity = $objSoapObject->City;
			if (property_exists($objSoapObject, 'Phone'))
				$objToReturn->strPhone = $objSoapObject->Phone;
			if (property_exists($objSoapObject, 'Birthday'))
				$objToReturn->dttBirthday = new QDateTime($objSoapObject->Birthday);
			if (property_exists($objSoapObject, 'YearGraduation'))
				$objToReturn->strYearGraduation = $objSoapObject->YearGraduation;
			if (property_exists($objSoapObject, 'Cohort'))
				$objToReturn->strCohort = $objSoapObject->Cohort;
			if (property_exists($objSoapObject, 'ImageDriver'))
				$objToReturn->strImageDriver = $objSoapObject->ImageDriver;
			if (property_exists($objSoapObject, 'ImagePhoto'))
				$objToReturn->strImagePhoto = $objSoapObject->ImagePhoto;
			if (property_exists($objSoapObject, 'MiningOption'))
				$objToReturn->intMiningOption = $objSoapObject->MiningOption;
			if (property_exists($objSoapObject, 'StatusUser'))
				$objToReturn->intStatusUser = $objSoapObject->StatusUser;
			if (property_exists($objSoapObject, 'Mac'))
				$objToReturn->strMac = $objSoapObject->Mac;
			if (property_exists($objSoapObject, 'TokenMac'))
				$objToReturn->strTokenMac = $objSoapObject->TokenMac;
			if (property_exists($objSoapObject, 'StatusTokenMac'))
				$objToReturn->intStatusTokenMac = $objSoapObject->StatusTokenMac;
			if (property_exists($objSoapObject, 'WalletAddress'))
				$objToReturn->strWalletAddress = $objSoapObject->WalletAddress;
			if (property_exists($objSoapObject, 'NumberMasterNode'))
				$objToReturn->intNumberMasterNode = $objSoapObject->NumberMasterNode;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, User::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttBirthday)
				$objObject->dttBirthday = $objObject->dttBirthday->qFormat(QDateTime::FormatSoap);
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
			$iArray['IdUser'] = $this->intIdUser;
			$iArray['Email'] = $this->strEmail;
			$iArray['Password'] = $this->strPassword;
			$iArray['FirstName'] = $this->strFirstName;
			$iArray['MiddleName'] = $this->strMiddleName;
			$iArray['LastName'] = $this->strLastName;
			$iArray['Country'] = $this->strCountry;
			$iArray['City'] = $this->strCity;
			$iArray['Phone'] = $this->strPhone;
			$iArray['Birthday'] = $this->dttBirthday;
			$iArray['YearGraduation'] = $this->strYearGraduation;
			$iArray['Cohort'] = $this->strCohort;
			$iArray['ImageDriver'] = $this->strImageDriver;
			$iArray['ImagePhoto'] = $this->strImagePhoto;
			$iArray['MiningOption'] = $this->intMiningOption;
			$iArray['StatusUser'] = $this->intStatusUser;
			$iArray['Mac'] = $this->strMac;
			$iArray['TokenMac'] = $this->strTokenMac;
			$iArray['StatusTokenMac'] = $this->intStatusTokenMac;
			$iArray['WalletAddress'] = $this->strWalletAddress;
			$iArray['NumberMasterNode'] = $this->intNumberMasterNode;
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
     * @property-read QQNode $IdUser
     * @property-read QQNode $Email
     * @property-read QQNode $Password
     * @property-read QQNode $FirstName
     * @property-read QQNode $MiddleName
     * @property-read QQNode $LastName
     * @property-read QQNode $Country
     * @property-read QQNode $City
     * @property-read QQNode $Phone
     * @property-read QQNode $Birthday
     * @property-read QQNode $YearGraduation
     * @property-read QQNode $Cohort
     * @property-read QQNode $ImageDriver
     * @property-read QQNode $ImagePhoto
     * @property-read QQNode $MiningOption
     * @property-read QQNode $StatusUser
     * @property-read QQNode $Mac
     * @property-read QQNode $TokenMac
     * @property-read QQNode $StatusTokenMac
     * @property-read QQNode $WalletAddress
     * @property-read QQNode $NumberMasterNode
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeUser extends QQNode {
		protected $strTableName = 'user';
		protected $strPrimaryKey = 'IdUser';
		protected $strClassName = 'User';
		public function __get($strName) {
			switch ($strName) {
				case 'IdUser':
					return new QQNode('IdUser', 'IdUser', 'Integer', $this);
				case 'Email':
					return new QQNode('Email', 'Email', 'VarChar', $this);
				case 'Password':
					return new QQNode('Password', 'Password', 'VarChar', $this);
				case 'FirstName':
					return new QQNode('FirstName', 'FirstName', 'VarChar', $this);
				case 'MiddleName':
					return new QQNode('MiddleName', 'MiddleName', 'VarChar', $this);
				case 'LastName':
					return new QQNode('LastName', 'LastName', 'VarChar', $this);
				case 'Country':
					return new QQNode('Country', 'Country', 'VarChar', $this);
				case 'City':
					return new QQNode('City', 'City', 'VarChar', $this);
				case 'Phone':
					return new QQNode('Phone', 'Phone', 'VarChar', $this);
				case 'Birthday':
					return new QQNode('Birthday', 'Birthday', 'Date', $this);
				case 'YearGraduation':
					return new QQNode('YearGraduation', 'YearGraduation', 'VarChar', $this);
				case 'Cohort':
					return new QQNode('Cohort', 'Cohort', 'VarChar', $this);
				case 'ImageDriver':
					return new QQNode('ImageDriver', 'ImageDriver', 'VarChar', $this);
				case 'ImagePhoto':
					return new QQNode('ImagePhoto', 'ImagePhoto', 'VarChar', $this);
				case 'MiningOption':
					return new QQNode('MiningOption', 'MiningOption', 'Integer', $this);
				case 'StatusUser':
					return new QQNode('StatusUser', 'StatusUser', 'Integer', $this);
				case 'Mac':
					return new QQNode('Mac', 'Mac', 'VarChar', $this);
				case 'TokenMac':
					return new QQNode('TokenMac', 'TokenMac', 'VarChar', $this);
				case 'StatusTokenMac':
					return new QQNode('StatusTokenMac', 'StatusTokenMac', 'Integer', $this);
				case 'WalletAddress':
					return new QQNode('WalletAddress', 'WalletAddress', 'VarChar', $this);
				case 'NumberMasterNode':
					return new QQNode('NumberMasterNode', 'NumberMasterNode', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('IdUser', 'IdUser', 'Integer', $this);
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
     * @property-read QQNode $IdUser
     * @property-read QQNode $Email
     * @property-read QQNode $Password
     * @property-read QQNode $FirstName
     * @property-read QQNode $MiddleName
     * @property-read QQNode $LastName
     * @property-read QQNode $Country
     * @property-read QQNode $City
     * @property-read QQNode $Phone
     * @property-read QQNode $Birthday
     * @property-read QQNode $YearGraduation
     * @property-read QQNode $Cohort
     * @property-read QQNode $ImageDriver
     * @property-read QQNode $ImagePhoto
     * @property-read QQNode $MiningOption
     * @property-read QQNode $StatusUser
     * @property-read QQNode $Mac
     * @property-read QQNode $TokenMac
     * @property-read QQNode $StatusTokenMac
     * @property-read QQNode $WalletAddress
     * @property-read QQNode $NumberMasterNode
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeUser extends QQReverseReferenceNode {
		protected $strTableName = 'user';
		protected $strPrimaryKey = 'IdUser';
		protected $strClassName = 'User';
		public function __get($strName) {
			switch ($strName) {
				case 'IdUser':
					return new QQNode('IdUser', 'IdUser', 'integer', $this);
				case 'Email':
					return new QQNode('Email', 'Email', 'string', $this);
				case 'Password':
					return new QQNode('Password', 'Password', 'string', $this);
				case 'FirstName':
					return new QQNode('FirstName', 'FirstName', 'string', $this);
				case 'MiddleName':
					return new QQNode('MiddleName', 'MiddleName', 'string', $this);
				case 'LastName':
					return new QQNode('LastName', 'LastName', 'string', $this);
				case 'Country':
					return new QQNode('Country', 'Country', 'string', $this);
				case 'City':
					return new QQNode('City', 'City', 'string', $this);
				case 'Phone':
					return new QQNode('Phone', 'Phone', 'string', $this);
				case 'Birthday':
					return new QQNode('Birthday', 'Birthday', 'QDateTime', $this);
				case 'YearGraduation':
					return new QQNode('YearGraduation', 'YearGraduation', 'string', $this);
				case 'Cohort':
					return new QQNode('Cohort', 'Cohort', 'string', $this);
				case 'ImageDriver':
					return new QQNode('ImageDriver', 'ImageDriver', 'string', $this);
				case 'ImagePhoto':
					return new QQNode('ImagePhoto', 'ImagePhoto', 'string', $this);
				case 'MiningOption':
					return new QQNode('MiningOption', 'MiningOption', 'integer', $this);
				case 'StatusUser':
					return new QQNode('StatusUser', 'StatusUser', 'integer', $this);
				case 'Mac':
					return new QQNode('Mac', 'Mac', 'string', $this);
				case 'TokenMac':
					return new QQNode('TokenMac', 'TokenMac', 'string', $this);
				case 'StatusTokenMac':
					return new QQNode('StatusTokenMac', 'StatusTokenMac', 'integer', $this);
				case 'WalletAddress':
					return new QQNode('WalletAddress', 'WalletAddress', 'string', $this);
				case 'NumberMasterNode':
					return new QQNode('NumberMasterNode', 'NumberMasterNode', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('IdUser', 'IdUser', 'integer', $this);
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
