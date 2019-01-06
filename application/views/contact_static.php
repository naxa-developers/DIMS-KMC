

<style>

.nav-tabs,
.nav-pills {
  position: relative;
}
.tabdrop{
  width: 120px;
  margin-top: .5rem;
}

.nav-tabs li li i{
  visibility: hidden;
}

.hide {
  display: none;
}

.input-group-addon {
  position: absolute;
  right: 10px;
  bottom: 13px;
  z-index: 2;
}

.contact-search-1 {
  padding: 50px;
  border-bottom: 1px solid #eee;
  padding-left: 0px;
}

.responstable th {
  display: none;
  border: 1px solid transparent;
  background-color: lightslategray;
  color: #FFF;
  padding: 1em;
}

#reportable{
  overflow: auto;
  margin: 0em auto 3em;
}
.responstable {
  margin: 1em 0em;
  width: 100%;
  overflow: hidden;
  background: #FFF;
  color: #000;
  border-radius: 0px;
  border: 1px solid #1f5cb2;
  font-size: 16px;
}
.responstable tr {
  border: 1px solid #D9E4E6;
}
.responstable tr:nth-child(odd) {
  background-color: #EAF3F3;
}

.responstable th:first-child {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) {
  display: table-cell;
}
.responstable th:nth-child(2) span {
  display: none;
}
.responstable th:nth-child(2):after {
  content: attr(data-th);
}
@media (min-width: 480px) {
  .responstable th:nth-child(2) span {
    display: block;
  }
  .responstable th:nth-child(2):after {
    display: none;
  }
}
.responstable td {
  display: block;
  word-wrap: break-word;
  max-width: 7em;
}
.responstable td:first-child {
  display: table-cell;
  text-align: center;
  border-right: 1px solid #D9E4E6;
}
@media (min-width: 480px) {
  .responstable td {
    border: 1px solid #D9E4E6;
  }
}
.responstable th, .responstable td {
  text-align: left;
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .responstable th, .responstable td {
    display: table-cell;
    padding: 0.3em;
  }
}

.tabdrop .dropdown-menu a{
  padding: 20px;
}
</style>


<!--advance Search starts-->
<div class="container ">
    <div class="contact-search-1">
  <div class="row">
    <div class="col-sm-12 text-center">
        <div class="row no-gutters">
          <div class="col">
            <input class="form-control border-secondary border-right-0 rounded-0" type="search" placeholder="Search For.." id="myInput" onkeyup="myFunction()">
          </div>
          <div class="col-auto">
            <button class="btn btn-secondary border-left-0 rounded-0 rounded-right" type="button">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </div>
  </div>
</div>
</div>
<!--advance Search ends-->

<!-- table List -->
<div class="container" id="emergency_no">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="health-tab" data-toggle="tab" href="#health" role="tab" aria-controls="health" aria-selected="true">Chairpersons of Local Units</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="emergency-tab" data-toggle="tab" href="#emergency" role="tab" aria-controls="emergency" aria-selected="false">Chief of local level offices</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security" aria-selected="false">Elected Representatives</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="ngo-tab" data-toggle="tab" href="#ngo" role="tab" aria-controls="ngo" aria-selected="false">Municipal Executive Members</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="volunter-tab" data-toggle="tab" href="#volunter" role="tab" aria-controls="volunter" aria-selected="false">Municipality Level Disaster Management Committee,</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="person-tab" data-toggle="tab" href="#person" role="tab" aria-controls="person" aria-selected="false">NNTDS's Executive Committee</a>
    </li>
  </ul>





  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="health" role="tabpanel" aria-labelledby="health-tab">
      <br>
      <a href="get_csv_emergency?type=health&&name=Health_Institutions&&tbl=emergency_contact"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px; float: right;"><i class="fa fa-download"></i> Download</button></a>
      <br>
      <div class="row" id="reportable">
       <!-- responsive table for displaying contact directory -->
       <table class="responstable">
        <tr>
            <th><span>S.N</span></th>
      <th><span>Photo</span></th>
      <th><span>Name</span></th>
      <th><span>Organization</span></th>
      <th><span>Post</span></th>
      <th><span>Address</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Email</span></th>
        </tr>


      

        <tr class="tr_tbl">
          <td>1</td>
          <td></td>
           <td>Mr. Nawaraj Gelal</td>
          <td></td>
          <td>Chairperson</td>
          <td>Bhaktapur</td>
          <td>9851190724/6614826</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>2</td>
          <td></td>
           <td>Ms. Sarita Kunwar</td>
          <td></td>
          <td>Vice-Chairperson</td>
          <td>Bhaktapur</td>
          <td>9803746106/6610364</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>3</td>
          <td></td>
           <td>Mr. Shom Mishra</td>
          <td></td>
          <td>Mayor</td>
          <td>Changunaryan</td>
          <td>9751001744</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>4</td>
          <td></td>
           <td>Ms. Bina Bastola</td>
          <td></td>
          <td>Deputy Mayor</td>
          <td>Changunaryan</td>
          <td>9841590313</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>5</td>
          <td></td>
           <td>Mr. Rajesh Khadka</td>
          <td></td>
          <td>Ward Chairperson</td>
          <td>Changunaryan 1</td>
          <td>9851054332</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>6</td>
          <td></td>
           <td>Mr. Shivhari Kc</td>
          <td></td>
          <td>Ward Chairperson</td>
          <td>Changunaryan 2</td>
          <td>9851218757</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>7</td>
          <td></td>
           <td>Mr. Shyamsundar Dhimal</td>
          <td></td>
          <td>Ward Chairperson</td>
          <td>Changunaryan 3</td>
          <td>9741087544</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>8</td>
          <td></td>
           <td>Mr. Buddhilal Maharjan</td>
          <td></td>
          <td>Ward Chairperson</td>
          <td>Changunaryan 4</td>
          <td>9841692325</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>9</td>
          <td></td>
           <td>Mr. Jayandra Khadka</td>
          <td></td>
          <td>Ward Chairperson</td>
          <td>Changunaryan 5</td>
          <td>9860025471</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>10</td>
          <td></td>
           <td>Mr. Shant B. Waiwa</td>
          <td></td>
          <td>Ward Chairperson</td>
          <td>Changunaryan 6</td>
          <td>9841271607</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>11</td>
          <td></td>
           <td>Mr. Gyaan B. KC</td>
          <td></td>
          <td>Ward Chairperson</td>
          <td>Changunarayan 7</td>
          <td>9841788376</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>12</td>
          <td></td>
           <td>Mr. Parasar Sapkota</td>
          <td></td>
          <td>Ward Chairperson</td>
          <td>Changunarayan 8</td>
          <td>9851036476</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>13</td>
          <td></td>
           <td>Mr. Ganesh Tyat</td>
          <td></td>
          <td>Ward Chairperson</td>
          <td>Changunarayan 9</td>
          <td>9851078002</td>
          <td></td>
        </tr>


      </table>
    </div>
  </div>

  <div class="tab-pane fade show" id="emergency" role="tabpanel" aria-labelledby="emergency-tab">
    <br>
    <a href="get_csv_emergency?type=responders&&name=Emergency_Responders&&tbl=emergency_contact"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;float: right;"><i class="fa fa-download"></i> Download</button></a>
      <br>
    <div class="row" id="reportable">
     <!-- responsive table for displaying contact directory -->
     <table class="responstable">
      <tr>
                 <th><span>S.N</span></th>
      <th><span>Photo</span></th>
      <th><span>Name</span></th>
      <th><span>Organization</span></th>
      <th><span>Post</span></th>
      <th><span>Address</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Email</span></th>
      </tr>

  

     <tr class="tr_tbl">
          <td>1</td>
          <td></td>
           <td>Mr. Dhurba Prasad Koirala</td>
          <td></td>
          <td>LDO</td>
          <td>DCC</td>
          <td>9851184826</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>2</td>
          <td></td>
           <td>Mr. Loknath Bhusal</td>
          <td></td>
          <td>Chief Executive Officer</td>
          <td>Changunarayan Municipality</td>
          <td>9851191068</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>3</td>
          <td></td>
           <td>Mr. Dipesh Thapa</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 1 , Duwakot</td>
          <td>9841393771</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>4</td>
          <td></td>
           <td>Mr. Rakesh Basukala</td>
          <td></td>
          <td>Ward secretaryr</td>
          <td>Changunarayan 2 , Duwakot</td>
          <td>9851048489</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>5</td>
          <td></td>
           <td>Mr. Puspram Libi</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 3 Jhoukhel</td>
          <td>9841393990</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>6</td>
          <td></td>
           <td>Mr. Shankar KCc</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 4 Changu</td>
          <td>9841208670</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>7</td>
          <td></td>
           <td>Mr. Narayan Lamichhane</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 5 Chhaling</td>
          <td>9841725492</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>8</td>
          <td></td>
           <td>Mr. Madhav Subedi</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 6 Nagarkot</td>
          <td>9841249993</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>9</td>
          <td></td>
           <td>Mr. Prem Tulasi</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 7 Bageshwori</td>
          <td>9841299358</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>10</td>
          <td></td>
           <td>Mr. Rajkumar Giri</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 8 Sudal</td>
          <td>9841249993</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>11</td>
          <td></td>
           <td>Mr. Rajendra Ganesh</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 9 Tathali</td>
          <td>9841279066</td>
          <td></td>
        </tr>




    </table>
  </div>
</div>

<div class="tab-pane fade show" id="security" role="tabpanel" aria-labelledby="security-tab">
  <br>
    <a href="get_csv_emergency?type=security&&name=Security&&tbl=emergency_contact"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;float: right;"><i class="fa fa-download"></i> Download</button></a>
      <br>
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
             <th><span>S.N</span></th>
      <th><span>Photo</span></th>
      <th><span>Name</span></th>
      <th><span>Organization</span></th>
      <th><span>Post</span></th>
      <th><span>Address</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Email</span></th>
    </tr>


  
       <tr class="tr_tbl">
          <td>1</td>
          <td></td>
           <td>Rajesh Khadka</td>
          <td>Nepal Local Government</td>
          <td>Ward Chairperson</td>
          <td>Ward no. 1</td>
          <td>9851054332</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>2</td>
          <td></td>
           <td>Sachina Khadkal</td>
          <td>Nepal Local Government</td>
          <td>Women Member</td>
          <td>Ward no. 1</td>
          <td>9841148428</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>3</td>
          <td></td>
           <td>Lilimaya Darji</td>
          <td>Nepal Local Government</td>
          <td>Dalit Women Member</td>
          <td>Ward no. 1</td>
          <td>9803684271</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>4</td>
          <td></td>
           <td>Ganesh B. Shrestha</td>
          <td>Nepal Local Government</td>
          <td>Member</td>
          <td>Ward no. 1</td>
          <td>9851048489</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>5</td>
          <td></td>
           <td>Uddhav Khadka</td>
          <td>Nepal Local Government</td>
          <td>Member</td>
          <td>Ward no. 1</td>
          <td9841368575</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>6</td>
          <td></td>
           <td>Shivhari KC</td>
          <td>Nepal Local Government</td>
          <td>Ward Chairperson</td>
          <td>Ward no. 2</td>
          <td>9851218757</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>7</td>
          <td></td>
           <td>Kalpana Devi Suwal</td>
          <td>Nepal Local Government</td>
          <td>Women Member</td>
          <td>Ward no. 2</td>
          <td>9841130754</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>8</td>
          <td></td>
           <td>Rekha Dulal Achhami</td>
          <td>Nepal Local Government</td>
          <td>Dalit Women Member</td>
          <td>Ward no. 2</td>
          <td>9849296613</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>9</td>
          <td></td>
           <td>Som Prasad Pradhan</td>
          <td>Nepal Local Government</td>
          <td>Member</td>
          <td>Ward no. 2</td>
          <td>9851094430</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>10</td>
          <td></td>
           <td>Mohan Kumar Poudel</td>
          <td>Nepal Local Government</td>
          <td>Member</td>
          <td>Ward no. 2</td>
          <td>9843054370</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>11</td>
          <td></td>
           <td>Shyamsundar Dhimal</td>
          <td>Nepal Local Government</td>
          <td>Ward Chairperson</td>
          <td>Ward no. 3</td>
          <td>9741087544</td>
          <td></td>
        </tr>

    <tr class="tr_tbl">
          <td>12</td>
          <td></td>
           <td>Rama Thapa</td>
          <td>Nepal Local Government</td>
          <td>Women Member</td>
          <td>Ward no. 3</td>
          <td>9841987236</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>13</td>
          <td></td>
           <td>Susma Sunuwar</td>
          <td>Nepal Local Government</td>
          <td>Dalit Women Member</td>
          <td>Ward no. 3</td>
          <td>9823156413</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>14</td>
          <td></td>
           <td>Prem B. Bakhu</td>
          <td>Nepal Local Government</td>
          <td>Member</td>
          <td>Ward no. 3</td>
          <td>9841560350</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>15</td>
          <td></td>
           <td>Mr. Rakesh Basukala</td>
          <td></td>
          <td>Ward secretaryr</td>
          <td>Changunarayan 2 , Duwakot</td>
          <td>9851048489</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>16</td>
          <td></td>
           <td>Mr. Puspram Libi</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 3 Jhoukhel</td>
          <td>9841393990</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>17</td>
          <td></td>
           <td>Mr. Shankar KCc</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 4 Changu</td>
          <td>9841208670</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>18</td>
          <td></td>
           <td>Mr. Narayan Lamichhane</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 5 Chhaling</td>
          <td>9841725492</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>19</td>
          <td></td>
           <td>Mr. Madhav Subedi</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 6 Nagarkot</td>
          <td>9841249993</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>20</td>
          <td></td>
           <td>Mr. Prem Tulasi</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 7 Bageshwori</td>
          <td>9841299358</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>21</td>
          <td></td>
           <td>Mr. Rajkumar Giri</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 8 Sudal</td>
          <td>9841249993</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>22</td>
          <td></td>
           <td>Mr. Rajendra Ganesh</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 9 Tathali</td>
          <td>9841279066</td>
          <td></td>
        </tr>

    <tr class="tr_tbl">
          <td>23</td>
          <td></td>
           <td>Mr. Dhurba Prasad Koirala</td>
          <td></td>
          <td>LDO</td>
          <td>DCC</td>
          <td>9851184826</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>24</td>
          <td></td>
           <td>Mr. Loknath Bhusal</td>
          <td></td>
          <td>Chief Executive Officer</td>
          <td>Changunarayan Municipality</td>
          <td>9851191068</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>25</td>
          <td></td>
           <td>Mr. Dipesh Thapa</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 1 , Duwakot</td>
          <td>9841393771</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>26</td>
          <td></td>
           <td>Mr. Rakesh Basukala</td>
          <td></td>
          <td>Ward secretaryr</td>
          <td>Changunarayan 2 , Duwakot</td>
          <td>9851048489</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>27</td>
          <td></td>
           <td>Mr. Puspram Libi</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 3 Jhoukhel</td>
          <td>9841393990</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>28</td>
          <td></td>
           <td>Mr. Shankar KCc</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 4 Changu</td>
          <td>9841208670</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>29</td>
          <td></td>
           <td>Mr. Narayan Lamichhane</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 5 Chhaling</td>
          <td>9841725492</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>30</td>
          <td></td>
           <td>Mr. Madhav Subedi</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 6 Nagarkot</td>
          <td>9841249993</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>31</td>
          <td></td>
           <td>Mr. Prem Tulasi</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 7 Bageshwori</td>
          <td>9841299358</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>32</td>
          <td></td>
           <td>Mr. Rajkumar Giri</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 8 Sudal</td>
          <td>9841249993</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>33</td>
          <td></td>
           <td>Mr. Rajendra Ganesh</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 9 Tathali</td>
          <td>9841279066</td>
          <td></td>
        </tr>

    <tr class="tr_tbl">
          <td>34</td>
          <td></td>
           <td>Mr. Dhurba Prasad Koirala</td>
          <td></td>
          <td>LDO</td>
          <td>DCC</td>
          <td>9851184826</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>35</td>
          <td></td>
           <td>Mr. Loknath Bhusal</td>
          <td></td>
          <td>Chief Executive Officer</td>
          <td>Changunarayan Municipality</td>
          <td>9851191068</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>36</td>
          <td></td>
           <td>Mr. Dipesh Thapa</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 1 , Duwakot</td>
          <td>9841393771</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>37</td>
          <td></td>
           <td>Mr. Rakesh Basukala</td>
          <td></td>
          <td>Ward secretaryr</td>
          <td>Changunarayan 2 , Duwakot</td>
          <td>9851048489</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>38</td>
          <td></td>
           <td>Mr. Puspram Libi</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 3 Jhoukhel</td>
          <td>9841393990</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>39</td>
          <td></td>
           <td>Mr. Shankar KCc</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 4 Changu</td>
          <td>9841208670</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>40</td>
          <td></td>
           <td>Mr. Narayan Lamichhane</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 5 Chhaling</td>
          <td>9841725492</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>41</td>
          <td></td>
           <td>Mr. Madhav Subedi</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 6 Nagarkot</td>
          <td>9841249993</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>42</td>
          <td></td>
           <td>Mr. Prem Tulasi</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 7 Bageshwori</td>
          <td>9841299358</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>43</td>
          <td></td>
           <td>Mr. Rajkumar Giri</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 8 Sudal</td>
          <td>9841249993</td>
          <td></td>
        </tr>

         <tr class="tr_tbl">
          <td>44</td>
          <td></td>
           <td>Mr. Rajendra Ganesh</td>
          <td></td>
          <td>Ward secretary</td>
          <td>Changunarayan 9 Tathali</td>
          <td>9841279066</td>
          <td></td>
        </tr>

  </tr>

  </table>
</div>
</div>

<div class="tab-pane fade show" id="ngo" role="tabpanel" aria-labelledby="ngo-tab">
  <br>
      <a href="get_csv_emergency?type=ngo&&name=NGOs_INGOs&&tbl=emergency_contact"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;float: right;"><i class="fa fa-download"></i> Download</button></a>
      <br>
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
                 <th><span>S.N</span></th>
      <th><span>Photo</span></th>
      <th><span>Name</span></th>
      <th><span>Organization</span></th>
      <th><span>Post</span></th>
      <th><span>Address</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Email</span></th>
    </tr>
  

        <tr class="tr_tbl">
        <td>1</td>
          <td>Nepal</td>
          <td>Kathmandu</td>
          <td>01647687</td>
          <td>98657664675</td>
          <td>John</td>
          <td>Clerk</td>
          <td>0980909809</td>
          <td>test@gmail.com</td>
          <td>wwww.test.com.np</td>

        </tr>

     </table>
</div>
</div>

<div class="tab-pane fade show" id="volunter" role="tabpanel" aria-labelledby="volunter-tab">
  <br>
    <a href="get_csv_emergency?type=ddr&&name=DRR_Volunteers&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;float: right;"><i class="fa fa-download"></i> Download</button></a>
      <br>
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
              <th><span>S.N</span></th>
      <th><span>Photo</span></th>
      <th><span>Name</span></th>
      <th><span>Organization</span></th>
      <th><span>Post</span></th>
      <th><span>Address</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Email</span></th>
 

     <tr class="tr_tbl">
    <td>1</td>
          <td>Img</td>
          <td>Aditi</td>
          <td>KCC</td>
          <td>Collector</td>
          <td>Bhaktapur</td>
          <td>0980909809</td>
          <td>test@gmail.com</td>
        
     </tr>


  </table>
</div>
</div>

<div class="tab-pane fade show" id="person" role="tabpanel" aria-labelledby="person-tab">
  <br>
      <a href="get_csv_emergency?type=personnel&&name=Municipality_Personnel&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;float: right;"><i class="fa fa-download"></i> Download</button></a>
      <br>
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
               <th><span>S.N</span></th>
      <th><span>Photo</span></th>
      <th><span>Name</span></th>
      <th><span>Organization</span></th>
      <th><span>Post</span></th>
      <th><span>Address</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Email</span></th>
    </tr>
   

     <tr class="tr_tbl">
    <td>1</td>
          <td>Nepal</td>
          <td>Kathmandu</td>
          <td>01647687</td>
          <td>98657664675</td>
          <td>John</td>
          <td>Clerk</td>
          <td>0980909809</td>
          <td>test@gmail.com</td>
          <td>wwww.test.com.np</td>
     </tr>

  </table>
</div>
</div>

<div class="tab-pane fade show" id="member" role="tabpanel" aria-labelledby="member-tab">
  <br>
      <a href="get_csv_emergency?type=members&&name=Members_of_Municipal_Assembly&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;float: right;"><i class="fa fa-download"></i> Download</button></a>
      <br>
  <div class="row" id="reportable">
   <!-- responsive table for displaying contact directory -->
   <table class="responstable">
    <tr>
                 <th><span>S.N</span></th>
      <th><span>Photo</span></th>
      <th><span>Name</span></th>
      <th><span>Organization</span></th>
      <th><span>Post</span></th>
      <th><span>Address</span></th>
      <th><span>Phone No.</span></th>
      <th><span>Email</span></th>
    </tr>
  

        <tr class="tr_tbl">
    <td>1</td>
          <td>Img</td>
          <td>Aditi</td>
          <td>KMC</td>
          <td>Collector</td>
          <td>0998989080</td>
          <td>0980909809</td>
          <td>test@gmail.com</td>
        
        </tr>

   
  </table>
</div>
</div>
</div>

</div>

<script src="<?php echo base_url()?>assets/js/bootstrap-tabdrop.js"></script>
<script type="text/javascript">
 $(".nav-tabs").tabdrop();




  function myFunction() {
    // Declare variables
   var  input, filter, div, tr, i ,j;
    input = document.getElementById('myInput');

    filter = input.value.toUpperCase();

  //
     div = document.getElementsByClassName("tab-pane");
  //
     // td = document.getElementsByTagName('td');
     tr = document.getElementsByClassName('tr_tbl');
      // console.log(td);
  //   console.log(h5);
  //   console.log(div);
  //   console.log(filter);
  //   console.log(input);
  //
  //   // Loop through all list items, and hide those who don't match the search query
 // var ab='Juddha Barun Yantra Karyalaya'
 // console.log(ab.toUpperCase().indexOf(filter));
console.log(tr);
 for(j = 0; j < tr.length; j++){
   //console.log(tr);
   var closeit = 0;
    for (i = 0; i < tr[j].children.length; i++) {
        var td = tr[j].children[i];
        //console.log(td);
        // a = h5[i].getElementsByTagName("a")[0];
         //console.log(td[i].innerHTML.toUpperCase().indexOf(filter));

        if(closeit == 0){
          $("#"+td.id).parent().css('display','none');
          //console.log("not found on"+td[i].id);

        }

        if ((td.innerText.toUpperCase().indexOf(filter) > -1) && closeit == 0) {
        // console.log("found on"+td.id);
        // console.log(closeit);

            $("#"+td.id).parent().css('display','');
            closeit = 1;


        }

    }
    //console.log("row");
}

  }


</script>
