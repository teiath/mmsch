<?php
/**
 * @version 2.0
 * @author  ΤΕΙ Αθήνας
 * @package POST
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * **Καταχώρηση Συσχέτισης Μονάδας**
 *
 * Η συνάρτηση καταχωρεί Συσχέτιση Μονάδας σύμφωνα με τις παραμέτρους που έγινε η κλήση.
 * <br>Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο **PUT** και route_api_name = **relations** :
 * <br>https://mm.sch.gr/api/relations
 *
 *
 * ***Ορισμός Μοναδικών Τιμών Παραμέτρων***
 * <br>Παρακάτω ορίζονται οι παραμέτροι που έχουν μοναδικές τιμές και πραγματοποιειται ελεγχος πριν κάθε καταχώρηση:
 *
 * ***Πίνακας Παραμέτρων***
 * * Στον Πίνακα Παραμέτρων <a href="#parameters">Parameters summary</a> εμφανίζονται όλοι οι παράμετροι με τους οποίους μπορεί να γίνει η κλήση της συνάρτησης.
 * * Όλοι οι παράμετροι είναι προαιρετικοί εκτός από αυτές που έχουν χαρακτηριστεί ως υποχρεωτικοί.
 * * Οι παράμετροι μπορούν να χρησιμοποιηθούν με οποιαδήποτε σειρά.
 * 
 * ***Πίνακας Αποτελεσμάτων***
 * * Στον Πίνακα Αποτελεσμάτων <a href="#returns">Return value summary</a> εμφανίζονται οι μεταβλητές που επιστρέφει η συνάρτηση.
 * * Όλες οι μεταβλητές επιστρέφονται σε <a href="#model">JSON objects</a>.
 * * Η μεταβλητή status καθορίζει αν η εκτέλεση της συνάρτησης ήταν επιτυχής (κωδικός 200) ή προέκυψε κάποιο σφάλμα.
 *
 * ***Πίνακας Σφαλμάτων***
 * * Στον Πίνακα Σφαλμάτων <a href="#throws">Thrown exceptions summary</a> εμφανίζονται τα Μηνύματα Σφαλμάτων που μπορεί να προκύψουν κατά την κλήση της συνάρτησης.
 * * Οι περιγραφές των Σφαλμάτων καθώς και οι Κωδικοί τους είναι διαθέσιμες μέσω του πίνακα Μηνύματα Σφαλμάτων ({@see ExceptionMessages}) και Κωδικοί Σφαλμάτων ({@see ExceptionCodes}) αντίστοιχα.
 * 
 * ***Παραδείγματα Κλήσης***
 * * Υπάρχουν διαθέσιμα παραδείγματα κλήσης της συνάρτησης με διάφορους τρόπους ({@see ApiRequestExamples}).
 * 
 * ***Μηνύματα Authentication/Authorization***
 * * Υπάρχουν αναλυτικές πληροφορίες για τα μηνύματα Authentication/Authorization ({@see AuthMessages}).
 *
 * ***Δεδομένα Επιστροφής***
 * <br><a id="model"></a>Παρακάτω εμφανίζονται τα αποτελέσματα σε μορφή JSON :
 * <code>
 * {
 * "controller": "PostRelations",
 * "function": "relations",
 * "method": "POST",
 * "parameters": {  "host_mm_id": ``, "guest_mm_id": ``, 
 *                  "relation_state": ``, "true_date": ``, "true_fek": ``, 
 *                  "false_date": ``, "false_fek": ``, "relation_type": `` },
 * "relation_id": ``,
 * "status": 200,
 * "message": "[POST][relations]:success"
 * }
 * </code>
 * 
 * 
 * @param integer $host_mm_id Κωδικός ΜΜ της Host Μονάδας
 * <br>
 * <br>Κωδικός ΜΜ της Host Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Κωδικός ΜΜ της Host Μονάδας : {@see GetUnits}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικός ΜΜ της Host Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param integer $guest_mm_id Κωδικός ΜΜ της Host Μονάδας
 * <br>
 * <br>Ο Κωδικός ΜΜ της Host Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Κωδικός ΜΜ της Host Μονάδας : {@see GetUnits}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικός ΜΜ της Host Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * @param string $relation_state Λειτουργική Κατάσταση Συσχέτισης Μονάδας
 * <br>
 * <br>Η Λειτουργική Κατάσταση Συσχέτισης Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι μεταξύ 0 ή 1 (Ανενεργή ή Ενεργή) : integer
 * 
 * @param date $true_date Ημερομηνία Ενεργοποίησης
 * <br>
 * <br>Η Ημερομηνία Ενεργοποίησης Συσχέτισης Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : date
 * 
 * @param string $true_fek ΦΕΚ Ενεργοποίησης
 * <br>
 * <br>Το ΦΕΚ Ενεργοποίησης της Συσχέτισης Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @param date false_date Ημερομηνία Απενεργοποίησης
 * <br>
 * <br>Η Ημερομηνία Απενεργοποίησης Συσχέτισης Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : date
 * 
 * @param string $false_fek ΦΕΚ Απενεργοποίησης
 * <br>
 * <br>Το ΦΕΚ Απενεργοποίησης της Συσχέτισης Μονάδας
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * 
 * @param integer|string $relation_type Όνομα ή ID Τύπου Συσχέτισης
 * <br>
 * <br>Το Όνομα ή ο Κωδικός ID του Τύπου Συσχέτισης
 * <br>Η παράμετρος είναι ***υποχρεωτική***
 * <br>Όνομα ή ID Τύπου Συσχέτισης : {@see GetRelationTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer|string
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με το Κωδικό ID Τύπος Συσχέτισης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 *    <li>string
 *       <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα Τύπος Συσχέτισης
 *       <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 * 
 * 
 * @return Objects<JSON> Επιστρέφει τα παρακάτω JSON objects :
 * <br>
 * <br>string : <b>controller</b> : Ο controller που χρησιμοποιείται
 * <br>string : <b>function</b> : Η συνάρτηση που υλοποιείται από το σύστημα
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>array : <b>parameters</b> : Οι παράμετροι που δίνει ο χρήστης
 * <br>integer : <b>relation_id</b> : Ο Κωδικός ID της Συσχέτισης Μονάδας που δημιουργήθηκε
 * <br>integer : <b>status</b> : Ο Κωδικός του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα του αποτελέσματος της κλήσης
 *
 * 
 * @throws MissingRelationHostUnitMMIDParam {@see ExceptionMessages::MissingRelationHostUnitMMIDParam}
 * <br>{@see ExceptionCodes::MissingRelationHostUnitMMIDParam}
 *
 * @throws MissingRelationHostUnitMMIDValue {@see ExceptionMessages::MissingRelationHostUnitMMIDValue}
 * <br>{@see ExceptionCodes::MissingRelationHostUnitMMIDValue}
 *  
 * @throws InvalidRelationHostUnitMMIDArray {@see ExceptionMessages::InvalidRelationHostUnitMMIDArray}
 * <br>{@see ExceptionCodes::InvalidRelationHostUnitMMIDArray}
 *
 * @throws InvalidRelationHostUnitMMIDType {@see ExceptionMessages::InvalidRelationHostUnitMMIDType}
 * <br>{@see ExceptionCodes::InvalidRelationHostUnitMMIDType}
 * 
 * @throws DuplicatedRelationHostUnitMMIDUniqueValue {@see ExceptionMessages::DuplicatedRelationHostUnitMMIDUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedRelationHostUnitMMIDUniqueValue} 
 * 
 * @throws MissingRelationGuestUnitMMIDParam {@see ExceptionMessages::MissingRelationGuestUnitMMIDParam}
 * <br>{@see ExceptionCodes::MissingRelationGuestUnitMMIDParam}
 *
 * @throws MissingRelationGuestUnitMMIDValue {@see ExceptionMessages::MissingRelationGuestUnitMMIDValue}
 * <br>{@see ExceptionCodes::MissingRelationGuestUnitMMIDValue}
 *  
 * @throws InvalidRelationGuestUnitMMIDArray {@see ExceptionMessages::InvalidRelationGuestUnitMMIDArray}
 * <br>{@see ExceptionCodes::InvalidRelationGuestUnitMMIDArray}
 *
 * @throws InvalidRelationGuestUnitMMIDType {@see ExceptionMessages::InvalidRelationGuestUnitMMIDType}
 * <br>{@see ExceptionCodes::InvalidRelationGuestUnitMMIDType}
 * 
 * @throws DuplicatedRelationGuestUnitMMIDUniqueValue {@see ExceptionMessages::DuplicatedRelationGuestUnitMMIDUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedRelationGuestUnitMMIDUniqueValue}
 * 
 * @throws MissingRelationStateParam {@see ExceptionMessages::MissingRelationStateParam}
 * <br>{@see ExceptionCodes::MissingRelationStateParam}
 *
 * @throws MissingRelationStateValue {@see ExceptionMessages::MissingRelationStateValue}
 * <br>{@see ExceptionCodes::MissingRelationStateValue}
 *
 * @throws InvalidRelationStateType {@see ExceptionMessages::InvalidRelationStateType}
 * <br>{@see ExceptionCodes::InvalidRelationStateType}
 * 
 * @throws MissingRelationTrueDateParam {@see ExceptionMessages::MissingRelationTrueDateParam}
 * <br>{@see ExceptionCodes::MissingRelationTrueDateParam}
 *
 * @throws MissingRelationTrueDateValue {@see ExceptionMessages::MissingRelationTrueDateValue}
 * <br>{@see ExceptionCodes::MissingRelationTrueDateValue}
 *
 * @throws InvalidRelationTrueDateType {@see ExceptionMessages::InvalidRelationTrueDateType}
 * <br>{@see ExceptionCodes::InvalidRelationTrueDateType}
 * 
 * @throws InvalidRelationTrueDateValidType {@see ExceptionMessages::InvalidRelationTrueDateValidType}
 * <br>{@see ExceptionCodes::InvalidRelationTrueDateValidType}
 * 
 * @throws MissingRelationTrueFekParam {@see ExceptionMessages::MissingRelationTrueFekParam}
 * <br>{@see ExceptionCodes::MissingRelationTrueFekParam}
 *
 * @throws MissingRelationTrueFekValue {@see ExceptionMessages::MissingRelationTrueFekValue}
 * <br>{@see ExceptionCodes::MissingRelationTrueFekValue}
 *
 * @throws InvalidRelationTrueFekType {@see ExceptionMessages::InvalidRelationTrueFekType}
 * <br>{@see ExceptionCodes::InvalidRelationTrueFekType}
 * 
 * @throws MissingRelationFalseFekParam {@see ExceptionMessages::MissingRelationFalseFekParam}
 * <br>{@see ExceptionCodes::MissingRelationFalseFekParam}
 *
 * @throws MissingRelationFalseFekValue {@see ExceptionMessages::MissingRelationFalseFekValue}
 * <br>{@see ExceptionCodes::MissingRelationFalseFekValue}
 *
 * @throws InvalidRelationFalseFekType {@see ExceptionMessages::InvalidRelationFalseFekType}
 * <br>{@see ExceptionCodes::InvalidRelationFalseFekType} 
 * 
 * @throws MissingRelationFalseDateParam {@see ExceptionMessages::MissingRelationFalseDateParam}
 * <br>{@see ExceptionCodes::MissingRelationFalseDateParam}
 *
 * @throws MissingRelationFalseDateValue {@see ExceptionMessages::MissingRelationFalseDateValue}
 * <br>{@see ExceptionCodes::MissingRelationFalseDateValue}
 *
 * @throws InvalidRelationFalseDateType {@see ExceptionMessages::InvalidRelationFalseDateType}
 * <br>{@see ExceptionCodes::InvalidRelationFalseDateType}
 * 
 * @throws InvalidRelationFalseDateValidType {@see ExceptionMessages::InvalidRelationFalseDateValidType}
 * <br>{@see ExceptionCodes::InvalidRelationFalseDateValidType}
 * 
 * @throws MissingRelationTypeParam {@see ExceptionMessages::MissingRelationTypeParam}
 * <br>{@see ExceptionCodes::MissingRelationTypeParam}
 *
 * @throws MissingRelationTypeValue {@see ExceptionMessages::MissingRelationTypeValue}
 * <br>{@see ExceptionCodes::MissingRelationTypeValue}
 *  
 * @throws InvalidRelationTypeArray {@see ExceptionMessages::InvalidRelationTypeArray}
 * <br>{@see ExceptionCodes::InvalidRelationTypeArray}
 *
 * @throws InvalidRelationTypeType {@see ExceptionMessages::InvalidRelationTypeType}
 * <br>{@see ExceptionCodes::InvalidRelationTypeType}
 * 
 * @throws DuplicatedRelationTypeUniqueValue {@see ExceptionMessages::DuplicatedRelationTypeUniqueValue}
 * <br>{@see ExceptionCodes::DuplicatedRelationTypeUniqueValue}
 * 
 * @throws DuplicatedRelationValue {@see ExceptionMessages::DuplicatedRelationValue}
 * <br>{@see ExceptionCodes::DuplicatedRelationValue}
 * 
 * @throws NoErrors {@see ExceptionMessages::NoErrors}
 * <br>{@see ExceptionCodes::NoErrors}
 * 
 * 
 */

function PostRelations( $host_mm_id, $guest_mm_id, $relation_state, $true_date, $true_fek, $false_date, $false_fek, $relation_type )
{
    
    global $app,$entityManager;

    $Relation = new Relations();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {
    
    //$host_mm_id===============================================================
    CRUDUtils::entitySetAssociation($Relation, $host_mm_id, 'Units', 'hostMm', 'RelationHostUnitMMID', $params, 'host_mm_id', true, false, true);

    //$guest_mm_id==============================================================
    CRUDUtils::entitySetAssociation($Relation, $guest_mm_id, 'Units', 'guestMm', 'RelationGuestUnitMMID', $params, 'guest_mm_id', true, false, true);
    
    //$relation_state===========================================================
    if ($relation_state  == 0 || $relation_state  == 1 )
        CRUDUtils::entitySetParam($Relation, $relation_state, 'RelationState', 'relation_state' , $params , true, false, true);
    else
        throw new Exception(ExceptionMessages::InvalidRelationStateType, ExceptionCodes::InvalidRelationStateType);

    //$true_date================================================================  
    CRUDUtils::entitySetDate($Relation, $true_date, 'RelationTrueDate', 'true_date' , $params);
        
    //$true_fek=================================================================
    CRUDUtils::entitySetParam($Relation, $true_fek, 'RelationTrueFek', 'true_fek' , $params);
    
    //$false_fek================================================================
    CRUDUtils::entitySetParam($Relation, $false_fek, 'RelationFalseFek', 'false_fek' , $params);
    
    //$false_date===============================================================
    CRUDUtils::entitySetDate($Relation, $false_date, 'RelationFalseDate', 'false_date' , $params);
    
    //$relation_type============================================================      
    CRUDUtils::entitySetAssociation($Relation, $relation_type, 'RelationTypes', 'relationType', 'RelationType', $params, 'relation_type');
    
//controls======================================================================   

        //check for duplicate ==================================================   
        $checkDuplicate = $entityManager->getRepository('Relations')->findOneBy(array( 'hostMm'    => $Relation->getHostMm()->getMmId(),
                                                                                       'guestMm'   => $Relation->getGuestMm()->getMmId(),
                                                                                       'relationType' => $Relation->getRelationType(),
                                                                                      ));

        if (count($checkDuplicate) != 0)
            throw new Exception(ExceptionMessages::DuplicatedRelationValue,ExceptionCodes::DuplicatedRelationValue);      

//insert to db================================================================== 
        $entityManager->persist($Relation);
        $entityManager->flush($Relation);
          
//result_messages===============================================================
        $result["relation_id"] = $Relation->getRelationId();
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }                
        
    return $result;
}

?>