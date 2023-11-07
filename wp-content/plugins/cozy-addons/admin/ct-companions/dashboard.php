<?php
include_once(ABSPATH . 'wp-admin/includes/plugin.php');
$is_cozy_addons_active = is_plugin_active('cozy-addons/cozy-addons.php');
if ($is_cozy_addons_active) {
    $product_cozy_addons_url = admin_url() . 'admin.php?page=_ct_cozy_addons';
    $prouct_cozy_addons_link_target = '_self';
} else {
    $product_cozy_addons_url = 'https://cozythemes.com/cozy-addons/';
    $prouct_cozy_addons_link_target = '_blank';
}

?>
<div class="ct-companion-dashboard">
    <div class="dashboard-container">
        <h1 class="dashboard-header"><?php echo __('Hello, Welcome to CT Companions!', 'patternberg'); ?></h1>
        <div class="dashboard-content">
            <h3 class="ct-short-text">
                <?php echo __('CT Companions is the companion plugin for Cozy Themes, which provides additional functionality and premium products activator feature of products for Cozy Themes. Checkout our products below:', 'patternberg'); ?>
            </h3>
            <div class="ct-content">


                <div class="ct-dashboard-row second-row">
                    <div class="ct-dashboard-column-one-third">
                        <div class="product-holder cpt-box">
                            <?php
                            $cc_current_theme = wp_get_theme()->get('Name');
                            if ($cc_current_theme == 'FotaWP') { ?>
                                <a href="<?php echo admin_url(); ?>themes.php?page=about-fotawp"><img src="<?php echo CT_COMPANION_SDK_URL . 'images/ct_fotawp_screen-min.png'; ?>" /></a>
                                <h3> <?php echo __('FOTAWP- FSE Multipurpose Theme', 'cozy-addons'); ?></h3>
                                <p><?php echo __('FOTAWP is a versatile and modern WordPress theme that offers a smooth website experience. The theme is designed for individuals and businesses aiming to showcase their content with style and functionality. ', 'cozy-addons') ?></p>
                                <a href="<?php echo admin_url(); ?>themes.php?page=about-fotawp" class="ct-dashboard-button"><?php echo __('Explore FotaWP', 'cozy-addons') ?></a>
                            <?php } else { ?>
                                <a href="https://cozythemes.com/fotawp/" target="_blank"><img src="<?php echo CT_COMPANION_SDK_URL . 'images/ct_fotawp_screen-min.png'; ?>" /></a>
                                <h3> <?php echo __('FOTAWP- FSE Multipurpose Theme', 'cozy-addons'); ?></h3>
                                <p><?php echo __('FOTAWP is a versatile and modern WordPress theme that offers a smooth website experience. The theme is designed for individuals and businesses aiming to showcase their content with style and functionality. ', 'cozy-addons') ?></p>
                                <a href="https://cozythemes.com/fotawp/" class="ct-dashboard-button"><?php echo __('Explore FotaWP', 'cozy-addons') ?></a>
                            <?php }  ?>

                        </div>
                    </div>
                    <div class="ct-dashboard-column-one-third">
                        <div class="product-holder">
                            <a href="<?php echo esc_url($product_cozy_addons_url) ?>" target="<?php echo esc_attr($prouct_cozy_addons_link_target) ?>"><img src="<?php echo CT_COMPANION_SDK_URL . 'images/ct_cozy_addons.png'; ?>" /></a>
                            <h3> <?php echo __('Cozy Addons for Elementor', 'cozy-addons'); ?></h3>
                            <p>
                                <?php echo __('Create stunning websites with Cozy Addons 40+ powerful widgets, including 20+ dynamic content widgets for posts, WooCommerce, teams, testimonials, portfolios, FAQs, services, and promotions.', 'patternberg'); ?>
                            </p>
                            <a href="<?php echo esc_url($product_cozy_addons_url) ?>" target="<?php echo esc_attr($prouct_cozy_addons_link_target) ?>" class="ct-dashboard-button"><?php echo __('Explore More', 'patternberg') ?></a>
                        </div>
                    </div><!--end of col -->
                    <div class="ct-dashboard-column-one-third">
                        <div class="product-holder cpt-box">
                            <a href="https://cozythemes.com/cozy-essential-addons/" target="_blank"><img src="<?php echo CT_COMPANION_SDK_URL . 'images/cpt_image.png'; ?>" /></a>
                            <h3> <?php echo __('Cozy Essential Addons', 'cozy-addons'); ?></h3>
                            <p>
                                <?php echo __('Cozy Essential Addons is a versatile WordPress plugin that provides a solid foundation for custom post types. It offers basic functionality, making it an ideal companion plugin for our products such as themes and plugins.', 'patternberg'); ?>
                            </p>
                            <a href="https://cozythemes.com/cozy-essential-addons/" target="_blank" class="ct-dashboard-button"><?php echo __('Explore More', 'cozy-addons') ?></a>
                        </div>
                    </div><!--end of col -->
                </div>
            </div>
        </div>
        <div class="ct-dashboard-row">
            <div class="ct-upsell-text">
                <?php
                if (!cozy_addons_premium_access()) { ?>

                    <h1> <?php echo __('Unlock all premium features with just one license.', 'patternberg'); ?></h1>
                    <a href="https://cozythemes.com/pricing-and-plans/" target="_blank" class="ct-dashboard-button"><?php echo __('Upgrade to Pro', 'patternberg') ?></a>

                <?php
                } else { ?>
                    <h1> <?php echo __('Explore More products and Features.', 'patternberg'); ?></h1>
                    <a href="https://cozythemes.com/" target="_blank" class="ct-dashboard-button"><?php echo __('Visit Site', 'patternberg') ?></a>
            </div>
        <?php } ?>
        </div>
    </div>
</div>