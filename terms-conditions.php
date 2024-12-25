<?php
include("header.php");
?>
<title>Terms and Condition</title>
<div class="page-banner-area bg-2">
<div class="container">
<div class="page-banner-content">
<h1>Terms And Conditions</h1>
<ul>
<li><a href="index.php">Home</a></li>
<li>Terms And Conditions</li>
</ul>
</div>
</div>
</div>


<div class="terms-condition-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="condition-content pr-20">
<h2>Terms & Conditions</h2>
<p style="text-align:justify;">
   The content for the website is provided by Government Polytechnic, Autraulia and by accessing this website, you 
   unconditionally accept to be legally bound by the terms and conditions.If you do not agree to the mentioned terms and 
   conditions, please do not access the website. Efforts have been made to ensure the accuracy and currency of the content on this website; however, the same should not be interpreted as a statement of law or used for any legal 
   purposes. In case of any ambiguity or doubts, users are advised to verify / check with the concerned Department(s) and /
   or other source(s), and obtain appropriate professional advice. Under no circumstances Government Polytechnic, Autraulia will be liable for any expense, loss or damage including, without limitation, indirect or consequential
   loss or damage or any expense, loss or damage whatsoever arising from use, or loss of use, of data, arising out of or in
   connection with the use of this website. These terms and conditions shall be governed by and construed in accordance with 
    the Indian Laws. Any dispute arising under these terms and conditions shall be subject to the jurisdiction of the courts of India.</p>
    <h4>Acceptance of Terms</h4>
<p>By accessing this Site, you acknowledge that you have read, understood, and agree to be bound by these Terms of Use.
     These terms may be updated or modified by us at any time without prior notice. It is your responsibility to review
      these terms periodically for any changes.</p>
<h4>Use of Content</h4>
<p>All content on this Site, including text, graphics, logos, images, and software, is the property of Government Polytechnic Phulpur,
    Azamgarh and is protected by intellectual property laws. You may not modify, reproduce, distribute, or republish any content from
    this Site without our prior written consent.</p>
<h4>No Unauthorised Data Collection</h4>
<p>You expressly acknowledge and agree that you shall not engage in any unauthorised data collection activities on this Site. This includes,
     but is not limited to, scraping, mining, or harvesting data without our explicit written permission</p>
<h4>User Conduct</h4>

<p>When using this Site, you agree not to engage in any conduct that may:</p>
<ul>
<li>Violate any applicable laws or regulations.</li>
<li>Infringe upon the rights of others.</li>
<li>Disrupt the normal operation of the Site.</li>
<li>Involve the use of any automated scripts or bots.</li>
</ul>

<h4>Privacy</h4>

<p>Our Privacy Policy governs the collection, use, and disclosure of your personal information. By using 
    this Site, you consent to the terms of our Privacy Policy.</p>

 

<h4>Disclaimer of Warranties</h4>

<p>This Site is provided on an “as is” basis. Government Polytechnic Phulpur, Azamgarh makes no warranties,
     expressed or implied, regarding the accuracy, completeness, or reliability of the content on the Site.</p>

 

<h4>Limitation of Liability</h4>

<p>Government Polytechnic Phulpur, Azamgarh shall not be liable for any direct, indirect, incidental, consequential,
     or punitive damages arising out of your access to or use of the Site.</p>

 

<h4>Governing Law</h4>

<p>These Terms of Use are governed by and construed in accordance with the laws of the nearest court to the institute 
in the state of Uttar Pradesh, India. Any disputes arising under or in connection with these terms shall be subject to
 the exclusive jurisdiction of the courts nearest to the institute in the state of Uttar Pradesh, India.</p>

 

<h4>Contact Information</h4>

<p>If you have any questions or concerns regarding these Terms of Use, please contact us at the email mentioned on the website’s contact us page.</p>

<p>By using this Site, you agree to these Terms of Use. Thank you for visiting Government Polytechnic Phulpur! Azamgarh</p>
</div>
</div>
<div class="col-lg-4">
<div class="condition-right-content pl-20">
<div class="serch-content">
<h3>Search</h3>
<div class="form-group">
<input type="text" class="form-control" placeholder="Find Your Course">
<button type="submit" class="src-btn">
<i class="flaticon-search"></i>
</button>
</div>
</div>

<div class="related-post-area">
<h3>Related News</h3>
<?php
$query3="select * from tbl_news where newstype='Image' ORDER BY n_id DESC LIMIT 3 ";
$res3=mysqli_query($conn,$query3);
while($row3=mysqli_fetch_array($res3))
{
?>
<div class="related-post-box">
<div class="related-post-content">
<a href="latest-news.php"><img src="Admin/news/<?php echo $row3['file'];?>" alt="Image"></a>
<h4><a href="latest-news.php"><?php echo $row3['news'];?></a></h4>
</div>
</div>
<?php
}
?>
<a href="totalnews.php">View all</a>
</div>
</div>
</div>
</div>
</div>
</div>

<?php
include("footer.php");
?>