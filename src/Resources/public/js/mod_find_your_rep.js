
// When the page is loaded
$( document ).ready(function() {

    var $stateSelect       = $( ".select_your_state" );
    var $productLineWrap    = $( ".select_product_line" );
    var $productLineSelect  = $( ".product_line" );

    // Run the combined state + product line filter
    function applyFilter() {

        var selectedState        = $stateSelect.val();
        var selectedProductLine  = $productLineSelect.val();

        // Nothing chosen yet: hide everything and bail
        if ( ! selectedState ) {
            $( ".rep_list .rep" ).hide();
            $( '#empty' ).hide();
            return;
        }

        var entryFound = false;

        $( ".rep_list .rep" ).each(function() {

            var $rep = $( this );

            // Must match the selected state
            var matchesState = $rep.hasClass( selectedState );

            // Match product line only when one is selected.
            // data-product-line holds a space-separated list, e.g. "full_line corporate"
            var matchesProductLine = true;
            if ( selectedProductLine ) {
                var lines = ( $rep.attr( 'data-product-line' ) || '' ).split( /\s+/ );
                matchesProductLine = ( $.inArray( selectedProductLine, lines ) !== -1 );
            }

            if ( matchesState && matchesProductLine ) {
                $rep.show();
                entryFound = true;
            } else {
                $rep.hide();
            }
        });

        $( '#empty' ).toggle( ! entryFound );
    }

    // When a state is selected
    $stateSelect.on( "change", function() {

        // Show our state header
        $( '#state_heading' ).html( $( this ).find( 'option:selected' ).text() );

        // Reveal the product line dropdown now that a state is chosen
        $productLineWrap.show();

        applyFilter();
    });

    // When a product line is selected
    $productLineSelect.on( "change", applyFilter );

});
