<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Country;
use App\Models\Ingredient;
use App\Models\Fact;
use App\Models\Recipe;



class FoodMapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->truncate();
        DB::table('ingredients')->truncate();
        DB::table('facts')->truncate();
        DB::table('recipes')->truncate();
        DB::table('ingredient_recipe')->truncate();
        DB::table('country_recipe')->truncate();


        $data = [[
            'name' => "Grilled Chicken",
            'instructions' => "unclear, will be burned anyway",
            'image' => "beatufil_chicken.jpg",
            'isVegan' => false,
            'isVegeterian' => false,
            'isLactoseFree' => true,
            'isGlutenFree' => true,
            'isNutFree' => false,
            'countries' => ["Czech Republic"],
            'ingredients' => [[1, "whole", "chicken"], [100, "gram", "bun"]]
        ], [
            'name' => "Hot Dog",
            'instructions' => "cook sausage, put it in the bun",
            'image' => "beautiful_sausage.jpg",
            'isVegan' => false,
            'isVegeterian' => false,
            'isLactoseFree' => true,
            'isGlutenFree' => false,
            'isNutFree' => true,
            'countries' => ["Uganda", "Czech Republic"],
            'ingredients' => [[1, "piece", "bun"], [5, "bla", "sausage"], [8, "blo", "sausage"]]
        ]];

        $countries = [
            ["name" => "Afghanistan", "flag" => "AF.png"],
            ["name" => "Åland Islands", "flag" => "AX.png"],
            ["name" => "Albania", "flag" => "AL.png"],
            ["name" => "Algeria", "flag" => "DZ.png"],
            ["name" => "American Samoa", "flag" => "AS.png"],
            ["name" => "Andorra", "flag" => "AD.png"],
            ["name" => "Angola", "flag" => "AO.png"],
            ["name" => "Anguilla", "flag" => "AI.png"],
            ["name" => "Antarctica", "flag" => "AQ.png"],
            ["name" => "Antigua and Barbuda", "flag" => "AG.png"],
            ["name" => "Argentina", "flag" => "AR.png"],
            ["name" => "Armenia", "flag" => "AM.png"],
            ["name" => "Aruba", "flag" => "AW.png"],
            ["name" => "Australia", "flag" => "AU.png"],
            ["name" => "Austria", "flag" => "AT.png"],
            ["name" => "Azerbaijan", "flag" => "AZ.png"],
            ["name" => "Bahamas", "flag" => "BS.png"],
            ["name" => "Bahrain", "flag" => "BH.png"],
            ["name" => "Bangladesh", "flag" => "BD.png"],
            ["name" => "Barbados", "flag" => "BB.png"],
            ["name" => "Belarus", "flag" => "BY.png"],
            ["name" => "Belgium", "flag" => "BE.png"],
            ["name" => "Belize", "flag" => "BZ.png"],
            ["name" => "Benin", "flag" => "BJ.png"],
            ["name" => "Bermuda", "flag" => "BM.png"],
            ["name" => "Bhutan", "flag" => "BT.png"],
            ["name" => "Bolivia", "flag" => "BO.png"],
            ["name" => "Bosnia and Herzegovina", "flag" => "BA.png"],
            ["name" => "Botswana", "flag" => "BW.png"],
            ["name" => "Bouvet Island", "flag" => "BV.png"],
            ["name" => "Brazil", "flag" => "BR.png"],
            ["name" => "British Indian Ocean Territory", "flag" => "IO.png"],
            ["name" => "Brunei Darussalam", "flag" => "BN.png"],
            ["name" => "Bulgaria", "flag" => "BG.png"],
            ["name" => "Burkina Faso", "flag" => "BF.png"],
            ["name" => "Burundi", "flag" => "BI.png"],
            ["name" => "Cambodia", "flag" => "KH.png"],
            ["name" => "Cameroon", "flag" => "CM.png"],
            ["name" => "Canada", "flag" => "CA.png"],
            ["name" => "Cape Verde", "flag" => "CV.png"],
            ["name" => "Cayman Islands", "flag" => "KY.png"],
            ["name" => "Central African Republic", "flag" => "CF.png"],
            ["name" => "Chad", "flag" => "TD.png"],
            ["name" => "Chile", "flag" => "CL.png"],
            ["name" => "China", "flag" => "CN.png"],
            ["name" => "Christmas Island", "flag" => "CX.png"],
            ["name" => "Cocos (Keeling) Islands", "flag" => "CC.png"],
            ["name" => "Colombia", "flag" => "CO.png"],
            ["name" => "Comoros", "flag" => "KM.png"],
            ["name" => "Congo", "flag" => "CG.png"],
            ["name" => "Congo, The Democratic Republic of the", "flag" => "CD.png"],
            ["name" => "Cook Islands", "flag" => "CK.png"],
            ["name" => "Costa Rica", "flag" => "CR.png"],
            ["name" => "Cote D'Ivoire", "flag" => "CI.png"],
            ["name" => "Croatia", "flag" => "HR.png"],
            ["name" => "Cuba", "flag" => "CU.png"],
            ["name" => "Cyprus", "flag" => "CY.png"],
            ["name" => "Czech Republic", "flag" => "CZ.png"],
            ["name" => "Denmark", "flag" => "DK.png"],
            ["name" => "Djibouti", "flag" => "DJ.png"],
            ["name" => "Dominica", "flag" => "DM.png"],
            ["name" => "Dominican Republic", "flag" => "DO.png"],
            ["name" => "Ecuador", "flag" => "EC.png"],
            ["name" => "Egypt", "flag" => "EG.png"],
            ["name" => "El Salvador", "flag" => "SV.png"],
            ["name" => "Equatorial Guinea", "flag" => "GQ.png"],
            ["name" => "Eritrea", "flag" => "ER.png"],
            ["name" => "Estonia", "flag" => "EE.png"],
            ["name" => "Ethiopia", "flag" => "ET.png"],
            ["name" => "Falkland Islands (Malvinas)", "flag" => "FK.png"],
            ["name" => "Faroe Islands", "flag" => "FO.png"],
            ["name" => "Fiji", "flag" => "FJ.png"],
            ["name" => "Finland", "flag" => "FI.png"],
            ["name" => "France", "flag" => "FR.png"],
            ["name" => "French Guiana", "flag" => "GF.png"],
            ["name" => "French Polynesia", "flag" => "PF.png"],
            ["name" => "French Southern Territories", "flag" => "TF.png"],
            ["name" => "Gabon", "flag" => "GA.png"],
            ["name" => "Gambia", "flag" => "GM.png"],
            ["name" => "Georgia", "flag" => "GE.png"],
            ["name" => "Germany", "flag" => "DE.png"],
            ["name" => "Ghana", "flag" => "GH.png"],
            ["name" => "Gibraltar", "flag" => "GI.png"],
            ["name" => "Greece", "flag" => "GR.png"],
            ["name" => "Greenland", "flag" => "GL.png"],
            ["name" => "Grenada", "flag" => "GD.png"],
            ["name" => "Guadeloupe", "flag" => "GP.png"],
            ["name" => "Guam", "flag" => "GU.png"],
            ["name" => "Guatemala", "flag" => "GT.png"],
            ["name" => "Guernsey", "flag" => "GG.png"],
            ["name" => "Guinea", "flag" => "GN.png"],
            ["name" => "Guinea-Bissau", "flag" => "GW.png"],
            ["name" => "Guyana", "flag" => "GY.png"],
            ["name" => "Haiti", "flag" => "HT.png"],
            ["name" => "Heard Island and Mcdonald Islands", "flag" => "HM.png"],
            ["name" => "Holy See (Vatican City State)", "flag" => "VA.png"],
            ["name" => "Honduras", "flag" => "HN.png"],
            ["name" => "Hong Kong", "flag" => "HK.png"],
            ["name" => "Hungary", "flag" => "HU.png"],
            ["name" => "Iceland", "flag" => "IS.png"],
            ["name" => "India", "flag" => "IN.png"],
            ["name" => "Indonesia", "flag" => "ID.png"],
            ["name" => "Iran, Islamic Republic Of", "flag" => "IR.png"],
            ["name" => "Iraq", "flag" => "IQ.png"],
            ["name" => "Ireland", "flag" => "IE.png"],
            ["name" => "Isle of Man", "flag" => "IM.png"],
            ["name" => "Israel", "flag" => "IL.png"],
            ["name" => "Italy", "flag" => "IT.png"],
            ["name" => "Jamaica", "flag" => "JM.png"],
            ["name" => "Japan", "flag" => "JP.png"],
            ["name" => "Jersey", "flag" => "JE.png"],
            ["name" => "Jordan", "flag" => "JO.png"],
            ["name" => "Kazakhstan", "flag" => "KZ.png"],
            ["name" => "Kenya", "flag" => "KE.png"],
            ["name" => "Kiribati", "flag" => "KI.png"],
            ["name" => "Korea, Democratic People'S Republic of", "flag" => "KP.png"],
            ["name" => "Korea, Republic of", "flag" => "KR.png"],
            ["name" => "Kuwait", "flag" => "KW.png"],
            ["name" => "Kyrgyzstan", "flag" => "KG.png"],
            ["name" => "Lao People'S Democratic Republic", "flag" => "LA.png"],
            ["name" => "Latvia", "flag" => "LV.png"],
            ["name" => "Lebanon", "flag" => "LB.png"],
            ["name" => "Lesotho", "flag" => "LS.png"],
            ["name" => "Liberia", "flag" => "LR.png"],
            ["name" => "Libyan Arab Jamahiriya", "flag" => "LY.png"],
            ["name" => "Liechtenstein", "flag" => "LI.png"],
            ["name" => "Lithuania", "flag" => "LT.png"],
            ["name" => "Luxembourg", "flag" => "LU.png"],
            ["name" => "Macao", "flag" => "MO.png"],
            ["name" => "Macedonia, The Former Yugoslav Republic of", "flag" => "MK.png"],
            ["name" => "Madagascar", "flag" => "MG.png"],
            ["name" => "Malawi", "flag" => "MW.png"],
            ["name" => "Malaysia", "flag" => "MY.png"],
            ["name" => "Maldives", "flag" => "MV.png"],
            ["name" => "Mali", "flag" => "ML.png"],
            ["name" => "Malta", "flag" => "MT.png"],
            ["name" => "Marshall Islands", "flag" => "MH.png"],
            ["name" => "Martinique", "flag" => "MQ.png"],
            ["name" => "Mauritania", "flag" => "MR.png"],
            ["name" => "Mauritius", "flag" => "MU.png"],
            ["name" => "Mayotte", "flag" => "YT.png"],
            ["name" => "Mexico", "flag" => "MX.png"],
            ["name" => "Micronesia, Federated States of", "flag" => "FM.png"],
            ["name" => "Moldova, Republic of", "flag" => "MD.png"],
            ["name" => "Monaco", "flag" => "MC.png"],
            ["name" => "Mongolia", "flag" => "MN.png"],
            ["name" => "Montenegro", "flag" => "ME.png"],
            ["name" => "Montserrat", "flag" => "MS.png"],
            ["name" => "Morocco", "flag" => "MA.png"],
            ["name" => "Mozambique", "flag" => "MZ.png"],
            ["name" => "Myanmar", "flag" => "MM.png"],
            ["name" => "Namibia", "flag" => "NA.png"],
            ["name" => "Nauru", "flag" => "NR.png"],
            ["name" => "Nepal", "flag" => "NP.png"],
            ["name" => "Netherlands", "flag" => "NL.png"],
            ["name" => "Netherlands Antilles", "flag" => "AN.png"],
            ["name" => "New Caledonia", "flag" => "NC.png"],
            ["name" => "New Zealand", "flag" => "NZ.png"],
            ["name" => "Nicaragua", "flag" => "NI.png"],
            ["name" => "Niger", "flag" => "NE.png"],
            ["name" => "Nigeria", "flag" => "NG.png"],
            ["name" => "Niue", "flag" => "NU.png"],
            ["name" => "Norfolk Island", "flag" => "NF.png"],
            ["name" => "Northern Mariana Islands", "flag" => "MP.png"],
            ["name" => "Norway", "flag" => "NO.png"],
            ["name" => "Oman", "flag" => "OM.png"],
            ["name" => "Pakistan", "flag" => "PK.png"],
            ["name" => "Palau", "flag" => "PW.png"],
            ["name" => "Palestinian Territory, Occupied", "flag" => "PS.png"],
            ["name" => "Panama", "flag" => "PA.png"],
            ["name" => "Papua New Guinea", "flag" => "PG.png"],
            ["name" => "Paraguay", "flag" => "PY.png"],
            ["name" => "Peru", "flag" => "PE.png"],
            ["name" => "Philippines", "flag" => "PH.png"],
            ["name" => "Pitcairn", "flag" => "PN.png"],
            ["name" => "Poland", "flag" => "PL.png"],
            ["name" => "Portugal", "flag" => "PT.png"],
            ["name" => "Puerto Rico", "flag" => "PR.png"],
            ["name" => "Qatar", "flag" => "QA.png"],
            ["name" => "Reunion", "flag" => "RE.png"],
            ["name" => "Romania", "flag" => "RO.png"],
            ["name" => "Russian Federation", "flag" => "RU.png"],
            ["name" => "RWANDA", "flag" => "RW.png"],
            ["name" => "Saint Helena", "flag" => "SH.png"],
            ["name" => "Saint Kitts and Nevis", "flag" => "KN.png"],
            ["name" => "Saint Lucia", "flag" => "LC.png"],
            ["name" => "Saint Pierre and Miquelon", "flag" => "PM.png"],
            ["name" => "Saint Vincent and the Grenadines", "flag" => "VC.png"],
            ["name" => "Samoa", "flag" => "WS.png"],
            ["name" => "San Marino", "flag" => "SM.png"],
            ["name" => "Sao Tome and Principe", "flag" => "ST.png"],
            ["name" => "Saudi Arabia", "flag" => "SA.png"],
            ["name" => "Senegal", "flag" => "SN.png"],
            ["name" => "Serbia", "flag" => "RS.png"],
            ["name" => "Seychelles", "flag" => "SC.png"],
            ["name" => "Sierra Leone", "flag" => "SL.png"],
            ["name" => "Singapore", "flag" => "SG.png"],
            ["name" => "Slovakia", "flag" => "SK.png"],
            ["name" => "Slovenia", "flag" => "SI.png"],
            ["name" => "Solomon Islands", "flag" => "SB.png"],
            ["name" => "Somalia", "flag" => "SO.png"],
            ["name" => "South Africa", "flag" => "ZA.png"],
            ["name" => "South Georgia and the South Sandwich Islands", "flag" => "GS.png"],
            ["name" => "Spain", "flag" => "ES.png"],
            ["name" => "Sri Lanka", "flag" => "LK.png"],
            ["name" => "Sudan", "flag" => "SD.png"],
            ["name" => "Sur[iname", "flag" => "SR.png"],
            ["name" => "Svalbard and Jan Mayen", "flag" => "SJ.png"],
            ["name" => "Swaziland", "flag" => "SZ.png"],
            ["name" => "Sweden", "flag" => "SE.png"],
            ["name" => "Switzerland", "flag" => "CH.png"],
            ["name" => "Syrian Arab Republic", "flag" => "SY.png"],
            ["name" => "Taiwan, Province of China", "flag" => "TW.png"],
            ["name" => "Tajikistan", "flag" => "TJ.png"],
            ["name" => "Tanzania, United Republic of", "flag" => "TZ.png"],
            ["name" => "Thailand", "flag" => "TH.png"],
            ["name" => "Timor-Leste", "flag" => "TL.png"],
            ["name" => "Togo", "flag" => "TG.png"],
            ["name" => "Tokelau", "flag" => "TK.png"],
            ["name" => "Tonga", "flag" => "TO.png"],
            ["name" => "Trinidad and Tobago", "flag" => "TT.png"],
            ["name" => "Tunisia", "flag" => "TN.png"],
            ["name" => "Turkey", "flag" => "TR.png"],
            ["name" => "Turkmenistan", "flag" => "TM.png"],
            ["name" => "Turks and Caicos Islands", "flag" => "TC.png"],
            ["name" => "Tuvalu", "flag" => "TV.png"],
            ["name" => "Uganda", "flag" => "UG.png"],
            ["name" => "Ukraine", "flag" => "UA.png"],
            ["name" => "United Arab Emirates", "flag" => "AE.png"],
            ["name" => "United Kingdom", "flag" => "GB.png"],
            ["name" => "United States", "flag" => "US.png"],
            ["name" => "United States Minor Outlying Islands", "flag" => "UM.png"],
            ["name" => "Uruguay", "flag" => "UY.png"],
            ["name" => "Uzbekistan", "flag" => "UZ.png"],
            ["name" => "Vanuatu", "flag" => "VU.png"],
            ["name" => "Venezuela", "flag" => "VE.png"],
            ["name" => "Viet Nam", "flag" => "VN.png"],
            ["name" => "Virgin Islands, British", "flag" => "VG.png"],
            ["name" => "Virgin Islands, U.S.", "flag" => "VI.png"],
            ["name" => "Wallis and Futuna", "flag" => "WF.png"],
            ["name" => "Western Sahara", "flag" => "EH.png"],
            ["name" => "Yemen", "flag" => "YE.png"],
            ["name" => "Zambia", "flag" => "ZM.png"],
            ["name" => "Zimbabwe", "flag" => "ZW.png"]
        ];



        //this fills DB with Countries
        foreach ($countries as $iteration) {
            $country = new Country;
            $country->name = $iteration["name"];
            $country->flag = strtolower($iteration["flag"]);
            $country->save();
        }


        //this is yet not working but this should fill DB with recipes from array $data
        foreach ($data as $food) {
            $recipe = new Recipe;
            
            $recipe->name = $food["name"];
            $recipe->instructions = $food["instructions"];
            $recipe->image = $food["image"];
            $recipe->isVegan = $food["isVegan"];
            $recipe->isVegeterian = $food["isVegeterian"];
            $recipe->isLactoseFree = $food["isLactoseFree"];
            $recipe->isGlutenFree = $food["isGlutenFree"];
            $recipe->isNutFree = $food["isNutFree"];
            $recipe->save();

            // $recipe->country = $food["country"][0];

            foreach ($food["countries"] as $coun) {
                //we need to get country ID to save it to recipe_coutry table
                $country_generated = Country::where("name", $coun)->first();
                $recipe->countries()->attach($country_generated->id);
            }

            foreach ($food["ingredients"] as $ingr) {
                $ingredient_generated = Ingredient::where("name", $ingr[2])->first();
                if (!$ingredient_generated) {
                    $ingredient = new Ingredient;
                    $ingredient->name = $ingr[2];
                    $ingredient->save();
                }
                              

                //if ingredient is already in DB it won't be saved
                $recipe->ingredients()->attach($ingredient->id, ["quantity" => $ingr[0], "measurement" => $ingr[1]]);

            }
        }
        $recipe->save();
    }
}
