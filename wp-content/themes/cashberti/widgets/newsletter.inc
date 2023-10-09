<?php

// Creating the widget
class wpb_widget extends WP_Widget
{

    // The construct part
    function __construct()
    {
        parent::__construct(

            // Base ID of your widget
            'wpb_widget',

            // Widget name will appear in UI
            __('Newsletter', 'wpb_widget_domain'),

            // Widget description
            array(
                'description' => __('', 'wpb_widget_domain'),
            )
        );
    }

    // Creating widget front-end
    public function widget($args, $instance)
    {
        global $wp_query;

        $title = apply_filters('widget_title', $instance['title']);
        $imagem = get_field('imagem', 'widget_' . $args['widget_id']);
        $form_id = get_field('form_id', 'widget_' . $args['widget_id']);

        echo $args['before_widget'];
        ?>
        <section class="newsletter">
            <div class="container d-flex align-items-center">
                <?php if($imagem) : ?>
                    <div class="d-none d-xl-block">
                        <img class="img-fluid" loading="lazy" src="<?php echo $imagem; ?>" alt="<?php echo $title; ?>" />
                    </div>
                <?php endif; ?>
                <div class="flex-fill">
                    <h2 class="d-block mb-4 title"><?php echo $title; ?></h2>
                    <?php echo do_shortcode("[contact-form-7 id='".$form_id."' title='Newsletter']"); ?>
                </div>
            </div>
        </section>
        <?php 
        echo $args['after_widget'];
    }

    // Creating widget Backend
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'wpb_widget_domain');
        }
        // Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <?php
    }

    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }

    // Class wpb_widget ends here
}

add_action('in_widget_form', 'show_widget_id');

function show_widget_id($widget_instance)
{
    echo "<p><strong>Widget ID: </strong>" . $widget_instance->id . "</p>";
}