<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/716413e70c.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
        <style>
            #sidebar{
                top:75px;
                margin-left:2px;
                width:10%;
                background-color: dodgerblue;
                height:600px;
                float:left;
                position:fixed;
                font-size: 12px;
            }
            #sidebar li {
                list-style-type: none;
                display: block;
                text-align: left;
            }
            #sidebar a:hover{
                background-color:whitesmoke;
                text-decoration: none;
            }
            #mainDiv{
                top:75px;

                width:50%;
                float:left;
                position:relative;
                display:none
                    /*z-index: -1;*/
            }
            #finacials{
                top:75px;
                width:40%;
                float:left;
                position:relative;
                display:none;
                margin-left:0;
            }
            #finacialTable td{
                text-align: left;
                color:black;
            }

            .accordion {
                background-color: #eee;
                color: #444;
                cursor: pointer;
                padding: 18px;
                width: 60%;
                margin-left: 3%;
                border: none;
                text-align: left;
                outline: none;
                font-size: 15px;
                transition: 0.4s;

            }

            .active, .accordion:hover {
                background-color: #ccc;
            }

            .panel {
                margin: 0 0 5px 21%;
                background-color: dodgerblue;
                max-height: 0;
                overflow: hidden;
                width:60%;
                transition: max-height 0.2s ease-out;
                text-align: left;
                color:black;
            }
            legend{
                font-size:12px; font-style: italic;
            }
            @media only screen and (max-width:600px){
                #sidebar{
                    width:100%;
                    height:200px;
                }
            }
            br {
                margin:1px;
            }
            body{font-size:12px;}
            #misc_parameters input, select{color:black;}
        </style>
        <script>
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
            function global_data(selct) {
                var table = document.getElementById('finacialTable');
                var x = table.rows.length;

                var row = table.insertRow(x);
                var cell1 = row.insertCell(0);
                cell1.innerHTML = x;
                cell1.style.backgroundColor = "grey";

                var cell2 = row.insertCell(1);
                var content = document.getElementById(selct).value;
                var element2 = document.createElement("input");
                element2.type = "text";
                element2.readonly = true;
                element2.value = content;
                element2.size = 10;
                element2.name = "item_".concat(x);
                element2.style.backgroundColor = "tomato";
                cell2.appendChild(element2);
                cell2.style.backgroundColor = "tomato";
                //cell2.style.width = 100%;


                var cell3 = row.insertCell(2);
                var element3 = document.createElement("input");
                element3.type = "text";
                element3.required = "required";
                element3.name = "quantity_".concat(x);
                element3.size = 3;
                cell3.appendChild(element3);
                cell3.style.backgroundColor = "grey";

                var cell4 = row.insertCell(3);
                var element4 = document.createElement("input");
                element4.type = "text";
                element4.required = "required";
                element4.name = "cost_".concat(x);
                element4.size = 3
                cell4.appendChild(element4);
                cell4.style.backgroundColor = "tomato";

                var cell5 = row.insertCell(4);
                var element5 = document.createElement("input");
                element5.type = "text";
                element5.required = "required";
                element5.name = "days_".concat(x);
                element5.size = 3;
                cell5.appendChild(element5);
                cell5.style.backgroundColor = "grey";
                document.getElementById('generate_quote').disabled = false;
            }

            function displayOthers() {
                getElementById('miniDiv').style.visibility = 'visible';
            }

        </script>

    </head>
    <body>

        <div id="sidebar">
            <h3>Dashboard</h3>
            <hr>
            <ul>
                <li><a href="#" onclick="document.getElementById('mainDiv').style.display = 'block';
                        document.getElementById('finacials').style.display = 'block';">Set up Project Parameters</a></li>
                <li><a href="#">Internal Cost parameters</a></li>
            </ul>
        </div>
        <div id="mainDiv">
            <!--     <form action="#" method="post">-->
            <p>Click on the buttons to open the collapsible content.</p>
            <div>
                <button class="accordion">Project And Client Information</button>
                <div class="panel">

                    <fieldset>
                        <legend style="">
                            Project & Client Data
                        </legend>
                        <label style="width:20%">Project Name</label>
                        <input form ="form" required type="text" name="project_name" id="project_name" style="width:25%">
                        <label style="width:20%">Project Code</label>
                        <input form ="form" required type="text" name="project_code" id="project_code" style="width:25%"><br>
                        <label style="width:20%">Project Category</label>
                        <input form ="form" required type="text" name="project_cat" id="project_cat" style="width:25%">
                        <label style="width:20%">Job NO</label>
                        <input form ="form" required type="text" name="job_no" id="job_no" style="width:25%"><br>
                        <label style="width:20%">Country</label>
                        <input form ="form" required type="text" name="country" id="country" style="width:25%">
                        <label style="width:20%">Client</label>
                        <input form ="form" required type="text" name="client" id="client" style="width:25%"><br>
                        <label style="width:20%">Research Executive</label>
                        <input form ="form" required type="text" name="research_exe" id="research_exe" style="width:25%">
                        <label style="width:20%">Project Manager</label>
                        <input form ="form" required type="text" name="project_mngr" id="project_mngr" style="width:25%"><br>
                    </fieldset>
                    <button id="show" onclick="displayOthers();">proceed</button>
                </div>
            </div>
            <div id="miniDiv" style="z-index:-1;">
                <button class="accordion">Personnel</button>
                <div class="panel">

                    <fieldset>
                        <legend>Personnel cost</legend>
                        <p style="font-size:10px; margin-bottom: 0;"><b>Select parameters as applicable</b></p>
                        <select name="personnel_cost" id="personnel_cost" onchange="global_data(id);">
                            <option>select from the list......</option>
                            <option>Project Setup</option>
                            <option>Price per normal/placement QNR(capital)Interviewers Wage</option>
                            <option>Price per normal/placement QNR(other cities)</option>
                            <option>Price per normal/placement QNR(national)</option>
                            <option>Price per recall(capital)</option>
                            <option>Price per recall(other cities)</option>
                            <option>Price per recall(national)</option>
                            <option>Supervisors (inc. training,accompanying, editing)(SUPERVISOR'S WAGE)</option>
                            <option>Qaulity Control(Back-checking)</option>
                            <option>Translation of QNR/discussion guide</option>
                            <option>Translation of verbatim/open-ended questions</option>
                            <option>Typing of verbatim</option>
                            <option>Coding (listing of answers, preparation of code frames</option>
                            <option>Punching</option>
                            <option>Data Verification(repunch 10%)</option>
                            <option>Pre-recruitment/recruitment(other areas)</option>
                            <option>Moderator (FGD)</option>
                            <option>Moderator (IDI)</option>
                            <option>Transcripts in local language</option>
                            <option>Transcripts in English</option>
                            <option>Briefing of morderator</option>
                            <option>Topline/summary report</option>
                            <option>Simultaneous translation</option>
                            <option>Technical operator</option>
                            <option>Desktop research</option>
                            <option>Training/Pilot</option>
                            <option>Office assistant</option>
                        </select>
                        <br><br>
                        <input style="text-align: left;" type="checkbox" value="psnl_chk" 
                               onclick="document.getElementById('psnl_others').style.visibility = 'visible';">others not listed<br>
                        <div id="psnl_others" style="visibility: hidden;float:left"><i>specify:</i><input type="text" name="psnl_others_txt" ></div>
                    </fieldset>   

                </div>

                <button formaction="#" class="accordion">Transport/Accommodation/Hiring of Venue & Equipment</button>
                <div class="panel">

                    <fieldset>
                        <legend>Training cost</legend>
                        <p style="font-size:10px; margin-bottom: 0px;"><b>Select parameters as applicable</b></p>
                        <select name="training_cost"  id="training_cost" onchange="global_data(id);">
                            <option>select from the list .................</option>
                            <option>Air/bus/rail tickets for Office Staff</option>
                            <option>Ground Transportation for Office Staff</option>
                            <option>Out of station allowance for Office Staff</option>
                            <option>Car rental/taxi/drivers</option>
                            <option>Petrol</option>
                            <option>Air/bus/rail tickets for Supervisors (Traveling to/from Lagos)</option>
                            <option>Out of station allowance for Supervisors (while in Lagos)</option>
                            <option>Out of station allowance for Regional & Part time Supervisors  (while in other cities)</option>
                            <option>Transportation allowance for supervisors (within their cities)</option>
                            <option>Transportation allowance for interviewers</option>
                            <option>Transportation allowance for backcheckers</option>
                            <option>Transportation allowance for recruiters</option>
                            <option>Transportation Cost for Pre-recruited respondents (VENUE)</option>
                            <option>Hall renting for training/central location/venue for focus groups</option>
                            <option>Hiring of equipment (e.g. TV/video, Generator, Tape Recorder, Cool boxes, Tables, Chairs,  etc)</option>
                        </select>
                        <br><br>
             <!--           <p  style="font-size:10px; margin-bottom: 0px;"><b>Click on any applicable parameter</b></p> -->
                        <input style="text-align: left;float:left" type="checkbox" value="trspt_chk" 
                               onclick="document.getElementById('trspt_others').style.visibility = 'visible';">others not listed<br>
                        <div id = "trspt_others" style="visibility: hidden; float:left"><i>specify:</i><input type="text" name="trspt_others_txt" ></div>
                    </fieldset>   

                </div>
                <button formaction="#" class="accordion">Printing</button>
                <div class="panel">

                    <fieldset>
                        <legend>Printing</legend>
                        <select name = "prntn" id="prntn"  onchange="global_data(id);">
                            <option>select from the list......</option>
                            <option>Printing of QNR</option>
                            <option>Printing of other material(show cards etc)</option>
                            <option>No. QNR to copy</option>
                            <input style="text-align: left; float:left" type="checkbox" value="prtn_chk" 
                                   onclick="document.getElementById('prtn_others').style.visibility = 'visible';">others not listed<br>
                            <div id = "prtn_others" style="visibility: hidden; float:left"><i>specify:</i>
                                <input type="text" name="prtn_others_txt" ></div>
                        </select>
                        <br><br>
                    </fieldset>

                </div>
                <button formaction="#" class="accordion">Purchases</button>
                <div class="panel">

                    <fieldset>
                        <legend>Purchases</legend>
                        <select name="prchs" id="prchs"  onchange="global_data(name);">
                            <option>select from the list.....</option>
                            <option>Stationery/diskettes</option>
                            <option>Samples/video/audio tapes/batteries etc</option>
                            <option>Refreshmnets</option>
                        </select>
                        <br>
                        <br>
                        <input style="width:50%; text-align: left; float: left" type="checkbox" value="prchs_chk" 
                               onclick="document.getElementById('prchs_others').style.visibility = 'visible';">others not listed<br>
                        <div id = "prchs_others" style="visibility: hidden; float:left"><i>specify:</i><input type="text" name="prchs_others_txt" ></div>
                    </fieldset>

                </div>
                <button formaction="#" class="accordion">Postages/Telecommunication/Entertainment/Other</button>
                <div class="panel">

                    <fieldset>
                        <legend>Postage...</legend>
                        <select name="pstgs" id="pstgs"  onchange="global_data(name);">
                            <option>select from the list.....</option>
                            <option>Courier/Postage of Qnrs</option>
                            <option>Courier/Postage of Stimulus Materials</option>
                            <option>Telephone/Fax (Airtime Data Collection)</option>
                            <option>Store room renting for test products</option>
                            <option>Entertainment/Client</option>
                        </select>
                        <br><br>
                        <input style="text-align: left;float:left" type="checkbox" value="pstgs_chk" 
                               onclick="document.getElementById('pstgs_others').style.visibility = 'visible';">others not listed<br>
                        <div id = "pstgs_others" style="visibility: hidden; float:left"><i>specify:</i><input type="text" name="pstgs_others_txt" ></div>
                    </fieldset>

                </div>
                <button formaction="#" class="accordion">Incentives/Gifts</button>
                <div class="panel">

                    <fieldset>
                        <select name="gifts" id="gifts"  onchange="global_data(name);">
                            <option>select from the list.....</option>
                            <option>Incentives/gifts for participants</option>
                            <option>Incentives/gifts for over-recruitment</option>
                        </select>
                    </fieldset>

                </div>
                <script>
                    var acc = document.getElementsByClassName("accordion");
                    var i;

                    for (i = 0; i < acc.length; i++) {
                        acc[i].addEventListener("click", function () {
                            this.classList.toggle("active");
                            var panel = this.nextElementSibling;
                            if (panel.style.maxHeight) {
                                panel.style.maxHeight = null;
                            } else {
                                panel.style.maxHeight = panel.scrollHeight + "px";
                            }
                        });
                    }
                </script>

            </div> 
            <!--         </form> -->
        </div>
        <div id="finacials">
            <form action="process_quote.php" method="post" id="form">
                <?php echo 'Quote Parameters (dated: ' . date("Y/m/d") . ')'; ?>
                <br>
                <div id="misc_parameters" style="width:100%;text-align: left; height:10vw; overflow-y: scroll;">
                    <fieldset>
                        <legend>
                            Miscelleneous parameters
                        </legend>
                        <label style="width:30%">Tax Rate(%)</label><input required style="width:10%; margin-right:20px;" type="text"name="tax_rate" size="2">
                        <label style="width:30%">Total Sample Size</label><input required  style="width:10%; margin-right:20px" type="text"name="sample_size" size="3"><br>
                        <label style="width:30%">Capital</label><input  style="width:10%; margin-right:20px" type="text"name="capital" size="3">
                        <label style="width:30%">Main cities</label><input  style="width:10%; margin-right:20px" type="text"name="cities" size="3"><br>
                        <label style="width:30%">National</label><input  style="width:10%; margin-right:20px" type="text"name="national" size="3">
                        <label style="width:30%">Capital</label><input  style="width:10%; margin-right:20px" type="text"name="capital" size="3"><br>
                        <label style="width:30%">Number of Cities to be covered</label><input  style="width:10%; margin-right:20px" type="text"name="coverage" size="3">
                        <label style="width:30%">Actual date of preparation</label><input  style="width:10%; margin-right:20px" type="text"name="prep_date"><br>
                        <label style="width:30%">Actual date of F/W start</label><input  style="width:10%; margin-right:20px" type="date"name="start_date">
                        <label style="width:30%">Actual date of F/W end</label><input  style="width:10%; margin-right:20px" type="date"name="end_date" ><br>
                        <label style="width:30%">Actual date of Raw data delivery</label><input  style="width:10%; margin-right:20px" type="date"name="delivery_date">
                        <label style="width:30%">Euro exchange rate</label><input required  style="width:10%; margin-right:20px" type="text"name="euro_exch"><br>
                        <label style="width:30%">Dollar exchange rate</label><input required  style="width:10%; margin-right:20px" type="text"name="dollar_exch">
                        <label style="width:30%">Price per Qnr</label><input  style="width:10%; margin-right:20px" type="text"name="qnr_price" size="3"><br>
                        <label style="width:30%">Interview length (in minutes)</label>
                        <select  style="width:15%" name="interview_time">
                            <option>1 - 15</option>
                            <option>16 - 25</option>
                            <option>26 - 35</option>
                            <option>36 - 45</option>
                            <option>46 - 60</option>
                            <option>61 - 75</option>
                            <option>76 - 90</option>
                            <option>90+</option>
                        </select>
                    </fieldset>

                </div>
                <hr>
                <div style="height:250px; overflow-y: scroll;">
                    <fieldset>
                        <legend>Select and set quote parameters</legend>
                        <table style="width:100%" id="finacialTable" border="1">
                            <tr style="background-color: dodgerblue">
                                <th style="width:5%">S/NO</th>
                                <th style="width:50%">Cost<br> Item</th>
                                <th style="width:15%">Qty</th>
                                <th style="width:15%">Unit<br> Cost</th>
                                <th style="width:15%">Days<br> worked</th>
                            </tr>
                        </table>
                    </fieldset>
                </div>

                <hr>
                <div>
                    <select id="name" name="curr">
                        <option>Select Currency to render report in.....</option>
                        <option>Nigeria Naira</option>
                        <option>U.S Dollars</option>
                        <option>Euros</option>
                    </select>
                    <input type="submit" name="generate_quote" id="generate_quote" 
                           value="Generate Quote" disabled style="float:right; text-align: left">
                </div>
            </form>
        </div>
    </body>
</html>