<?php 
/**
 * Plugin Name: WP MyIMDB
 * Plugin URI: https://sellix.io/fr0zen
 * Description: WP My IMDB for WordPress is an advanced plugin to turn your WordPress Blog into a Movie & TV Show Database.
 * Version: 1.0
 * Author: fr0zen
 * Author URI: https://vincenzopiromalli.ml/
 * Copyright: (c) 2020 Vincenzo Piromalli. All rights reserved
 */
 
define("wpmyimdb",plugin_basename(__FILE__));
define("PLUGIN_DIR",__DIR__);
require_once PLUGIN_DIR."/lib/meta-box/meta-box.php";
require_once PLUGIN_DIR."/lib/core/poster.php";
function MyIMDB_API() { ?>
<script>
let $ = jQuery;
var API = "<?php echo plugin_dir_url( __FILE__ ); ?>api.php?url=";
var IMDB = "https://www.imdb.com/title/";
var MyIMDB_API = API + IMDB;
$('#imdb-myimdb-api-generate').click(function () {
  let id = $('#imdb-myimdb-api').val();
  fetch(MyIMDB_API + id)
    .then(data => data.json())
    .then(data => {
      $('#title').val(data.getTitle.value);
      $('#content.wp-editor-area').val(data.getDescription.value);
      $('input[name="imdb-aka"]').val(data.getAka.value);
      $('input[name="imdb-tagline"]').val(data.getTagline.value);
      $('input[name="imdb-imdb"]').val(id);
      $('input[name="imdb-runtime"]').val(data.getRuntime.value);
      $('input[name="imdb-releasedate"]').val(data.getReleaseDate.value);
      $('input[name="imdb-url"]').val(data.getUrl.value);
      $('input[name="imdb-description"]').val(data.getPlot.value);
      $('input[name="imdb-trailer"]').val(data.getTrailerAsUrl.value);
      $('input[name="imdb-awards"]').val(data.getAwards.value);
      $('input[name="imdb-character"]').val(data.getCastAndCharacter.value);
      $('input[name="imdb-certification"]').val(data.getCertification.value);
      $('input[name="imdb-mpaa"]').val(data.getMpaa.value);
      $('input[name="imdb-aspectratio"]').val(data.getAspectRatio.value);
      $('input[name="imdb-color"]').val(data.getColor.value);
      $('input[name="imdb-sound"]').val(data.getSoundMix.value);
      $('input[name="imdb-rating"]').val(data.getRating.value);
      $('input[name="imdb-votes"]').val(data.getVotes.value);
      $('input[name="imdb-userreview"]').val(data.getUserReview.value);
      $('input[name="imdb-budget"]').val(data.getBudget.value);
      $('input[name="imdb-gross"]').val(data.getGross.value);
      $('#new-tag-year').val(data.getYear.value);
      $('#new-tag-actors').val(data.getCast.value);
      $('#new-tag-director').val(data.getDirector.value);
      $('#new-tag-country').val(data.getCountry.value);
      $('#new-tag-post_tag').val(data.getPlotKeywords.value);
      $('#new-tag-genre').val(data.getGenre.value);
      $('#new-tag-language').val(data.getLanguage.value);
      $('#new-tag-location').val(data.getLocation.value);
      $('#new-tag-creator').val(data.getCreator.value);
      $('#new-tag-company').val(data.getCompany.value);
      $('#new-tag-writer').val(data.getWriter.value);
      $('#url_to_image_meta_box > div.inside > div > ul > li > input, input[name="imdb-image"]').val(data.getPoster.value);
    })
    .then(() => {
	  alert('Imported!');
    })
    .catch(e => {
	  alert('Error!');
      console.log(e)
    });
})
</script>
<?php }
add_action('admin_footer', 'MyIMDB_API');
require_once PLUGIN_DIR."/lib/core/meta.php";
function MyIMDB_API_Meta_Box($post){
?>
<div class="rwmb-meta-box">
	<div class="rwmb-field rwmb-text-wrapper">
		<div class="rwmb-label">
			<label for="imdb-myimdb-api">MyIMDB API</label>
		</div>
		<div class="rwmb-input ui-shortable">
			<div class="rwmb-clone rwmb-text-clone">
				<input size="30" type="text" id="imdb-myimdb-api" class="rwmb-text " name="imdb-myimdb-api"/>
			</div>
			<a class="button-primary" id="imdb-myimdb-api-generate">Generate</a>
		</div>
	</div>
</div>
<?php
}
function MyIMDBPlugin_Setup(){
add_action("add_meta_boxes", "MyIMDB_API_Add_Meta_Box");
add_filter('rwmb_meta_boxes', 'imdb_meta_box' );
add_filter('use_block_editor_for_post', '__return_false');
require_once PLUGIN_DIR."/lib/core/tax.php";
}
add_action("after_setup_theme", "MyIMDBPlugin_Setup");
