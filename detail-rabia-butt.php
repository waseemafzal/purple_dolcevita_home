<?php require_once"main/header.php" ?>
    <!-- -------Navbar ends -->
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

function share(){
FB.ui({
    method: 'share_open_graph',
    action_type: 'og.shares',
    action_properties: JSON.stringify({
        object : {
           'og:url': '<?PHP echo SHARE_URL?>detail-rabia-butt.php/', // your url to share
           'og:title': 'Rabia Butt ',
           'og:description': 'Rabia Butt, Female Models is famous for Modeling, Pakistani celebrity, hot and bold model in Pakistan',
           'og:image': '<?PHP echo SHARE_URL?>images/Media/detail/Rabia_butt.jpg'
        }
    })
    },
    // callback
    function(response) {
    if (response && !response.error_message) {
        // then get post content
        alert('successfully posted.');
    } else {
        alert('Something went error.');
    }
});
}
</script>
    <!------container starts ----->
        <div class="container margin0auto">
       <div class="row">
       	<img class="col-xs-12" src="images/Media/detail/Rabia_butt.jpg">
       </div>
                      <div class="row">
               <a href="media.php"class="pull-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/Media/back_to_media.png"></a>
                <a href="javascript:void(0)" onclick="share()" class="share-button pull-right"><img src="images/Media/Share_button.png"></a>
           </div>

            <!--             ...container ends -->




            <!------------------------------------ FOOTER START-------------------------------->
<?php require_once"main/footer.php" ?>
