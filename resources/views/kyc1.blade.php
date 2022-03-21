<!DOCTYPE html>
<html>
<head>
    <title>Kyc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }
        h2{
            text-align: center;
        }
        label1{
            font-weight: bold;
        }
        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {

            border-radius: 5px;
            position: center;
            margin-left: 400px;
            width: 50%;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
    <style type="text/css">
        .PAN
        {
            text-transform: uppercase;
        }
        .error
        {
            color: Red;
            visibility: hidden;
        }
    </style>
    <script type="text/javascript">
        function ValidatePAN() {
            var txtPANCard = document.getElementById("txtPANCard");
            var lblPANCard = document.getElementById("lblPANCard")
            var regex = /([A-Z]){5}([0-9]){4}([A-Z]){1}$/;
            if (regex.test(txtPANCard.value.toUpperCase())) {
                lblPANCard.style.visibility = "hidden";
                return true;
            } else {
                lblPANCard.style.visibility = "visible";
                return false;
            }
        }
    </script>
</head>
<body>

<div class="container">
    <form action="login" method="post">
        <hr>
        <h2>$ecure KYC</h2>
        <hr>
        <label1 for="l1">Personal Details</label1>
        <hr>
        <div class="row">
            <div class="col-25">
                <label for="uname">Name of User</label>
            </div>
            <div class="col-75">
                <input type="text" id="uname" name="username" placeholder="Enter Your Full Name...">
                <span class="text-danger">@error('uname') {{ $message }} @enderror</span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="pname">Father's/Mothers's/ Guardian's Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="pname" name="parentname" placeholder="Enter Your Full Name...">
                <span class="text-danger">@error('pname') {{ $message }} @enderror</span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="gender">Gender</label>
                <span class="text-danger">@error('gender') {{ $message }} @enderror</span>
            </div>
            <div class="col-75">
                <input type="radio" id="male" name="fav_language" value="male">
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="fav_language" value="female">
                <label for="female">Female</label><br>
                <input type="radio" id="others" name="fav_language" value="others">
                <label for="others">Others</label>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="date">Date Of Birth</label>
                <span class="text-danger">@error('date') {{ $message }} @enderror</span>
            </div>
            <div class="col-75">
                <input type="date" id="birthday" name="birthday">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="tel">Contact Number</label>
            </div>
            <div class="col-75">
                <input type="tel" id="phone" name="phone" placeholder="Enter your Phone Number">
                <span class="text-danger">@error('tel') {{ $message }} @enderror</span>
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="pan">PAN Card</label>
            </div>
            <div class="col-75">
                <input name="txtPANCard" type="text" id="txtPANCard" class="PAN" />
                <span id="lblPANCard" class="error">Invalid PAN Number</span>
                <hr />
                <input type="button" id="btnSubmit" value="Submit" onclick="ValidatePAN()" />
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="doc">Proof of Identity Submitted for PAN Exempt Cases </label>
                <span class="text-danger">@error('required') {{ $message }} @enderror</span>
            </div>
            <div class="col-75">
                <input type="radio" id="male" name="language" value="male">
                <label for="male">Aadhar</label><br>
                <input type="radio" id="female" name="language" value="female">
                <label for="female">Passport</label><br>
                <input type="radio" id="others" name="language" value="others">
                <label for="others">Driving Linence</label><br>
                <input type="radio" id="female" name="language" value="female">
                <label for="female">Voter ID</label><br>
            </div>
        </div>


        <div class="row">
            <div class="col-25">
                <label for="file">Please Upload related documents</label>
                <span class="text-danger">@error('file') {{ $message }} @enderror</span>
            </div>
            <div class="col-75">
                <input type="file" id="myFile" name="filename">
            </div>
        </div>


            <hr>
            <label1 for="l1">Address Details</label1>
            <hr>

            <div class="row">
                <div class="col-25">
                    <label for="address">Address</label>
                </div>
                <div class="col-75">
                    <textarea id="address" name="subject" placeholder="Enter Your Complete Address" style="height:200px"></textarea>
                    <span class="text-danger">@error('address') {{ $message }} @enderror</span>
                </div>
            </div>

        <div class="row">
            <div class="col-25">
                <label for="state">State</label>
                <span class="text-danger">@error('required') {{ $message }} @enderror</span>
            </div>
            <div class="col-75">
                <select id="state" name="state">
                    <option value=""> Please Select </option>
                    <option value="United States"> Andhra Pradesh </option>
                    <option value="Afghanistan"> Arunachal Pradesh</option>
                    <option value="Albania"> Assam</option>
                    <option value="Algeria"> Bihar </option>
                    <option value="American Samoa"> Chhattisgarh </option>
                    <option value="Andorra"> Goa </option>
                    <option value="Angola"> Gujarat </option>
                    <option value="Anguilla"> Haryana </option>
                    <option value="Antigua and Barbuda"> Himachal Pradesh </option>
                    <option value="Argentina"> Jammu & Kashmir</option>
                    <option value="Armenia"> Jharkhand </option>
                    <option value="Aruba"> Karnataka </option>
                    <option value="Australia"> Kerala </option>
                    <option value="Austria"> Madhya Pradesh </option>
                    <option value="Azerbaijan"> Maharashtra </option>
                    <option value="The Bahamas"> Manipur </option>
                    <option value="Bahrain"> Meghalaya</option>
                    <option value="Bangladesh"> Mizoram </option>
                    <option value="Barbados"> Nagaland </option>
                    <option value="Belarus">Odisha </option>
                    <option value="Belgium"> Punjab </option>
                    <option value="Belize"> Rajasthan </option>
                    <option value="Benin"> Sikkim</option>
                    <option value="Bermuda"> Tamil Nadu</option>
                    <option value="Bhutan"> Tripura </option>
                    <option value="Bolivia"> Uttarakhand </option>
                    <option value="Bosnia and Herzegovina"> Uttar Pradesh </option>
                    <option value="Botswana"> West Bengal </option>
                </select>
            </div>
        </div>



        <div class="row">
                <div class="col-25">
                    <label for="country">Country</label>
                    <span class="text-danger">@error('required') {{ $message }} @enderror</span>
                </div>
                <div class="col-75">
                    <select id="country" name="country">
                        <option value=""> Please Select </option>
                        <option value="United States"> United States </option>
                        <option value="Afghanistan"> Afghanistan </option>
                        <option value="Albania"> Albania </option>
                        <option value="Algeria"> Algeria </option>
                        <option value="American Samoa"> American Samoa </option>
                        <option value="Andorra"> Andorra </option>
                        <option value="Angola"> Angola </option>
                        <option value="Anguilla"> Anguilla </option>
                        <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                        <option value="Argentina"> Argentina </option>
                        <option value="Armenia"> Armenia </option>
                        <option value="Aruba"> Aruba </option>
                        <option value="Australia"> Australia </option>
                        <option value="Austria"> Austria </option>
                        <option value="Azerbaijan"> Azerbaijan </option>
                        <option value="The Bahamas"> The Bahamas </option>
                        <option value="Bahrain"> Bahrain </option>
                        <option value="Bangladesh"> Bangladesh </option>
                        <option value="Barbados"> Barbados </option>
                        <option value="Belarus"> Belarus </option>
                        <option value="Belgium"> Belgium </option>
                        <option value="Belize"> Belize </option>
                        <option value="Benin"> Benin </option>
                        <option value="Bermuda"> Bermuda </option>
                        <option value="Bhutan"> Bhutan </option>
                        <option value="Bolivia"> Bolivia </option>
                        <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                        <option value="Botswana"> Botswana </option>
                        <option value="Brazil"> Brazil </option>
                        <option value="Brunei"> Brunei </option>
                        <option value="Bulgaria"> Bulgaria </option>
                        <option value="Burkina Faso"> Burkina Faso </option>
                        <option value="Burundi"> Burundi </option>
                        <option value="Cambodia"> Cambodia </option>
                        <option value="Cameroon"> Cameroon </option>
                        <option value="Canada"> Canada </option>
                        <option value="Cape Verde"> Cape Verde </option>
                        <option value="Cayman Islands"> Cayman Islands </option>
                        <option value="Central African Republic"> Central African Republic </option>
                        <option value="Chad"> Chad </option>
                        <option value="Chile"> Chile </option>
                        <option value="China"> China </option>
                        <option value="Christmas Island"> Christmas Island </option>
                        <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                        <option value="Colombia"> Colombia </option>
                        <option value="Comoros"> Comoros </option>
                        <option value="Congo"> Congo </option>
                        <option value="Cook Islands"> Cook Islands </option>
                        <option value="Costa Rica"> Costa Rica </option>
                        <option value="Cote d&#x27;Ivoire"> Cote d&#x27;Ivoire </option>
                        <option value="Croatia"> Croatia </option>
                        <option value="Cuba"> Cuba </option>
                        <option value="Curacao"> Curacao </option>
                        <option value="Cyprus"> Cyprus </option>
                        <option value="Czech Republic"> Czech Republic </option>
                        <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                        <option value="Denmark"> Denmark </option>
                        <option value="Djibouti"> Djibouti </option>
                        <option value="Dominica"> Dominica </option>
                        <option value="Dominican Republic"> Dominican Republic </option>
                        <option value="Ecuador"> Ecuador </option>
                        <option value="Egypt"> Egypt </option>
                        <option value="El Salvador"> El Salvador </option>
                        <option value="Equatorial Guinea"> Equatorial Guinea </option>
                        <option value="Eritrea"> Eritrea </option>
                        <option value="Estonia"> Estonia </option>
                        <option value="Ethiopia"> Ethiopia </option>
                        <option value="Falkland Islands"> Falkland Islands </option>
                        <option value="Faroe Islands"> Faroe Islands </option>
                        <option value="Fiji"> Fiji </option>
                        <option value="Finland"> Finland </option>
                        <option value="France"> France </option>
                        <option value="French Polynesia"> French Polynesia </option>
                        <option value="Gabon"> Gabon </option>
                        <option value="The Gambia"> The Gambia </option>
                        <option value="Georgia"> Georgia </option>
                        <option value="Germany"> Germany </option>
                        <option value="Ghana"> Ghana </option>
                        <option value="Gibraltar"> Gibraltar </option>
                        <option value="Greece"> Greece </option>
                        <option value="Greenland"> Greenland </option>
                        <option value="Grenada"> Grenada </option>
                        <option value="Guadeloupe"> Guadeloupe </option>
                        <option value="Guam"> Guam </option>
                        <option value="Guatemala"> Guatemala </option>
                        <option value="Guernsey"> Guernsey </option>
                        <option value="Guinea"> Guinea </option>
                        <option value="Guinea-Bissau"> Guinea-Bissau </option>
                        <option value="Guyana"> Guyana </option>
                        <option value="Haiti"> Haiti </option>
                        <option value="Honduras"> Honduras </option>
                        <option value="Hong Kong"> Hong Kong </option>
                        <option value="Hungary"> Hungary </option>
                        <option value="Iceland"> Iceland </option>
                        <option value="India"> India </option>
                        <option value="Indonesia"> Indonesia </option>
                        <option value="Iran"> Iran </option>
                        <option value="Iraq"> Iraq </option>
                        <option value="Ireland"> Ireland </option>
                        <option value="Israel"> Israel </option>
                        <option value="Italy"> Italy </option>
                        <option value="Jamaica"> Jamaica </option>
                        <option value="Japan"> Japan </option>
                        <option value="Jersey"> Jersey </option>
                        <option value="Jordan"> Jordan </option>
                        <option value="Kazakhstan"> Kazakhstan </option>
                        <option value="Kenya"> Kenya </option>
                        <option value="Kiribati"> Kiribati </option>
                        <option value="North Korea"> North Korea </option>
                        <option value="South Korea"> South Korea </option>
                        <option value="Kosovo"> Kosovo </option>
                        <option value="Kuwait"> Kuwait </option>
                        <option value="Kyrgyzstan"> Kyrgyzstan </option>
                        <option value="Laos"> Laos </option>
                        <option value="Latvia"> Latvia </option>
                        <option value="Lebanon"> Lebanon </option>
                        <option value="Lesotho"> Lesotho </option>
                        <option value="Liberia"> Liberia </option>
                        <option value="Libya"> Libya </option>
                        <option value="Liechtenstein"> Liechtenstein </option>
                        <option value="Lithuania"> Lithuania </option>
                        <option value="Luxembourg"> Luxembourg </option>
                        <option value="Macau"> Macau </option>
                        <option value="Macedonia"> Macedonia </option>
                        <option value="Madagascar"> Madagascar </option>
                        <option value="Malawi"> Malawi </option>
                        <option value="Malaysia"> Malaysia </option>
                        <option value="Maldives"> Maldives </option>
                        <option value="Mali"> Mali </option>
                        <option value="Malta"> Malta </option>
                        <option value="Marshall Islands"> Marshall Islands </option>
                        <option value="Martinique"> Martinique </option>
                        <option value="Mauritania"> Mauritania </option>
                        <option value="Mauritius"> Mauritius </option>
                        <option value="Mayotte"> Mayotte </option>
                        <option value="Mexico"> Mexico </option>
                        <option value="Micronesia"> Micronesia </option>
                        <option value="Moldova"> Moldova </option>
                        <option value="Monaco"> Monaco </option>
                        <option value="Mongolia"> Mongolia </option>
                        <option value="Montenegro"> Montenegro </option>
                        <option value="Montserrat"> Montserrat </option>
                        <option value="Morocco"> Morocco </option>
                        <option value="Mozambique"> Mozambique </option>
                        <option value="Myanmar"> Myanmar </option>
                        <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                        <option value="Namibia"> Namibia </option>
                        <option value="Nauru"> Nauru </option>
                        <option value="Nepal"> Nepal </option>
                        <option value="Netherlands"> Netherlands </option>
                        <option value="Netherlands Antilles"> Netherlands Antilles </option>
                        <option value="New Caledonia"> New Caledonia </option>
                        <option value="New Zealand"> New Zealand </option>
                        <option value="Nicaragua"> Nicaragua </option>
                        <option value="Niger"> Niger </option>
                        <option value="Nigeria"> Nigeria </option>
                        <option value="Niue"> Niue </option>
                        <option value="Norfolk Island"> Norfolk Island </option>
                        <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                        <option value="Northern Mariana"> Northern Mariana </option>
                        <option value="Norway"> Norway </option>
                        <option value="Oman"> Oman </option>
                        <option value="Pakistan"> Pakistan </option>
                        <option value="Palau"> Palau </option>
                        <option value="Palestine"> Palestine </option>
                        <option value="Panama"> Panama </option>
                        <option value="Papua New Guinea"> Papua New Guinea </option>
                        <option value="Paraguay"> Paraguay </option>
                        <option value="Peru"> Peru </option>
                        <option value="Philippines"> Philippines </option>
                        <option value="Pitcairn Islands"> Pitcairn Islands </option>
                        <option value="Poland"> Poland </option>
                        <option value="Portugal"> Portugal </option>
                        <option value="Puerto Rico"> Puerto Rico </option>
                        <option value="Qatar"> Qatar </option>
                        <option value="Republic of the Congo"> Republic of the Congo </option>
                        <option value="Romania"> Romania </option>
                        <option value="Russia"> Russia </option>
                        <option value="Rwanda"> Rwanda </option>
                        <option value="Saint Barthelemy"> Saint Barthelemy </option>
                        <option value="Saint Helena"> Saint Helena </option>
                        <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                        <option value="Saint Lucia"> Saint Lucia </option>
                        <option value="Saint Martin"> Saint Martin </option>
                        <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                        <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                        <option value="Samoa"> Samoa </option>
                        <option value="San Marino"> San Marino </option>
                        <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                        <option value="Saudi Arabia"> Saudi Arabia </option>
                        <option value="Senegal"> Senegal </option>
                        <option value="Serbia"> Serbia </option>
                        <option value="Seychelles"> Seychelles </option>
                        <option value="Sierra Leone"> Sierra Leone </option>
                        <option value="Singapore"> Singapore </option>
                        <option value="Slovakia"> Slovakia </option>
                        <option value="Slovenia"> Slovenia </option>
                        <option value="Solomon Islands"> Solomon Islands </option>
                        <option value="Somalia"> Somalia </option>
                        <option value="Somaliland"> Somaliland </option>
                        <option value="South Africa"> South Africa </option>
                        <option value="South Ossetia"> South Ossetia </option>
                        <option value="South Sudan"> South Sudan </option>
                        <option value="Spain"> Spain </option>
                        <option value="Sri Lanka"> Sri Lanka </option>
                        <option value="Sudan"> Sudan </option>
                        <option value="Suriname"> Suriname </option>
                        <option value="Svalbard"> Svalbard </option>
                        <option value="eSwatini"> eSwatini </option>
                        <option value="Sweden"> Sweden </option>
                        <option value="Switzerland"> Switzerland </option>
                        <option value="Syria"> Syria </option>
                        <option value="Taiwan"> Taiwan </option>
                        <option value="Tajikistan"> Tajikistan </option>
                        <option value="Tanzania"> Tanzania </option>
                        <option value="Thailand"> Thailand </option>
                        <option value="Timor-Leste"> Timor-Leste </option>
                        <option value="Togo"> Togo </option>
                        <option value="Tokelau"> Tokelau </option>
                        <option value="Tonga"> Tonga </option>
                        <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                        <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                        <option value="Tristan da Cunha"> Tristan da Cunha </option>
                        <option value="Tunisia"> Tunisia </option>
                        <option value="Turkey"> Turkey </option>
                        <option value="Turkmenistan"> Turkmenistan </option>
                        <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                        <option value="Tuvalu"> Tuvalu </option>
                        <option value="Uganda"> Uganda </option>
                        <option value="Ukraine"> Ukraine </option>
                        <option value="United Arab Emirates"> United Arab Emirates </option>
                        <option value="United Kingdom"> United Kingdom </option>
                        <option value="Uruguay"> Uruguay </option>
                        <option value="Uzbekistan"> Uzbekistan </option>
                        <option value="Vanuatu"> Vanuatu </option>
                        <option value="Vatican City"> Vatican City </option>
                        <option value="Venezuela"> Venezuela </option>
                        <option value="Vietnam"> Vietnam </option>
                        <option value="British Virgin Islands"> British Virgin Islands </option>
                        <option value="Isle of Man"> Isle of Man </option>
                        <option value="US Virgin Islands"> US Virgin Islands </option>
                        <option value="Wallis and Futuna"> Wallis and Futuna </option>
                        <option value="Western Sahara"> Western Sahara </option>
                        <option value="Yemen"> Yemen </option>
                        <option value="Zambia"> Zambia </option>
                        <option value="Zimbabwe"> Zimbabwe </option>
                    </select>
                </div>
            </div>

            <div class="row">
                <input type="submit" value="Submit">
            </div>
    </form>
</div>

</body>
</html>

