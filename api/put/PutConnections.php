<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package DEPRECATED
 */
 
header("Content-Type: text/html; charset=utf-8");

/**
 * <b>Ενημέρωση Διασύνδεσης</b>
 *
 *
 * Η συνάρτηση αυτή ενημερώνει τις Διασυνδέσεις σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο PUT :
 * <br> https://mm.sch.gr/api/connections
 *
 * <br><b>Κανόνες Ενημέρωσης Διασύνδεσης</b>
 * <ul>   
 *  <li>H σχολική μονάδα που αντιστοιχεί στο ldap_id,cpe_id,circuit_id θα πρέπει να είναι ίδια με την σχολική μονάδα της Διασύνδεσης.</li>
 *  <li>Ένα CPE μπορεί να ανήκει σε περισσότερες από μία Διασυνδέσεις.</li>
 *  <li>Ο LDAP λογαριασμός  και το Τηλεπικοινωνιακό Κύκλωμα ανήκουν σε μια και μοναδική Διασύνδεση.</li>
 *  <li>Ένα καταργημένο Τηλεπικοινωνιακό Κύκλωμα δεν μπορεί να ανήκει σε μια Διασύνδεση.</li> 
 *  <li>Το CPE είναι μοναδικό ανά σχολική μονάδα , ένα CPE μπορεί να ανήκει σε μια και μόνο σχολική μονάδα.</li>
 *  <li>Ο LDAP λογαριασμός είναι μοναδικός ανά σχολική μονάδα, Ο LDAP λογαριασμός μπορεί να ανήκει σε μια και μόνο σχολική μονάδα.</li>
 *  <li>Το Τηλεπικοινωνιακό Κύκλωμα είναι μοναδικό ανά σχολική μονάδα, ένα Τηλεπικοινωνιακό Κύκλωμα μπορεί να ανήκει σε μια και μόνο σχολική μονάδα.</li>
 * </ul>
 * 
 * <br><b>Πίνακας Παραμέτρων</b>
 * <br>Στον Πίνακα Παραμέτρων <a href="#parameters">Parameters summary</a> εμφανίζονται όλοι οι παράμετροι με τους οποίους
 * μπορεί να γίνει η κλήση της συνάρτησης
 * <br>Όλοι οι παράμετροι είναι προαιρετικοί εκτός από αυτές που έχουν χαρακτηριστεί ως υποχρεωτικοί
 * <br>Οι παράμετροι μπορούν να χρησιμοποιηθούν με οποιαδήποτε σειρά
 *
 *
 * <br><b>Πίνακας Αποτελεσμάτων</b>
 * <br>Στον Πίνακα Αποτελεσμάτων <a href="#returns">Return value summary</a> εμφανίζονται οι μεταβλητές που επιστρέφει η συνάρτηση
 * <br>Όλες οι μεταβλητές επιστρέφονται σε ένα πίνακα σε JSON μορφή
 * <br>Η μεταβλητή data είναι ο πίνακας με το λεξικό
 * <br>Η μεταβλητή status καθορίζει αν η εκτέλεση της συνάρτησης ήταν επιτυχής (κωδικός 200) ή προέκυψε κάποιο σφάλμα
 *
 *
 * <br><b>Πίνακας Σφαλμάτων</b>
 * <br>Στον Πίνακα Σφαλμάτων <a href="#throws">Thrown exceptions summary</a> εμφανίζονται τα Μηνύματα Σφαλμάτων που
 * μπορεί να προκύψουν κατά την κλήση της συνάρτησης
 * <br>Οι περιγραφές των Σφαλμάτων καθώς και οι Κωδικοί τους είναι διαθέσιμες μέσω του πίνακα
 * Μηνύματα Σφαλμάτων ({@see ExceptionMessages}) και Κωδικοί Σφαλμάτων ({@see ExceptionCodes}) αντίστοιχα
 *
 *
 * <br><b>Παραδείγματα Κλήσης</b>
 * <br>Παρακάτω εμφανίζεται μια σειρά από παραδείγματα κλήσης της συνάρτησης με διάφορους τρόπους :
 * <br><a href="#cURL">cURL</a> | <a href="#JavaScript">JavaScript</a> | <a href="#PHP">PHP</a> | <a href="#Ajax">Ajax</a>
 *
 * <br>
 *
 * <a id="cURL"></a>Παράδειγμα κλήσης της συνάρτησης με <b>cURL</b> (console) :
 * <code>
 *    curl -X PUT https://mm.sch.gr/api/connections \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password \
 *       -d '{"connection_id" : "100", "circuit_id" : "345"}'
 * </code>
 * <br>
 *
 *
 *
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({
 *        "connection_id" : "100", "circuit_id" : "345"
 *    });
 *
 *    var http = new XMLHttpRequest();
 *    http.open("PUT", "https://mm.sch.gr/api/connections");
 *    http.setRequestHeader("Accept", "application/json");
 *    http.setRequestHeader("Content-type", "application/json; charset=utf-8");
 *    http.setRequestHeader("Content-length", params.length);
 *    http.setRequestHeader("Authorization", "Basic " + btoa('username' + ':' + 'password') );
 *
 *    http.onreadystatechange = function()
 *    {
 *        if(http.readyState == 4 && http.status == 200)
 *        {
 *            var result = JSON.parse(http.responseText);
 *            document.write(result.status + " : " + result.message + " : " + result.data);
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
 * <a id="PHP"></a>Παράδειγμα κλήσης της συνάρτησης με <b>PHP</b> :
 * <code>
 * <?php
 *    header("Content-Type: text/html; charset=utf-8");
 *
 *    $params = array(
 *       "connection_id" => "100", "circuit_id" => "345"
 *    );
 *
 *    $curl = curl_init("https://mm.sch.gr/api/connections");
 *
 *    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 *    curl_setopt($curl, CURLOPT_USERPWD, "username:password");
 *    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
 *    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode( $params ));
 *    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 *
 *    $data = curl_exec($curl);
 *    $data = json_decode($data);
 *    echo "<pre>"; var_dump( $data ); echo "</pre>";
 * ?>
 * </code>
 * <br>
 *
 *
 *
 * <a id="Ajax"></a>Παράδειγμα κλήσης της συνάρτησης με <b>Ajax</b> :
 * <code>
 * <script>
 *    $.ajax({
 *        type: 'PUT',
 *        url: 'https://mm.sch.gr/api/connections',
 *        dataType: "json",
 *        data: {
 *          "connection_id" : "100", "circuit_id" : "345"
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
 * <br><b>Πίνακας Δεδομένων</b>
 * <br><a id="data"></a>Παρακάτω εμφανίζεται πίνακας σε μορφή JSON :
 * <code>
 * {
 *   "method": "PutConnections",
 *   "connection_id": 100,
 *   "status": 200,
 *   "message": "success"
 * }
 * </code>
 * <br>
 *
 *
 *
 *
 * @param integer $connection_id Κωδικός Διασύνδεσης
 * <br>Ο Κωδικός της Διασύνδεσης
 * <br>Η παράμετρος είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Διασυνδέσεις : {@see GetConnections}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό της Διασύνδεσης
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 *
 *
 * @param integer $mm_id Κωδικός ΜΜ Μονάδας
 * <br>Ο Κωδικός ΜΜ της Μονάδας
 * <br>Η παράμετρος δεν είναι υποχρεωτική αρκεί να έχει ήδη τιμή
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Μονάδες : {@see GetUnits}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό ΜΜ της Μονάδας
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 *
 *
 * @param integer $cpe_id Κωδικός CPE
 * <br>Ο Κωδικός του CPE
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>CPEs : {@see GetCpes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό του CPE
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 *
 *
 * @param integer $ldap_id Κωδικός Ldap
 * <br>Ο Κωδικός του Ldap
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Ldaps : {@see GetLdaps}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό του Ldap
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 *
 *
 * @param integer $circuit_id Κωδικός Κυκλώματος
 * <br>Ο Κωδικός του Κυκλώματος
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Κυκλώματα : {@see GetCircuits}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 * <ul>
 *    <li>integer
 *       <br>Αριθμητική : Η αναζήτηση γίνεται με τον Κωδικό του Κυκλώματος
 *       <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *    </li>
 * </ul>
 *
 *
 *
 *
 *
 *
 *
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία :
 * <br>
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>integer : <b>status</b> : Ο Κωδικός {@see ExceptionCodes} του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα {@see ExceptionMessages} του αποτελέσματος της κλήσης
 * <br>integer : <b>connection_id</b> : Ο Κωδικός της Διασύνδεσης
 *
 *
 *
 *
 * @throws Unauthorized {@see ExceptionMessages::Unauthorized}
 * <br>{@see ExceptionCodes::Unauthorized}
 * <br>Έλεγχος αν ο χρήστης υπάρχει και έχει δικαιώματα να χρησιμοποιείσει τη μέθοδο
 *
 * @throws MissingConnectionIDParam {@see ExceptionMessages::MissingConnectionIDParam}
 * <br>{@see ExceptionCodes::MissingConnectionIDParam}
 * <br>Ο Κωδικός της Διασύνδεσης είναι υποχρεωτικό πεδίο
 *
 * @throws MissingConnectionIDValue {@see ExceptionMessages::MissingConnectionIDValue}
 * <br>{@see ExceptionCodes::MissingConnectionIDValue}
 * <br>Ο Κωδικός της Διασύνδεσης πρέπει να έχει τιμή
 *
 * @throws InvalidConnectionIDArray {@see ExceptionMessages::InvalidConnectionIDArray}
 * <br>{@see ExceptionCodes::InvalidConnectionIDArray}
 * <br>Ο Κωδικός της Διασύνδεσης δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidConnectionIDType {@see ExceptionMessages::InvalidConnectionIDType}
 * <br>{@see ExceptionCodes::InvalidConnectionIDType}
 * <br>Ο Κωδικός της Διασύνδεσης πρέπει να είναι αριθμητικός
 *
 * @throws InvalidConnectionValue {@see ExceptionMessages::InvalidConnectionValue}
 * <br>{@see ExceptionCodes::InvalidConnectionValue}
 * <br>H Διασύνδεση δεν βρέθηκε
 *
 * @throws InvalidUnitMMIDArray {@see ExceptionMessages::InvalidUnitMMIDArray}
 * <br>{@see ExceptionCodes::InvalidUnitMMIDArray}
 * <br>Ο Κωδικός ΜΜ δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws MissingUnitMMIDValue {@see ExceptionMessages::MissingUnitMMIDValue}
 * <br>{@see ExceptionCodes::MissingUnitMMIDValue}
 * <br>Ο Κωδικός ΜΜ πρέπει να έχει τιμή
 *
 * @throws InvalidUnitValue {@see ExceptionMessages::InvalidUnitValue}
 * <br>{@see ExceptionCodes::InvalidUnitValue}
 * <br>Η Μονάδα δεν δεν βρέθηκε
 *
 * @throws InvalidUnitMMIDType {@see ExceptionMessages::InvalidUnitMMIDType}
 * <br>{@see ExceptionCodes::InvalidUnitMMIDType}
 * <br>Ο Κωδικός ΜΜ πρέπει να είναι αριθμητικό
 *
 * @throws MissingUnitMMIDParam {@see ExceptionMessages::MissingUnitMMIDParam}
 * <br>{@see ExceptionCodes::MissingUnitMMIDParam}
 * <br>Ο Κωδικός ΜΜ είναι υποχρεωτικό πεδίο
 *
 * @throws InvalidCpeIDArray {@see ExceptionMessages::InvalidCpeIDArray}
 * <br>{@see ExceptionCodes::InvalidCpeIDArray}
 * <br>Ο Κωδικός του Cpe δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidCpeValue {@see ExceptionMessages::InvalidCpeValue}
 * <br>{@see ExceptionCodes::InvalidCpeValue}
 * <br>Το Cpe δεν υπάρχει στο λεξικό
 *
 * @throws InvalidCpeIDType {@see ExceptionMessages::InvalidCpeIDType}
 * <br>{@see ExceptionCodes::InvalidCpeIDType}
 * <br>Ο Κωδικός του Cpe πρέπει να είναι αριθμητικό
 *
 * @throws InvalidLdapIDArray {@see ExceptionMessages::InvalidLdapIDArray}
 * <br>{@see ExceptionCodes::InvalidLdapIDArray}
 * <br>Ο Κωδικός του Ldap Λογαριασμού δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidLdapValue {@see ExceptionMessages::InvalidLdapValue}
 * <br>{@see ExceptionCodes::InvalidLdapValue}
 * <br>Ο Ldap Λογαριασμός δεν υπάρχει στο λεξικό
 *
 * @throws InvalidLdapIDType {@see ExceptionMessages::InvalidLdapIDType}
 * <br>{@see ExceptionCodes::InvalidLdapIDType}
 * <br>Ο Κωδικός του Ldap Λογαριασμού πρέπει να είναι αριθμητικός
 *
 * @throws InvalidCircuitIDArray {@see ExceptionMessages::InvalidCircuitIDArray}
 * <br>{@see ExceptionCodes::InvalidCircuitIDArray}
 * <br>Ο Κωδικός του Τηλεπικοινωνιακού Κυκλώματος δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidCircuitValue {@see ExceptionMessages::InvalidCircuitValue}
 * <br>{@see ExceptionCodes::InvalidCircuitValue}
 * <br>Το Τηλεπικοινωνιακό Κύκλωμα δεν υπάρχει στο λεξικό
 *
 * @throws InvalidCircuitIDType {@see ExceptionMessages::InvalidCircuitIDType}
 * <br>{@see ExceptionCodes::InvalidCircuitIDType}
 * <br>Ο Κωδικός του Τηλεπικοινωνιακού Κυκλώματος πρέπει να είναι αριθμητικός
 *
 *
 */


function PutConnections(
    $connection_id, $cpe_id, $ldap_id, $circuit_id
)
{
    global $db;

    $array_sql = array();
    $filters = array();
    $result = array();

    $result["method"] = __FUNCTION__;

    $params = loadParameters();

    try
    {

//======================================================================================================================
//= Check if $connection_id record exists
//======================================================================================================================

        $param = $connection_id;
        $table_column_name = 'connection_id';

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                throw new Exception(ExceptionMessages::MissingConnectionIDValue." : ".$param, ExceptionCodes::MissingConnectionIDValue);
            }
            elseif ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidConnectionIDArray." : ".$param, ExceptionCodes::InvalidConnectionIDArray);
            }
            elseif ( Validator::isID($param) )
            {
                $connection_id = Validator::toID($param);

                $filters[ $table_column_name ] = "$table_column_name = " . $db->quote( $connection_id );

                $sql = "SELECT
                        connection_id,
                        mm_id as connection_mm_id,
                        cpe_id,
                        ldap_id,
                        circuit_id
                        FROM connections WHERE ".$filters["connection_id"];
                //echo "<br><br>".$sql."<br><br>";
                $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

                $stmt = $db->query( $sql );
                $main_row = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                {
                    throw new Exception(ExceptionMessages::InvalidConnectionValue." : ".$connection_id, ExceptionCodes::InvalidConnectionValue);
                }
                $connection_mm_id = $main_row[0]["connection_mm_id"]; 
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidConnectionIDType." : ".$param, ExceptionCodes::InvalidConnectionIDType);
            }
        }
        else
        {
            throw new Exception(ExceptionMessages::MissingConnectionIDParam, ExceptionCodes::MissingConnectionIDParam);
        }

//======================================================================================================================
//= Check if $circuit_id record exists
//======================================================================================================================

        $param = $circuit_id;
        $table_column_name = "circuit_id";
        $table_name = "circuits";

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isNull($param) )
            {
                throw new Exception(ExceptionMessages::MissingCircuitIDValue, ExceptionCodes::MissingCircuitIDValue);
            }
            elseif ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidCircuitIDArray." : ".$param, ExceptionCodes::InvalidCircuitIDArray);
            }
            elseif (Validator::isID($param) )
            {
                $filters[ $table_column_name ] = "$table_column_name = " . $db->quote( $param );

                $sql = "SELECT $table_column_name ,mm_id as circuit_mm_id ,status as circuit_status FROM $table_name WHERE ".$filters[ $table_column_name ];
                //echo "<br><br>".$sql."<br><br>";
                $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

                $stmt = $db->query( $sql );
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                {
                    throw new Exception(ExceptionMessages::InvalidCircuitValue." : ".$param, ExceptionCodes::InvalidCircuitValue);
                }
                
                //=======RULES==================================================     
                
                //check status of circuit.Must be 1
                $circuit_status = $rows[0]["circuit_status"];
                if ( $circuit_status <> '1' ) {
                    throw new Exception(ExceptionMessages::BanConnectionCircuitStatusValue, ExceptionCodes::BanConnectionCircuitStatusValue);    
                } 
                
                //check connection mm_id rule
                $circuit_mm_id = $rows[0]["circuit_mm_id"];
                if ( $connection_mm_id <> $circuit_mm_id ) {
                    throw new Exception(ExceptionMessages::DifferenceConnectionCircuitMMIdValue, ExceptionCodes::DifferenceConnectionCircuitMMIdValue);  
                } 
                
                //check connections circuit for duplicates
                $sql = "SELECT
                        connection_id,
                        circuit_id
                        FROM connections 
                        WHERE ( ".$filters["circuit_id"]. " )
                        AND NOT ".$filters["connection_id"];

                //echo "<br><br>".$sql."<br><br>";
                $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

                $stmt = $db->query( $sql );
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() > 0 )
                {
                    throw new Exception(ExceptionMessages::DuplicatedConnectionCircuitValue." : ".$rows[0]["circuit_id"], ExceptionCodes::DuplicatedConnectionCircuitValue);
                }          
                //=======RULES==================================================
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidCircuitIDType." : ".$param, ExceptionCodes::InvalidCircuitIDType);
            }
        }
        elseif ( Validator::isNull($main_row[0][ $table_column_name ]) )
        {
            throw new Exception(ExceptionMessages::MissingCircuitIDParam, ExceptionCodes::MissingCircuitIDParam);
        }
        else 
        {
            $filters[ $table_column_name ] = "$table_column_name = " . $db->quote( $main_row[0][ $table_column_name ] );
        }
        
//======================================================================================================================
//= Check if $ldap_id record exists
//======================================================================================================================

        $param = $ldap_id;
        $table_column_name = "ldap_id";
        $table_name = "ldaps";

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidLdapIDArray." : ".$param, ExceptionCodes::InvalidLdapIDArray);
            }
            elseif (Validator::isID($param) )
            {
                $filters[ $table_column_name ] = "$table_column_name = " . $db->quote( $param );

                $sql = "SELECT $table_column_name ,mm_id as ldap_mm_id FROM $table_name WHERE ".$filters[ $table_column_name ];
                //echo "<br><br>".$sql."<br><br>";
                $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

                $stmt = $db->query( $sql );
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                {
                    throw new Exception(ExceptionMessages::InvalidLdapValue." : ".$param, ExceptionCodes::InvalidLdapValue);
                }

                //=======RULES==================================================
                //check connection mm_id rule
                $ldap_mm_id = $rows[0]["ldap_mm_id"]; 
                if ($connection_mm_id <> $ldap_mm_id ) {
                    throw new Exception(ExceptionMessages::DifferenceConnectionLdapMMIdValue, ExceptionCodes::DifferenceConnectionLdapMMIdValue);  
                } 
                
                //check connection unique rule
                $sql = "SELECT connection_id,
                               ldap_id
                               FROM connections 
                               WHERE ( ".$filters["ldap_id"]. " )
                               AND NOT ".$filters["connection_id"];

                //echo "<br><br>".$sql."<br><br>";
                $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

                $stmt = $db->query( $sql );
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() > 0 )
                {
                    throw new Exception(ExceptionMessages::DuplicatedConnectionLdapValue." : ".$rows[0]["ldap_id"], ExceptionCodes::DuplicatedConnectionLdapValue);
                }
                //=======RULES==================================================
                
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidLdapIDType." : ".$param, ExceptionCodes::InvalidLdapIDType);
            }
        }

//======================================================================================================================
//= Check if $cpe_id record exists
//======================================================================================================================

        $param = $cpe_id;
        $table_column_name = "cpe_id";
        $table_name = "cpes";

        if ( Validator::Exists($table_column_name, $params) )
        {
            if ( Validator::isArray($param) )
            {
                throw new Exception(ExceptionMessages::InvalidCpeIDArray." : ".$param, ExceptionCodes::InvalidCpeIDArray);
            }
            elseif (Validator::isID($param) )
            {
                $filters[ $table_column_name ] = "$table_column_name = " . $db->quote( $param );

                $sql = "SELECT $table_column_name ,mm_id as cpe_mm_id FROM $table_name WHERE ".$filters[ $table_column_name ];
                //echo "<br><br>".$sql."<br><br>";
                $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

                $stmt = $db->query( $sql );
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if ( $stmt->rowCount() == 0 )
                {
                    throw new Exception(ExceptionMessages::InvalidCpeValue." : ".$param, ExceptionCodes::InvalidCpeValue);
                }
                
                //=======RULES==================================================
                //check connection mm_id rule
                $cpe_mm_id = $rows[0]["cpe_mm_id"];
                if ( $connection_mm_id <> $cpe_mm_id ) {
                    throw new Exception(ExceptionMessages::DifferenceConnectionCpeMMIdValue, ExceptionCodes::DifferenceConnectionCpeMMIdValue);  
                }
                //=======RULES==================================================
                
            }
            else
            {
                throw new Exception(ExceptionMessages::InvalidCpeIDType." : ".$param, ExceptionCodes::InvalidCpeIDType);
            }
        }
        
//======================================================================================================================
//= UPDATE
//======================================================================================================================

        $sqlWhere = " WHERE ". $filters["connection_id"];

        unset($filters["connection_id"]);

        if ( count($filters) > 0 )
        {
            $sql = "UPDATE connections SET " . implode(", ", $filters) .$sqlWhere;
            //echo "<br><br>".$sql."<br><br>";
            $array_sql[] = trim( preg_replace('/\s\s+/', ' ', $sql));

            if ( $db->query( $sql ) )
            {
                $result["connection_id"] = $connection_id;
            }
        }

        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = ExceptionMessages::NoErrors;
    }
    catch (Exception $e)
    {
        $result["status"] = $e->getCode();
        $result["message"] = "[".__FUNCTION__."]:".$e->getMessage();
    }

    if ( Validator::isTrue( $params["debug"] ) )
    {
        $result["sql"] = $array_sql;
    }

    return $result;
}
?>