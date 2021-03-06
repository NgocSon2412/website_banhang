<?php
/**
 * This file belongs to the YIT Framework.
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

wp_enqueue_style( 'prettyPhoto', 'css/prettyPhoto.css' );
wp_enqueue_script( 'prettyPhoto', 'js/jquery.prettyPhoto.min.js', array( 'jquery' ) );
if ( ! defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly

global $yit_is_parallax_slider;
global $is_primary;
/*
if ( ! $image ) {
    return;
}
*/

$id = 'parallaxeos_' . mt_rand();


$height = $height ? (int) $height : 600;
$valign = $valign ? $valign : 'center';
$halign = $halign ? $halign : 'center';
$effect = $effect ? $effect : 'fadeIn';
$font_p = $font_p ? $font_p : 24;

$overlay_opacity = $overlay_opacity ? ( $overlay_opacity / 100 ) : 0;
//options to check
$color = $color ? $color : '#fff';


//options to video background
$video_upload_mp4 = $video_upload_mp4 ? '<source src="' . $video_upload_mp4 . '" type="video/mp4" />' : false;
$is_video = false;
if ( $video_upload_mp4 ) {
    $is_video          = true;
    $video_upload_ogg  = $video_upload_ogg ? '<source src="' . $video_upload_ogg . '" type="video/ogg" />' : false;
    $video_upload_webm = $video_upload_webm ? '<source src="' . $video_upload_webm . '" type="video/webm" />' : false;
}
//video poster

$video_poster = ( isset( $video_poster ) ) ? $video_poster : '';

//options to button "see video"
$video_button = ( $video_button == 'yes' ) ? $video_button : false;
$video_button_style = ( isset( $video_button_style ) ) ? $video_button_style : false;

if ( $video_button ) {
    $video_url = $video_url ? $video_url : false;
    $video_id  = YIT_Video::video_id_by_url( $video_url );
    if ( $video_id ) {
        $v_i = explode( ':', $video_id );
        if ( $v_i[0] == 'vimeo' ) {
            $video_url = 'http://player.vimeo.com/video/' . $v_i[1] . '?iframe=true';
        }
        elseif ( $v_i[0] == 'youtube' ) {
            $video_url = 'http://www.youtube.com/embed/' . $v_i[1] . '?iframe=true';
        }
    }

    $label_button_video = $label_button_video ? '<span class="label-button">' . $label_button_video . '</span>' : false;
}

$layout = yit_get_option( 'general-layout-type' );

?>
<style type="text/css">
    #<?php echo $id ?> .parallaxeos_animate,
    #<?php echo $id ?> .parallaxeos_animate h1,
    #<?php echo $id ?> .parallaxeos_animate h2,
    #<?php echo $id ?> .parallaxeos_animate h3,
    #<?php echo $id ?> .parallaxeos_animate h4,
    #<?php echo $id ?> .parallaxeos_animate h5,
    #<?php echo $id ?> .parallaxeos_animate h6,
    #<?php echo $id ?> p {
        color: <?php echo $color ?>;
    }

    #<?php echo $id ?> .parallaxeos {
        background-image: url(<?php echo $image ?>);
    }

    #<?php echo $id ?> p {
        font-size: <?php echo $font_p ?>px;
    }

    #<?php echo $id ?> .parallaxeos_overlay {
        opacity: <?php echo $overlay_opacity ?>;
    }

    <?php if( $border_bottom > 0 ): ?>
    #<?php echo $id ?> .parallaxeos_container {
        border-bottom-width: <?php echo $border_bottom ?>px;
        border-bottom-style: solid;
    }

    <?php endif ?>
</style>

<?php add_filter( 'yit_title_special_characters', 'remove_equals_from_special_chars' ); ?>
<div id="<?php echo $id ?>" class="parallaxeos_outer  group section_fullwidth" style="height:<?php echo $height ?>px">
    <div class="parallaxeos_container" style="height:<?php echo $height ?>px">
        <div class="parallaxeos_overlay"></div>

        <div class="parallaxeos_content <?php echo ( $layout != 'boxed' ) ? "container" : "" ?>">
            <?php if( $layout != "boxed" ): ?>
            <div class="row">
                <?php endif; ?>
                <div class="parallaxeos_animate  <?php echo $effect ?> horizontal_<?php echo $halign ?> vertical_<?php echo $valign ?>"
                    ><?php echo wpautop( yit_decode_title( do_shortcode( $content ) ) ) ?>
                    <?php if ( $video_button ): ?>
                        <div class="video-button">
                            <a href="<?php echo esc_url( $video_url ) ?>" class="btn btn-<?php echo esc_attr( $video_button_style ) ?> large" rel="prettyPhoto"> <?php echo $label_button_video ?></a>
                        </div>
                    <?php endif ?>
                </div>
                <?php if( $layout != "boxed" ): ?>
            </div>
        <?php endif; ?>
        </div>

        <?php if ( ! $is_video ): ?>
            <div class="parallaxeos">
            </div>
        <?php
        else:
            if ( YIT_Mobile()->isTablet('isAndroid') || ( YIT_Mobile()->isMobile() && ! YIT_Mobile()->isTablet() ) ) : ?>
                <div class="video-image-static" style="background-image: url('<?php echo $video_poster ?>'); "></div>
            <?php else : ?>
                <video id="video-<?php echo $id ?>" class="video-parallaxeos" preload="auto" autoplay="autoplay" loop="loop" muted="muted" poster="<?php echo $video_poster ?>">
                    <?php echo  $video_upload_mp4 . ' ' . $video_upload_ogg . ' ' . $video_upload_webm ?>
                    <?php _e( 'Your browser does not support the video element.', 'yit' ) ?>
                </video>
            <?php endif; endif; ?>
    </div>
</div>
<?php remove_filter( 'yit_title_special_characters', 'add_equals_from_special_chars' ); ?>
<div class="clear"></div>