
// Wordpress Short Code
// display ShortCoder [shortcodedisplayname]
// Use shortcode in a PHP file (outside the post editor). <?php echo do_shortcode('[shortcodedisplayname]');?>

<?php 

function functionname($atts, $content = null){
    
    extract(shortcode_atts(array(
        'key' => 'value',
        'key1' => 'value1',
        'key2' => 'Read More'
    ),$atts));
    
    // php condition
    
    $displaydata = '
        <div class="ShortCodeStyleClass">
            <h2>'.$key.'</h2>
            <a href="'.$key1.'" class="bordered-btn">'.$key2.'</a>
		</div>
    ';
    
    return $displaydata;
}
add_shortcode('shortcodedisplayname','functionname');

?>