<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package PUT
 * 
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * Ενημέρωση : Μονάδας
 * 
 * 
 * Η κλήση της συνάρτησης αυτής μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο PUT :
 * <br> http://mmsch.teiath.gr/api/units <br><br>
 *
 * 
 * Παράδειγμα κλήσης της μεθόδου με <b>cURL</b> (console) :
 * <code>
 * curl -X PUT http://mmsch.teiath.gr/api/units \
 *   -H "Content-Type: application/json" \
 *   -H "Accept: application/json" \
 *   -u username:password \
 *   -d '{"mm_id" : "value", \
 *        "registry_no" : "value", \
 *        "gluc" : "value", \
 *        "source" : "value", \
 *        "name" : "value", \
 *        "category" : "value", \
 *        "state" : "value", ...... }'
 * </code>
 * <br>
 * 
 * 
 * 
 * Παράδειγμα κλήσης της μεθόδου με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({ "mm_id" : "value",
 *                                  "registry_no" : "value",
 *                                  "gluc" : "value",
 *                                  "source" : "value",
 *                                  "name" : "value", 
 *                                  "category" : "value",
 *                                  "state" : "value", ...... });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("PUT", "http://mmsch.teiath.gr/api/units");
 *    http.setRequestHeader("Accept", "application/json");
 *    http.setRequestHeader("Content-type", "application/json; charset=utf-8");
 *    http.setRequestHeader("Content-length", params.length);
 *    
 *    http.onreadystatechange = function() {
 *        if(http.readyState == 4 && http.status == 200) {
 *            alert(http.responseText);
 *        }
 *    }
 *    
 *    http.send(params);
 * </script>
 * </code>
 * <br>
 * 
 * 
 * 
 * Παράδειγμα κλήσης της μεθόδου με <b>PHP</b> :
 * <code>
 * <?php
 * header("Content-Type: text/html; charset=utf-8");
 * 
 * $params = array(
 *      "mm_id" => "value", 
 *      "registry_no" => "value", 
 *      "gluc" => "value", 
 *      "source" => "value", 
 *      "name" => "value", 
 *      "category" => "value", 
 *      "state" => "value", ...... );
 * 
 * $curl = curl_init("http://mmsch.teiath.gr/api/units");
 * 
 * curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 * curl_setopt($curl, CURLOPT_USERPWD, "username:password");
 * curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
 * curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode( $params ));
 * curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 * 
 * $data = json_decode( curl_exec($curl) );
 * echo "<pre>"; var_dump( $data ); echo "</pre>";
 * ?>
 * </code>
 * <br>
 * 
 * 
 *  
 * Παράδειγμα κλήσης της συνάρτησης με <b>Ajax</b> :
 * <code>
 * <script>
 *    $.ajax({
 *        type: 'PUT',
 *        url: 'http://mmsch.teiath.gr/api/units',
 *        dataType: "json",
 *        data: {
 *            "mm_id" : "value",
 *            "registry_no" : "value",
 *            "gluc" : "value",
 *            "source" : "value",
 *            "name" : "value",
 *            "category" : "value",
 *            "state" : "value", ...... 
 *        },
 *        beforeSend: function(req) {
 *            req.setRequestHeader('Authorization', btoa('username' + ":" + 'password'));
 *        },
 *        success: function(data){
 *            console.log(data);
 *        }
 *    });
 * </script>
 * </code>
 * <br>
 *
 * 
 *  
 * @param integer $mm_id Κωδικός ΜΜ
 * <br>Ο Κωδικός ΜΜ της Μονάδας
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param string $registry_no Κωδικός ΥΠΕΠΘ
 * <br>Ο Κωδικός ΥΠΕΠΘ της Μονάδας
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param string $gluc Κωδικός Gluc
 * <br>Ο Κωδικός Gluc της Μονάδας
 * 
 * @param mixed $source Πρωτογενής Πηγή
 * <br>Η Πρωτογενής Πηγή της Μονάδας (Λεξικό : {@see GetSources})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param string $name Ονομασία
 * <br>Το Όνομα της Μονάδας
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param mixed $category Κατηγορία
 * <br>Η Κατηγορία της Μονάδας (Λεξικό : {@see GetCategories})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param mixed $state Κατάσταση
 * <br>Η Κατάσταση της Μονάδας (Λεξικό : {@see GetStates})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param mixed $education_level Βαθμίδα
 * <br>Το Επίπεδο Εκπαίδευσης της μονάδας (Λεξικό : {@see GetEducationLevels})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param string $special_name Ειδική Ονομασία 
 * <br>Το Προσωνύμιο της Μονάδας 
 * 
 * @param boolean $active Ενεργή/Ανενεργή
 * <br>Καθορίζει αν η Μονάδα είναι Ενεργή ή Ανενεργή
 * <br>Το πεδίο αυτό συνδυάζεται μαζί με το πεδίο <b>$suspended</b>
 * 
 * @param boolean $suspended Αναστολή
 * <br>Καθορίζει αν η Μονάδα είναι σε Αναστολή
 * <br>Το πεδίο αυτό συνδυάζεται μαζί με το πεδίο <b>$active</b>
 * 
 * @param mixed $region_edu_admin Περιφέρεια
 * <br>Η Περιφέρεια της Μονάδας (Λεξικό : {@see GetRegionEduAdmins})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param mixed $edu_admin Διεύθυνση Εκπαίδευσης
 * <br>Η Διεύθυνση Εκπαίδευσης της Μονάδας (Λεξικό : {@see GetEduAdmins})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param mixed $implementation_entity Φοράς Υλοποίησης
 * <br>Ο Φοράς Υλοποίησης της μονάδας (Λεξικό : {@see GetImplementationEntities})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param mixed $transfer_area Περιοχή Μετάθεσης
 * <br>Η Περιοχή Μετάθεσης της Μονάδας (Λεξικό : {@see GetTransferAreas})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param mixed $municipality Δήμος ΟΤΑ
 * <br>Ο Δήμος ΟΤΑ της Μονάδας (Λεξικό : {@see GetMunicipalities})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param mixed $prefecture Νομός
 * <br>Ο Νομός της Μονάδας (Λεξικό : {@see GetPrefectures})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param mixed $unit_type Τύπος Μονάδας
 * <br>Ο Τύπος της Μονάδας (Λεξικό : {@see GetUnitTypes})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * <br>Το πεδίο είναι υποχρεωτικό
 * 
 * @param mixed $operation_shift Ωράριο Λειτουργίας 
 * <br>Το Ωράριο Λειτουργίας της Μονάδας (Λεξικό : {@see GetOperationShifts})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param mixed $legal_character Νομικός Χαρακτήρας
 * <br>Ο Νομικός Χαρακτήρας της Μονάδας (Λεξικό : {@see GetLegalCharacters})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param mixed $orientation_type Προσανατολισμός
 * <br>Ο Σχολικός Προσανατολισμός  της Μονάδας (Λεξικό : {@see GetOrientationTypes})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param mixed $special_type Ειδικός Χαρακτηρισμός
 * <br>Καθορίζει αν η Μονάδα έχει Ειδικό Χαρακτηρισμό (Λεξικό : {@see GetSpecialTypes})
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param integer $postal_code Ταχυδρομικός Κώδικας
 * <br>Ο Ταχυδρομικός Κώδικας της Μονάδας
 * 
 * @param integer $area_team_number Ομάδα Σχολείων
 * <br>Η Ομάδα Σχολείων της Μονάδας (1η έως 40η)
 * 
 * @param string $email Ηλεκτρονική Αλληλογραφία
 * <br>Η Ηλεκτρονική Αλληλογραφία της Μονάδας
 * 
 * @param string $fax_number Αριθμός FAX 
 * <br>Ο Αριθμός Τηλεομοιοτυπίας (φαξ) της Μονάδας
 * 
 * @param integer $levels_count Πλήθος Τάξεων
 * <br>Το Πλήθος  των Τάξεων της Μονάδας
 *
 * @param string $street_address Οδός, Αριθμός  
 * <br>Η Διεύθυνση (Οδός και Αριθμός) της Μονάδας
 * 
 * @param string $phone_number Τηλέφωνο Επικοινωνίας
 * <br>Το Τηλέφωνο Επικοινωνίας της Μονάδας
 * 
 * @param integer $students_sum Πλήθος Μαθητών
 * <br>Το Πλήθος των Μαθητών της Μονάδας
 * 
 * @param integer $groups_count Πλήθος Τμημάτων
 * <br>Το Πλήθος των Τμημάτων της Μονάδας
 * 
 * @param datetime $last_update Ημερομηνία Τελευταίας Ενημέρωσης
 * <br>Η Ημερομηνία Τελευταίας Ενημέρωσης την Μονάδας
 * 
 * @param string $tax_number Αριθμός Φορολογικού Μητρώου
 * <br>Ο Αριθμός Φορολογικού Μητρώου της Μονάδας
 * 
 * @param mixed $tax_office Δ.Ο.Υ.
 * <br>Η Δ.Ο.Υ. της Μονάδας
 * <br>Αν η τιμή της παραμέτρου είναι αριθμητική η αναζήτηση γίνεται με τον κωδικό αλλιώς με την ονομασία
 * 
 * @param string $comments Παρατηρήσεις / Σχόλια
 * <br>Παρατηρήσεις / Σχόλια σχετικά με τη Μονάδα
 * 
 * @param string $latitude Γεωγραφικό Πλάτος
 * <br>Το Γεωγραφικό Πλάτος της Μονάδας
 * 
 * @param string $longitude Γεωγραφικό Μήκος
 * <br>Το Γεωγραφικό Μήκος της Μονάδας
 * 
 * @param string $positioning Κτηριακή Θέση 
 * <br>Η Κτηριακή Θέση της Μονάδας
 * 
 * @param string $fek Φ.Ε.Κ.
 * <br>Το Φ.Ε.Κ. (Αλλαγής Κατάστασης) της Μονάδας
 * 
 * 
 * 
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία : 
 * <br>
 * <ul>
 *  <li>sting : <b>method</b> : Το Όνομα της μεθόδου</li>
 *  <li>integer : <b>status</b> : Ο Κωδικός της κατάστασης</li>
 *  <li>string : <b>message</b> : Μήνυμα περιγραφής της κατάστασης </li>
 *  <li>integer : <b>mm_id</b> : Ο Κωδικός ΜΜ της μονάδας</li>
 * </ul>
 * 
 * 
 * 
 * @throws MissingMMIdValue {@see ExceptionMessages::MissingMMIdValue}
 * @throws InvalidMMIdType {@see ExceptionMessages::InvalidMMIdType}
 * @throws InvalidMMIdValue {@see ExceptionMessages::InvalidMMIdValue}
 * @throws MissingNameValue {@see ExceptionMessages::MissingNameValue}
 * @throws MissingCategoryValue {@see ExceptionMessages::MissingCategoryValue}
 * @throws InvalidCategoryValue {@see ExceptionMessages::InvalidCategoryValue}
 * @throws MissingStateValue {@see ExceptionMessages::MissingStateValue}
 * @throws InvalidStateValue {@see ExceptionMessages::InvalidStateValue}
 * @throws MissingSourceValue {@see ExceptionMessages::MissingSourceValue}
 * @throws InvalidSourceValue {@see ExceptionMessages::InvalidSourceValue}
 * @throws MissingUnitTypeValue {@see ExceptionMessages::MissingUnitTypeValue}
 * @throws InvalidUnitTypeValue {@see ExceptionMessages::InvalidUnitTypeValue}
 * @throws MissingRegistryNoValue {@see ExceptionMessages::MissingRegistryNoValue}
 * @throws MissingEducationLevelValue {@see ExceptionMessages::MissingEducationLevelValue}
 * @throws InvalidEducationLevelValue {@see ExceptionMessages::InvalidEducationLevelValue}
 * @throws InvalidRegionEduAdminValue {@see ExceptionMessages::InvalidRegionEduAdminValue}
 * @throws InvalidEduAdminValue {@see ExceptionMessages::InvalidEduAdminValue}
 * @throws InvalidImplementationEntityValue {@see ExceptionMessages::InvalidImplementationEntityValue}
 * @throws InvalidTransferAreaValue {@see ExceptionMessages::InvalidTransferAreaValue}
 * @throws InvalidMunicipalityValue {@see ExceptionMessages::InvalidMunicipalityValue}
 * @throws InvalidPrefectureValue {@see ExceptionMessages::InvalidPrefectureValue}
 * @throws InvalidOperationShiftValue {@see ExceptionMessages::InvalidOperationShiftValue}
 * @throws InvalidLegalCharacterValue {@see ExceptionMessages::InvalidLegalCharacterValue}
 * @throws InvalidOrientationTypeValue {@see ExceptionMessages::InvalidOrientationTypeValue}
 * @throws InvalidSpecialTypeValue {@see ExceptionMessages::InvalidSpecialTypeValue}
 * @throws InvalidTaxOfficeValue {@see ExceptionMessages::InvalidTaxOfficeValue}
 * 
 */

function PostUnits( 
    $registry_no, $gluc, $source, $name, $special_name, $state, $region_edu_admin, 
    $edu_admin, $implementation_entity, $transfer_area, $prefecture, $municipality, 
    $education_level, $phone_number, $email, $fax_number, $street_address, $postal_code, 
    $tax_number, $tax_office, $area_team_number, $category, $unit_type, $operation_shift, 
    $legal_character, $orientation_type, $special_type, $levels_count, $groups_count, 
    $students_count, $latitude, $longitude, $positioning, $last_update, $last_sync, 
    $comments, $fek )
{
    global $db, $entityManager;

    $unit = new Units();
    $transition = new Transitions();
    $result = array();

    $result["method"] = __FUNCTION__;
    
    try
    {

//==============================================================================

        unitsSetAssociation($unit, $category, 'Categories', 'category', 'Category');

//==============================================================================

        unitsSetAssociation($unit, $source, 'Sources', 'source', 'Source');

//==============================================================================

        unitsSetAssociation($unit, $unit_type, 'UnitTypes', 'unitType', 'UnitType');

//==============================================================================

        unitsSetParam($unit, $name, ExceptionMessages::InvalidNameType, 'name');

//==============================================================================

        unitsSetParam($unit, $registry_no, ExceptionCodes::InvalidRegistryNoType, 'registryNo');

//==============================================================================

        unitsSetAssociation($unit, $state, 'States', 'state', 'State');
        unitsSetAssociation($transition, $state, 'States', 'toState', 'State');

//==============================================================================

        unitsSetAssociation($unit, $education_level, 'EducationLevels', 'educationLevel', 'EducationLevel', false);

//==============================================================================

        unitsSetAssociation($unit, $region_edu_admin, 'RegionEduAdmins', 'regionEduAdmin', 'RegionEduAdmin', false);

//==============================================================================

        unitsSetAssociation($unit, $edu_admin, 'EduAdmins', 'eduAdmin', 'EduAdmin', false);

//==============================================================================

        unitsSetAssociation($unit, $transfer_area, 'TransferAreas', 'transferArea', 'TransferArea', false);

//==============================================================================

        unitsSetAssociation($unit, $implementation_entity, 'ImplementationEntities', 'implementationEntity', 'ImplementationEntity', false);

//==============================================================================

        unitsSetAssociation($unit, $prefecture, 'Prefectures', 'prefecture', 'Prefecture', false);

//==============================================================================

        unitsSetAssociation($unit, $municipality, 'Municipalities', 'municipality', 'Municipality', false);

//==============================================================================

        unitsSetAssociation($unit, $tax_office, 'TaxOffices', 'taxOffice', 'TaxOffice', false);

//==============================================================================

        unitsSetAssociation($unit, $operation_shift, 'OperationShifts', 'operationShift', 'OperationShift', false);

//==============================================================================

        unitsSetAssociation($unit, $legal_character, 'LegalCharacters', 'legalCharacter', 'LegalCharacter', false);

//==============================================================================

        unitsSetAssociation($unit, $orientation_type, 'OrientationTypes', 'orientationType', 'OrientationType', false);

//==============================================================================

        unitsSetAssociation($unit, $special_type, 'SpecialTypes', 'specialType', 'SpecialType', false);

//==============================================================================

        unitsSetParam($unit, $gluc, ExceptionCodes::InvalidGlucType, 'gluc');

//==============================================================================

        unitsSetParam($unit, $special_name, ExceptionCodes::InvalidSpecialNameType, 'specialName');

//==============================================================================

        unitsSetParam($unit, $phone_number, ExceptionCodes::InvalidPhoneNumberType, 'phoneNumber');

//==============================================================================

        unitsSetParam($unit, $email, ExceptionCodes::InvalidEmailType, 'email');

//==============================================================================

        unitsSetParam($unit, $fax_number, ExceptionCodes::InvalidFaxNumberType, 'fax_number');

//==============================================================================

        unitsSetParam($unit, $street_address, ExceptionCodes::InvalidStreetAddressType, 'street_address');

//==============================================================================

        unitsSetParam($unit, $postal_code, ExceptionCodes::InvalidPostalCodeType, 'postal_code');

//==============================================================================

        unitsSetParam($unit, $tax_number, ExceptionCodes::InvalidTaxNumberType, 'tax_number');

//==============================================================================

        unitsSetParam($unit, $area_team_number, ExceptionCodes::InvalidAreaTeamNumberType, 'area_team_number');

//==============================================================================

        unitsSetParam($unit, $levels_count, ExceptionCodes::InvalidLevelsCountType, 'levels_count');

//==============================================================================

        unitsSetParam($unit, $groups_count, ExceptionCodes::InvalidGroupsCountType, 'groups_count');

//==============================================================================

        unitsSetParam($unit, $students_count, ExceptionCodes::InvalidStudentsSumType, 'students_count');

//==============================================================================

        unitsSetParam($unit, $latitude, ExceptionCodes::InvalidLatitudeType, 'latitude');

//==============================================================================

        unitsSetParam($unit, $longitude, ExceptionCodes::InvalidLongitudeType, 'longitude');

//==============================================================================

        unitsSetParam($unit, $positioning, ExceptionCodes::InvalidPositioningType, 'positioning');

//==============================================================================

        unitsSetParam($unit, $last_update, ExceptionCodes::InvalidLastUpdateType, 'last_update');

//==============================================================================

        unitsSetParam($unit, $last_sync, ExceptionCodes::InvalidLastSyncType, 'last_sync');

//==============================================================================

        unitsSetParam($unit, $comments, 'Invalid comments', 'comments');

//==============================================================================

        unitsSetParam($transition, $fek, ExceptionCodes::InvalidFekType, 'fek');

//==============================================================================

        $entityManager->persist($unit);
        if ( $entityManager->flush($unit) )
        {
            $transition->setMm($unit);
            $entityManager->persist($transition);
            $entityManager->flush($transition);

//==============================================================================

            //SendMail('khitas@teiath.gr', 'Δημιουργία Μονάδας', 'Δημιουργία Μονάδας με κωδικό ΜΜ : '.$mm_id);
        }
      
        $result["status"] = ExceptionCodes::NoErrors;;
        $result["message"] = ExceptionMessages::NoErrors;
        $result["mm_id"] = $unit->getMmId();
        
    }
    catch (Exception $e) 
    {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."]: ".$e->getMessage();
    } 
       
    return $result;
}

function unitsSetAssociation(&$unit, $param, $repo, $field, $exceptionType, $required = true) {
    global $entityManager;
    $missingParam = 'Missing'.$exceptionType.'Param';
    $missingValue = 'Missing'.$exceptionType.'Value';
    $invalidType = 'Invalid'.$exceptionType.'Type';
    $invalidValue = 'Invalid'.$exceptionType.'Value';

    if ( $param === _MISSED_ ) {
        if(!$required) { return; }
        throw new Exception(constant('ExceptionMessages::'.$missingParam), constant('ExceptionCodes::'.$missingParam));
    } else if ( Validator::IsNull($param) ) {
        if(!$required) { return; }
        throw new Exception(constant('ExceptionMessages::'.$missingValue), constant('ExceptionCodes::'.$missingValue));
    } else if ( Validator::IsID($param) )
        $retriedObject = $entityManager->getRepository($repo)->find(Validator::ToID($param));
    else if ( Validator::IsValue($param) )
        $retriedObject = $entityManager->getRepository($repo)->findOneBy(array('name' => Validator::ToValue($param)));
    else
        throw new Exception(constant('ExceptionMessages::'.$invalidType), constant('ExceptionCodes::'.$invalidType));

    if ( !isset($retriedObject) )
        throw new Exception(constant('ExceptionMessages::'.$invalidValue), constant('ExceptionCodes::'.$invalidValue));
    else
    {
        $method = 'set'.ucfirst($field);
        $unit->$method($retriedObject);
    }
}

function unitsSetParam(&$unit, $param, $exceptionType, $field) {
    if ( $param === _MISSED_ )
    { } //throw new Exception(ExceptionMessages::MissingNameParam, ExceptionCodes::MissingNameParam);
    else if ( Validator::IsNull($param) )
    { } //throw new Exception(ExceptionMessages::MissingNameValue, ExceptionCodes::MissingNameValue);}
    else if ( Validator::IsValue($param) )
    {
        $method = 'set'.to_camel_case($field, true);
        $unit->$method(Validator::ToValue($param));
    }
    else
        throw new Exception($exceptionType." : ".$param, $exceptionType);
}

function to_camel_case($str, $capitalise_first_char = false) {
    if($capitalise_first_char) {
    $str[0] = strtoupper($str[0]);
    }
    $func = create_function('$c', 'return strtoupper($c[1]);');
    return preg_replace_callback('/_([a-z])/', $func, $str);
}
?>