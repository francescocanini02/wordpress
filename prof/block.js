( function ( blocks, element, blockEditor ) {
    var el = element.createElement;

    blocks.registerBlockType( 'imm-examples/example-02-stylesheets', {
        edit: function ( props ) {
            var blockProps = blockEditor.useBlockProps();
            return el(
                'p',
                blockProps,
                'Hello World (from the editor, in green).'
            );
        },
        save: function () {
            var blockProps = blockEditor.useBlockProps.save();
            return el(
                'p',
                blockProps,
                'Hello World (from the frontend, in red).'
            );
        },
    } );
} )( window.wp.blocks, window.wp.element, window.wp.blockEditor );
