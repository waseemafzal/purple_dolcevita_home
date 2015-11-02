<?php require_once"main/header.php" ?>
    <!-- -------Navbar ends -->
    <!------container starts ----->
        <div class="container margin0auto">
       <div class="row">
       	<img src="images/Media/detail/Nael_Ahmed.jpg">
        <script>
window.fbAsyncInit = function() {
    FB.init({
      appId      : '769152103230921',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   </script>

<!--<button onclick="gogogo()">Share me, please</button>-->
<script>
function gogogo() {
  FB.ui({
    method: 'feed',
    link: 'http://purpleartsmedia.com',
     picture: '<?php echo base_url() ;?>images/Media/detail/Emmad_Irfani.jpg',
    name: 'Bold And Beautiful!',
    caption: 'Emad Erfani',
     description: 'Must read daily!'
  });
}
  
</script>
       </div>
       
            <!--             ...container ends -->




            <!------------------------------------ FOOTER START-------------------------------->
<?php require_once"main/footer.php" ?>
