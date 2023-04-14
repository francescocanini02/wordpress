(function (blocks, element, blockEditor) {
    var el = element.createElement;

    blocks.registerBlockType('imm-examples/example-02-stylesheets', {
        edit: function () {
            return el('p', blockEditor.useBlockProps(), 'Hello World (from the editor).');
        },
        save: function () {
            return el('p', blockEditor.useBlockProps().save(), 'Hola mundo (from the frontend).');
        },
    });
})(window.wp.blocks, window.wp.element, window.wp.blockEditor);
