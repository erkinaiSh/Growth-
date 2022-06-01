<!--footer-->
<div class="footer">
    <!-- container -->
	<a class="navbar-brand" href="index.php"><img src="http://goharpy.com/en/wp-content/plugins/cherry-plugin/includes/images/ic10.png" width="50" alt="Logo"></a>
    <div class="container">
      <div class="col-md-6 footer-left">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
		  <li><a href="Olympiad/index.html"><span data-hover="About">Olympiad</span></a></li>
		  <li><a href="ort/index.html"><span data-hover="About">ORT</span></a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="admin/login.php">Admin</a></li>
          <li><a href="user/login.php">Student</a></li>
        </ul>
       
      </div>
      <div class="col-md-3 footer-middle">
        <?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
        <h3>Contacts</h3>
        <div class="section">
      <p><i class="fa fa-map-marker fa-f3 w3-text-white w3-xxlarge w3-margin-right"></i> Bishkek, Kyrgyzstan</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Tel: +996 706-09-12-01</p>
	  <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Tel: +996 773-22-15-11</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: erkinai7175@gmail.com </p>
    </div><br>
      <?php $cnt=$cnt+1;}} ?></div>
      <div class="col-md-3 footer-right">
        <h3>GROWTH</h3>
        <p>Growth is a web application for all young generation in Kyrgyzstan, and for everyone who wants to improve themselves, prepare for JRT(ORT), School Subject Olympiads, learn languages. This web application is especially for school students of remote part of Kyrgyzstan. The main goal of this web application is education accessibility and quality, resources in most regions of our country is not same as in cities or towns. </p>
      </div>
      <div class="clearfix"> </div> 
    </div>
    <!-- //container -->
  </div>
<!--/footer-->
<!--copy-rights-->
<div class="copyright">
    <!-- container -->
    <div class="container">
      <div class="copyright-left">
      <p>© <?php echo date('Y');?> Growth </p>
      </div>
      <div class="copyright-right">
        <ul>
          <li><a href="#" class="twitter"> </a></li>
          <li><a href="#" class="twitter facebook"> </a></li>
          <li><a href="#" class="twitter chrome"> </a></li>
          <li><a href="#" class="twitter pinterest"> </a></li>
          <li><a href="#" class="twitter linkedin"> </a></li>
          <li><a href="#" class="twitter dribbble"> </a></li>
        </ul>
      </div>
      <div class="clearfix"> </div>
      
    </div>
    <!-- //container -->
    <!---->
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
        */
    $().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
  </div>