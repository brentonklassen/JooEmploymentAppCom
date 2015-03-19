<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>
<h1><?php echo $this->msg; ?></h1>

<form method='post' enctype="multipart/form-data">
  <table class="top">
    <tr>
      <th style="font-size: x-large;">
        Employment Application
      </th>
      <th>
        <img alt='Crossroads Care Center' height='100' src='http://www.worthingtonnursinghomes.com/crossroads-logo.gif' width='200' />
      </th>
      <th>
        <img alt='South Shore Care Center' height='100' src='http://www.worthingtonnursinghomes.com/south-shore-logo.gif' width='200' />
      </th>
      <th>
        Atchison Enterprises, Incorporated<br />Worthington, MN 56187
      </th>
    </tr>
    <tr>
      <th colspan='2' style='text-align:left'>
        * indicates required field
      </th>
    </tr>
  </table>
  <br />
  <table>
    <tr>
      <th>
        Applicant Information
      </th>
    </tr>
  </table>
  <table>
    <tr>
      <td>
        <input name='lname' type='text' size='20' maxlength="20" id='lname' required>
        <br />
        <span>
          <label for="lname">
            * Last Name
          </label>
        </span>
      </td>
      <td>
        <input name='fname' type='text' size='20' maxlength="20" id='fname' required>
        <br />
        <span>
          <label for='fname'>
            * First Name
          </label>
        </span>
      </td>
      <td>
        <input name='mname' type='text' size='1' maxlength="1" id='mname' />
        <br />
        <span>
          <label for='mname'>
            M.I.
          </label>
        </span>
      </td>
    </tr>
  </table>
  <table>
    <tr>
      <td>
        <input name='address' type='text' size='30' maxlength="30" id='address' required>
        <br />
        <span>
          <label for="address">
            * Street Address
          </label>
        </span>
      </td>
      <td>
        <input name='appt' type='text' size='10' maxlength="10" id='appt' />
        <br />
        <span>
          <label for='appt'>
            Apartment/Unit
          </label>
        </span>
      </td>
      <td>
        <input name='city' type='text' size='30' maxlength="30" id='city' required>
        <br />
        <span>
          <label for='city'>
            * City
          </label>
        </span>
      </td>
      <td>
        <input name='state' type='text' size='2' maxlength="2" id='state' required>
        <br />
        <span>
          <label for='state'>
            * State
          </label>
        </span>
      </td>
      <td>
        <input name='zip' type='text' size='5' maxlength="5" id='zip' required>
        <br />
        <span>
          <label for='zip'>
            * ZIP Code
          </label>
        </span>
      </td>
    </tr>
  </table>
  <table>
    <tr>
      <td>
        <input name='phone' type='text' size='14' maxlength="14" id='phone' required>
        <br />
        <span>
          <label for='phone' >
            * Phone
          </label>
        </span>
      </td>
      <td>
        <input name='email' type='email' size='30' maxlength="30" id='email' required>
        <br />
        <span>
          <label for='email'>
            * Email Address
          </label>
        </span>
      </td>
      <td>
        <input name='available' type='text' size='20' maxlength="20" id='available' />
        <br />
        <span>
          <label for='available'>
            Date Available
          </label>
        </span>
      </td>
      <td>
        <label for='salary'>
          Desired Salary:
          <br />
          $
        </label>
        <input name='salary' type='text' size='10' maxlength="10" id='salary' />
      </td>
    </tr>
  </table>
  <table>
    <tr>
      <td>
        <label for='position'>
          * Position Applied for:
        </label>
        <br />
      </td>
    </tr>
  </table>
  <table>
    <tr>
      <td>
        How did you hear about this job opening?
	    <select name='hear'>
	      <option value=''>Select one</option>
	      <option value='JobsHQ'>JobsHQ</option>
	      <option value='MN Workforce'>MN Workforce</option>
	      <option value='Daily Globe'>Daily Globe</option>
	      <option value='Radio'>Radio</option>
	      <option value='Facility Website'>Facility Website</option>
	      <option value='Friend'>Friend</option>
	      <option value='Other'>Other</option>
	    </select>
	  </td>
	  <td id="hearhow" style="display:none">
	    If other, how? 
	    <input name="hearhow" type="text" size="30" maxlength="30" id="hearhow" />
	  </td>
	</tr>
  </table>
  <table>
    <tr>
      <td>
        Are you a citizen of the United States?
        <input name='citizen' type='radio' value='Yes' id='citizenyes' />
        <label for='citizenyes'>
          Yes
        </label>
        <input name='citizen' type='radio' value='No' id='citizenno' />
        <label for='citizenno'>
          No
        </label>
      </td>
      <td id="authorized" style="display:none">
        If no, are you authorized to work in the U.S.?
        <input name='authorized' type='radio' value='Yes' id='authorizedyes' />
        <label for='authorizedyes'>
          Yes
        </label>
        <input name='authorized' type='radio' value='No' id='authorizedno' />
        <label for='authorizedno'>
          No
        </label>
      </td>
    </tr>
  </table>
  <table>
    <tr>
      <td>
        Have you ever worked for this company?
        <input name='companywork' type='radio' value='Yes' id='companyworkyes' />
        <label for='companyworkyes'>
          Yes
        </label>
        <input name='companywork' type='radio' value='No' id='companyworkno' />
        <label for='companyworkno'>
          No
        </label>
      </td>
      <td id="companyworkwhen" style="display:none">
        <label for='companyworkwheninput'>
          If yes, when? 
        </label>
        <input name='companyworkwhen' id='companyworkwheninput' type='text' size='20' maxlength="20" />
      </td>
    </tr>
  </table>
  
  <br />
  <table>
    <tr>
      <th>
        Education
      </th>
    </tr>
  </table>
  <div id="schools">
    <div id="schoolDiv0">
      <table>
        <tr>
          <td>
            <label for='school0'>
              High School: 
            </label>
            <input name='school0' id='school0' type='text' size='30' maxlength="30" />
          </td>
          <td>
            <label for='schooladdress0' >
              Address: 
            </label>
            <input name='schooladdress0' id='schooladdress0' type='text' size='30' maxlength="40" />
          </td>
        </tr>
      </table>
      <table>
        <tr>
          <td>
            <label for='schoolfrom0'>
              From: 
            </label>
            <input name='schoolfrom0' id='schoolfrom0' type='text' size='16' maxlength="20" />
          </td>
          <td>
            <label for='schoolto0' >
              To: 
            </label>
            <input name='schoolto0' id='schoolto0' type='text' size='16' maxlength="20" />
          </td>
          <td>
            Did you graduate? 
            <input name='schoolgraduate0' type='radio' value='Yes' id='schoolgraduateyes0' />
            <label for='schoolgraduateyes0'>
              Yes
            </label>
            <input name='schoolgraduate0' type='radio' value='No' id='schoolgraduateno0' />
            <label for='schoolgraduateno0'>
              No
            </label>
          </td>
          <td>
            <label for='schooldegree0'>
              Degree: 
            </label>
            <input name='schooldegree0' id='schooldegree0' type='text' size='20' maxlength="20" />
          </td>
        </tr>
      </table>
    </div>
  </div>
  <table>
    <tr>
      <td>
        <input type="button" value="Add School/College" onclick="addSchool()" />
      </td>
    </tr>
  </table>
  
  <br />
  <table>
    <tr>
      <th>
        References
        <br />
        <span>
          (Please list below three professional references.)
        </span>
      </th>
    </tr>
  </table>
  <table>
    <tr>
      <td>
        <label for='referencename1'>
          Full name: 
        </label>
        <input name='referencename1' id='referencename1' type='text' size='30' maxlength="30" />
      </td>
      <td>
        <label for='referencerelationship1'>
          Relationship: 
        </label>
        <input name='referencerelationship1' id='referencerelationship1' type='text' size='20' maxlength="20" />
      </td>
    </tr>
  </table>
  <table>
    <tr>
      <td>
        <label for='referencecompany1'>
          Company: 
        </label>
        <input name='referencecompany1' id='referencecompany1' type='text' size='30' maxlength="30" />
      </td>
      <td>
        <label for='referencephone1'>
          Phone: 
        </label>
        <input name='referencephone1' id='referencephone1' type='text' size='14' maxlength="14" />
      </td>
      <td>
        <label for='referenceaddress1'>
          Address: 
        </label>
        <input name='referenceaddress1' id='referenceaddress1' size='30' maxlength="40" />
      </td>
    </tr>
  </table>
  <table>
    <tr>
      <td>
        <label for='referencename2'>
          Full name: 
        </label>
        <input name='referencename2' id='referencename2' type='text' size='30' maxlength="30" />
      </td>
      <td>
        <label for='referencerelationship2'>
          Relationship: 
        </label><input name='referencerelationship2' id='referencerelationship2' type='text' size='20' maxlength="20" />
      </td>
    </tr>
  </table>
  <table>
    <tr>
      <td>
        <label for='referencecompany2'>
          Company: 
        </label>
        <input name='referencecompany2' id='referencecompany2' type='text' size='30' maxlength="30" />
      </td>
      <td>
        <label for='referencephone2'>
          Phone: 
        </label>
        <input name='referencephone2' id='referencephone2' type='text' size='14' maxlength="14" />
      </td>
      <td>
        <label for='referenceaddress2'>
          Address: 
        </label>
        <input name='referenceaddress2' id='referenceaddress2' size='30' maxlength="40" />
      </td>
    </tr>
  </table>
  <table>
    <tr>
      <td>
        <label for='referencename3'>
          Full name: 
        </label>
        <input name='referencename3' id='referencename3' type='text' size='30' maxlength="30" />
      </td>
      <td>
        <label for='referencerelationship3'>
          Relationship: 
        </label>
        <input name='referencerelationship3' id='referencerelationship3' type='text' size='20' maxlength="20" />
      </td>
    </tr>
  </table>
  <table>
    <tr>
      <td>
        <label for='referencecompany3'>
          Company: 
        </label>
        <input name='referencecompany3' id='referencecompany3' type='text' size='30' maxlength="30" />
      </td>
      <td>
        <label for='referencephone3'>
          Phone: 
        </label>
        <input name='referencephone3' id='referencephone3' type='text' size='14' maxlength="14" />
      </td>
      <td>
        <label for='referenceaddress3'>
          Address: 
        </label>
        <input name='referenceaddress3' id='referenceaddress3' size='30' maxlength="40" />
      </td>
    </tr>
  </table>
  <br />
  <table>
    <tr>
      <th>
        Professional Licenses and/or Certifications
      </th>
    </tr>
  </table>
  <div id="pros">
  </div>
  <table>
    <tr>
      <td>
        <input type="button" value="Add Professional License/Certification" onclick="addPro()" />
      </td>
    </tr>
  </table>
  <br />
  <table>
    <tr>
      <th>
        Previous Employment
        <br />
        <span>
          (Please list below last three employers, starting with last one first.)
        </span>
      </th>
    </tr>
  </table>
  <div id="pes">
  </div>
  <table>
    <tr>
      <td>
        <input type="button" value="Add Previous Employment" onclick="addPE()" />
      </td>
    </tr>
  </table>
  <br />
  <table>
    <tr>
      <th>
        Military Service
      </th>
    </tr>
  </table>
  
  <div id="mss">
  </div>
  
  <table id="addms">
    <tr>
      <td>
        <input type="button" value="Add Military Service" onclick="addMS()" />
      </td>
    </tr>
  </table>
  <br />
  <table><tr><th>Applicant or New Hire Self-Identification of Race/Ethnicity</th></tr></table>
  <table><tr><td><h3 style="text-align:center;font-size:medium;font-weight:normal"><strong>INSTRUCTIONS</strong><br />PLEASE READ ALL INSTRUCTIONS CAREFULLY BEFORE COMPLETING THIS FORM</h3>
  <div style="border:1px black solid;padding:0 10px"><p><strong>Anti-Discrimination Notice.</strong> It is an unlawful employment practice for an employer to fail or refuse to hire or discharge any individual, or otherwise to discriminate against any individual with respect to that individual's terms and conditions of employment, because of such individual's race, color, religion, sex, or national origin.</p></div>
  <p>This employer is subject to certain governmental recordkeeping and reporting requirements for the administration of civil rights, laws and regulations. In order to comply with these laws, this employer invites applicants and employees to voluntarily self-identify their race and ethnicity.</p>
  <p>Submission of this information is voluntary, and refusal to provide it will not subject you to any adverse treatment. The information will be kept confidential and may only be used in accordance with the provisions of applicable laws, executive orders, and regulations, including those that require the information to be summarized and reported to the federal government for civil rights enforcement. When reported, data will not identify any specific individual.</p>
  <hr />
  <h3 style="text-align:center;font-size:medium;font-weight:normal"><strong>INVITATION TO SELF-IDENTIFY</strong><br />PLEASE ANSWER THE FOLLOWING QUESTION</h3>
  <p>What is your race/ethnicity? You may mark <strong>only one</strong> answer.</p>
      <table class="racetable">
          <tr>
              <td class="racetable"><input type="radio" name="race" id="hispanic" value="hispanic" required></td><td class="racetable"><label for="hispanic"><strong>Hispanic or Latino:</strong> a person of Cuban, Mexican, Puerto Rican, South or Central American, or other Spanish culture or origin, regardless of race.</label></td>
          </tr>
          <tr><td class="racetable"><input type="radio" name="race" id="white" value="white" required></td><td class="racetable"><label for="white"><strong>White (Not Hispanic or Latino):</strong> a person having origins in any of the original peoples of Europe, the Middle East, or North Africa.</label>
        </td>
    </tr>
    <tr><td class="racetable"><input type="radio" name="race" id="black" value="black" required></td><td class="racetable"><label for="black"><strong>Black or African American (Not Hispanic or Latino):</strong> a person having origins in any of the black racial groups of Africa.</label>
        </td></tr><tr><td class="racetable">
  <input type="radio" name="race" id="hawaiian" value="hawaiian" required></td><td class="racetable"><label for="hawaiian"><strong>Native Hawaiian or Other Pacific Islander (Not Hispanic or Latino):</strong> a person having origins in any of the original peoples of Hawaii, Guam, Samoa, or other Pacific Islands.</label>
          </td></tr><tr><td class="racetable">
  <input type="radio" name="race" id="asian" value="asian" required></td><td class="racetable"><label for="asian"><strong>Asian (Not Hispanic or Latino):</strong> a person having origins in any of the original peoples of the Far East, Southeast Asia, or the Indian subcontinent, including, for example, Cambodia, China, India, Japan, Korea, Malaysia, Pakistan, the Philippine Islands, Thailand, and Vietnam.</label>
          </td></tr><tr><td class="racetable">
  <input type="radio" name="race" id="indian" value="indian" required></td><td class="racetable"><label for="indian"><strong>American Indian or Alaska Native (Not Hispanic or Latino):</strong> a person having origins in any of the original peoples of North and South America (including Central America), and who maintains tribal affiliation or community attachment.</label>
          </td></tr><tr><td class="racetable">
  <input type="radio" name="race" id="two" value="two" required></td><td class="racetable"><label for="two"><strong>Two or More Races (Not Hispanic or Latino):</strong> All persons who identify with more than one of the above five races</label>
          </td></tr><tr><td class="racetable">
  <input type="radio" name="race" id="no" value="no" required></td><td class="racetable"><label for="no"><strong>I choose not to self-identify</strong></label>
</td></tr>
      </table>
  </td></tr></table>
  <br />
  <table><tr><th>Disclaimer and Submission</th></tr></table>
    <table>
        <tr>
            <td>
                <div>
                    <input type='checkbox' name='honesty' value='true' id='honesty' class="honesty" required>
                    <label for="honesty">
                        * I certify that my answers are true and complete to the best of my knowledge.
                    </label>
                </div>
                <div>
                    <input type='checkbox' name='release' value='true' id='release' class="release" required>
                    <label for="release">
                        * If this application leads to employment, I understand that false or misleading information in my application or interview may result in my release.
                    </label>
                </div>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <div id="validation_info" style="color: red;padding: 0 10px">
                </div>
                <div style='float:left;padding: 10px'>
                    <input type='submit' value='Submit form' />
                </div>
            </td>
        </tr>
    </table>
</form>
