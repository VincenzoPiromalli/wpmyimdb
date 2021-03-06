<?php  
$tagline = get_post_meta( get_the_ID(), 'imdb-tagline', true );
$description = get_post_meta( get_the_ID(), 'imdb-description', true );
$imdb_id = get_post_meta( get_the_ID(), 'imdb-imdb', true );
$certification = get_post_meta( get_the_ID(), 'imdb-certification', true );
$mpaa = get_post_meta( get_the_ID(), 'imdb-mpaa', true );
$vote_average = get_post_meta( get_the_ID(), 'imdb-rating', true );
$vote_count = get_post_meta( get_the_ID(), 'imdb-votes', true );
$runtime = get_post_meta( get_the_ID(), 'imdb-runtime', true );
$release_date = get_post_meta( get_the_ID(), 'imdb-releasedate', true );
$budget = get_post_meta( get_the_ID(), 'imdb-budget', true );
$revenue = get_post_meta( get_the_ID(), 'imdb-gross', true );
$awards = get_post_meta( get_the_ID(), 'imdb-awards', true );
$character = get_post_meta( get_the_ID(), 'imdb-character', true );
$popularity = get_post_meta( get_the_ID(), 'imdb-userreview', true );
$sound = get_post_meta( get_the_ID(), 'imdb-sound', true );
$aspectratio = get_post_meta( get_the_ID(), 'imdb-aspectratio', true );
$color = get_post_meta( get_the_ID(), 'imdb-color', true );
$aka = get_post_meta( get_the_ID(), 'imdb-aka', true );
$trailer = get_post_meta( get_the_ID(), 'imdb-trailer', true );

$director = get_the_term_list($post->ID, 'director', '<span><b>Director:</b> ', ', ', '</span><br />');
$actors = get_the_term_list($post->ID, 'actors', '<span><b>Actors:</b> ', ', ', '</span><br />');
$year = get_the_term_list($post->ID, 'year', '<span><b>Year:</b> ', ', ', '</span><br />');
$country = get_the_term_list($post->ID, 'country', '<span><b>Country:</b> ', ', ', '</span><br />');
$language = get_the_term_list($post->ID, 'language', '<span><b>Language:</b> ', ', ', '</span><br />');
$company = get_the_term_list($post->ID, 'company', '<span><b>Company:</b> ', ', ', '</span><br />');
$genre = get_the_term_list($post->ID, 'genre', '<span><b>Genre:</b> ', ', ', '</span><br />');
$location = get_the_term_list($post->ID, 'location', '<span><b>Location:</b> ', ', ', '</span><br />');
$writer = get_the_term_list($post->ID, 'writer', '<span><b>Writer:</b> ', ', ', '</span><br />');
$creator = get_the_term_list($post->ID, 'creator', '<span><b>Creator:</b> ', ', ', '</span><br />');
?>
<style>
#imdb {
  width: 100%;
}
#imdb .imdb-poster {
  padding-right: 1em;
}
#imdb td {
  vertical-align: middle;
  line-height: 1.4;
  font-size: 11px;
  border:none!important;
}
#imdb h3 {
  padding: 0;
  margin: 0;
}
#imdb h5 {
  padding: 0;
  margin-bottom: 0.5rem;
}
#imdb p {
  margin: 0;
  font-size: 11px;
}
#imdb span {
  display: inline-block;
  margin-right: 2rem;
}
img {
  height: auto;
  max-width: 100%;
  width: 100%;
  vertical-align: middle;
  border-style: none;
}

</style>
<table id="imdb">
<tbody>
<tr>
<td class="imdb-poster" width="40%" rowspan="3">
<?php { if ( has_post_thumbnail() ) { the_post_thumbnail(); } } ?>
</td>
<td>
<h3><?php the_title(); ?></h3>
<h5><?php if($values = get_post_custom_values("imdb-tagline")) { echo $values[0]; } else { } ?></h5>
</td>
</tr>
<tr>
<td>
<?php 
echo $years;
if(!empty($runtime)) echo  '<span><b>Duration:</b> '.$runtime.'</span><br />';
if(!empty($release_date)) echo  '<span><b>Release:</b> '.$release_date.'</span><br />'; 
echo $genre;
echo $country; 
echo $language;
echo $company; 
echo $location; 
if(!empty($imdb_id)) echo  '<span><b>IMDB:</b> <a href="https://imdb.com/title/'.$imdb_id.'/reference" rel="noreferrer" target="_blank">'.$imdb_id.'</a></span><br />'; 
if(!empty($vote_average)) echo  '<span><b>Rating:</b> '.$vote_average.'</span><br />'; 
if(!empty($vote_count)) echo  '<span><b>Votes:</b> '.$vote_count.'</span><br />'; 
if(!empty($popularity)) echo  '<span><b>Reviews:</b> '.$popularity.'</span><br />'; 
if(!empty($mpaa)) echo  '<span><b>Certification:</b> '.$mpaa.'</span><br />'; 
if(!empty($awards)) echo  '<span><b>Awards:</b> '.$awards.'</span><br />'; 
if(!empty($budget)) echo  '<span><b>Budget:</b> '.$budget.'</span><br />'; 
if(!empty($revenue)) echo  '<span><b>Revenue:</b> '.$revenue.'</span><br />'; 
if(!empty($color)) echo  '<span><b>Color:</b> '.$color.'</span><br />'; 
if(!empty($aspectratio)) echo  '<span><b>Aspect Ratio:</b> '.$aspectratio.'</span><br />'; 
if(!empty($sound)) echo  '<span><b>Sound Mix:</b> '.$sound.'</span><br />'; 
if(!empty($aka)) echo  '<span><b>Aka:</b> '.$aka.'</span><br />';
if(!empty($trailer)) echo  '<span><b>Video:</b> <a href="'.$trailer.'" rel="noreferrer" target="_blank">WATCH</a></span><br />'; 
//if(!empty($character)) echo  '<span><b>Character:</b> '.$character.'</span><br />'; 
//if(!empty($certification)) echo  '<span><b>Certification:</b> '.$certification.'</span><br />'; 
?>
</td>
</tr>
<tr>
<td>
<?php 
if(!empty($description)) 
echo  '<h5>Plot</h5><p>'.$description.'</p><br />';  
echo $writer;
echo $creator;
echo $director;
echo $actors; 
?>
</td>
</tr>
</tbody>
</table>
<?php //the_content(); ?>
