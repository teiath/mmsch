<?php
/**
 *
 * @version 1.0.3
 * @author  ΤΕΙ Αθήνας
 * @package GET
 */
 
header("Content-Type: text/html; charset=utf-8");

/** 
 * <b>Λεξικό : Σχολικές Επιτροπές</b>
 * 
 * 
 * Η συνάρτηση αυτή επιστρέφει όλες τις Σχολικές Επιτροπές σύμφωνα με τις παραμέτρους που έγινε η κλήση
 *
 *
 * Η κλήση μπορεί να γίνει μέσω της παρακάτω διεύθυνσης με τη μέθοδο GET :
 * <br> https://mm.sch.gr/api/school_committees
 *
 *
 * Τα αποτελέσματα είναι ταξινομημένα ως προς το Όνομα της Σχολικές Επιτροπής
 * <br>Μέσω των παραμέτρων Πεδίο Ταξινόμησης (<a href="#$orderby">$orderby</a>) και Τύπος Ταξινόμησης (<a href="#$ordertype">$ordertype</a>)
 * μπορεί να καθοριστεί το πεδίο και η σειρά ταξινόμησης
 *
 *
 * <br><b>Πίνακας Παραμέτρων</b>
 * <br>Στον Πίνακα Παραμέτρων <a href="#parameters">Parameters summary</a> εμφανίζονται όλοι οι παράμετροι με τους οποίους
 * μπορεί να γίνει η κλήση της συνάρτησης
 * <br>Όλοι οι παράμετροι είναι προαιρετικοί εκτός από αυτές που έχουν χαρακτηριστεί ως υποχρεωτικοί
 * <br>Οι παράμετροι μπορούν να χρησιμοποιηθούν με οποιαδήποτε σειρά
 * <br>Οι παράμετροι μπορούν να πάρουν τιμή "NULL" για να αναζητήσουν τις κενές εγγραφές στα αντίστοιχα πεδία
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
 * <br>Στον Πίνακα Σφαλμάτων <a href="#throws">Thrown exceptions summary</a> εμφανίζονται τα Μηνύματα Σφαλμάτων που μπορεί
 * να προκύψουν κατά την κλήση της συνάρτησης
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
 *    curl -X GET https://mm.sch.gr/api/school_committees \
 *       -H "Content-Type: application/json" \
 *       -H "Accept: application/json" \
 *       -u username:password \
 *       -d '{"education_level" : "ΔΕΥΤΕΡΟΒΑΘΜΙΑ"}'
 * </code>
 * <br>
 * 
 * 
 * 
 * <a id="JavaScript"></a>Παράδειγμα κλήσης της συνάρτησης με <b>JavaScript</b> :
 * <code>
 * <script>
 *    var params = JSON.stringify({ 
 *        "education_level" : "ΔΕΥΤΕΡΟΒΑΘΜΙΑ"
 *    });
 *    
 *    var http = new XMLHttpRequest();
 *    http.open("GET", "https://mm.sch.gr/api/school_committees");
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
 *       "education_level" => "ΔΕΥΤΕΡΟΒΑΘΜΙΑ"
 *    );
 * 
 *    $curl = curl_init("https://mm.sch.gr/api/school_committees");
 * 
 *    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 *    curl_setopt($curl, CURLOPT_USERPWD, "username:password");
 *    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
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
 *        type: 'GET',
 *        url: 'https://mm.sch.gr/api/school_committees',
 *        dataType: "json",
 *        data: {
 *          "education_level" : "ΔΕΥΤΕΡΟΒΑΘΜΙΑ"
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
 * <br><b>Πίνακας Δεδομένων</b>
 * <br><a id="data"></a>Παρακάτω εμφανίζεται ένα δείγμα του λεξικού σε μορφή JSON :
 * <code>
 * {"data":[
 *  	{
 *  		"school_committee_id": 1,
 *  		"education_level_id": 2,
 *  		"name": "ΣΧΟΛΙΚΗ ΕΠΙΤΡΟΠΗ ΔΕΥΤΕΡΟΒΑΘΜΙΑΣ ΑΒΔΗΡΩΝ",
 *  		"active": 1,
 *  		"street_address": null,
 *  		"postal_code": null,
 *  		"fax_number": null,
 *  		"phone_number": null,
 *  		"email": null,
 *  		"last_update": null,
 *  		"tax_number": null,
 *  		"comments": null,
 *  		"region_edu_admin_id": null,
 *  		"edu_admin_id": null,
 *  		"prefecture_id": null,
 *  		"municipality_id": null,
 *  		"tax_office_id": null
 *  	},
 *  	{
 *  		"school_committee_id": 2,
 *  		"education_level_id": 2,
 *  		"name": "ΣΧΟΛΙΚΗ ΕΠΙΤΡΟΠΗ ΔΕΥΤΕΡΟΒΑΘΜΙΑΣ ΑΓΑΘΟΝΗΣΙΟΥ",
 *  		"active": 1,
 *  		"street_address": null,
 *  		"postal_code": null,
 *  		"fax_number": null,
 *  		"phone_number": null,
 *  		"email": null,
 *  		"last_update": null,
 *  		"tax_number": null,
 *  		"comments": null,
 *  		"region_edu_admin_id": null,
 *  		"edu_admin_id": null,
 *  		"prefecture_id": null,
 *  		"municipality_id": null,
 *  		"tax_office_id": null
 *  	},
 *  	{
 *  		"school_committee_id": 3,
 *  		"education_level_id": 2,
 *  		"name": "ΣΧΟΛΙΚΗ ΕΠΙΤΡΟΠΗ ΔΕΥΤΕΡΟΒΑΘΜΙΑΣ ΑΓΙΑΣ",
 *  		"active": 1,
 *  		"street_address": null,
 *  		"postal_code": null,
 *  		"fax_number": null,
 *  		"phone_number": null,
 *  		"email": null,
 *  		"last_update": null,
 *  		"tax_number": null,
 *  		"comments": null,
 *  		"region_edu_admin_id": null,
 *  		"edu_admin_id": null,
 *  		"prefecture_id": null,
 *  		"municipality_id": null,
 *  		"tax_office_id": null
 *  	},
 *  	{
 *  		"school_committee_id": 4,
 *  		"education_level_id": 2,
 *  		"name": "ΣΧΟΛΙΚΗ ΕΠΙΤΡΟΠΗ ΔΕΥΤΕΡΟΒΑΘΜΙΑΣ ΑΓΙΑΣ ΒΑΡΒΑΡΑΣ",
 *  		"active": 1,
 *  		"street_address": null,
 *  		"postal_code": null,
 *  		"fax_number": null,
 *  		"phone_number": null,
 *  		"email": null,
 *  		"last_update": null,
 *  		"tax_number": null,
 *  		"comments": null,
 *  		"region_edu_admin_id": null,
 *  		"edu_admin_id": null,
 *  		"prefecture_id": null,
 *  		"municipality_id": null,
 *  		"tax_office_id": null
 *  	},
 *  	{
 *  		"school_committee_id": 5,
 *  		"education_level_id": 2,
 *  		"name": "ΣΧΟΛΙΚΗ ΕΠΙΤΡΟΠΗ ΔΕΥΤΕΡΟΒΑΘΜΙΑΣ ΑΓΙΑΣ ΠΑΡΑΣΚΕΥΗΣ",
 *  		"active": 1,
 *  		"street_address": null,
 *  		"postal_code": null,
 *  		"fax_number": null,
 *  		"phone_number": null,
 *  		"email": null,
 *  		"last_update": null,
 *  		"tax_number": null,
 *  		"comments": null,
 *  		"region_edu_admin_id": null,
 *  		"edu_admin_id": null,
 *  		"prefecture_id": null,
 *  		"municipality_id": null,
 *  		"tax_office_id": null
 *  	}
 * ]}
 * </code>
 * <br>
 *   
 *
 *
 * @param mixed $school_committee Σχολική Επιτροπή
 * <br>Το Όνομα ή ο Κωδικός της Σχολικής Επιτροπής
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η αναζήτηση γίνεται με τον κωδικό της Σχολικής Επιτροπής
 *          <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>string
 *          <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το όνομα της Σχολικής Επιτροπής
 *          <br>Με την χρήση της παραμέτρου Τύπος Αναζήτησης (<a href="#$searchtype">$searchtype</a>) μπορεί να καθοριστεί ο τρόπος με τον οποίο
 *          θα αναζητηθεί η τιμή της παραμέτρου στο Όνομα της Σχολικής Επιτροπής
 *          <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στο Όνομα της Σχολικής Επιτροπής γίνεται με τον Tύπο {@see SearchEnumTypes::ContainAll}
 *       </li>
 *       <li>array[integer|string]
 *          <br>Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *          <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *       </li>
 *    </ul>
 *
 *
 * @param mixed $education_level Επίπεδο Εκπαίδευσης
 * <br>Το Όνομα ή ο Κωδικός του Επιπέδου Εκπαίδευσης
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>(Λεξικό : {@see GetEducationLevels})
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : mixed{integer|string|array[integer|string]}
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η αναζήτηση γίνεται με τον κωδικό του Επιπέδου Εκπαίδευσης
 *          <br>Η αναζήτηση στον Κωδικό γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>string
 *          <br>Αλφαριθμητική : Η αναζήτηση γίνεται με το Όνομα του Επιπέδου Εκπαίδευσης
 *          <br>Η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::Exact}
 *       </li>
 *       <li>array[integer|string]
 *          <br>Σύνολο από Αριθμητικές και Αλφαριθμητικές τιμές διαχωρισμένες με κόμμα
 *          <br>Η αναζήτηση γίνεται με οποιαδήποτε από αυτές τις τιμές
 *       </li>
 *    </ul>
 *
 * 
 * @param integer $pagesize Αριθμός Εγγραφών/Σελίδα
 * <br>Ο αριθμός των εγγραφών που θα επιστρέψουν ανα σελίδα
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε θα επιστραφούν όλες οι εγγραφές ({@see Parameters::AllPageSize})
 * <br>Λίστα Παραμέτρων Σελιδοποίησης : {@see Parameters}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η τιμή της παραμέτρου πρέπει να είναι μεγαλύτερη από 0
 *       </li>
 *    </ul>
 *
 *
 * @param integer $page Αριθμός Σελίδας
 * <br>Ο αριθμός της σελίδας με τις <a href="#$pagesize">$pagesize</a> εγγραφές που βρέθηκαν σύμφωμα με τις παραμέτρους
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε θα επιστραφεί η πρώτη σελίδα
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : integer
 *    <ul>
 *       <li>integer
 *          <br>Αριθμητική : Η τιμή της παραμέτρου πρέπει να είναι μεγαλύτερη από 0
 *       </li>
 *    </ul>
 *
 *
 * @param string $orderby Πεδίο Ταξινόμησης
 * <br>Το όνομα του πεδίου με το οποίο γίνεται η ταξινόμηση των εγγραφών
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση γίνεται με το Όνομα της Σχολικής Επιτροπής
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *    <ul>
 *       <li>string
 *          <br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι οποιοδήποτε πεδίο επιστρέφει η συνάρτηση στον πίνακα data
 *       </li>
 *    </ul>
 *
 *
 * @param string $ordertype Τύπος Ταξινόμησης
 * <br>Ο Τύπος Ταξινόμησης με τον οποίο γίνεται η ταξινόμηση των εγγραφών
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η ταξινόμηση γίνεται με Αύξουσα Σειρά ({@see OrderEnumTypes::ASC})
 * <br>Λίστα Τύπων Ταξινόμησης : {@see OrderEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 *    <ul>
 *       <li>string
 *          <br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι ένας από τους Tύπους {@see OrderEnumTypes}
 *       </li>
 *    </ul>
 * 
 *
 * @param string $searchtype Τύπος Αναζήτησης
 * <br>Ο Τύπος Αναζήτησης με τον οποίο γίνεται η αναζήτηση στο Όνομα (<a href="#$school_committee">$school_committee</a>) της Σχολικής Επιτροπής
 * <br>Η παράμετρος δεν είναι υποχρεωτική
 * <br>Αν η παράμετρος δεν έχει τιμή τότε η αναζήτηση στο Όνομα γίνεται με τον Τύπο {@see SearchEnumTypes::ContainAll}
 * <br>Αν το Όνομα έχει Αριθμητική Τιμή τότε η αναζήτηση γίνεται με τον Κωδικό της Σχολικής Επιτροπής με Τύπο {@see SearchEnumTypes::Exact}
 * <br>Λίστα Τύπων Αναζήτησης : {@see SearchEnumTypes}
 * <br>Η τιμή της παραμέτρου μπορεί να είναι : string
 * <ul>
 *    <li>string
 *       <br>Αλφαριθμητική : Η τιμή της παραμέτρου μπορεί να είναι ένας από τους Tύπους {@see SearchEnumTypes}
 *    </li>
 * </ul>
 *
 *
 * 
 * @return Array<JSON> Επιστρέφει ένα πίνακα σε JSON μορφή με πεδία : 
 * <br>
 * <br>string : <b>method</b> : Η μέθοδος κλήσης της συνάρτησης
 * <br>integer : <b>status</b> : Ο Κωδικός {@see ExceptionCodes} του αποτελέσματος της κλήσης
 * <br>string : <b>message</b> : Το Μήνυμα {@see ExceptionMessages} του αποτελέσματος της κλήσης
 * <br>integer : <b>count</b> : Το πλήθος των εγγραφών της κλήσης σύμφωνα με τις παραμέτρους σελιδοποίησης
 * <br>integer : <b>total</b> : Το πλήθος των εγγραφών χωρίς τις παραμέτρους σελιδοποίησης
 * <br>array : <b>data</b> : Ο Πίνακας με το λεξικό
 * <ul>
 *    <li>integer : <b>school_committee_id</b> : Ο Κωδικός της Σχολικής Επιτροπής</li>
 *    <li>string : <b>school_committee</b> : Το Όνομα της Σχολικής Επιτροπής</li>
 *    <li>boolean : <b>active</b> : </li>
 *    <li>string : <b>street_address</b> : </li>
 *    <li>string : <b>postal_code</b> : </li>
 *    <li>string : <b>fax_number</b> :</li>
 *    <li>string : <b>phone_number</b> : </li>
 *    <li>string : <b>email</b> : </li>
 *    <li>string : <b>last_update</b> : </li>
 *    <li>string : <b>tax_number</b> : </li>
 *    <li>integer : <b>education_level_id</b> : </li>
 *    <li>string : <b>education_level</b> : (Λεξικό : {@see GetEducationLevels})</li>
 *    <li>integer : <b>region_edu_admin_id</b> : </li>
 *    <li>string : <b>region_edu_admin</b> : </li>
 *    <li>integer : <b>edu_admin_id</b> : </li>
 *    <li>string : <b>edu_admin</b> : </li>
 *    <li>integer : <b>prefecture_id</b> : </li>
 *    <li>string : <b>prefecture</b> : </li>
 *    <li>integer : <b>municipality_id</b> : </li>
 *    <li>string : <b>municipality</b> : </li>
 *    <li>integer : <b>tax_office_id</b> : </li>
 *    <li>string : <b>tax_office</b> : </li>
 *    <li>string : <b>comments</b> : </li>
 *  </ul>
 *
 *
 *
 *
 * @throws InvalidSearchType {@see ExceptionMessages::InvalidSearchType}
 * <br>{@see ExceptionCodes::InvalidSearchType}
 * <br>Ο Τύπος Αναζήτησης είναι λάθος
 *
 * @throws MissingPageValue {@see ExceptionMessages::MissingPageValue}
 * <br>{@see ExceptionCodes::MissingPageValue}
 * <br>Ο Αριθμός Σελίδας πρέπει να έχει τιμή
 *
 * @throws InvalidPageArray {@see ExceptionMessages::InvalidPageArray}
 * <br>{@see ExceptionCodes::InvalidPageArray}
 * <br>Ο Αριθμός Σελίδας δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidPageNumber {@see ExceptionMessages::InvalidPageNumber}
 * <br>{@see ExceptionCodes::InvalidPageNumber}
 * <br>Ο Αριθμός Σελίδας πρέπει να είναι μεγαλύτερος από 0
 *
 * @throws InvalidPageType {@see ExceptionMessages::InvalidPageType}
 * <br>{@see ExceptionCodes::InvalidPageType}
 * <br>Ο Αριθμός Σελίδας πρέπει να είναι αριθμητικός
 *
 * @throws MissingPageSizeValue {@see ExceptionMessages::MissingPageSizeValue}
 * <br>{@see ExceptionCodes::MissingPageSizeValue}
 * <br>Ο Αριθμός Εγγραφών/Σελίδα πρέπει να έχει τιμή
 *
 * @throws InvalidPageSizeArray {@see ExceptionMessages::InvalidPageSizeArray}
 * <br>{@see ExceptionCodes::InvalidPageSizeArray}
 * <br>Ο Αριθμός Εγγραφών/Σελίδα δεν μπορεί να έχει πολλαπλές τιμές
 *
 * @throws InvalidPageSizeNumber {@see ExceptionMessages::InvalidPageSizeNumber}
 * <br>{@see ExceptionCodes::InvalidPageSizeNumber}
 * <br>Ο Αριθμός Εγγραφών/Σελίδα πρέπει να είναι από 0 έως 500
 *
 * @throws InvalidPageSizeType {@see ExceptionMessages::InvalidPageSizeType}
 * <br>{@see ExceptionCodes::InvalidPageSizeType}
 * <br>Ο Αριθμός Εγγραφών/Σελίδα πρέπει να είναι αριθμητικός
 *
 * @throws InvalidSchoolCommitteeType {@see ExceptionMessages::InvalidSchoolCommitteeType}
 * <br>{@see ExceptionCodes::InvalidSchoolCommitteeType}
 * <br>Η Σχολική Επιτροπή πρέπει να είναι αριθμητική ή αλφαριθμητική
 *
 * @throws InvalidEducationLevelType {@see ExceptionMessages::InvalidEducationLevelType}
 * <br>{@see ExceptionCodes::InvalidEducationLevelType}
 * <br>Το Επίπεδο Εκπαίδευσης πρέπει να είναι αριθμητικό ή αλφαριθμητικό
 *
 * @throws InvalidOrderType {@see ExceptionMessages::InvalidOrderType}
 * <br>{@see ExceptionCodes::InvalidOrderType}
 * <br>Ο Τύπος Ταξινόμησης πρέπει να είναι ASC ή DESC
 *
 * @throws InvalidOrderBy {@see ExceptionMessages::InvalidOrderBy}
 * <br>{@see ExceptionCodes::InvalidOrderBy}
 * <br>Το Πεδίο Ταξινόμησης πρέπει να είναι κάποιο από τα πεδία που επιστρέφει η συνάρτηση
 *
 *
 */


function GetSchoolCommittees(
    $school_committee, $education_level,
    $pagesize, $page, $orderby, $ordertype, $searchtype
)
{
    global $db;
    
    $filter = array();
    $result = array();

    $result["data"] = array();

    $result["method"] = __FUNCTION__;

    $params = loadParameters();

    try
    {
//======================================================================================================================
//= Paging
//======================================================================================================================

        if ( Validator::Missing('searchtype', $params) )
            $searchtype = SearchEnumTypes::ContainAll ;
        else if ( SearchEnumTypes::isValidValue( $searchtype ) || SearchEnumTypes::isValidName( $searchtype ) )
            $searchtype = SearchEnumTypes::getValue($searchtype);
        else
            throw new Exception(ExceptionMessages::InvalidSearchType." : ".$searchtype, ExceptionCodes::InvalidSearchType);


       $page = Pagination::getPage($page, $params);
       $pagesize = Pagination::getPagesize($pagesize, $params, true);   

//======================================================================================================================
//= $school_committee
//======================================================================================================================

        if ( Validator::Exists('school_committee', $params) )
        {
            $table_name = "school_committees";
            $table_column_id = "school_committee_id";
            $table_column_name = "name";

            $param = Validator::toArray($school_committee);

            $paramFilters = array();

            foreach ($param as $values)
            {
                $paramWordsFilters = array();

                if ( Validator::isNull($values) )
                    $paramWordsFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramWordsFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else if ( Validator::isValue($values) )
                {
                    if ( $searchtype == SearchEnumTypes::Exact )
                        $paramWordsFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                    else if ( $searchtype == SearchEnumTypes::Contain )
                        $paramWordsFilters[] = "$table_name.$table_column_name like ". $db->quote( '%'.Validator::toValue($values).'%' );
                    else
                    {
                        $words = Validator::toArray($values, " ");

                        foreach ($words as $word)
                        {
                            switch ($searchtype)
                            {
                                case SearchEnumTypes::ContainAll :
                                case SearchEnumTypes::ContainAny :
                                    $paramWordsFilters[] = "$table_name.$table_column_name like ". $db->quote( '%'.Validator::toValue($word).'%' );
                                    break;
                                case SearchEnumTypes::StartWith :
                                    $paramWordsFilters[] = "$table_name.$table_column_name like ". $db->quote( Validator::toValue($word).'%' );
                                    break;
                                case SearchEnumTypes::EndWith :
                                    $paramWordsFilters[] = "$table_name.$table_column_name like ". $db->quote( '%'.Validator::toValue($word) );
                                    break;
                            }
                        }
                    }
                }
                else
                    throw new Exception(ExceptionMessages::InvalidSchoolCommitteeType." : ".$values, ExceptionCodes::InvalidSchoolCommitteeType);

                switch ($searchtype)
                {
                    case SearchEnumTypes::ContainAny :
                        $paramFilters[] = "(" . implode(" OR ", $paramWordsFilters) . ")";
                        break;
                    default :
                        $paramFilters[] = "(" . implode(" AND ", $paramWordsFilters) . ")";
                        break;
                }

            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $education_level
//======================================================================================================================

        if ( Validator::Exists('education_level', $params) )
        {
            $table_name = "education_levels";
            $table_column_id = "education_level_id";
            $table_column_name = "name";

            $param = Validator::toArray($education_level);

            $paramFilters = array();

            foreach ($param as $values)
            {
                if ( Validator::isNull($values) )
                    $paramFilters[] = "$table_name.$table_column_name is null";
                else if ( Validator::isID($values) )
                    $paramFilters[] = "$table_name.$table_column_id = ". $db->quote( Validator::toID($values) );
                else if ( Validator::isValue($values) )
                    $paramFilters[] = "$table_name.$table_column_name = ". $db->quote( Validator::toValue($values) );
                else
                    throw new Exception(ExceptionMessages::InvalidEducationLevelType." : ".$values, ExceptionCodes::InvalidEducationLevelType);
            }

            $filter[] = "(" . implode(" OR ", $paramFilters) . ")";
        }

//======================================================================================================================
//= $ordertype
//======================================================================================================================

        if ( Validator::Missing('ordertype', $params) )
            $ordertype = OrderEnumTypes::ASC ;
        else if ( OrderEnumTypes::isValidValue( $ordertype ) || OrderEnumTypes::isValidName( $ordertype ) )
            $ordertype = OrderEnumTypes::getValue($ordertype);
        else
            throw new Exception(ExceptionMessages::InvalidOrderType." : ".$ordertype, ExceptionCodes::InvalidOrderType);

//======================================================================================================================
//= $orderby
//======================================================================================================================

        if ( Validator::Exists('orderby', $params) )
        {
            $columns = array(
                "school_committee_id",
                "school_committee",
                "active",
                "street_address",
                "postal_code",
                "fax_number",
                "phone_number",
                "email",
                "last_update",
                "tax_number",
                "comments",
                "education_level_id",
                "education_level",
                "region_edu_admin_id",
                "region_edu_admin",
                "edu_admin_id",
                "edu_admin",
                "prefecture_id",
                "prefecture",
                "municipality_id",
                "municipality",
                "tax_office_id",
                "tax_office"
            );

            if (!in_array($orderby, $columns))
                throw new Exception(ExceptionMessages::InvalidOrderBy." : ".$orderby, ExceptionCodes::InvalidOrderBy);
        }
        else
            $orderby = "school_committee";

//======================================================================================================================
//= E X E C U T E
//======================================================================================================================

        $sqlSelect = "SELECT
                        school_committees.school_committee_id,
                        school_committees.name as school_committee,
                        school_committees.active,
                        school_committees.street_address,
                        school_committees.postal_code,
                        school_committees.fax_number,
                        school_committees.phone_number,
                        school_committees.email,
                        school_committees.last_update,
                        school_committees.tax_number,
                        school_committees.comments,
                        school_committees.education_level_id,
                        education_levels.name as education_level,
                        school_committees.region_edu_admin_id,
                        region_edu_admins.name as region_edu_admin,
                        school_committees.edu_admin_id,
                        edu_admins.name as edu_admin,
                        school_committees.prefecture_id,
                        prefectures.name as prefecture,
                        school_committees.municipality_id,
                        municipalities.name as municipality,
                        school_committees.tax_office_id,
                        tax_offices.name as tax_office
                    ";
        
        $sqlFrom = "FROM school_committees
                    LEFT JOIN education_levels ON school_committees.education_level_id = education_levels.education_level_id
                    LEFT JOIN region_edu_admins ON school_committees.region_edu_admin_id = region_edu_admins.region_edu_admin_id
                    LEFT JOIN edu_admins ON school_committees.edu_admin_id = edu_admins.edu_admin_id
                    LEFT JOIN prefectures ON school_committees.prefecture_id = prefectures.prefecture_id
                    LEFT JOIN municipalities ON school_committees.municipality_id = municipalities.municipality_id
                    LEFT JOIN tax_offices ON school_committees.tax_office_id = tax_offices.tax_office_id";

        $sqlWhere = (count($filter) > 0 ? " WHERE " . implode(" AND ", $filter) : "" );
        $sqlOrder = " ORDER BY ". $orderby ." ". $ordertype;
        $sqlLimit = ($page && $pagesize) ? " LIMIT ".(($page - 1) * $pagesize).", ".$pagesize : "";
        
        
        $sql = "SELECT count(*) as total " . $sqlFrom . $sqlWhere;
        //echo "<br><br>".$sql."<br><br>";
        
        $stmt = $db->query( $sql );
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);
        $result["total"] = $rows["total"];

        
        $sql = $sqlSelect . $sqlFrom . $sqlWhere . $sqlOrder . $sqlLimit;
        //echo "<br><br>".$sql."<br><br>";

        $stmt = $db->query( $sql );        
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $result["count"] = $stmt->rowCount();

        foreach ($rows as $row)
        {
            $result["data"][] = array(
                "school_committee_id" => (int)$row["school_committee_id"],
                "school_committee"    => $row["school_committee"],
                "active"              => (boolean)$row["active"],
                "street_address"      => $row["street_address"],
                "postal_code"         => $row["postal_code"],
                "fax_number"          => $row["fax_number"],
                "phone_number"        => $row["phone_number"],
                "email"               => $row["email"],
                "last_update"         => $row["last_update"],
                "tax_number"          => (int)$row["tax_number"],
                "education_level_id"  => (int)$row["education_level_id"],
                "education_level"     => $row["education_level"],
                "region_edu_admin_id" => (int)$row["region_edu_admin_id"],
                "region_edu_admin"    => $row["region_edu_admin"],
                "edu_admin_id"        => (int)$row["edu_admin_id"],
                "edu_admin"           => $row["edu_admin"],
                "prefecture_id"       => (int)$row["prefecture_id"],
                "prefecture"          => $row["prefecture"],
                "municipality_id"     => (int)$row["municipality_id"],
                "municipality"        => $row["municipality"],
                "tax_office_id"       => (int)$row["tax_office_id"],
                "tax_office"          => $row["tax_office"],
                "comments"            => $row["comments"]
            );
        }

        $result["status"] = ExceptionCodes::NoErrors;;
        $result["message"] = ExceptionMessages::NoErrors;
    } 
    catch (Exception $e) 
    {
        $result["status"] = $e->getCode();
        $result["message"] = "[".__FUNCTION__."]:".$e->getMessage();
    } 
    
    return $result;
}

?>