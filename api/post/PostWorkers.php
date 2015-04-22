<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package POST
 * 
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * Καταχώρηση : Εργαζόμενοι
 * 
 * 
 * Η κλήση της συνάρτησης αυτής μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο POST :
 * <br> https://mm.sch.gr/api/workers <br><br>
 *
 * 
 * Παράδειγμα κλήσης της μεθόδου με <b>cURL</b> (console) :
 * <code>
 * curl -X POST https://mm.sch.gr/api/workers \
 *   -H "Content-Type: application/json" \
 *   -H "Accept: application/json" \
 *   -u username:password \
 *   -d '{"worker_registry_no" : "value", \
 *        "lastname" : "value", \
 *        "firstname" : "value", \
 *        "fathername" : "value", \
 *        "sex" : "value", \
 *        "tax_number" : "value", \
 *        "worker_specialization" : "value", \
 *        "source" : "value" }'
 * </code>
 * <br>
 * 
 *
 *  
 * Παράδειγμα κλήσης της μεθόδου με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({"worker_registry_no" : "value",
 *                                 "lastname" : "value",
 *                                 "firstname" : "value",
 *                                 "fathername" : "value",
 *                                 "sex" : "value",
 *                                 "tax_number" : "value",
 *                                 "worker_specialization" : "value",
 *                                 "source" : "value" });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("POST", "https://mm.sch.gr/api/workers");
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
 *      "worker_registry_no" => "value", 
 *      "lastname" => "value", 
 *      "firstname" => "value", 
 *      "fathername" => "value", 
 *      "sex" => "value", 
 *      "tax_number" => "value",
 *      "worker_specialization" : "value",
 *      "source" : "value");
 * 
 * $curl = curl_init("https://mm.sch.gr/api/workers");
 * 
 * curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 * curl_setopt($curl, CURLOPT_USERPWD, "username:password");
 * curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
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
 *        type: 'POST',
 *        url: 'https://mm.sch.gr/api/workers',
 *        dataType: "json",
 *        data: {
 *            "worker_registry_no" : "value",
 *            "lastname" : "value",
 *            "firstname" : "value",
 *            "fathername" : "value",
 *            "sex" : "value",
 *            "tax_number" : "value",
 *            "worker_specialization" : "value",
 *            "source" : "value"
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
 * @param string $registry_no Αριθμός Μητρώου
 * <br>Ο Αριθμός Μητρώου του Εργαζόμενου
 * 
 * @param string $lastname Επώνυμο
 * <br>Το Επώνυμο του Εργαζόμενου
 * 
 * @param string $firstname Όνομα
 * <br>Το Όνομα του Εργαζόμενου
 * 
 * @param string $fathername Πατρώνυμο
 * <br>Το Πατρώνυμο του Εργαζόμενου
 * 
 * @param string $sex Φύλο
 * <br>Το Φύλο του Εργαζόμενου
 * 
 * @param string $tax_number Αριθμός Φορολογικού Μητρώου
 * <br>Ο Αριθμός Φορολογικού Μητρώου του Εργαζόμενου
 * 
 * @param mixed $worker_specialization Ειδικότητα
 * <br>Η Ειδικότητα του Εργαζομένου  
 * <br>Το πεδίο είναι υποχρεωτικό
 * <br>Λεξικό : Ειδικότητες Εργαζομένων {@see GetWorkerSpecializations})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @param mixed $source Πρωτογενής Πηγή
 * <br>Η Πρωτογενής Πηγή του Εργαζόμενου 
 * <br>Το πεδίο είναι υποχρεωτικό
 * <br>Λεξικό : Πρωτογενείς Πηγές Εργαζομενων {@see GetSources})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer : Αριθμητική (Η αναζήτηση γίνεται με τον κωδικό)</li>
 *       <li>string : Αλφαριθμητική (Η αναζήτηση γίνεται με το όνομα)</li>
 *       <li>array[string] : Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα</li>
 *    </ul>
 * 
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία : 
 * <br>
 * <ul>
 *  <li>sting : <b>method</b> : Το Όνομα της μεθόδου</li>
 *  <li>integer : <b>status</b> : Ο Κωδικός της κατάστασης</li>
 *  <li>string : <b>message</b> : Μήνυμα περιγραφής της κατάστασης </li>
 *  <li>integer : <b>worker_id</b> : Ο Κωδικός του Εργαζόμενου</li>
 * </ul>
 * 
 *
 * 
 * @throws MissingWorkerRegistryNoValue {@see ExceptionMessages::MissingWorkerRegistryNoValue}
 * @throws MissingWorkerLastnameValue {@see ExceptionMessages::MissingWorkerLastnameValue}
 * @throws MissingWorkerFirstnameValue {@see ExceptionMessages::MissingWorkerFirstnameValue}
 * @throws InvalidWorkerSpecializationValue {@see ExceptionMessages::InvalidWorkerSpecializationValue}
 * @throws InvalidSourceValue {@see ExceptionMessages::InvalidSourceValue}
 * 
 * 
 */

function PostWorkers( $registry_no, $lastname, $firstname, $fathername, $sex, $tax_number,
                      $worker_specialization, $source ) {
    
    global $app, $entityManager;
    
    $Worker = new Workers();
    $result = array();

    $result["controller"] = __FUNCTION__;
    $result["function"] = substr($app->request()->getPathInfo(),1);
    $result["method"] = $app->request()->getMethod();
    $params = loadParameters();
    $result["parameters"]  = $params;

    try {

    //$registry_no==============================================================
    CRUDUtils::entitySetParam($Worker, $registry_no, 'WorkerRegistryNo', 'registry_no' , $params, false, true );
  
    //$lastname=================================================================
    CRUDUtils::entitySetParam($Worker, $lastname, 'WorkerLastname', 'lastname' , $params, false, true );

    //$firstname================================================================
    CRUDUtils::entitySetParam($Worker, $firstname, 'WorkerFirstname', 'firstname' , $params, false, true );

    //$fathername===============================================================
    CRUDUtils::entitySetParam($Worker, $fathername, 'WorkerFathername', 'fathername' , $params, false, true );
  
    //$sex======================================================================
    CRUDUtils::entitySetParam($Worker, $sex, 'WorkerSex', 'sex' , $params, false, true );

    //$tax_number===============================================================
    CRUDUtils::entitySetParam($Worker, $tax_number, 'WorkerTaxNumber', 'tax_number' , $params, false, true );

    //$worker_specialization====================================================
    CRUDUtils::entitySetAssociation($Worker, $worker_specialization, 'WorkerSpecializations', 'workerSpecialization', 'WorkerSpecialization', $params, 'worker_specialization', false, true);
      
    //$source===================================================================
    CRUDUtils::entitySetAssociation($Worker, $source, 'Sources', 'source', 'Source', $params, 'source');

    //insert to db==============================================================
           $entityManager->persist($Worker);
           $entityManager->flush($Worker);

           $result["worker_id"] = $Worker->getWorkerId();
                 
//result_messages===============================================================      
        $result["status"] = ExceptionCodes::NoErrors;
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".ExceptionMessages::NoErrors;
    } catch (Exception $e) {
        $result["status"] = $e->getCode();
        $result["message"] = "[".$result["method"]."][".$result["function"]."]:".$e->getMessage();
    }  

    return $result;
}
?>