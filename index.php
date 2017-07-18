<!DOCTYPE html>
<html lang="en">
<head>
  <title>Placement Analysis</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    var countryNames = [
	"Afghanistan","Albania","Algeria","Andorra","Angola","Antigua and Barbuda","Argentina","Armenia","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bhutan","Bolivia","Bosnia and Herzegovina","Botswana","Brazil","Brunei Darussalam","Bulgaria","Burkina Faso","Burundi","Cabo Verde","Cambodia","Cameroon","Canada","Central African Republic","Chad","Chile","China","Colombia","Comoros","Congo","Costa Rica","Côte d'Ivoire","Croatia","Cuba","Cyprus","Czech Republic","Democratic People's Republic of Korea (North Korea)","Democratic Republic of the Cong","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Fiji","Finland","France","Gabon","Gambia","Georgia","Germany","Ghana","Greece","Grenada","Guatemala","Guinea","Guinea-Bissau","Guyana","Haiti","Honduras","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Israel","Italy","Jamaica","Japan","Jordan","Kazakhstan","Kenya","Kiribati","Kuwait","Kyrgyzstan","Lao People's Democratic Republic (Laos)","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia (Federated States of)","Monaco","Mongolia","Montenegro","Morocco","Mozambique","Myanmar","Namibia","Nauru","Nepal","Netherlands","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palau","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Qatar","Republic of Korea (South Korea)","Republic of Moldova","Romania","Russian Federation","Rwanda","Saint Kitts and Nevis","Saint Lucia","Saint Vincent and the Grenadines","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Sudan","Spain","Sri Lanka","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syrian Arab Republic","Tajikistan","Thailand","Timor-Leste","Togo","Tonga","Trinidad and Tobago","Tunisia","Turkey","Turkmenistan","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom of Great Britain and Northern Ireland","United Republic of Tanzania","United States of America","Uruguay","Uzbekistan","Vanuatu","Venezuela","Vietnam","Yemen","Zambia","Zimbabwe"
    ];
    $( "#country" ).autocomplete({
      source: countryNames
    });
  } );
 $( function() {
    var stateNames = [
"Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chhattisgarh","Goa","Gujarat","Haryana","Himachal Pradesh","Jammu and Kashmir","Jharkhand","Karnataka","Kerala","Madhya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland","Odisha","Punjab","Rajasthan","Sikkim","Tamil Nadu","Telangana","Tripura","Uttar Pradesh","Uttarakhand","West Bengal"
];
    $( "#states" ).autocomplete({
      source: stateNames
    });
  } );
 $( function() {
    var districtNames = [
"Thane","North 24 Parganas","Bangalore Urban","Pune","Mumbai suburban","South 24 Parganas","Bardhaman","Ahmedabad","Murshidabad","Jaipur","Nashik","Allahabad","Patna","Hooghly","Ranga Reddy","Nadia","East Godavari","Paschim Medinipur","East Champaran","Surat","Guntur","Howrah","Muzaffarpur","Belgaum","Moradabad","Chennai","Ghaziabad","Nagpur","Azamgarh","Lucknow","Kanpur Nagar","Ahmednagar","Krishna","Kolkata","Jaunpur district","Madhubani","Sitapur","Bareilly","Gorakhpur","Purba Medinipur","Agra","Gaya","Solapur","Visakhapatnam","Samastipur","Jalgaon","Chittoor","Muzaffarnagar","Malappuram","Hardoi","Anantapur","Raipur","Kurnool","Mahbubnagar","Lakhimpur Kheri","Hyderabad","Maldah","Madurai","Kanchipuram","Saran","West Champaran","West Godavari","Vellore","Darbhanga","Kolhapur","Jalpaiguri","Karimnagar","Sultanpur","Tiruvallur","Budaun","Aurangabad","Jodhpur","Bijnor","Varanasi","Aligarh","Alwar","North West Delhi","Vadodara","Ghazipur","Bankura","Kushinagar","Warangal","Ganjam","Birbhum","Bulandshahr","Vaishali","Ludhiana","Nalgonda","Salem","Coimbatore","Saharanpur","Viluppuram","Meerut","Gonda","Sitamarhi","Raebareli","Prakasam","Nanded","Durg","Siwan","Nagaur","Thiruvananthapuram","Ernakulam","Purnia","Indore","Barabanki","Ballia","Pratapgarh","Rajkot","Mumbai City","Banaskantha","Unnao","Thrissur","Deoria","Kozhikode","Tirunelveli","Katihar","Udaipur","Bhagalpur","Medak","Satara","Shahjahanpur","Uttar Dinajpur","Mysore","Sri Potti Sriramulu Nellore","Rohtas","Begusarai","Purulia","Ranchi","Patiala","Amravati","Kadapa","Bhavnagar","Nalanda","Kanyakumari","Nagaon","Cooch Behar","Sangli","Palakkad","Araria","Khammam","Yavatmal","Junagadh","Adilabad","South Delhi","Bhojpur","Tiruchirappalli","Srikakulam","Dhanbad","Tumkur","Sikar","Maharajganj","Bilaspur","Raigad","Fatehpur","Kollam","Cuttack","Barmer","Cuddalore","Buldhana","Beed","Ajmer","Gulbarga","Gopalganj","Siddharthnagar","Nizamabad","Bharatpur","Mathura","Bellary","West Delhi","Kannur","Mayurbhanj","Aurangabad","Firozabad","Mirzapur","Amritsar","Tirupur","Tiruvannamalai","Faizabad","Basti","Jabalpur","Latur","Giridih","Sabarkantha","Bhilwara","Thanjavur","Ambedkar Nagar","Panchmahal","Bahraich","Sagar","Bhopal","Bikaner","Rewa","Vizianagaram","Rampur","Balasore","Gurdaspur","Kheda","South West Delhi","East Singhbhum","Erode","Khordha","North East Delhi","Satna","Supaul","Sambhal(Bheem Nagar)","Nawada","Mau","Chandrapur","Dhar","Jalandhar","Vijayapura","Dindigul","Jamnagar","Balrampur","Jhunjhunu","Dahod","Alappuzha","Kutch","Chhindwara","Anand","Dakshina Kannada","Sundargarh","Bokaro","Dhule","Churu","Pali","Pilibhit","Gwalior","Banka","Mehsana","Firozpur","Jhansi","Pathankot","Madhepura","Ujjain","Kottayam","Ganganagar","Morena","Jalna","Chandauli","Kota","Dhubri","Davanagere","Virudhunagar","Palamu","Haridwar","Sonitpur","Raichur","Pudukkottai","Saharsa","Bagalkot","Farrukhabad","Krishnagiri","Khargone (West Nimar)","Sonbhadra","Mainpuri","Dharwad","Darjeeling","Jyotiba Phule Nagar","Parbhani","Jalore","Jajpur","Akola","Mandya","Kendujhar (Keonjhar)","Banda","Faridabad","Banswara","Kanpur Dehat (Ramabai Nagar)","Hanumangarh","Hassan","Chhatarpur","Etah","Jamui","Surendranagar","Shimoga","Hissar","Thoothukudi","Cachar","Hazaribag","Shivpuri","Namakkal","Sant Kabir Nagar","East Delhi","Buxar","Bhind","Valsad","Balaghat","Bidar","Alipurduar","Dehradun","Puri","Barpeta","Kishanganj","Gautam Buddh Nagar","Dakshin Dinajpur","Jalaun","Chitradurga","Osmanabad","Kannauj","Khagaria","Sangrur","Balangir","Udham Singh Nagar","Nandurbar","Dausa","Bhiwani","Kaimur","Janjgir-Champa","Nagapattinam","Ratnagiri","Haveri district","Kaushambi","Hoshiarpur","Etawah","Betul","Kalahandi","Hathras (Mahamaya Nagar)","Dewas","Sant Ravidas Nagar","Bharuch","Rajgarh","Chittorgarh","Kolar","Rajnandgaon","Jammu","Kamrup","Gurgaon","Amreli district","Shajapur","Kangra","Bhadrak","Karnal","Dharmapuri","West Singhbhum","Raigarh","Deoghar","Sonipat","Bargarh (Baragarh)","Karauli","Vidisha","Ratlam","Hapur (Panchsheel Nagar)","Tikamgarh","Kendrapara","Kanshi Ram Nagar","Tonk","Bastar","Jhalawar","Koppal","Dungapur","Bathinda","Gandhinagar","Barwani","Seoni","Koraput","Auraiya","Munger","Uttara Kannada","Patan","Sivaganga","Mandsaur","Sawai Madhopur","Ramanathapuram","Jind","Raisen","Navsari","Dibrugarh","Garhwa","Gondia","Dumka","Tinsukia","Godda","Sehore","Khandwa (East Nimar)","Kasaragod","Bagpat","Wardha","Sirsa","Katni","Angul","Srinagar","Tiruvarur","Damoh","Kamrup Metropolitan","Chikkaballapur","Theni","Hoshangabad","Guna","Baran","Nabarangpur","Lalitpur","Gir Somnath","Karimganj","Yamuna Nagar","Dholpur","Korba","Panipat","Bhandara","Washim","Pathanamthitta","Dhenkanal","Hingoli","Singrauli","Udupi","Yadgir","Rajsamand","Sivasagar","Sahibganj","Chikkamagaluru","Ambala","Jagatsinghpur","Sidhi","Jehanabad","Tarn Taran","Shravasti","Bundi","Idukki","Hamirpur","Narsinghpur","Jorhat","Mewat","Ramanagara","Karur","Kaithal","Chhota Udaipur","Gadchiroli","Anantnag","Gadag","Shahdol","Seraikela Kharsawan","Rohtak","Golaghat","Chandigarh","Mandla","Aravalli","Sambalpur","Chatra","Lakhimpur","Palwal","Sirohi","Mahasamund","Gumla","Jhabua","Chamarajnagar","Panna","Baramulla","Goalpara","Lakhisarai","Mandi","Mahisagar","Moga","Chitrakoot","Bangalore Rural","Sahibzada Ajit Singh Nagar","Karbi Anglong","Kurukshetra","Nayagarh","Rayagada","Morbi","Morigaon","Jhajjar","Nainital","Baksa","Ramgarh","Pondicherry","Fatehabad","Mahendragarh","West Tripura","Darrang","Sri Muktsar Sahib","Pakur","Rewari","Kokrajhar","North Delhi","Mahoba","Kupwara","Pratapgarh","Jashpur","Sindhudurg","Ashok Nagar","Udalguri","Neemuch","East Khasi Hills","North Goa","Kapurthala","Wayanad","Shimla","Tapi","Dhamtari","Jamtara","Datia","Nalbari","Mansa","Burhanpur","Devbhoomi Dwarka","Ariyalur","Anuppur","Kanker","Badgam","Nilgiris","Bongaigaon","Kandhamal","Alirajpur","Latehar","Koderma","Dindori","Arwal","Dhemaji","Sheopur","Pauri Garhwal","Rupnagar","Jaisalmer","Surajpur","Hailakandi","Koriya","Sheohar","Botad","Subarnapur (Sonepur)","Umaria","West Garo Hills","South Goa","Sheikhpura","Almora","Rajouri","Faridkot","Tehri Garhwal","Kathua","Shahid Bhagat Singh Nagar","Malkangiri","Nuapada","Fatehgarh Sahib","Simdega","Barnala","Narmada","Porbandar","Kabirdham (formerly Kawardha)","Jharsuguda","Central Delhi","Solan","Gajapati","Harda","Pulwama","Perambalur","Panchkula","Udhampur","Kodagu","Dantewada","Khunti","Sirmaur","Una","Chamba","Imphal West","Pithoragarh","Sepahijala","Chirang","Poonch","Lohardaga","Hamirpur","Imphal East","Boudh (Bauda)","Kullu","Gomati","South Tripura","Kulgam","Surguja","Thoubal","North Tripura","Tuensang","Doda","Aizawl","Chamoli","West Khasi Hills","Bandipora","Bilaspur","Dimapur","Dhalai","Senapati","Dadra and Nagar Haveli","Uttarkashi","Khowai","Samba","East Garo Hills","Reasi","Debagarh (Deogarh)","Ganderbal","Ramban","East Sikkim","Unokoti","Churachandpur","West Jaintia Hills","Kohima","Shopian","Bageshwar","Mon","Champawat","Ri Bhoi","Bijapur","Sukma","Bishnupur","South Andaman","Rudraprayag","Kishtwar","Dang","Dima Hasao","Karaikal","Mokokchung","Daman","Ukhrul","Papum Pare","Wokha","Peren","Phek","Lunglei","Changlang","Leh","South Sikkim","Lohit","Chandel","Kargil","South Garo Hills","Zunheboto","Narayanpur","Tamenglong","West Sikkim","New Delhi","Champhai","East Jaintia Hills","North Garo Hills","Lawngtlai","West Siang","Tirap","South West Khasi Hills","North and Middle Andaman","East Siang","Kurung Kumey","West Kameng","Mamit","Kinnaur","Upper Subansiri","Kolasib","Lower Subansiri","East Kameng","Kiphire","Serchhip","Lakshadweep","Saiha","Yanam","Lower Dibang Valley","Diu","Longleng","Tawang","North Sikkim","Mahe","Nicobar","Upper Siang","Lahaul and Spiti","Anjaw","Dibang Valley","Fazilka","Shamli","Balrampur","Bemetara","Palghar","Longding","Balod","Baloda Bazar","Gariaband","Kondagaon","Mungeli","Shahdara","South East Delhi","Agar","South West Garo Hills","Amethi (Chhatrapati Shahuji Maharaj Nagar)"
];
    $( "#district" ).autocomplete({
      source: districtNames
    });
  } );
$( function() {
    var branchNames = [
"CSE","CE","IT","ECE","EEE","ME"
];
    $( "#branch" ).autocomplete({
      source: branchNames
    });
  } );



  </script>
</head>

<body>
<style>
	#form-content{
		margin: 0 auto;
	}
@media (min-width: 768px) {
    .container-small {
        width: 300px;
    }
    .container-large {
        width: 970px;
    } 
} 
@media (min-width: 992px) {
    .container-small {
        width: 500px;
    }
    .container-large {
        width: 1170px;
    } 
} 
@media (min-width: 1200px) {
    .container-small {
        width: 700px;
    }
    .container-large {
        width: 1500px;
    } 
}

.container-small, .container-large {
    max-width: 100%;
}
.jumbotron{
margin-bottom: 0px;
    background-image: url(country.png);
    background-position: 0% 25%;
    background-size: cover;
    background-repeat: no-repeat;
    color: black;
    
    text-shadow: black 0.5em 0.5em 0.5em;

}


</style>

<?php
$ip = $_SERVER['REMOTE_ADDR'];
$url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=2b3d7d0ad1a285279139487ce77f3f58d980eea9546b5ccc5d08f5ee62ce7471&.$ip&format=json"));
?>
<!--echo "<table border='1' width='50%' align='center'><tr><td>COUNTRY:</td><td>";
echo $url->countryName;
echo "</td></tr><tr><td>CITY:</td><td>";
echo $url->cityName;
echo "</td></tr><tr><td>STATE OR REGION:</td><td>";
echo $url->regionName;
echo "</td></tr><tr><td>IP ADDRESS:</td><td>";
echo $url->ipAddress;
echo "</td></tr><tr><td>COUNTRY CODE:</td><td>";
echo $url->countryCode;
echo "</td></tr><tr><td>LATITUTE:</td><td>";
echo $url->latitude;
echo "</td></tr><tr><td>LONGITUDE:</td><td>";
echo $url->longitude;
echo "</td></tr><tr><td>TIMEZONE:</td><td>";
echo $url->timeZone;
echo "</td></tr><tr></table>";-->

<div>
  <h1 align="center"><bold><font color="#FF00FF">Searching the placements in each and every college</font></bold></h1>  
</div>
<hr>
<div class="jumbotron">

<div id="form-content">

      <div class="col-xs-3">
        <div class="ui-widget">
  		<label for="country" style="color:white;">Country: </label>
  		<input id="country" name="country" value="<?php echo $url->countryName; ?> ">

	</div>
      </div>
      <div class="col-xs-3">
        <div class="ui-widget">
  		<label for="state" style="color:white;">State: </label>
  		<input id="states" name="states" value="<?php echo $url->regionName; ?>">
	</div>
      </div>
      <div class="col-xs-3">
        <div class="ui-widget">
  		<label for="district" style="color:white;">District: </label>
  		<input id="district" name="district" >
	</div>
      </div>
<div class="col-xs-3">
        <div class="ui-widget">
  		<label for="branch" style="color:white;">Branch: </label>
  		<input id="branch" name="branch">
<button type="Submit" id="submit" name="submit" class="hidden" >Submit</button>
  <button type="Reset" onclick="ClearFields();" class="btn-xs btn-primary">Reset</button>


</div></div>
	
  
</div>

<script>

$('#india').keypress(function (e) {
  if (e.which == 13) {
    $("#submit").click()
  }
});
$('#states').keypress(function (e) {
  if (e.which == 13) {
    $("#submit").click()
  }
});
$('#district').keypress(function (e) {
  if (e.which == 13) {
    $("#submit").click()
  }
});
$('#branch').keypress(function (e) {
  if (e.which == 13) {
    $("#submit").click()
  }
});

function ClearFields() {

     document.getElementById("country").value = "";
     document.getElementById("states").value = "";
     document.getElementById("district").value = "";
     document.getElementById("branch").value = "";
}
</script>

    </div>

  
  
<div class="col-md-12" id="output"></div>

</div>
<script>
  $(document).ready(function(){
       $("#submit").click(function () {
       var country = $("#country").val();
       var states = $("#states").val();
       var district = $("#district").val();
       var branch = $("#branch").val();	
       var dataString ="submit='submit'&country="+ country +'&states='+ states +'&district='+ district +'&branch='+ branch;
      
       // AJAX Code To Submit.
       //console.log(dataString);

           $.ajax({
               type: "POST",
               url: "url.php",
               data: dataString,
               cache: false,
               success: function(result){
                   //window.console.log('Successful');
                   $("#output").html("<p style='color:red'>" + result + "</p>");
               }
           });
});
});
</script>
 
</body>
</html>

