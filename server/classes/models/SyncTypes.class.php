<?php

/**
 * 
 *
 * @version 1.107
 * @package entity
 */
class SyncTypes extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='SyncTypes';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='sync_types';
	const SQL_INSERT='INSERT INTO `sync_types` (`sync_type_id`,`name`,`unit_type_id`,`operation_shift_id`,`legal_character_id`,`orientation_type_id`,`special_type_id`) VALUES (?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `sync_types` (`name`,`unit_type_id`,`operation_shift_id`,`legal_character_id`,`orientation_type_id`,`special_type_id`) VALUES (?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `sync_types` SET `sync_type_id`=?,`name`=?,`unit_type_id`=?,`operation_shift_id`=?,`legal_character_id`=?,`orientation_type_id`=?,`special_type_id`=? WHERE `sync_type_id`=?';
	const SQL_SELECT_PK='SELECT * FROM `sync_types` WHERE `sync_type_id`=?';
	const SQL_DELETE_PK='DELETE FROM `sync_types` WHERE `sync_type_id`=?';
	const FIELD_SYNC_TYPE_ID=1570483733;
	const FIELD_NAME=-1271604476;
	const FIELD_UNIT_TYPE_ID=440890366;
	const FIELD_OPERATION_SHIFT_ID=-1548437879;
	const FIELD_LEGAL_CHARACTER_ID=-480440720;
	const FIELD_ORIENTATION_TYPE_ID=-1564267720;
	const FIELD_SPECIAL_TYPE_ID=2089666721;
	private static $PRIMARY_KEYS=array(self::FIELD_SYNC_TYPE_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_SYNC_TYPE_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_SYNC_TYPE_ID=>'sync_type_id',
		self::FIELD_NAME=>'name',
		self::FIELD_UNIT_TYPE_ID=>'unit_type_id',
		self::FIELD_OPERATION_SHIFT_ID=>'operation_shift_id',
		self::FIELD_LEGAL_CHARACTER_ID=>'legal_character_id',
		self::FIELD_ORIENTATION_TYPE_ID=>'orientation_type_id',
		self::FIELD_SPECIAL_TYPE_ID=>'special_type_id');
	private static $PROPERTY_NAMES=array(
		self::FIELD_SYNC_TYPE_ID=>'syncTypeId',
		self::FIELD_NAME=>'name',
		self::FIELD_UNIT_TYPE_ID=>'unitTypeId',
		self::FIELD_OPERATION_SHIFT_ID=>'operationShiftId',
		self::FIELD_LEGAL_CHARACTER_ID=>'legalCharacterId',
		self::FIELD_ORIENTATION_TYPE_ID=>'orientationTypeId',
		self::FIELD_SPECIAL_TYPE_ID=>'specialTypeId');
	private static $PROPERTY_TYPES=array(
		self::FIELD_SYNC_TYPE_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_UNIT_TYPE_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_OPERATION_SHIFT_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_LEGAL_CHARACTER_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ORIENTATION_TYPE_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_SPECIAL_TYPE_ID=>Db2PhpEntity::PHP_TYPE_INT);
	private static $FIELD_TYPES=array(
		self::FIELD_SYNC_TYPE_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_NAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_UNIT_TYPE_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_OPERATION_SHIFT_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_LEGAL_CHARACTER_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_ORIENTATION_TYPE_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_SPECIAL_TYPE_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_SYNC_TYPE_ID=>null,
		self::FIELD_NAME=>null,
		self::FIELD_UNIT_TYPE_ID=>null,
		self::FIELD_OPERATION_SHIFT_ID=>null,
		self::FIELD_LEGAL_CHARACTER_ID=>null,
		self::FIELD_ORIENTATION_TYPE_ID=>null,
		self::FIELD_SPECIAL_TYPE_ID=>null);
	private $syncTypeId;
	private $name;
	private $unitTypeId;
	private $operationShiftId;
	private $legalCharacterId;
	private $orientationTypeId;
	private $specialTypeId;

	/**
	 * set value for sync_type_id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $syncTypeId
	 */
	public function setSyncTypeId($syncTypeId) {
		$this->notifyChanged(self::FIELD_SYNC_TYPE_ID,$this->syncTypeId,$syncTypeId);
		$this->syncTypeId=$syncTypeId;
	}

	/**
	 * get value for sync_type_id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getSyncTypeId() {
		return $this->syncTypeId;
	}

	/**
	 * set value for name 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @param mixed $name
	 */
	public function setName($name) {
		$this->notifyChanged(self::FIELD_NAME,$this->name,$name);
		$this->name=$name;
	}

	/**
	 * get value for name 
	 *
	 * type:VARCHAR,size:255,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * set value for unit_type_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $unitTypeId
	 */
	public function setUnitTypeId($unitTypeId) {
		$this->notifyChanged(self::FIELD_UNIT_TYPE_ID,$this->unitTypeId,$unitTypeId);
		$this->unitTypeId=$unitTypeId;
	}

	/**
	 * get value for unit_type_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getUnitTypeId() {
		return $this->unitTypeId;
	}

	/**
	 * set value for operation_shift_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $operationShiftId
	 */
	public function setOperationShiftId($operationShiftId) {
		$this->notifyChanged(self::FIELD_OPERATION_SHIFT_ID,$this->operationShiftId,$operationShiftId);
		$this->operationShiftId=$operationShiftId;
	}

	/**
	 * get value for operation_shift_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getOperationShiftId() {
		return $this->operationShiftId;
	}

	/**
	 * set value for legal_character_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $legalCharacterId
	 */
	public function setLegalCharacterId($legalCharacterId) {
		$this->notifyChanged(self::FIELD_LEGAL_CHARACTER_ID,$this->legalCharacterId,$legalCharacterId);
		$this->legalCharacterId=$legalCharacterId;
	}

	/**
	 * get value for legal_character_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getLegalCharacterId() {
		return $this->legalCharacterId;
	}

	/**
	 * set value for orientation_type_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $orientationTypeId
	 */
	public function setOrientationTypeId($orientationTypeId) {
		$this->notifyChanged(self::FIELD_ORIENTATION_TYPE_ID,$this->orientationTypeId,$orientationTypeId);
		$this->orientationTypeId=$orientationTypeId;
	}

	/**
	 * get value for orientation_type_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getOrientationTypeId() {
		return $this->orientationTypeId;
	}

	/**
	 * set value for special_type_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @param mixed $specialTypeId
	 */
	public function setSpecialTypeId($specialTypeId) {
		$this->notifyChanged(self::FIELD_SPECIAL_TYPE_ID,$this->specialTypeId,$specialTypeId);
		$this->specialTypeId=$specialTypeId;
	}

	/**
	 * get value for special_type_id 
	 *
	 * type:INT,size:10,default:null,index,nullable
	 *
	 * @return mixed
	 */
	public function getSpecialTypeId() {
		return $this->specialTypeId;
	}

	/**
	 * Get table name
	 *
	 * @return string
	 */
	public static function getTableName() {
		return self::SQL_TABLE_NAME;
	}

	/**
	 * Get array with field id as index and field name as value
	 *
	 * @return array
	 */
	public static function getFieldNames() {
		return self::$FIELD_NAMES;
	}

	/**
	 * Get array with field id as index and property name as value
	 *
	 * @return array
	 */
	public static function getPropertyNames() {
		return self::$PROPERTY_NAMES;
	}

	/**
	 * get the field name for the passed field id.
	 *
	 * @param int $fieldId
	 * @param bool $fullyQualifiedName true if field name should be qualified by table name
	 * @return string field name for the passed field id, null if the field doesn't exist
	 */
	public static function getFieldNameByFieldId($fieldId, $fullyQualifiedName=true) {
		if (!array_key_exists($fieldId, self::$FIELD_NAMES)) {
			return null;
		}
		$fieldName=self::SQL_IDENTIFIER_QUOTE . self::$FIELD_NAMES[$fieldId] . self::SQL_IDENTIFIER_QUOTE;
		if ($fullyQualifiedName) {
			return self::SQL_IDENTIFIER_QUOTE . self::SQL_TABLE_NAME . self::SQL_IDENTIFIER_QUOTE . '.' . $fieldName;
		}
		return $fieldName;
	}

	/**
	 * Get array with field ids of identifiers
	 *
	 * @return array
	 */
	public static function getIdentifierFields() {
		return self::$PRIMARY_KEYS;
	}

	/**
	 * Get array with field ids of autoincrement fields
	 *
	 * @return array
	 */
	public static function getAutoincrementFields() {
		return self::$AUTOINCREMENT_FIELDS;
	}

	/**
	 * Get array with field id as index and property type as value
	 *
	 * @return array
	 */
	public static function getPropertyTypes() {
		return self::$PROPERTY_TYPES;
	}

	/**
	 * Get array with field id as index and field type as value
	 *
	 * @return array
	 */
	public static function getFieldTypes() {
		return self::$FIELD_TYPES;
	}

	/**
	 * Assign default values according to table
	 * 
	 */
	public function assignDefaultValues() {
		$this->assignByArray(self::$DEFAULT_VALUES);
	}


	/**
	 * return hash with the field name as index and the field value as value.
	 *
	 * @return array
	 */
	public function toHash() {
		$array=$this->toArray();
		$hash=array();
		foreach ($array as $fieldId=>$value) {
			$hash[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		return $hash;
	}

	/**
	 * return array with the field id as index and the field value as value.
	 *
	 * @return array
	 */
	public function toArray() {
		return array(
			self::FIELD_SYNC_TYPE_ID=>$this->getSyncTypeId(),
			self::FIELD_NAME=>$this->getName(),
			self::FIELD_UNIT_TYPE_ID=>$this->getUnitTypeId(),
			self::FIELD_OPERATION_SHIFT_ID=>$this->getOperationShiftId(),
			self::FIELD_LEGAL_CHARACTER_ID=>$this->getLegalCharacterId(),
			self::FIELD_ORIENTATION_TYPE_ID=>$this->getOrientationTypeId(),
			self::FIELD_SPECIAL_TYPE_ID=>$this->getSpecialTypeId());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_SYNC_TYPE_ID=>$this->getSyncTypeId());
	}

	/**
	 * cached statements
	 *
	 * @var array<string,array<string,PDOStatement>>
	 */
	private static $stmts=array();
	private static $cacheStatements=true;
	
	/**
	 * prepare passed string as statement or return cached if enabled and available
	 *
	 * @param PDO $db
	 * @param string $statement
	 * @return PDOStatement
	 */
	protected static function prepareStatement(PDO $db, $statement) {
		if(self::isCacheStatements()) {
			if (in_array($statement, array(self::SQL_INSERT, self::SQL_INSERT_AUTOINCREMENT, self::SQL_UPDATE, self::SQL_SELECT_PK, self::SQL_DELETE_PK))) {
				$dbInstanceId=spl_object_hash($db);
				if (empty(self::$stmts[$statement][$dbInstanceId])) {
					self::$stmts[$statement][$dbInstanceId]=$db->prepare($statement);
				}
				return self::$stmts[$statement][$dbInstanceId];
			}
		}
		return $db->prepare($statement);
	}

	/**
	 * Enable statement cache
	 *
	 * @param bool $cache
	 */
	public static function setCacheStatements($cache) {
		self::$cacheStatements=true==$cache;
	}

	/**
	 * Check if statement cache is enabled
	 *
	 * @return bool
	 */
	public static function isCacheStatements() {
		return self::$cacheStatements;
	}
	
	/**
	 * check if this instance exists in the database
	 *
	 * @param PDO $db
	 * @return bool
	 */
	public function existsInDatabase(PDO $db) {
		$filter=array();
		foreach ($this->getPrimaryKeyValues() as $fieldId=>$value) {
			$filter[]=new DFC($fieldId, $value, DFC::EXACT_NULLSAFE);
		}
		return 0!=count(self::findByFilter($db, $filter, true));
	}
	
	/**
	 * Update to database if exists, otherwise insert
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateInsertToDatabase(PDO $db) {
		if ($this->existsInDatabase($db)) {
			return $this->updateToDatabase($db);
		} else {
			return $this->insertIntoDatabase($db);
		}
	}

	/**
	 * Query by Example.
	 *
	 * Match by attributes of passed example instance and return matched rows as an array of SyncTypes instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param SyncTypes $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return SyncTypes[]
	 */
	public static function findByExample(PDO $db,SyncTypes $example, $and=true, $sort=null) {
		$exampleValues=$example->toArray();
		$filter=array();
		foreach ($exampleValues as $fieldId=>$value) {
			if (null!==$value) {
				$filter[$fieldId]=$value;
			}
		}
		return self::findByFilter($db, $filter, $and, $sort);
	}

	/**
	 * Query by filter.
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * Will return matched rows as an array of SyncTypes instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return SyncTypes[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `sync_types`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of SyncTypes instances
	 *
	 * @param PDOStatement $stmt
	 * @return SyncTypes[]
	 */
	public static function fromStatement(PDOStatement $stmt) {
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * returns the result as an array of SyncTypes instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return SyncTypes[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new SyncTypes();
			$o->assignByHash($result);
			$o->notifyPristine();
			$resultInstances[]=$o;
		}
		$stmt->closeCursor();
		return $resultInstances;
	}

	/**
	 * Get sql WHERE part from filter.
	 *
	 * @param array $filter
	 * @param bool $and
	 * @param bool $fullyQualifiedNames true if field names should be qualified by table name
	 * @param bool $prependWhere true if WHERE should be prepended to conditions
	 * @return string
	 */
	public static function buildSqlWhere($filter, $and, $fullyQualifiedNames=true, $prependWhere=false) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		return $filter->buildSqlWhere(new self::$CLASS_NAME, $fullyQualifiedNames, $prependWhere);
	}

	/**
	 * get sql ORDER BY part from DSCs
	 *
	 * @param array $sort array of DSC instances
	 * @return string
	 */
	protected static function buildSqlOrderBy($sort) {
		return DSC::buildSqlOrderBy(new self::$CLASS_NAME, $sort);
	}

	/**
	 * bind values from filter to statement
	 *
	 * @param PDOStatement $stmt
	 * @param DFCInterface $filter
	 */
	public static function bindValuesForFilter(PDOStatement &$stmt, DFCInterface $filter) {
		$filter->bindValuesForFilter(new self::$CLASS_NAME, $stmt);
	}

	/**
	 * Execute select query and return matched rows as an array of SyncTypes instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return SyncTypes[]
	 */
	public static function findBySql(PDO $db, $sql) {
		$stmt=$db->query($sql);
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * Delete rows matching the filter
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * @param PDO $db
	 * @param array $filter
	 * @param bool $and
	 * @return mixed
	 */
	public static function deleteByFilter(PDO $db, $filter, $and=true) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		if (0==count($filter)) {
			throw new InvalidArgumentException('refusing to delete without filter'); // just comment out this line if you are brave
		}
		$sql='DELETE FROM `sync_types`'
		. self::buildSqlWhere($filter, $and, false, true);
		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Assign values from array with the field id as index and the value as value
	 *
	 * @param array $array
	 */
	public function assignByArray($array) {
		$result=array();
		foreach ($array as $fieldId=>$value) {
			$result[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		$this->assignByHash($result);
	}

	/**
	 * Assign values from hash where the indexes match the tables field names
	 *
	 * @param array $result
	 */
	public function assignByHash($result) {
		$this->setSyncTypeId($result['sync_type_id']);
		$this->setName($result['name']);
		$this->setUnitTypeId($result['unit_type_id']);
		$this->setOperationShiftId($result['operation_shift_id']);
		$this->setLegalCharacterId($result['legal_character_id']);
		$this->setOrientationTypeId($result['orientation_type_id']);
		$this->setSpecialTypeId($result['special_type_id']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return SyncTypes
	 */
	public static function findById(PDO $db,$syncTypeId) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$syncTypeId);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$result=$stmt->fetch(PDO::FETCH_ASSOC);
		$stmt->closeCursor();
		if(!$result) {
			return null;
		}
		$o=new SyncTypes();
		$o->assignByHash($result);
		$o->notifyPristine();
		return $o;
	}

	/**
	 * Bind all values to statement
	 *
	 * @param PDOStatement $stmt
	 */
	protected function bindValues(PDOStatement &$stmt) {
		$stmt->bindValue(1,$this->getSyncTypeId());
		$stmt->bindValue(2,$this->getName());
		$stmt->bindValue(3,$this->getUnitTypeId());
		$stmt->bindValue(4,$this->getOperationShiftId());
		$stmt->bindValue(5,$this->getLegalCharacterId());
		$stmt->bindValue(6,$this->getOrientationTypeId());
		$stmt->bindValue(7,$this->getSpecialTypeId());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getSyncTypeId()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getName());
			$stmt->bindValue(2,$this->getUnitTypeId());
			$stmt->bindValue(3,$this->getOperationShiftId());
			$stmt->bindValue(4,$this->getLegalCharacterId());
			$stmt->bindValue(5,$this->getOrientationTypeId());
			$stmt->bindValue(6,$this->getSpecialTypeId());
		} else {
			$stmt=self::prepareStatement($db,self::SQL_INSERT);
			$this->bindValues($stmt);
		}
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$lastInsertId=$db->lastInsertId();
		if (false!==$lastInsertId) {
			$this->setSyncTypeId($lastInsertId);
		}
		$stmt->closeCursor();
		$this->notifyPristine();
		return $affected;
	}


	/**
	 * Update this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateToDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_UPDATE);
		$this->bindValues($stmt);
		$stmt->bindValue(8,$this->getSyncTypeId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		$this->notifyPristine();
		return $affected;
	}


	/**
	 * Delete this instance from the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function deleteFromDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_DELETE_PK);
		$stmt->bindValue(1,$this->getSyncTypeId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Fetch LegalCharacters which references this SyncTypes. Will return null in case reference is invalid.
	 * `sync_types`.`legal_character_id` -> `legal_characters`.`legal_character_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return LegalCharacters
	 */
	public function fetchLegalCharacters(PDO $db, $sort=null) {
		$filter=array(LegalCharacters::FIELD_LEGAL_CHARACTER_ID=>$this->getLegalCharacterId());
		$result=LegalCharacters::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch OperationShifts which references this SyncTypes. Will return null in case reference is invalid.
	 * `sync_types`.`operation_shift_id` -> `operation_shifts`.`operation_shift_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return OperationShifts
	 */
	public function fetchOperationShifts(PDO $db, $sort=null) {
		$filter=array(OperationShifts::FIELD_OPERATION_SHIFT_ID=>$this->getOperationShiftId());
		$result=OperationShifts::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch OrientationTypes which references this SyncTypes. Will return null in case reference is invalid.
	 * `sync_types`.`orientation_type_id` -> `orientation_types`.`orientation_type_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return OrientationTypes
	 */
	public function fetchOrientationTypes(PDO $db, $sort=null) {
		$filter=array(OrientationTypes::FIELD_ORIENTATION_TYPE_ID=>$this->getOrientationTypeId());
		$result=OrientationTypes::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch SpecialTypes which references this SyncTypes. Will return null in case reference is invalid.
	 * `sync_types`.`special_type_id` -> `special_types`.`special_type_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return SpecialTypes
	 */
	public function fetchSpecialTypes(PDO $db, $sort=null) {
		$filter=array(SpecialTypes::FIELD_SPECIAL_TYPE_ID=>$this->getSpecialTypeId());
		$result=SpecialTypes::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}

	/**
	 * Fetch UnitTypes which references this SyncTypes. Will return null in case reference is invalid.
	 * `sync_types`.`unit_type_id` -> `unit_types`.`unit_type_id`
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $sort array of DSC instances
	 * @return UnitTypes
	 */
	public function fetchUnitTypes(PDO $db, $sort=null) {
		$filter=array(UnitTypes::FIELD_UNIT_TYPE_ID=>$this->getUnitTypeId());
		$result=UnitTypes::findByFilter($db, $filter, true, $sort);
		return empty($result) ? null : $result[0];
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'SyncTypes');
	}

	/**
	 * get single SyncTypes instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return SyncTypes
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new SyncTypes();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
			$o->notifyPristine();
		return $o;
	}

	/**
	 * get all instances of SyncTypes from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return SyncTypes[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('SyncTypes') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>