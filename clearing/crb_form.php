<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/logo.png" type="image/x-icon" />
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://bootswatch.com/simplex/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>CRB Form</title>
</head>
<body>
    <?php
        require_once('./header.php');
    ?>
    <div class="container">
    
        <h1>CRB Form</h1>

        <div class="card">
            <div class="card-body">
            <form action="insert.php" method="post">
                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="account_number">Account Number</label>
                        <input type="text" class="form-control" required="true" name="account_number">
                    </div>
                    <div class="col col-md-4">
                        <label for="cheque_number">Cheque Number</label>
                        <input type="text" class="form-control" required="true" name="cheque_number">
                    </div>
                </div>  

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="emitter">Emitter</label>
                        <input type="text" class="form-control" required="true" name="emitter">
                    </div>
                    <div class="col col-md-4">
                        <label for="spouse">Spouse</label>
                        <input type="text" class="form-control" required="true" name="spouse">
                    </div>
                </div>   

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="tax_id_number">Tax ID Number</label>
                        <input type="text" class="form-control" required="true" name="tax_id_number">                        
                    </div>
                    <div class="col col-md-4">
                        <label for="person_type">Person Type</label>
                        <select name="person_type" class="form-control">
                            <option value="P">P</option>
                            <option value="M">M</option>
                        </select>
                    </div>
                </div> 

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="economic_agent_id_number">Economic Agent ID Number</label>
                        <input type="text" class="form-control" name="economic_agent_id_number">
                    </div>

                    <div class="col col-md-4">
                        <label for="date_of_birth">Date of birth/Creation</label>
                        <input type="date" class="form-control" name="date_of_birth">
                    </div>                    
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="gender">Gender</label>
                        <select name="gender" class="form-control">
                            <option value="M">M</option>
                            <option value="F">F</option>
                            <option value="NA">Not Applicable</option>
                        </select>
                    </div>

                    <div class="col col-md-4">
                        <label for="id_code">Identification Doc Type Code</label>
                        <select name="id_code" class="form-control">
                            <option value="1">CARTE D'IDENTITE NATIONALE</option>
                            <option value="2">PASSPORT</option>
                            <option value="3">REGISTRE DE COMMERCE</option>
                            <option value="4">ATTESTATION D'IDENTITE COMPLETE</option>
                            <option value="">AUTRES PIECES JUSTIFICATIVES</option>
                            <option value="">PIECE D'IDENTITE MILITAIRE</option>
                            <option value="">PIECE D'IDENTITE DE LA POLICE NATIONALE</option>
                        </select>
                    </div>                    
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="id_number">Identification Document Number</label>
                        <input type="text" class="form-control" name="id_number">
                    </div>

                    <div class="col col-md-4">
                        <label for="profession_category">Professional Category</label>
                        <select name="profession_category" class="form-control">
                            <option value="11">AGRICULTEURS-ELEVEURS, PECHERUS- PARTICULIERS</option>
                            <option value="12">AGRICULTEURS-ELEVEURS, PECHERUS- ORGANISATIONS ASSOCIATIVES</option>
                            <option value="21">ARTISANS - PARTICULIERS</option>
                            <option value="22">ARTISANS - ORGANISATIONS ASSOCIATIVES</option>
                            <option value="31">SALARIES DE L'ADMINISTRATION PUBLIQUE</option>
                            <option value="32">SALARIES DU SECTEUR PRIVE</option>
                            <option value="40">COMMERCANTS ET INDUSTRIELS</option>
                            <option value="50">PROFESSIONS LIBERALES</option>
                            <option value="60">AUTRES PERSONNES PHYSIQUES</option>
                            <option value="99">PERSONNES MORALES</option>
                        </select>
                    </div>                    
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="trade_document_number">Trade Document Number</label>
                        <input type="text" name="trade_document_number" class="form-control">
                    </div>

                    <div class="col col-md-4">
                        <label for="trade_document_date">Trade Document issued on</label>
                        <input type="date" class="form-control" name="trade_document_date">
                    </div>                    
                </div>


                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="judicial_form">Judicial Form</label>
                        <select name="judicial_form" class="form-control">
                            <option value="10">COLLECTIVITES LOCALES</option>
                            <option value="09">ADMINISTRATION PUBLIQUE</option>
                            <option value="05">SOCIETE EN NOM COLLECTIF</option>
                            <option value="11">ENTREPRISES PUBLIQUES</option>
                            <option value="07">COOPERATIVES</option>
                            <option value="03">SPRL</option>
                            <option value="02">SARL</option>
                            <option value="08">ASBL</option>
                            <option value="06">SOCIETE EN COMMANDITE</option>
                            <option value="99">AUTRES</option>
                            <option value="04">SA</option>
                            <option value="20">ASSOCIATION MOMENTANEE</option>
                        </select>
                    </div>

                    <div class="col col-md-4">
                        <label for="address">Address</label>
                        <textarea name="address" cols="30" rows="6" class="form-control"></textarea>
                    </div>                    
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="residence_province">Residence Province</label>
                        <select name="residence_province" class="form-control">
                            <option value="01">KIGALI NGALI</option>
                            <option value="05">GITARAMA</option>
                            <option value="10">BUTARE</option>
                            <option value="15">GIKONGORO</option>
                            <option value="20">CYANGUGU</option>
                            <option value="25">KIBUYE</option>
                            <option value="30">GISENYI</option>
                            <option value="35">RUHENGERI</option>
                            <option value="40">BYUMBA</option>
                            <option value="45">KIBUNGO</option>
                            <option value="50">MAIRIE DE LA VILLE DE KIGALI</option>
                            <option value="55">UMUTARA</option>
                            <!-- <option value="90">ETRANGER</option> -->
                        </select>
                    </div>

                    <div class="col col-md-4">
                        <label for="residence_district">Residence District</label>
                        <select name="residence_district" class="form-control">
                            <option value="0107">RULINDO</option>
                            <option value="0108">RUSHASHI</option>
                            <option value="0109">SHYORONGI</option>
                            <option value="0102">BULIZA</option>
                            <option value="0103">GASABO</option>
                            <option value="0101">BICUMBI</option>
                            <option value="0105">NGENDA</option>
                            <option value="0106">NYAMATA</option>
                            <option value="0104">GASHORA</option>
                            <option value="0110">VILLE DE KABUGA</option>
                            <option value="0509">VILLE DE RUHANGO</option>
                            <option value="0504">MUHANGA</option>
                            <option value="0505">NDIZA</option>
                            <option value="0503">KAYUMBU</option>
                            <option value="0502">KAMONYI</option>
                            <option value="0508">RUYUMBA</option>
                            <option value="0510">VILLE DE GITARAMA</option>
                            <option value="0506">NTENYO</option>
                            <option value="0501">AKABAGARI</option>
                            <option value="0507">NTONGWE</option>
                            <option value="1009">VILLE DE NYANZA</option>
                            <option value="1002">KIBINGO</option>
                            <option value="1004">MARABA</option>
                            <option value="1006">NYAKIZU</option>
                            <option value="1005">MUGOMBA</option>
                            <option value="1008">SAVE</option>
                            <option value="1007">NYAMURE</option>
                            <option value="1001">GIKONKO</option>
                            <option value="1003">KIRUHURA</option>
                            <option value="1010">VILLE DE BUTARE</option>
                            <option value="1505">NSHILI</option>
                            <option value="1506">NYARUGURU</option>
                            <option value="1507">VILLE DE GIKONGORO</option>
                            <option value="1503">MUDASOMWA</option>
                            <option value="1504">MUSHUBI</option>
                            <option value="1501">KADUHA</option>
                            <option value="1502">KARABA</option>
                            <option value="2001">BUGARAMA</option>
                            <option value="2006">NYAMASHEKE</option>
                            <option value="2002">BUKUNZI</option>
                            <option value="2007">VILLE DE CYANGUGU</option>
                            <option value="2005">IMPALA</option>
                            <option value="2003">GASHONGA</option>
                            <option value="2004">GATARE</option>
                            <option value="2501">BUDAHA</option>
                            <option value="2502">GISUNZU</option>
                            <option value="2503">ITABIRE</option>
                            <option value="2504">RUSENYI</option>
                            <option value="2505">RUTSIRO</option>
                            <option value="2506">VILLE DE KIBUYE</option>
                            <option value="3008">NYAGISAGARA</option>
                            <option value="3004">KAGEYO</option>
                            <option value="3002">GASEKE</option>
                            <option value="3003">GASIZA</option>
                            <option value="3007">MUTURA</option>
                            <option value="3001">CYANZARWE</option>
                            <option value="3009">NYAMYUMBA</option>
                            <option value="3006">KAYOVE</option>
                            <option value="3005">KANAMA</option>
                            <option value="3010">VILLE DE GISENYI</option>
                            <option value="3508">MUTOBO</option>
                            <option value="3502">BUHOMA</option>
                            <option value="3507">KINIGI</option>
                            <option value="3503">BUKAMBA</option>
                            <option value="3501">BUGARURA</option>
                            <option value="3504">BUKONYA</option>
                            <option value="3510">NYARUTOVU</option>
                            <option value="3509">NYAMUGALI</option>
                            <option value="3506">CYERU</option>
                            <option value="3505">BUTARO</option>
                            <option value="3511">VILLE DE RUHENGERI</option>
                            <option value="4002">HUMURE</option>
                            <option value="4007">RUSHAKI</option>
                            <option value="4001">BUNGWE</option>
                            <option value="4004">KISARO</option>
                            <option value="4003">KINIHIRA</option>
                            <option value="4006">REBERO</option>
                            <option value="4005">NGARAMA</option>
                            <option value="4009">VILLE DE BYUMBA</option>
                            <option value="4008">RWAMIKO</option>
                            <option value="4508">RUSUMO</option>
                            <option value="4507">RUKIRA</option>
                            <option value="4504">MIRENGE</option>
                            <option value="4503">KIGARAMA</option>
                            <option value="4505">MUHAZI</option>
                            <option value="4502">KAYONZA</option>
                            <option value="4506">NYARUBUYE</option>
                            <option value="4501">CYARUBARE</option>
                            <option value="5008">NYARUGENGE</option>
                            <option value="5002">GIKONDO</option>
                            <option value="5003">GISOZI</option>
                            <option value="5005">KANOMBE</option>
                            <option value="5006">KICUKIRO</option>
                            <option value="5007">NYAMIRAMBO</option>
                            <option value="5004">KACYIRU</option>
                            <option value="5001">BUTAMWA</option>
                            <option value="5506">MUVUMBA</option>
                            <option value="5505">MURAMBI</option>
                            <option value="5507">RUKARA</option>
                            <option value="5503">KABARE</option>
                            <option value="5501">BUGARAGARA</option>
                            <option value="5502">GABIRO</option>
                            <option value="5504">KAHI</option>
                            <option value="5508">VILLE UMUTARA</option>
                            <option value="8888">DOMICILE OU RESIDENCE NON PRECISE</option>
                        </select>
                    </div>                    
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="country_address">Country Address</label>
                        <select name="country_address" class="form-control">
                            <option value="001">FRANCE</option>
                            <option value="002">BELGIQUE</option>
                            <option value="003">PAYS-BAS</option>
                            <option value="004">ALLEMAGNE</option>
                            <option value="005">ITALIE</option>
                            <option value="022">ROYAUME-UNI</option>
                            <option value="024">ISLANDE</option>
                            <option value="026">IRLANDE</option>
                            <option value="028">NORVEGE</option>
                            <option value="030">SUEDE</option>
                            <option value="032">FINLANDE</option>
                            <option value="034">DANEMARK</option>
                            <option value="036">SUISSE</option>
                            <option value="038">AUTRICHE</option>
                            <option value="040">PORTUGAL</option>
                            <option value="042">ESPAGNE</option>
                            <option value="044">GIBRALTAR</option>
                            <option value="046">MALTE</option>
                            <option value="048">YOUGOSLAVIE</option>
                            <option value="050">GRECE</option>
                            <option value="052">TURQUE</option>
                            <option value="056">RUSSIE</option>
                            <option value="060">POLOGNE</option>
                            <option value="062">TCHECOSLOVAQUIE</option>
                            <option value="066">ROUMANIE</option>
                            <option value="068">BULGARIE</option>
                            <option value="070">ALBANIE</option>
                            <option value="084">BELIZE</option>
                            <option value="096">BRUNIE DARUSSALAM</option>
                            <option value="112">BIELORUSSIE (REPUBLIQUE SOCIALITE)</option>
                            <option value="200">SAHARA OCCIDENTAL</option>
                            <option value="204">MAROC</option>
                            <option value="208">ALGERIE</option>
                            <option value="212">TUNISIE</option>
                            <option value="216">LYBIE</option>
                            <option value="220">EGYPTE</option>
                            <option value="224">SOUDAN</option>
                            <option value="228">MAURITANIE</option>
                            <option value="232">MALI</option>
                            <option value="236">BURKINA FASO</option>
                            <option value="240">NIGER</option>
                            <option value="248">SENEGAL</option>
                            <option value="252">GAMBIE</option>
                            <option value="256">GUINEE-BISSAU</option>
                            <option value="258">CAP VERT</option>
                            <option value="260">GUINEE</option>
                            <option value="264">SIERRA LEONE</option>
                            <option value="268">LIBERIA</option>
                            <option value="272">COTE D'IVOIRE</option>
                            <option value="276">GHANA</option>
                            <option value="280">TOGO</option>
                            <option value="284">BENIN (REPUBLIQUE POPULAIRE)</option>
                            <option value="288">NIGERIA</option>
                            <option value="302">CAMEROUN (REPUBLIQUE)</option>
                            <option value="305">TCHAD</option>
                            <option value="306">CENTRAFRICAINE (REPUBLIQUE)</option>
                            <option value="307">GABON</option>
                            <option value="308">CONGO</option>
                            <option value="309">SAO TOME-ET-PRINCIPE</option>
                            <option value="310">GUINEE EQUATORIALE</option>
                            <option value="312">GUADELOUPE</option>
                            <option value="318">ZAMBIE</option>
                            <option value="322">R.D.C (EX ZAIRE)</option>
                            <option value="327">BURUNDI</option>
                            <option value="328">GUYANE FRANCAISE</option>
                            <option value="329">COMMUNAUTE ECONOMIQUE DES PAYS DES GRANDS LACS</option>
                            <option value="330">ANGOLA</option>
                            <option value="334">ETHIOPIE</option>
                            <option value="338">DJIBOUTI</option>
                            <option value="342">SOMALIE</option>
                            <option value="346">KENYA</option>
                            <option value="348">HONGRIE</option>
                            <option value="350">OUGANDA</option>
                            <option value="354">TANZANIE</option>
                            <option value="362">ILES MAURICES</option>
                            <option value="364">SEYCHELLES</option>
                            <option value="366">MOZAMBIQUE</option>
                            <option value="368">IRAQ</option>
                            <option value="370">MADAGASCAR</option>
                            <option value="376">COMORES</option>
                            <option value="382">ZIMBABWE</option>
                            <option value="386">MALAWI</option>
                            <option value="390">AFRIQUE DU SUD</option>
                            <option value="391">NAMIBIE</option>
                            <option value="392">LESOTHO</option>
                            <option value="394">BOTSWANA</option>
                            <option value="400">ETATS-UNIS</option>
                            <option value="404">CANADA</option>
                            <option value="412">MEXIQUE</option>
                            <option value="416">GUATEMALA</option>
                            <option value="421">BAHAMAS</option>
                            <option value="422">BERMUDES</option>
                            <option value="424">HONDURAS</option>
                            <option value="428">EL SAL VADOR</option>
                            <option value="432">NICARAGUA</option>
                            <option value="436">COSTA RICA</option>
                            <option value="438">LIETHTENSTEIN</option>
                            <option value="440">PANAMA</option>
                            <option value="442">LUXEMBOURG</option>
                            <option value="446">MACAO</option>
                            <option value="448">CUBA</option>
                            <option value="452">HAITI</option>
                            <option value="453">DOMINICAINE (REPUBLIQUE)</option>
                            <option value="454">SAINTE-LUCIE</option>
                            <option value="455">BARBADE</option>
                            <option value="457">GRENADE</option>
                            <option value="464">JAMAIQUE</option>
                            <option value="472">TRINITE ET TOBAGO</option>
                            <option value="480">COLOMBIE</option>
                            <option value="482">MAURICE</option>
                            <option value="484">VENEZUELA</option>
                            <option value="489">GUYANE BRITANIQUE</option>
                            <option value="492">SURINAM</option>
                            <option value="494">MONACO</option>
                            <option value="496">MONGOLIE</option>
                            <option value="500">EQUATEUR</option>
                            <option value="504">PEROU</option>
                            <option value="508">BRESIL</option>
                            <option value="512">CHILI</option>
                            <option value="516">BOLIVIE</option>
                            <option value="520">PARAGUAY</option>
                            <option value="528">ARGENTINE</option>
                            <option value="600">CHYPRE</option>
                            <option value="604">LIBAN</option>
                            <option value="608">SYRIENE (REPUBLIQUE ARABE)</option>
                            <option value="616">IRAN (REPUBLIQUE ISLAMIQUE)</option>
                            <option value="620">AFGANISTAN (REPUBLIQUE DEMOCRATIQUE)</option>
                            <option value="624">ISRAEL</option>
                            <option value="628">JORDANIE</option>
                            <option value="632">ARABIE SAOUDITE</option>
                            <option value="636">KOWEIT</option>
                            <option value="638">REUNION</option>
                            <option value="640">BAHREIN</option>
                            <option value="642">EMIRATS ARABES UNIS</option>
                            <option value="646">RWANDA</option>
                            <option value="648">OMAN (MUSCAT)</option>
                            <option value="660">PAKISTAN</option>
                            <option value="664">INDE</option>
                            <option value="667">MALDIVES</option>
                            <option value="668">SRI LANKA</option>
                            <option value="669">SINGAPOUR</option>
                            <option value="672">NEPAL</option>
                            <option value="676">BIRMANIE</option>
                            <option value="680">THAILANDE</option>
                            <option value="684">LAOS (REPUBLIQUE DEMOCRATIQUE POPULAIRE)</option>
                            <option value="689">VIETNAM</option>
                            <option value="690">KAMPUCHEA DEMOCRATIQUE</option>
                            <option value="700">INDONESIE</option>
                            <option value="704">MALAISIE</option>
                            <option value="708">PHILIPINES</option>
                            <option value="712">TIMOR ORIENTAL</option>
                            <option value="720">CHINE</option>
                            <option value="724">COREE (REPUBLIQUE)</option>
                            <option value="728">COREE (REPUBLIQUE DEMOCRATIQUE)</option>
                            <option value="732">JAPON</option>
                            <option value="736">TAIWAN (PROVINCE DE CHINE)</option>
                            <option value="740">HONG-KONG</option>
                            <option value="744">BANGLADESH</option>
                            <option value="761">SALOMON (ILES)</option>
                            <option value="762">TUVALU</option>
                            <option value="763">PAPOUASIE NVELLE GUINEE</option>
                            <option value="765">FIDJI</option>
                            <option value="766">TONGA</option>
                            <option value="800">AUSTRALIE</option>
                            <option value="804">NOUVELLE-ZELANDE</option>
                            <option value="824">NAURU</option>
                            <option value="888">PAYS NON PRECISE</option>
                            <option value="898">AUTRES PAYS</option>
                        </select>
                    </div>

                    <div class="col col-md-4">
                        <label for="nationality">Nationality</label>
                        <select name="nationality" class="form-control">
                            <option value="001">FRANCE</option>
                            <option value="002">BELGIQUE</option>
                            <option value="003">PAYS-BAS</option>
                            <option value="004">ALLEMAGNE</option>
                            <option value="005">ITALIE</option>
                            <option value="022">ROYAUME-UNI</option>
                            <option value="024">ISLANDE</option>
                            <option value="026">IRLANDE</option>
                            <option value="028">NORVEGE</option>
                            <option value="030">SUEDE</option>
                            <option value="032">FINLANDE</option>
                            <option value="034">DANEMARK</option>
                            <option value="036">SUISSE</option>
                            <option value="038">AUTRICHE</option>
                            <option value="040">PORTUGAL</option>
                            <option value="042">ESPAGNE</option>
                            <option value="044">GIBRALTAR</option>
                            <option value="046">MALTE</option>
                            <option value="048">YOUGOSLAVIE</option>
                            <option value="050">GRECE</option>
                            <option value="052">TURQUE</option>
                            <option value="056">RUSSIE</option>
                            <option value="060">POLOGNE</option>
                            <option value="062">TCHECOSLOVAQUIE</option>
                            <option value="066">ROUMANIE</option>
                            <option value="068">BULGARIE</option>
                            <option value="070">ALBANIE</option>
                            <option value="084">BELIZE</option>
                            <option value="096">BRUNIE DARUSSALAM</option>
                            <option value="112">BIELORUSSIE (REPUBLIQUE SOCIALITE)</option>
                            <option value="200">SAHARA OCCIDENTAL</option>
                            <option value="204">MAROC</option>
                            <option value="208">ALGERIE</option>
                            <option value="212">TUNISIE</option>
                            <option value="216">LYBIE</option>
                            <option value="220">EGYPTE</option>
                            <option value="224">SOUDAN</option>
                            <option value="228">MAURITANIE</option>
                            <option value="232">MALI</option>
                            <option value="236">BURKINA FASO</option>
                            <option value="240">NIGER</option>
                            <option value="248">SENEGAL</option>
                            <option value="252">GAMBIE</option>
                            <option value="256">GUINEE-BISSAU</option>
                            <option value="258">CAP VERT</option>
                            <option value="260">GUINEE</option>
                            <option value="264">SIERRA LEONE</option>
                            <option value="268">LIBERIA</option>
                            <option value="272">COTE D'IVOIRE</option>
                            <option value="276">GHANA</option>
                            <option value="280">TOGO</option>
                            <option value="284">BENIN (REPUBLIQUE POPULAIRE)</option>
                            <option value="288">NIGERIA</option>
                            <option value="302">CAMEROUN (REPUBLIQUE)</option>
                            <option value="305">TCHAD</option>
                            <option value="306">CENTRAFRICAINE (REPUBLIQUE)</option>
                            <option value="307">GABON</option>
                            <option value="308">CONGO</option>
                            <option value="309">SAO TOME-ET-PRINCIPE</option>
                            <option value="310">GUINEE EQUATORIALE</option>
                            <option value="312">GUADELOUPE</option>
                            <option value="318">ZAMBIE</option>
                            <option value="322">R.D.C (EX ZAIRE)</option>
                            <option value="327">BURUNDI</option>
                            <option value="328">GUYANE FRANCAISE</option>
                            <option value="329">COMMUNAUTE ECONOMIQUE DES PAYS DES GRANDS LACS</option>
                            <option value="330">ANGOLA</option>
                            <option value="334">ETHIOPIE</option>
                            <option value="338">DJIBOUTI</option>
                            <option value="342">SOMALIE</option>
                            <option value="346">KENYA</option>
                            <option value="348">HONGRIE</option>
                            <option value="350">OUGANDA</option>
                            <option value="354">TANZANIE</option>
                            <option value="362">ILES MAURICES</option>
                            <option value="364">SEYCHELLES</option>
                            <option value="366">MOZAMBIQUE</option>
                            <option value="368">IRAQ</option>
                            <option value="370">MADAGASCAR</option>
                            <option value="376">COMORES</option>
                            <option value="382">ZIMBABWE</option>
                            <option value="386">MALAWI</option>
                            <option value="390">AFRIQUE DU SUD</option>
                            <option value="391">NAMIBIE</option>
                            <option value="392">LESOTHO</option>
                            <option value="394">BOTSWANA</option>
                            <option value="400">ETATS-UNIS</option>
                            <option value="404">CANADA</option>
                            <option value="412">MEXIQUE</option>
                            <option value="416">GUATEMALA</option>
                            <option value="421">BAHAMAS</option>
                            <option value="422">BERMUDES</option>
                            <option value="424">HONDURAS</option>
                            <option value="428">EL SAL VADOR</option>
                            <option value="432">NICARAGUA</option>
                            <option value="436">COSTA RICA</option>
                            <option value="438">LIETHTENSTEIN</option>
                            <option value="440">PANAMA</option>
                            <option value="442">LUXEMBOURG</option>
                            <option value="446">MACAO</option>
                            <option value="448">CUBA</option>
                            <option value="452">HAITI</option>
                            <option value="453">DOMINICAINE (REPUBLIQUE)</option>
                            <option value="454">SAINTE-LUCIE</option>
                            <option value="455">BARBADE</option>
                            <option value="457">GRENADE</option>
                            <option value="464">JAMAIQUE</option>
                            <option value="472">TRINITE ET TOBAGO</option>
                            <option value="480">COLOMBIE</option>
                            <option value="482">MAURICE</option>
                            <option value="484">VENEZUELA</option>
                            <option value="489">GUYANE BRITANIQUE</option>
                            <option value="492">SURINAM</option>
                            <option value="494">MONACO</option>
                            <option value="496">MONGOLIE</option>
                            <option value="500">EQUATEUR</option>
                            <option value="504">PEROU</option>
                            <option value="508">BRESIL</option>
                            <option value="512">CHILI</option>
                            <option value="516">BOLIVIE</option>
                            <option value="520">PARAGUAY</option>
                            <option value="528">ARGENTINE</option>
                            <option value="600">CHYPRE</option>
                            <option value="604">LIBAN</option>
                            <option value="608">SYRIENE (REPUBLIQUE ARABE)</option>
                            <option value="616">IRAN (REPUBLIQUE ISLAMIQUE)</option>
                            <option value="620">AFGANISTAN (REPUBLIQUE DEMOCRATIQUE)</option>
                            <option value="624">ISRAEL</option>
                            <option value="628">JORDANIE</option>
                            <option value="632">ARABIE SAOUDITE</option>
                            <option value="636">KOWEIT</option>
                            <option value="638">REUNION</option>
                            <option value="640">BAHREIN</option>
                            <option value="642">EMIRATS ARABES UNIS</option>
                            <option value="646">RWANDA</option>
                            <option value="648">OMAN (MUSCAT)</option>
                            <option value="660">PAKISTAN</option>
                            <option value="664">INDE</option>
                            <option value="667">MALDIVES</option>
                            <option value="668">SRI LANKA</option>
                            <option value="669">SINGAPOUR</option>
                            <option value="672">NEPAL</option>
                            <option value="676">BIRMANIE</option>
                            <option value="680">THAILANDE</option>
                            <option value="684">LAOS (REPUBLIQUE DEMOCRATIQUE POPULAIRE)</option>
                            <option value="689">VIETNAM</option>
                            <option value="690">KAMPUCHEA DEMOCRATIQUE</option>
                            <option value="700">INDONESIE</option>
                            <option value="704">MALAISIE</option>
                            <option value="708">PHILIPINES</option>
                            <option value="712">TIMOR ORIENTAL</option>
                            <option value="720">CHINE</option>
                            <option value="724">COREE (REPUBLIQUE)</option>
                            <option value="728">COREE (REPUBLIQUE DEMOCRATIQUE)</option>
                            <option value="732">JAPON</option>
                            <option value="736">TAIWAN (PROVINCE DE CHINE)</option>
                            <option value="740">HONG-KONG</option>
                            <option value="744">BANGLADESH</option>
                            <option value="761">SALOMON (ILES)</option>
                            <option value="762">TUVALU</option>
                            <option value="763">PAPOUASIE NVELLE GUINEE</option>
                            <option value="765">FIDJI</option>
                            <option value="766">TONGA</option>
                            <option value="800">AUSTRALIE</option>
                            <option value="804">NOUVELLE-ZELANDE</option>
                            <option value="824">NAURU</option>
                            <option value="888">PAYS NON PRECISE</option>
                            <option value="898">AUTRES PAYS</option>
                        </select>
                    </div>                    
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="cheque_amount">Cheque Amount</label>
                        <input type="text" class="form-control" required="true" name="cheque_amount">
                    </div>

                    <div class="col col-md-4">
                        <label for="issue_date">Issue Date</label>
                        <input type="date" class="form-control" required="true" name="issue_date">
                    </div>                    
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="presentation_date">Presentation Date</label>
                        <input type="date" class="form-control" required="true" name="presentation_date">
                    </div> 

                    <div class="col col-md-4">
                        <label for="date_of_default">Date of default</label>
                        <input type="date" class="form-control" required="true" name="date_of_default">
                    </div>                    
                </div>

                <div class="row form-group">
                    <div class="col col-md-4">
                        <label for="beneficiary">Beneficiary</label>
                        <input type="date" class="form-control" required="true" name="beneficiary">
                    </div>                    
                </div>
                

                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
                
            </form>
                
            </div>
        </div>
    </div>
</body>
</html>