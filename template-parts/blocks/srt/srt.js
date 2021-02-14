(function($){

    /**
     * initializeBlock
     *
     * Adds custom JavaScript to the block HTML.
     *
     * @date    15/4/19
     * @since   1.0.0
     *
     * @param   object $block The block jQuery element.
     * @param   object attributes The block attributes (only available when editing).
     * @return  void
     */
    var initializeBlock = function($block) {
        $block.find('.slider-left').slick({
            // mobileFirst: true,
            dots: true,
            arrows: false,
            infinite: true,
            autoplay: true,
            fade: true,
            speed: 500,
            // adaptiveHeight: true,
            cssEase: 'linear',
            // responsive: [
            //     {
            //         breakpoint: 0,
            //         settings: {
            //             arrows: true,
            //             dots: true
            //         }
            //     },
            //     {
            //         breakpoint: 800,
            //         settings: {
            //             arrows: true,
            //             dots: false
            //         }
            //     },
            //     {
            //         breakpoint: 1200,
            //         settings: {
            //             arrows: true,
            //             dots: false
            //         }
            //     },
            // ]
        });     
    }

    // Initialize each block on page load (front end).
    $(document).ready(function(){
        $('.right').each(function(){
            initializeBlock( $(this) );
        });
    });

    //Initialize dynamic block preview (editor).
    if( window.acf ) {
        window.acf.addAction( 'render_block_preview/type=slider', initializeBlock );
    }

})(jQuery);