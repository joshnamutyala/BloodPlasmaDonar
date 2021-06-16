<!DOCTYPE html>

<html>
    <head>
        <style>
            .form{
                display: block;
                background-color: #fd5a5a;
                width: 800px;
                height: 500px;
                margin: 0 auto;
                border-radius: 50px;
                text-align: center;
            }
            
            .input{
                position: relative;
                height: 40px;
                width: 40%;
                border-radius: 10px;
                text-align: center;
                font-size: 20px;
            }
            
            .submit {
                position: relative;
                background-color: white; /* Green */
                border: 2px solid #fd5a5a;
                color: #fd5a5a;
                width: 30%;
                top: 40%;
                padding-top: 1.5%;
                padding-bottom: 1.5%;
                text-align: center;
                text-decoration: none;
                font-size: 30px;
                font-weight: bold;
                border-radius: 10px;
                transition-duration: 1s;
            }
            
            .submit:hover{
                border: 2px solid white;
                background-color: #fd5a5a;
                color: white;
            }
            
            a {
                color: #fd5a5a;
            }
            
        </style>
         <script>
           var stateObject = {
            "AndhraPradesh": {
            "EastGodavari ": ["Amalapuram","Dowleswaram","Rajahmundry","Ravulapalem","Kakinada","Mandapeta","Peddapuram"],
            "WestGodavari": ["Bhimadole", "Eluru","Tadepalligudem","Polavaram","Bhimavaram","Palakollu","Nidadavolu"],
            "Visakhapatnam": ["Anakapalle", "Ananthagiri","Bheemunipatnam","Chodavaram","Gajuwaka"],
},
"Telangana": {
            "Hyderabad": ["Amberpet","Bahadurpura","Chandrayanagutta","Charminar","Goshamahal","Jubilee Hills"],
            "Khammam": ["Chatakonda", "Batthulapally","Madhira","Kistaram"],
            "Karimnagar":["karimnagar","kothapally","karimnagar Rural","Manakondur","Thimmapur"]
},
}
            window.onload = function () {
var countySel = document.getElementById("countySel"),
stateSel = document.getElementById("stateSel"),
districtSel = document.getElementById("districtSel");
for (var country in stateObject) {
countySel.options[countySel.options.length] = new Option(country, country);
}
countySel.onchange = function () {
stateSel.length = 1; // remove all options bar first
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
for (var state in stateObject[this.value]) {
stateSel.options[stateSel.options.length] = new Option(state, state);
}
}
countySel.onchange(); // reset in case page is reloaded
stateSel.onchange = function () {
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
var district = stateObject[countySel.value][this.value];
for (var i = 0; i < district.length; i++) {
districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
}
}
}
            
            </script>
    </head>
    <body>
        <div style = "color: #fd5a5a;">
            <center><h1>Find A Donar</h1></center>
        </div>
        <form class = "form" action = "Find_Verify.php" method = "POST">
        <select class = "input" style = "top:15%;" name = "blood" required>
                <option value = "A+">A+</option>
                <option value = "A-">A-</option>
                <option value = "B+">B+</option>
                <option value = "B-">B-</option>
                <option value = "AB+">AB+</option>
                <option value = "AB-">AB-</option>
                <option value = "O+">O+</option>
                <option value = "O-">O-</option>
            </select> </br>
            <select class="input"  name="state" style = "top:20%;"" id="countySel" size="1">
                <option value="" selected="selected">Select state</option>
                </select>
                <br>
                <br>
                <select class="input" style="top:25%" name="countrya" id="stateSel" size="1">
                <option value="" selected="selected">Please select District first</option>
                </select>
                <br>
                <br>
                <select class="input" style="top:30%" name="district" id="districtSel" size="1">
                <option value="" selected="selected">Please select City first</option>
                </select><br>
            
			<input class = "submit" type = "submit" value = "Find Donar"></input> </br>
        </form>
		</br>
        <center style = "color: black">Donate <a href = "Register_Donor.html">here</a> </center>
		<center style = "color: black">Go to the <a href = "Home.html">home page.</a> </center>
	</body>
</html>