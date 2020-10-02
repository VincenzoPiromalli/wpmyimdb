<?php  
$english = get_post_meta( get_the_ID(), 'imdb-english', true );
$japanese = get_post_meta( get_the_ID(), 'imdb-japanese', true );
$synonyms = get_post_meta( get_the_ID(), 'imdb-synonyms', true );
$genre = get_the_term_list($post->ID, 'genre', '<b>Genre:</b>&nbsp;', ', ', '<br />');
$author = get_the_term_list($post->ID, 'author', '<b>Authors:</b>&nbsp;', ', ', '<br />');
$serialization = get_the_term_list($post->ID, 'serialization', '<b>Serialization:</b>&nbsp;', ', ', '<br />');
$season = get_the_term_list($post->ID, 'season', '<b>Season:</b>&nbsp;', ', ', '<br />');
$producer = get_the_term_list($post->ID, 'producer', '<b>Producers:</b>&nbsp;', ', ', '<br />');
$licensors = get_the_term_list($post->ID, 'licensors', '<b>Licensors:</b>&nbsp;', ', ', '<br />');
$studios = get_the_term_list($post->ID, 'studios', '<b>Studios:</b>&nbsp;', ', ', '<br />');
$type = get_the_term_list($post->ID, 'types', '<b>Type:</b>&nbsp;', ', ', '<br />');
$background = get_post_meta( get_the_ID(), 'imdb-background', true );
$episodes = get_post_meta( get_the_ID(), 'imdb-episodes', true );
$status = get_post_meta( get_the_ID(), 'imdb-status', true );
$aired = get_post_meta( get_the_ID(), 'imdb-aired', true );
$broadcast = get_post_meta( get_the_ID(), 'imdb-broadcast', true );
$duration = get_post_meta( get_the_ID(), 'imdb-duration', true );
$rating = get_post_meta( get_the_ID(), 'imdb-rating', true );
$score = get_post_meta( get_the_ID(), 'imdb-score', true );
$source = get_post_meta( get_the_ID(), 'imdb-source', true );
$video = get_post_meta(get_the_ID(),'imdb-pv',true);
$rep = '&autoplay=1';
$video = str_replace($rep,'',$video);
?>
<style>
#myimdb{width:100%}#myimdb .myimdb-poster{padding-right:1em}#myimdb td{vertical-align:middle;line-height:1.4}#myimdb h3{padding:0;margin:0}#myimdb h5{padding:0;margin-bottom:.5rem}#myimdb p{margin:0}#myimdb span{display:inline-block;margin-right:2rem}img{height:auto;max-width:100%;vertical-align:middle;border-style:none}
</style>
<table id="myimdb">
<tbody>
<tr>
<td class="myimdb-poster" width="40%" rowspan="3">
<?php if($values = get_post_custom_values("imdb-image")) { ?><img width="100%" src="<?php echo $values[0]; ?>"><?php } else { ?><?php } ?>
</td>
</tr>
<tr>
<td>
<?php 
// titles
if(!empty($english)) echo  '<b>Title English:</b>&nbsp;'.$english.'<br/>';
if(!empty($japanese)) echo  '<b>Title Japanese:</b>&nbsp;'.$japanese.'<br/>';
if(!empty($synonyms)) echo  '<b>Synonyms:</b>&nbsp;'.$synonyms.'<br/>';
// informations
if(!empty($episodes)) echo  '<b>Episodes:</b>&nbsp;'.$episodes.'<br/>';
if(!empty($status)) echo  '<b>Status:</b>&nbsp;'.$status.'<br/>';
if(!empty($aired)) echo  '<b>Aired:</b>&nbsp;'.$aired.'<br/>';
if(!empty($broadcast)) echo  '<b>Broadcast:</b>&nbsp;'.$broadcast.'<br/>';
if(!empty($source)) echo  '<b>Source:</b>&nbsp;'.$source.'<br/>';
if(!empty($duration)) echo  '<b>Duration:</b>&nbsp;'.$duration.'<br/>';
if(!empty($rating)) echo  '<b>Rating:</b>&nbsp;'.$rating.'<br/>';
if(!empty($score)) echo  '<b>Score:</b>&nbsp;'.$score.'<br/>';
if(!empty($source)) echo  '<b>Source:</b>&nbsp;'.$source.'<br/>';
if(!empty($background)) echo  '<b>Background:</b>&nbsp;'.$background.'<br/>';
echo $genre; 
echo $author;
echo $serialization;
echo $season;
echo $producer;
echo $licensors;
echo $studios;
echo $type; 
?>
</td>
</tr>
<tr>
<td>
<p><?php echo substr(get_the_excerpt(), 0,200); ?></p>&nbsp;
</td>
</tr>
</tbody>
</table>
<?php // trailer 
if(!empty($video)) echo  '<iframe width="100%" height="350" src="'.$video.'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
?>