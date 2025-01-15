<?php
//lectures 43,44,45 


if(isset($_POST['Submit'])) {
echo "Submit Works!";   


$username = $_POST['username'];
$password = $_POST['password'];
 
 
$connection = mysqli_connect('localhost', 'root', '','gar_prototype');    
echo "<br>";    

if($connection) { echo "connected to database loginapp";} else { die("database connection failed"); }
echo "<br>";    
 
    
echo "your username is :" . " " .$username;
echo "<br>";
echo "your password is :" . " " .$password;
echo "<br>";

if($username) {echo "username is set";} else {echo "username is not set";}
echo "<br>";
if($password) {echo "password is set";} else {echo "password is not set";}

}
    
//echo "<br>";   
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Below is bootstrap link for styling. It is a framework with predefined style functions -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- above is bootstrap link for styling. It is a framework with predefined style functions -->
</head>
<body>

<!-- This file replicates data to match DD FORM 2656, MARCH 2022 -->




<div class ="container">
<div class="col-sm-6">

<form action="43_login.php" method="post">
 
<!-- PAGE 1/6 BEGINS HERE --> 

<!-- PART I Retired Pay Information ----PART I CONSISTS OF 7 SECTIONS -->

<!-- PART I BEGINS HERE --> 

<!-- PART I SECTION 1 BEGINS HERE --> 

<p> PART I - RETIRED PAY INFORMATION </p>
 
<P> SECTION I - PAY IDENTIFICATION </P>
     <div class ="form-group">
     <label for="NAME">1.NAME (Last, First, Middle Initial)</label>
      <input type="text" name= "NAME" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="SSN">2.SSN</label>
      <input type="number" name="SSN"class="form-control">    
   </div> 
   
  <br>
   
   <div class ="form-group">
     <label for="DOB">3.DATE OF BIRTH(YYYYMMDD)</label>
      <input type="date" name= "DOB" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="RET TR DATE">4.RETIREMENT / TRANSFER DATE(YYYYMMDD)</label>
      <input type="date" name="RetTrDate"class="form-control">    
   </div> 
  <br>
  
  <div class ="form-group">
     <label for="PAY GRADE">5.PAY GRADE</label>
     <input type="" name= "PAYGRADE" class="form-control">
     </div>
<!--     PAGE 1/6 BEGINS HERE       PAGE 1/6 BEGINS HERE -->
   
 <!--     START HERE FORMAT CODE TO ACCEPT CHECKBOX OPTIONS -->
     <div class ="form-group">
     <label for="password">6.BRANCH OF SERVICE X 8 P</label>
      <input type="password" name="BRANCH"class="form-control">    
   </div> 
                  <div class ="form-group">
                 <label for="password">a.ARMY </label>
                  <input type="password" name="password"class="form-control">    
               </div> 
              <br>
              <div class ="form-group">
                 <label for="username">b.MARINE CORPS</label>
                  <input type="text" name= "username" class="form-control">    
               </div>

                 <div class ="form-group">
                 <label for="password">c.NAVY</label>
                  <input type="password" name="password"class="form-control">    
               </div> 
              <br>
              <div class ="form-group">
                 <label for="username">d.COAST GUARD</label>
                  <input type="text" name= "username" class="form-control">    
               </div>
             <div class ="form-group">
                 <label for="password">e.AIR FORCE</label>
                  <input type="password" name="password"class="form-control">    
               </div> 
              <br>
              <div class ="form-group">
                 <label for="username">f.SPACE FORCE</label>
                  <input type="text" name= "username" class="form-control">    
               </div>

                 <div class ="form-group">
                 <label for="password">g.NOAA</label>
                  <input type="password" name="password"class="form-control">    
               </div> 
              <br>
              <div class ="form-group">
                 <label for="username">h.USPHS</label>
                  <input type="text" name= "username" class="form-control">    
               </div>
 
  
  <!--     END HERE FORMAT CODE TO ACCEPT CHECKBOX OPTIONS -->
  
   
   <div class ="form-group">
     <label for="username">7.MEMBER OR FORMER MEMBER OF THE X 4 P</label>
      <input type="text" name= "username" class="form-control">    
   </div>
   
   <div class ="form-group">
     <label for="password">Password</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>
  <div class ="form-group">
     <label for="username">Username</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">Password</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>
  <div class ="form-group">
     <label for="username">Username</label>
      <input type="text" name= "username" class="form-control">    
   </div>
   
 
     <div class ="form-group">
     <label for="password">8.PARTICIPANT IN THE FOLLOWING RETIREMENT PLAN X 5 P</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>
  <div class ="form-group">
     <label for="username">9.ADDRESS X 9 P</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">Password</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>
  <div class ="form-group">
     <label for="username">Username</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">Password</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>
  <div class ="form-group">
     <label for="username">Username</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">Password</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>
  <div class ="form-group">
     <label for="username">Username</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">Password</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>
  <div class ="form-group">
     <label for="username">Username</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">Password</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>
 
<!-- PART I SECTION I ENDS HERE -->   

<!-- =============== -->   

<!-- PART I SECTION II BEGINS  HERE -->
<P> SECTION II DIRECT DEPOSIT/ELECTRONIC FUND TRANSFER (DD/EFT) INFORMATION(See Instructions)</P>
<div class ="form-group">
     <label for="username">H1 ACTIVE DUTY ONLY </label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">10.ACCOUNT TYPE</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>
   
   <div class ="form-group">
     <label for="username">11.ROUTING NUMBER</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">13 H1 FINANCIAL INSTITUTION</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>
  
  <div class ="form-group">
     <label for="username">13A. NAME</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">13B. STREET</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>
   
   <div class ="form-group">
     <label for="username">13C. CITY </label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">13D. STATE DROPDOWN </label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>
  <div class ="form-group">
     <label for="username">13E.ZIP CODE</label>
      <input type="text" name= "username" class="form-control">    
   </div>

<!-- PART I SECTION II ENDS HERE -->


<!-- PART I SECTION III BEGINS HERE -->
<P> SECTION III - SEPARATION PAYMENT INFORMATION</P>

<div class ="form-group">
     <label for="username">14A. PAYMENT RECEIVED X 6 </label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">14B. GROSS AMOUNT</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>
   
   <div class ="form-group">
     <label for="username">LIST OF ATTACHMENTS </label>
      <input type="text" name= "username" class="form-control">    
   </div>
   
<!-- PART I SECTION III ENDS HERE -->
<!-- PART I Retired Pay Information --ENDS HERE --PART I CONSISTS OF 7 SECTIONS --> 
<!-- PAGE 1/6 ENDS HERE -->
     
     


<!-- PAGE 2/6 BEGINS HERE -->     
 

 <div class ="form-group">
     <label for="username">MEMBER NAME (TOP)</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">SSN (TOP)</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>    
     
     
<!-- PART I SECTION IV BEGINS HERE -->

<P> SECTION IV - DEPARTMENT OF VETERANS AFFAIRS (VA) DISABILITY COMPENSATION INFORMATION</P>
    
<P> 15. VA DISABILITY COMPENSATION </P>
     
     
  <div class ="form-group">
     <label for="username"> a.Username</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">b. Password</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>
  
  <div class ="form-group">
     <label for="username">c. Username</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">d. password</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>   
  
<!-- PART I SECTION IV ENDS HERE -->    
     
     
     
<!-- PART I SECTION V BEGINS HERE --> 
<P> SECTION V - DESIGNATION OF BENEFICIARIES FOR UNPAID RETIRED PAY</P>
 


<div class ="form-group">
     <label for="username"> Check this box if you want to designate your spouse as 100% beneficiary of any unpaid retired pay upon death OR complete item 16.</label>
      <input type="text" name= "username" class="form-control">    
   </div>
   
<!-- ----------------------------------------- --> 
<div>
   
<P> 16.BENEFICIARY OR BENEFECIARIES INFORMATION </P>      
       
<div class ="form-group">
     <label for="username"> a.Username</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">b. Password</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>
  
  <div class ="form-group">
     <label for="username">c. Username</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">d. password</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>   
  
</div> 
<!-- ----------------------------------------- --> 

<!--  PART I SECTION V ENDS HERE  -->    
     

     
               
<!--  PART I SECTION VI BEGINS HERE -->        
<P> SECTION VI - FEDERAL INCOME TAX WITHOLDING INFORMATION (additional comments to be added)</P>  
   
<!-- ----------------------------------------- --> 
<div>
   
<P> 17.MARITAL STATUS (Check One) </P>      
       
<div class ="form-group">
     <label for="username"> 1</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">2</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>
  
  <div class ="form-group">
     <label for="username">3</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">4</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>   
  
</div> 


<!-- ----------------------------------------- --> 

<P> 18.MULTIPLE JOBS OR SPOUSE WORKS </P>      
       
<div class ="form-group">
     <label for="username"> 1</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 


<P> 19.ARE YOU A UNITED STATES CITIZEN </P> 
   
   <div class ="form-group">
     <label for="username"> 1</label>
      <input type="text" name= "username" class="form-control">    
   </div>
   
   <div class ="form-group">
     <label for="username"> 1</label>
      <input type="text" name= "username" class="form-control">    
   </div> 



<P> 20.CLAIM DEPENDENTS </P> 
   
   <div class ="form-group">
     <label for="username"> 1</label>
      <input type="text" name= "username" class="form-control">    
   </div>
   
 <div class ="form-group">
     <label for="username"> 1</label>
      <input type="text" name= "username" class="form-control">    
   </div>
   
 <div class ="form-group">
     <label for="username"> 1</label>
      <input type="text" name= "username" class="form-control">    
   </div>
   
 <div class ="form-group">
     <label for="username"> 1</label>
      <input type="text" name= "username" class="form-control">    
   </div>
   
 <div class ="form-group">
     <label for="username"> 1</label>
      <input type="text" name= "username" class="form-control">    
   </div>
   
 <div class ="form-group">
     <label for="username"> 1</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
    
<P> 21.OTHER INCOME </P>  
  <div class ="form-group">
     <label for="username"> 1</label>
      <input type="text" name= "username" class="form-control">    
   </div>
   
<P> 22.DEDUCTIONS </P>
   <div class ="form-group">
     <label for="username"> 1</label>
      <input type="text" name= "username" class="form-control">    
   </div> 
     
<P> 23.EXTRA WITHOLDINGS </P>  
<div class ="form-group">
     <label for="username"> 1</label>
      <input type="text" name= "username" class="form-control">    
   </div>

<!--  PART I SECTION VI ENDS HERE   -->       
   
     
<!--  PART I SECTION VII BEGINS HERE   --> 
<P> SECTION VII - VOLUNTARY STATE TAX WITHOLDING INFORMATION() </P>  

<P> 24.STATE DESIGNATED TO RECEIVE TAX </P>  
<div class ="form-group">
     <label for="username"> 1</label>
      <input type="text" name= "username" class="form-control">    
   </div>

<P> 25.MONTHLY AMOUNT </P>  
<div class ="form-group">
     <label for="username"> 1</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
  
   
<P> 26.RESIDENCE ADDRESS () </P>  
<div class ="form-group">
<label for="username"> 1</label>
<input type="text" name= "username" class="form-control">    
</div>
<P> A. STREET () </P>  
<div class ="form-group">
<label for="username"> 1</label>
<input type="text" name= "username" class="form-control">    
</div>
<P> B.CITY  </P>  
<div class ="form-group">
<label for="username"> 1</label>
<input type="text" name= "username" class="form-control">    
</div>
<P> C.STATE </P>  
<div class ="form-group">
<label for="username"> 1</label>
<input type="text" name= "username" class="form-control">    
</div>
<P> D.ZIP CODE </P>  
<div class ="form-group">
<label for="username"> 1</label>
<input type="text" name= "username" class="form-control">    
</div>


<!--  PART I SECTION VII ENDS HERE   -->     
<!-- PART I ENDS HERE -->      
<!-- PAGE 2/6 ENDS HERE -->    
  
     
   
<!-- PAGE 3/6 BEGINS HERE -->    
<!-- PART II BEGINS HERE -->  

<div class ="form-group">
     <label for="username">MEMBER NAME () (TOP)</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">SSN (TOP)</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>    
                        
<P> DO NOT COMPLETE PART II () </P>
<P> PART II - LUMP SUM ELECTION () </P>    
 
<!--  PART II SECTION VIII BEGINS HERE   -->                                  
                                   
 <P> SECTION VIII - BRS LUMP SUM ELECTION () </P>   
                                                                                                 
 <P> 27.LUMP SUM PERCENTAGE () </P> 
 <div class ="form-group">
     <label for="username"> </label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password"></label>
      <input type="password" name="password"class="form-control">    
   </div>
 
 
 <P> 28.LUMP SUM PAYMENTS () </P>  
 
 <P> I ELECT TO RECEIVE LUMP SUM IN </P> 
 
  <div class ="form-group">
     <label for="username"></label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password"></label>
      <input type="password" name="password"class="form-control">    
   </div>
   
    <div class ="form-group">
     <label for="username"></label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password"></label>
      <input type="password" name="password"class="form-control">    
   </div> 
  
<P> 29.CONSIDERATIONS () </P>

<P> 30.LUMP SUM PAYMENT ACKNOWLEDGEMENT () </P>
 
 <div class ="form-group">
     <label for="username">A. MEMBER SIGNATURE </label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">B. DATE SIGNED</label>
      <input type="password" name="password"class="form-control">    
   </div> 
 
<!--  PART II SECTION VIII ENDS HERE   -->
<!--  PART II ENDS HERE -->     
<!--  PAGE 3/6 ENDS HERE -->     
     
     

<!--  PAGE 4/6 BEGINS HERE --> 

<div class ="form-group">
     <label for="username">MEMBER NAME () (TOP)</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">SSN (TOP)</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br>  
<!--  PART III BEGINS HERE -->
<P> PART III- SURVIVOR BENEFIT PLAN </P>    
 
<!--  PART III SECTION VIII BEGINS HERE   -->                                  
                                   
<P> SECTION IX - DEPENDENCY INFORMATION () </P> 

<P> 31.SPOUSE () </P>
<div class ="form-group">
     <label for="password"></label>
      <input type="password" name="password"class="form-control">    
   </div>
   
    <div class ="form-group">
     <label for="username"></label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password"></label>
      <input type="password" name="password"class="form-control">    
   </div>


<div class ="form-group">
     <label for="username">32. DATE OF MARRIAGE </label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">33. PLACE OF MARRIAGE </label>
      <input type="password" name="password"class="form-control">    
   </div>
   
   <P> 34. - DEPENDENT CHILDREN OL LI  () </P> 
   
   <OL>
       <LI>
          X 
       </LI>
   </OL>
   
   
   <P> SECTION X - SURVIVOR BENEFIT (SBP) PLAN ELECTION () </P> 
   
   
   <P> 35. RESERVE COMPONENT ONLY () </P> 
   
   <div class ="form-group">
     <label for="password"></label>
      <input type="password" name="password"class="form-control">    
   </div>
   <div class ="form-group">
     <label for="password"></label>
      <input type="password" name="password"class="form-control">    
   </div>
   <div class ="form-group">
     <label for="password"></label>
      <input type="password" name="password"class="form-control">    
   </div>
   
            <div class ="form-group">
            <label for="password"></label>
            <input type="password" name="password"class="form-control">    
            </div>
            <div class ="form-group">
            <label for="password"></label>
            <input type="password" name="password"class="form-control">    
            </div>
            
 <P> 36. SPB BENEFICIARY CATEGORIES () </P> 
   
   <div class ="form-group">
     <label for="password"></label>
      <input type="password" name="password"class="form-control">    
   </div>
   
   <div class ="form-group">
     <label for="password"></label>
      <input type="password" name="password"class="form-control">    
   </div>
   
   <div class ="form-group">
     <label for="password"></label>
      <input type="password" name="password"class="form-control">    
   </div>   
     
   <div class ="form-group">
     <label for="password"></label>
      <input type="password" name="password"class="form-control">    
   </div>
   
   <div class ="form-group">
     <label for="password"></label>
      <input type="password" name="password"class="form-control">    
   </div>
   
   <div class ="form-group">
     <label for="password"></label>
      <input type="password" name="password"class="form-control">    
   </div>  
   
 
    <div class ="form-group">
     <label for="password"></label>
      <input type="password" name="password"class="form-control">    
   </div>  
                   <div class ="form-group">
             <label for="password">YES</label>
              <input type="password" name="password"class="form-control">    
           </div> 

            <div class ="form-group">
             <label for="password">NO</label>
              <input type="password" name="password"class="form-control">    
           </div>   
           
<!--  PAGE 4/6 ENDS HERE --> 

<!--  PAGE 5/6 BEGINS HERE --> 

<div class ="form-group">
     <label for="username">MEMBER NAME () (TOP)</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">SSN (TOP)</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br> 
  
 <P> 37. SPB LEVEL OF COVERAGE () </P> 
   
   <div class ="form-group">
     <label for="password"></label>
      <input type="password" name="password"class="form-control">    
   </div>
   
   <div class ="form-group">
     <label for="password"></label>
      <input type="password" name="password"class="form-control">    
   </div> 
               
               <div class ="form-group">
                 <label for="password"></label>
                  <input type="password" name="password"class="form-control">    
               </div>

  <div class ="form-group">
     <label for="password"></label>
      <input type="password" name="password"class="form-control">    
   </div> 
               
               <div class ="form-group">
                 <label for="password"></label>
                  <input type="password" name="password"class="form-control">    
               </div>
               
               <div class ="form-group">
                 <label for="password"></label>
                  <input type="password" name="password"class="form-control">    
               </div>

  <div class ="form-group">
     <label for="password"></label>
      <input type="password" name="password"class="form-control">    
   </div>               



<P> 38. SPECIAL NEEDS TRUST () </P> 
   
   <div class ="form-group">
     <label for="password"></label>
      <input type="password" name="password"class="form-control">    
   </div>
   
<P> 39. INSURABLE INTERESTS BENEFICIARY () </P>

<div class ="form-group">
<label for="password"></label>
<input type="password" name="password"class="form-control">    
</div>

<div class ="form-group">
<label for="password"></label>
<input type="password" name="password"class="form-control">    
</div>

<div class ="form-group">
<label for="password"></label>
<input type="password" name="password"class="form-control">    
</div>   

<div class ="form-group">
<label for="password"></label>
<input type="password" name="password"class="form-control">    
</div>

<div class ="form-group">
<label for="password"></label>
<input type="password" name="password"class="form-control">    
</div>

<div class ="form-group">
<label for="password"></label>
<input type="password" name="password"class="form-control">    
</div>  


<div class ="form-group">
<label for="password"></label>
<input type="password" name="password"class="form-control">    
</div> 
 
<div class ="form-group">
<label for="password"></label>
<input type="password" name="password"class="form-control">    
</div> 

<div class ="form-group">
<label for="password"></label>
<input type="password" name="password"class="form-control">    
</div>

<div class ="form-group">
<label for="password"></label>
<input type="password" name="password"class="form-control">    
</div> 


<P> 40. FORMER SPOUSE INFORMATION () </P>

<div class ="form-group">
<label for="password"></label>
<input type="password" name="password"class="form-control">    
</div>

<div class ="form-group">
<label for="password"></label>
<input type="password" name="password"class="form-control">    
</div>

<div class ="form-group">
<label for="password"></label>
<input type="password" name="password"class="form-control">    
</div>   

<div class ="form-group">
<label for="password"></label>
<input type="password" name="password"class="form-control">    
</div>

<div class ="form-group">
<label for="password"></label>
<input type="password" name="password"class="form-control">    
</div>

<div class ="form-group">
<label for="password"></label>
<input type="password" name="password"class="form-control">    
</div>  


<div class ="form-group">
<label for="password"></label>
<input type="password" name="password"class="form-control">    
</div> 


<P> H. HAS YOUR FORMER SPOUSE REMARRIED () </P>

        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div>

        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div>
 
<!--  PAGE 5/6 ENDS HERE --> 
<!--  PART III ENDS HERE -->   
 
   
       
<!--  PAGE 6/6 BEGINS HERE --> 
<!--  PART IV BEGINS HERE --> 

<div class ="form-group">
     <label for="username">MEMBER NAME () (TOP)</label>
      <input type="text" name= "username" class="form-control">    
   </div>
 
     <div class ="form-group">
     <label for="password">SSN (TOP)</label>
      <input type="password" name="password"class="form-control">    
   </div> 
  <br> 
 
<P> SECTION PART IV - CERTIFICATION () </P>     
<P> SECTION XI - CERTIFICATION () </P>

<P> 41. MEMBER () </P> 
 
        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div>

        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div>  


        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div>        

     
<P> 42. WITNESS () </P> 
 
        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div>

        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div>  


        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div> 

        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div>

        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div>  


        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div>

        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div>  


        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div> 
        
<P> PART V - SPOUSE SBP CONCURRENCE () </P>     
<P> SECTION XII - SBP SPOUSE CONCURRENCE () </P> 
<P> 43. SPOUSE () </P> 
 
        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div>

        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div>  


        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div> 

        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div>

        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div>  

        
        <div class ="form-group">
        <label for="password">THIS WILL BE A BLANK BOX</label>
        <input type="password" name="password"class="form-control">    
        </div>

 <P> 44. NOTARY WITNESS () </P> 
 
        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div>

        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div>  


        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div> 

        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div>

        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div> 
         
        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div>

        <div class ="form-group">
        <label for="password"></label>
        <input type="password" name="password"class="form-control">    
        </div>  
        
        <div class ="form-group">
        <label for="password"> NOTARY SEAL (GRAYED BOX) </label>
        <input type="password" name="password"class="form-control">    
        </div>                                                                                                                                                                                  
                                                                                                                                                                 
<!--  PAGE 6/6 ENDS HERE --> 
<!--  PART III ENDS HERE -->      
     
<input class = "btn btn-primary" type="submit"name ="Submit" value ="Submit"> 
     
<input class = "btn btn-primary" type="submit"name ="Generate PDF" value ="Generate PDF">
</form>  

    
</div>   
    
</div>
 
</body>
</html>
                                                                                                          