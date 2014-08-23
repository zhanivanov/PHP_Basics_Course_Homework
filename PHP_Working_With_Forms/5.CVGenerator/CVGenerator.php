<!DOCTYPE html>
<html>
    <head>
        <title>CVGenerator</title>
        <style>
            table,td,th,tr{
                border: 1px solid black;
            }
        </style>
        <script>
          var idCounter = 0;
             function addLang() {
                        var myDiv = document.createElement("div");
                        myDiv.setAttribute("id", "inputBox" + idCounter);
                        idCounter++;
                        myDiv.innerHTML = '<input type="text" name="progLanguages[]" id="prog-langs" required="true"/>' +
                            '<select name="level[]" id="level" required="true">' +
                        '<option value="Beginner">Beginner</option>' +
                        '<option value="Programmer">Programmer</option>' +
                        '<option value="Ninja">Ninja</option>' +
                        '</select>' +
                        '<br/>';
                        document.getElementById("programming").appendChild(myDiv);
            }
            function removeLang(){
                var divRem = document.getElementById('inputBox'+(idCounter-1));
                idCounter--;
                document.getElementById('programming').removeChild(divRem);
            }
            var otherCounter = 0;
            function addOther(){
                var myDiv = document.createElement("div");
                myDiv.setAttribute("id","inputField"+otherCounter);
                otherCounter++;
                myDiv.innerHTML = '<input type="text" name="languages[]" id="languages"/>'+
                    '<select name="comprehension[]">'+
                        '<option value="default">-Comprehension-</option>'+
                        '<option value="beginner">beginner</option>'+
                        '<option value="intermediate">intermediate</option>'+
                        '<option value="advanced">advanced</option>'+
                   '</select>'+
                    '<select name="reading[]">'+
                        '<option value="default">-Reading-</option>'+
                        '<option value="beginner">beginner</option>'+
                        '<option value="intermediate">intermediate</option>'+
                       '<option value="advanced">advanced</option>'+
                    '</select>'+
                    '<select name="writing[]">'+
                        '<option value="default">-Writing-</option>'+
                        '<option value="beginner">beginner</option>'+
                        '<option value="intermediate">intermediate</option>'+
                        '<option value="advanced">advanced</option>'+
                    '</select>';
                document.getElementById('other').appendChild(myDiv);
            }
            function removeOther(){
                var divRem = document.getElementById('inputField'+(otherCounter-1));
                otherCounter--;
                document.getElementById('other').removeChild(divRem);
            }
        </script>
    </head>
    <body>
        <form method="post">
             <fieldset>
                  <legend>Personal Information:</legend>
                  <input type="text" name="fname" placeholder="First Name"/>
                  <br />
                  <input type="text" name="lname" placeholder="Last Name"/>
                  <br />
                  <input type="email" name="email" placeholder="Email"/>
                  <br />
                  <input type="text" name="number" placeholder="Phone Number"/>
                  <br />
                  <label for="female">Female</label>
                  <input type="radio" name="gender" id="female" value="Female"/>
                  <label for"male">Male</label>
                  <input type="radio" name="gender" id="male" value="Male"/>
                  <br />
                  <label for="bday">Birth Date</label>
                  <br />
                  <input type="date" name="birthDate" id="bday"/>
                  <br />
                  <label for="nationality">Nationality</label>
                  <br />
                  <select name="nationality">
                      <option value="bulgarian">Bulgarian</option>
                      <option value="indian">Indian</option>
                      <option value="romanian">Romanian</option>
                      <option value="french">French</option>
                  </select>
             </fieldset>
             <fieldset>
                 <legend>Last Work Position</legend>
                 <label for="company-name">Company Name</label>
                 <input type="text" name="company" id="company-name"/>
                 <br />
                 <label for="from-date">From</label>
                 <input type="date" name="fromDate" id="from-date"/>
                 <br />
                  <label for="to-date">To</label>
                 <input type="date" name="toDate" id="to-date"/>
             </fieldset>
             
             <fieldset>
                 <legend>Computer Skills</legend>
                 <div id="programming">
                     <script>addLang();</script>
                 </div>
                 <input type="button" onclick="removeLang()" value="Remove Language"/>
                 <input type="button" onclick="addLang()" value="Add Language"/>
             </fieldset>
             
             
            <fieldset>
				<legend>
					Other Skills
				</legend>
				<label for="languages">Languages</label>
				<br />
				<div id="other">
				    <script>addOther();</script>
			    </div>
				<input type="button" onclick="removeOther()" value="Remove Language"/>
				<input type="button" onclick="addOther()" value="Add Language"/>
				
		        <label>Driver's License</label>
		        <br />
		        <label for="b">B</label>
		        <input type="checkbox" name="bCat" id="b"/>
		        <label for="a">A</label>
                <input type="checkbox" name="aCat" id="a"/>
                <label for="c">C</label>
                <input type="checkbox" name="cCat" id="c"/>
			</fieldset>
			<input type="submit" value="Generate CV" />
        </form>
    </body>
</html>

<?php

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['number']) &&
isset($_POST['gender']) && isset($_POST['birthDate']) && isset($_POST['nationality']) && isset($_POST['company']) && isset($_POST['fromDate']) &&
isset($_POST['toDate']) && isset($_POST['progLanguages']) && isset($_POST['comprehension']) && isset($_POST['reading']) &&
isset($_POST['writing'])){

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$email = $_POST['email'];
$number = $_POST['number'];
$gender = $_POST['gender'];
$birthDate = $_POST['birthDate'];
$nationality = $_POST['nationality'];
$companyName = $_POST['company'];
$from = $_POST['fromDate'];
$to = $_POST['toDate'];
$languages = $_POST['progLanguages'];
$level = $_POST['level'];
$otherLanguages = $_POST['languages'];
$compre = $_POST['comprehension'];
$read = $_POST['reading'];
$write = $_POST['writing'];
$license = $_POST['license'];
$bCat = '';
$aCat = '';
$cCat = '';

    $personalInfoTable = '<table>
                <thead>
                    <tr>
                        <th colspan="2">Personal Information</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>First Name</td>
                        <td>'.$firstName.'</td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td>'.$lastName.'</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>'.$email.'</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>'.$number.'</td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>'.$gender.'</td>
                    </tr>
                    <tr>
                        <td>Birth Date</td>
                        <td>'.$birthDate.'</td>
                    </tr>
                    <tr>
                        <td>Nationality</td>
                        <td>'.$nationality.'</td>
                    </tr>
                </tbody>
            </table>';
            
    $lastWork = '<table>
                <thead>
                    <tr>
                        <th colspan="2">Last Work Position</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Company Name</td>
                        <td>'.$companyName.'</td>
                    </tr>
                    <tr>
                        <td>From</td>
                        <td>'.$from.'</td>
                    </tr>
                    <tr>
                        <td>To</td>
                        <td>'.$to.'</td>
                    </tr>
                </tbody>
            </table>';
            
    $programmingLanguages = '<table>
                <thead>
                    <tr>
                        <th colspan="2">Computer Skills</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Programming Languages</td>
                        <td>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Language</th>
                                        <th>Skill Level</th>
                                    </tr>
                                </thead>
                                <tbody>';
                                for($i = 0;$i<count($languages);$i++){
                                    $programmingLanguages .= '<tr>';
                                    $programmingLanguages .= '<td>'.$languages[$i].'</td>';
                                    $programmingLanguages .= '<td>'.$level[$i].'</td>';
                                    $programmingLanguages .= '</tr>';
                                }
                                $programmingLanguages .= '</tbody></table></td></tr></tbody></table>';
                
    $otherSkills = '<table>
                <thead>
                    <tr>
                        <th colspan="2">Other Skills</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Languages</td>
                        <td>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Language</th>
                                        <th>Comprehansion</th>
                                        <th>Reading</th>
                                        <th>Writing</th>
                                    </tr>
                                </thead>
                                <tbody>';
                                for($i = 0;$i<count($otherLanguages);$i++){
                                    $otherSkills .= '<tr>';
                                    $otherSkills .= '<td>'.$otherLanguages[$i].'</td>';
                                    $otherSkills .= '<td>'.$compre[$i].'</td>';
                                    $otherSkills .= '<td>'.$read[$i].'</td>';
                                    $otherSkills .= '<td>'.$write[$i].'</td>';
                                    $otherSkills .= '</tr>';
                                }
                                $otherSkills .= '</tbody></table></td></tr>
                                <tr>
                                    <td>Driver\'s License</td>
                                    <td>';
                                    if(isset($_POST['bCat'])) {
                                        $bCat = 'B';
                                    }
                                    if(isset($_POST['aCat'])) {
                                        $aCat = 'A';
                                    }
                                    if(isset($_POST['cCat'])) {
                                        $cCat = 'C';
                                    }
                                    $otherSkills .= $bCat.' '.$aCat.' '.$cCat.'</td></tr></tbody></table>';
                                    
                                    
                    echo $personalInfoTable;
                    echo $lastWork;
                    echo $programmingLanguages;
                    echo $otherSkills;
    }


?>

