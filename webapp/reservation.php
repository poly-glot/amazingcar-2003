<?php require('includes/application_top.php'); ?>

<?php
    if (isset($_POST['submit'])) {
        $message = "";
        foreach($_POST as $key => $val) {
            $message .= $key . " = " . $val . "\r\n";
        }

        @mail("jsheryaar@yahoo.com", "Online Order amazing car", $message);
?>

        <font face="Arial" size="3" color="#000000"><b>Your order has sent successfully.</b></font>

<?php } else { ?>

        <font face="Arial" size="3" color="#000000"><b>Please type in/select the information and press 'Send Order' Button</b></font>


        <script language="JavaScript" type="text/javascript">
            <!--
            function FrontPage_Form1_Validator(theForm)
            {

                if (theForm.Phone.value == "")
                {
                    alert("Please enter a value for the \"Phone\" field.");
                    theForm.Phone.focus();
                    return false;
                }

                if (theForm.Phone.value.length < 4)
                {
                    alert("Please enter at least 4 characters in the \"Phone\" field.");
                    theForm.Phone.focus();
                    return false;
                }

                if (theForm.Phone.value.length > 15)
                {
                    alert("Please enter at most 15 characters in the \"Phone\" field.");
                    theForm.Phone.focus();
                    return false;
                }

                return true;
            }
            // -->
        </script>

        <form method="POST" onsubmit="return FrontPage_Form1_Validator(this)" name="FrontPage_Form1" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <input type="hidden" name="VTI-GROUP" value="0">
            <div><div align="center"><center><table border="0" width="90%">
                            <tr>
                                <td width="50%"><div align="right"><p><b><font face="Arial" size="2">Name</font></td>
                                <td width="50%" colspan="3"><input type="text" name="Name" size="20"></td>
                            </tr>
                            <tr>
                                <td width="50%"><div align="right"><p><b><font face="Arial" size="2">Email</font></td>
                                <td width="50%" colspan="3"><input type="text" name="Email" size="20"></td>
                            </tr>
                            <tr>
                                <td width="50%"><div align="right"><p><b><font face="Arial" size="2">Address</font></td>
                                <td width="50%" colspan="3"><input type="text" name="Address" size="20"></td>
                            </tr>
                            <tr>
                                <td width="50%"><div align="right"><p><b><font face="Arial" size="2">City</font></td>
                                <td width="50%" colspan="3"><input type="text" name="City" size="20"></td>
                            </tr>
                            <tr>
                                <td width="50%"><div align="right"><p><b><font face="Arial" size="2">Country</font></td>
                                <td width="50%" colspan="3"><input type="text" name="Country" size="20"></td>
                            </tr>
                            <tr>
                                <td width="50%"><div align="right"><p><b><font face="Arial" size="2">State/Province</font></td>
                                <td width="50%" colspan="3"><input type="text" name="StateProvince" size="20"></td>
                            </tr>
                            <tr>
                                <td width="50%"><div align="right"><p><b><font face="Arial" size="2">Zip Code</font></td>
                                <td width="50%" colspan="3"><input type="text" name="Zip" size="8"></td>
                            </tr>
                            <tr>
                                <td width="50%"><div align="right"><p><b><font face="Arial" size="2">Phone</font></td>
                                <td width="50%" colspan="3"><input type="text" name="Phone" size="20" maxlength="15"></td>
                            </tr>
                            <tr>
                                <td width="50%"><div align="right"><p><b><font face="Arial" size="2">Select Vehicle</font></td>
                                <td width="50%" colspan="3">
                                    <select name="TypeOfVehicle" size="1">
                                        <option value="Pajero Intercooler (1999)">Pajero Intercooler (1993-99)</option>
                                        <option value="Toyota Corolla (2003)">Toyota Corolla (2002-03)</option>
                                        <option value="Honda City (2003) ">Honda City (2002-03)</option>
                                        <option value="Kia Spectra (2001)">Kia Spectra (2001)</option>
                                        <option value="Toyota Corolla (2001) ">Toyota Corolla (1999-2001)</option>
                                        <option value="Nissan Sunny (2000) ">Nissan Sunny (1998-2000)</option>
                                        <option value="Suzuki Baleno (2001) ">Suzuki Baleno (1999-2001)</option>
                                        <option value="Kia Classic CNG (2003) ">Kia Classic CNG (2002-03)</option>
                                        <option value="Hyundai Santro (2003) ">Hyundai Santro (2003)</option>
                                        <option value="Hyundai Santro (2001) ">Hyundai Santro (2000-01)</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%"><div align="right"><p><b><font face="Arial" size="2">Flight #</font></td>
                                <td width="50%" colspan="3"><input type="text" name="Flight" size="15"></td>
                            </tr>
                            <tr>
                                <td width="50%"><div align="right"><p><b><font face="Arial" size="2">Arrival Date-Islamabad</font></td>
                                <td width="5%"><select name="ArrivalDate" style="width: 70px" size="1">
                                        <option name="none">Day </option>
                                        <option name="01">01 </option>
                                        <option name="02">02 </option>
                                        <option name="03">03 </option>
                                        <option name="04">04 </option>
                                        <option name="05">05 </option>
                                        <option name="06">06 </option>
                                        <option name="07">07 </option>
                                        <option name="08">08 </option>
                                        <option name="09">09 </option>
                                        <option name="10">10 </option>
                                        <option name="11">11 </option>
                                        <option name="12">12 </option>
                                        <option name="13">13 </option>
                                        <option name="14">14 </option>
                                        <option name="15">15 </option>
                                        <option name="16">16 </option>
                                        <option name="17">17 </option>
                                        <option name="18">18 </option>
                                        <option name="19">19 </option>
                                        <option name="20">20 </option>
                                        <option name="21">21 </option>
                                        <option name="22">22 </option>
                                        <option name="23">23 </option>
                                        <option name="24">24 </option>
                                        <option name="25">25 </option>
                                        <option name="26">26 </option>
                                        <option name="27">27 </option>
                                        <option name="28">28 </option>
                                        <option name="29">29 </option>
                                        <option name="30">30 </option>
                                        <option name="31">31 </option>
                                    </select></td>
                                <td width="7%"><select name="ArrivalMonth" style="width: 70px" size="1">
                                        <option name="none">Month </option>
                                        <option name="January">Jan </option>
                                        <option name="February">Feb </option>
                                        <option name="March">Mar </option>
                                        <option name="April">Apr </option>
                                        <option name="May">May </option>
                                        <option name="June">Jun </option>
                                        <option name="July">Jul </option>
                                        <option name="August">Aug </option>
                                        <option name="September">Sep </option>
                                        <option name="October">Oct </option>
                                        <option name="November">Nov </option>
                                        <option name="December">Dec </option>
                                    </select></td>
                                <td width="38%"><select name="ArrivalYear" style="width: 70px" size="1">
                                        <option>Year </option>
                                        <option>2002 </option>
                                        <option>2003 </option>
                                        <option>2004 </option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td width="50%"><div align="right"><p><b><font face="Arial" size="2">Arrival Time-Islamabad</font></td>
                                <td width="10%"><select name="ArrivalTime" style="width: 70px" size="1">
                                        <option name="none" selected>hrs </option>
                                        <option name="01">01 </option>
                                        <option name="02">02 </option>
                                        <option name="03">03 </option>
                                        <option name="04">04 </option>
                                        <option name="05">05 </option>
                                        <option name="06">06 </option>
                                        <option name="07">07 </option>
                                        <option name="08">08 </option>
                                        <option name="09">09 </option>
                                        <option name="10">10 </option>
                                        <option name="11">11 </option>
                                        <option name="12">12 </option>
                                    </select></td>
                                <td width="10%"><select name="ArrivalMinutes" size="1">
                                        <option name="None" selected>Minutes </option>
                                        <option name="00">00 </option>
                                        <option name="05">05 </option>
                                        <option name="10">10 </option>
                                        <option name="15">15 </option>
                                        <option name="20">20 </option>
                                        <option name="25">25 </option>
                                        <option name="30">30 </option>
                                        <option name="35">35 </option>
                                        <option name="40">40 </option>
                                        <option name="45">45 </option>
                                        <option name="50">50 </option>
                                        <option name="55">55</option>
                                    </select></td>
                                <td width="30%"><input type="radio" name="ArrivalAMPM" value="am" checked> <b><font>a.m.</font></b> <input type="radio" name="ArrivalAMPM" value="pm"> <b><font>p.m.</font></b></td>
                            </tr>
                            <tr>
                                <td width="50%"><div align="right"><p><b><font face="Arial" size="2">Departure Date-Islamabad</font></td>
                                <td width="10%"><select name="DepartureDate" style="width: 70px" size="1">
                                        <option name="None">Day </option>
                                        <option name="01">01 </option>
                                        <option name="02">02 </option>
                                        <option name="03">03 </option>
                                        <option name="04">04 </option>
                                        <option name="05">05 </option>
                                        <option name="06">06 </option>
                                        <option name="07">07 </option>
                                        <option name="08">08 </option>
                                        <option name="09">09 </option>
                                        <option name="10">10 </option>
                                        <option name="11">11 </option>
                                        <option name="12">12 </option>
                                        <option name="13">13 </option>
                                        <option name="14">14 </option>
                                        <option name="15">15 </option>
                                        <option name="16">16 </option>
                                        <option name="17">17 </option>
                                        <option name="18">18 </option>
                                        <option name="19">19 </option>
                                        <option name="20">20 </option>
                                        <option name="21">21 </option>
                                        <option name="22">22 </option>
                                        <option name="23">23 </option>
                                        <option name="24">24 </option>
                                        <option name="25">25 </option>
                                        <option name="26">26 </option>
                                        <option name="27">27 </option>
                                        <option name="28">28 </option>
                                        <option name="29">29 </option>
                                        <option name="30">30 </option>
                                        <option name="31">31 </option>
                                    </select></td>
                                <td width="10%"><select name="DepartureMonth" style="width: 70px" size="1">
                                        <option name="None">Month </option>
                                        <option name="January">Jan </option>
                                        <option name="February">Feb </option>
                                        <option name="March">Mar </option>
                                        <option name="April">Apr </option>
                                        <option name="May">May </option>
                                        <option name="June">Jun </option>
                                        <option name="July">Jul </option>
                                        <option name="August">Aug </option>
                                        <option name="September">Sep </option>
                                        <option name="October">Oct </option>
                                        <option name="November">Nov </option>
                                        <option name="December">Dec </option>
                                    </select></td>
                                <td width="30%"><select name="DepartureYear" style="width: 70px" size="1">
                                        <option>Year </option>
                                        <option>2002 </option>
                                        <option>2003 </option>
                                        <option>2004 </option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td width="50%"><div align="right"><p><b><font face="Arial" size="2">Departure Date-Islamabad</font></td>
                                <td width="10%"><select name="DepartureTime" style="width: 70px" size="1">
                                        <option name="None" selected>hrs </option>
                                        <option name="01">01 </option>
                                        <option name="02">02 </option>
                                        <option name="03">03 </option>
                                        <option name="04">04 </option>
                                        <option name="05">05 </option>
                                        <option name="06">06 </option>
                                        <option name="07">07 </option>
                                        <option name="08">08 </option>
                                        <option name="09">09 </option>
                                        <option name="10">10 </option>
                                        <option name="11">11 </option>
                                        <option name="12">12 </option>
                                    </select></td>
                                <td width="10%"><select name="DepartureMinutes" style="width: 70px" size="1">
                                        <option name="None" selected>Minutes </option>
                                        <option name="00">00 </option>
                                        <option name="05">05 </option>
                                        <option name="10">10 </option>
                                        <option name="15">15 </option>
                                        <option name="20">20 </option>
                                        <option name="25">25 </option>
                                        <option name="30">30 </option>
                                        <option name="35">35 </option>
                                        <option name="40">40 </option>
                                        <option name="45">45 </option>
                                        <option name="50">50 </option>
                                        <option name="55">55</option>
                                    </select></td>
                                <td width="30%">
                                    <input type="radio" name="DepartureAMPM" value="am" checked> <b><font>a.m.</font></b>
                                    <input type="radio" name="DepartureAMPM" value="pm"> <b><font>p.m.</font></b>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">
                                    <div align="right"><b><font>Period for which vehicle is required :</font></b></div>
                                </td>
                                <td width="50%" colspan="3">
                                    <input type="text" name="VehicleRequiredPeriod" size="10"> <font face="Verdana" size="2" color="White"><b>days</b></font>
                                </td>
                            </tr>
                            <tr>
                                <td width="50%">
                                    <div align="right"><b><font>Mode of Payment:</font></b></div>
                                </td>
                                <td width="50%" colspan="3">
                                    <select name="ModeOfPayment" size="1">
                                        <option name="Cash">Cash </option>
                                        <option name="CreditCard" selected>Credit Card </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="100%" colspan="4" align="center">
                                    <b><font face="Verdana" size="2"><br>Give detailes here, if any:- <br></font></b>
                                </td>
                            </tr>
                            <tr>
                                <td width="100%" colspan="4">
                                    <center>
                                        <textarea rows="4" name="Details" cols="53"></textarea>
                                    </center>
                                </td>
                            </tr>
                        </table>

                        <div align="center">
                            <center>
                                <p><input type="submit" value="Send Order/Inquiries" name="submit"><input type="reset" value="Clear Form Entries" name="B2"></p>
                            </center>
                        </div>
        </form>

<?php } ?>


<?php require('includes/application_bottom.php'); ?>
