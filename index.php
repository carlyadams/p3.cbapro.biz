<!doctype html>
<html>
<head>

<title>Earned Value</title>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="en-us" http-equiv="Content-Language">
<meta content="Earned Value, Project, Costs, Estimates, Estimation, SPI, CPI, Cost Performance" name="keywords">
<meta content="Tool to help calculate project costs. In addition, you can save the calculations." name="description">

	<script type="text/JavaScript">
    
            function estimate() {
                if ('PV' == "" || 'EV' == "" || 'AC' == ""|| 'BC' == ""|| 'PH' == ""|| 'AH' == ""|| 'EH' == ""|| 'PC' == ""|| 'HR' == "") {
                    alert("Please complete all fields")
                }
                else {
    
                    A = parseFloat(document.EVcalc.PV.value).toPrecision(2);
                    B = parseFloat(document.EVcalc.EV.value).toPrecision(2);
                    C = parseFloat(document.EVcalc.AC.value).toPrecision(2);
					D = parseFloat(document.EVcalc.BC.value).toPrecision(2);
					E = parseFloat(document.EVcalc.PH.value).toPrecision(2);
					F = parseFloat(document.EVcalc.AH.value).toPrecision(2);
					G = parseFloat(document.EVcalc.EH.value).toPrecision(2);
					H = parseFloat(document.EVcalc.PC.value).toPrecision(2);
					I = parseFloat(document.EVcalc.HR.value).toPrecision(2);
                    J = parseFloat(E*I);
                    K = parseFloat(F*I);
                    L = parseFloat(D*H/100);
					M = parseFloat(L-J);
                    N = parseFloat(L-K);
                    O = parseFloat(L/J).toPrecision(2);
                    P = parseFloat(L/K).toPrecision(2);
					Q = parseFloat(G*I);
					R = parseFloat(N/M);
                    S = parseFloat(R-P);
                    T = parseFloat(N-R);
					U = parseFloat(L/Q*100);  
					V = parseFloat(U/D).toPrecision(2);  
                    document.EVcalc.PV.value = J
                    document.EVcalc.AC.value = K
                    document.EVcalc.EV.value = L
					document.EVcalc.SV.value = M
                    document.EVcalc.CV.value = N
                    document.EVcalc.SPI.value = O
                    document.EVcalc.CPI.value = P
					document.EVcalc.BAC.value = Q
					document.EVcalc.EAC.value = R
                    document.EVcalc.ETC.value = S
                    document.EVcalc.VAC.value = T
					document.EVcalc.PC.value = U
					document.EVcalc.PCV.value = V




    
                }
            }
    
    </script>

	<style type="text/css">
    
    body {
	background-color: rgba(11,70,5,1);
    }
    body,td,th {
	color: rgba(16,220,245,1);
}
    </style>

</head>

<body bgcolor="#0E0CF7" text="#3366FF">
<noscript>CBA Professionals is a FIRM that practices GREEN. Interested in learning more, visit us at cbaprofessionals.com </noscript>

<form name="EVcalc" action="file:///C|/Users/Carly Adams/Documents/dw/project.php" method="POST" id="EVcalc">

  
    <p style="font-style: normal; font-size: 36px;">CBA Professionals LLC</p>
    <h1>Earned Value</h1>
  <div>
    <p><br>
      <label>The Earned Value is used to calculate the current position of the project related to earned value.<br>
        1) Provide: Planned Hours, Actual Hours, Effort Hours, Percent, Hourly Rate, and Base-lined Costs.<br>
        2) Once the figures are provided, hit the 'Calculate' button and the remaining fields will be calculated.<br>
        3) The Result will provide you with current progress related to cost and schedule..
      </label>
    </p>
    <p><br>
      
    </p>
    <table width="1056" border="1">
      <tr>
        <td width="151"><label> Planned Hours<br>
          <span style="font-size: 12px">Initial Planned Hours</span><br>
        </label></td>
        <td width="151"><label> Actual Hours<br>
          <span style="font-size: 12px">Initial Planned Hours Spent</span><br>
        </label></td>
        <td width="151"><label> Effort Hours<br>
          <span style="font-size: 12px">Hours of Effort</span><br>
        </label></td>
        <td style="width: 148px"><label> Percent Complete<br>
          <span style="font-size: 12px">Percent of Work Completed</span><br>
        </label></td>
        <td width="144"><label> Hourly Rate<br>
          <span style="font-size: 12px">Total Hourly Rate</span><br>
        </label></td>
      </tr>
      <tr>
        <td><div align="center">
          <input name="PH" type="text" id="PH">
        </div></td>
        <td><div align="center">
          <input name="AH" type="text" id="AH">
        </div></td>
        <td><div align="center">
          <input name="EH" type="text" id="EH">
        </div></td>
        <td style="width: 148px">
        <div align="left">
        VALUE:<br>
        <input name="PCV" type="text" id="PCV" readonly>
        <br>
        PERCENT:
        <input name="PC" type="text" id="PC" maxlength="10">
        <br>
        </div>
       </td>
        <td><div align="center">
          <input name="HR" type="text" id="HR">
        </div></td>
      </tr>
    </table>
    <br>    
    <table width="748" border="1">
        <tr>
          <td width="163">
      <label> Baselined Costs<br>
            <span style="font-size: 12px">Costs at Baseline</span><br>
       </label></td>
          
          <td width="163">
     <label> Planned Value (PV)<br>
              <span style="font-size: 12px">Hourly Rate * Planned Hours</span><br>
      </label></td>
    
          <td width="192">
     <label> Earned Value (EV)<br>
            <span style="font-size: 12px">Baselined Cost * Actual Completion</span><br>
      </label></td>
          
          <td width="202">
     <label>  Actual Cost (AC)<br>
            <span style="font-size: 12px">Hourly Rate * Hours Spent</span><br>
       </label></td>
        </tr>
        <tr>
          <td><div align="center">
            <input name="BC" type="text" id="BC" maxlength="10">
          </div></td>
          <td><div align="center">
            <input name="PV" type="text" id="PV" maxlength="10" readonly>
          </div></td>
          
          <td><div align="center">
            <input name="EV" type="text" id="EV" maxlength="10" readonly>
          </div></td>
          
          <td><div align="center">
            <input name="AC" type="text" id="AC" maxlength="10" readonly>
          </div></td>
        </tr>
    </table>
    <br>      
    <table width="913" border="1">
          <tr>
            <td width="195">
         <label>Schedule Variance (SV)<br>
              <span style="font-size: 12px">(-)Behind / (+)Ahead</span><br>
         </label></td>

            <td width="201">
         <label>Cost Variance (CV)<br>
              <span style="font-size: 12px">(-)Over / (+)Under</span><br>
         </label></td>
    
            <td width="256">
         <label>Schedule Performance Index (SPI)<br>
              <span style="font-size: 12px">% progressing at based on original</span><br>
         </label></td>     
            
            <td width="233">
         <label>Cost Performance Index (CPI)<br>
              <span style="font-size: 12px">Value per $</span><br>
         </label></td>   
         
      </tr>
          <tr>
            <td><div align="center">
              <input name="SV" type="text" id="SV" maxlength="10" readonly>
            </div></td>
            <td><div align="center">
              <input name="CV" type="text" id="CV" maxlength="10" readonly>
            </div></td>
            <td><div align="center">
              <input name="SPI" type="text" id="SPI" maxlength="10" readonly>
            </div></td>
            <td><div align="center">
              <input name="CPI" type="text" id="CPI" maxlength="10" readonly>
            </div></td>
          </tr>
    </table>
    <br>        
    <table width="1010" border="1">
      <tr>
        <td width="244">
        <label>Budget at Completion (BAC)<br>
            <span style="font-size: 12px">Baselined Effort Hours * Hourly Rate</span><br>
        </label></td>
         
        <td width="242">
        <label>Estimate at Completion (EAC)<br>
            <span style="font-size: 12px">BAC / CPI</span><br>
        </label></td>
        
        <td width="248">
        <label>Estimate to Completion (ETC)<br>
            <span style="font-size: 12px">EAC - AC</span><br>
        </label></td>

        <td width="248">
        <label>Variance at Completion (VAC)<br>
            <span style="font-size: 12px">BAC - EAC</span><br>
        </label></td>
      </tr>
      <tr>
        <td><div align="center">
          <input name="BAC" type="text" id="BAC" maxlength="10" readonly>
        </div></td>
        
        <td><div align="center">
          <input name="EAC" type="text" id="EAC" maxlength="10" readonly>
        </div></td>
        
        <td><div align="center">
          <input name="ETC" type="text" id="ETC" maxlength="10" readonly>
        </div></td>
        
        <td><div align="center">
          <input name="VAC" type="text" id="VAC" maxlength="10" readonly>
        </div></td>
      </tr>
    </table>
 
    <p>
      <input type="button" value="Calculate" onClick="estimate()">
      <input type="reset" name="reset" id="reset" value="Reset">
    </p>
    <p>
      
    </p>

  </div>

</form>
</body>
</html>
