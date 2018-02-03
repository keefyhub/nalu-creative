(function () {
    tinymce.create('tinymce.plugins.custom_buttons', {
        /**
         * Initializes the plugin, this will be executed after the plugin has been created.
         * This call is done before the editor instance has finished it's initialization so use the onInit event
         * of the editor instance to intercept that event.
         *
         * @param {tinymce.Editor} ed Editor instance that the plugin is initialized in.
         * @param {string} url Absolute URL to where the plugin is located.
         */
        init: function (ed, url) {
            ed.addButton('add_top_margin', {
                title: 'Add margin to the top of this element',
                onclick: function () {
                    ed.dom.toggleClass(ed.selection.getNode(), 'margin-top');
                    this.active(!this.active()); //toggle the button too
                },
                onPostRender: function () {
                    var _this = this;   // reference to the button itself
                    ed.on('NodeChange', function (e) {
                        //activate the button if this parent has this class
                        var is_active = jQuery(ed.selection.getNode()).hasClass('margin-top');
                        _this.active(is_active);
                    });
                }
            });

            ed.addButton('add_bottom_margin', {
                title: 'Add margin to the bottom of this element',
                onclick: function () {
                    ed.dom.toggleClass(ed.selection.getNode(), 'margin-bottom');
                    this.active(!this.active()); //toggle the button too
                },
                onPostRender: function () {
                    var _this = this;   // reference to the button itself
                    ed.on('NodeChange', function (e) {
                        //activate the button if this parent has this class
                        var is_active = jQuery(ed.selection.getNode()).hasClass('margin-bottom');
                        _this.active(is_active);
                    });
                }
            });

            ed.addButton('add_left_margin', {
                title: 'Add margin to the left of this element',
                onclick: function () {
                    ed.dom.toggleClass(ed.selection.getNode(), 'margin-left');
                    this.active(!this.active()); //toggle the button too
                },
                onPostRender: function () {
                    var _this = this;   // reference to the button itself
                    ed.on('NodeChange', function (e) {
                        //activate the button if this parent has this class
                        var is_active = jQuery(ed.selection.getNode()).hasClass('margin-left');
                        _this.active(is_active);
                    });
                }
            });

            ed.addButton('add_right_margin', {
                title: 'Add margin to the right of this element',
                onclick: function () {
                    ed.dom.toggleClass(ed.selection.getNode(), 'margin-right');
                    this.active(!this.active()); //toggle the button too
                },
                onPostRender: function () {
                    var _this = this;   // reference to the button itself
                    ed.on('NodeChange', function (e) {
                        //activate the button if this parent has this class
                        var is_active = jQuery(ed.selection.getNode()).hasClass('margin-right');
                        _this.active(is_active);
                    });
                }
            });

            ed.addButton('add_larger_text', {
                title: 'Make this text large',
                onclick: function () {

                    var is_large = jQuery(ed.selection.getNode()).hasClass('large-text');
                    var is_larger = jQuery(ed.selection.getNode()).hasClass('larger-text');

                    if (is_large) {
                        ed.dom.removeClass(ed.selection.getNode(), 'large-text');
                        ed.dom.addClass(ed.selection.getNode(), 'larger-text');
                    } else if (is_larger) {
                        ed.dom.removeClass(ed.selection.getNode(), 'larger-text');
                    } else {
                        ed.dom.addClass(ed.selection.getNode(), 'large-text');
                    }

                    this.active(is_large || is_larger); //toggle the button too
                },
                onPostRender: function () {
                    var _this = this;   // reference to the button itself
                    ed.on('NodeChange', function (e) {
                        //activate the button if this parent has this class
                        var is_active = jQuery(ed.selection.getNode()).hasClass('larger-text') || jQuery(ed.selection.getNode()).hasClass('large-text');
                        _this.active(is_active);
                    })
                }
            });

            ed.addButton('add_smaller_text', {
                title: 'Make this text small',
                onclick: function () {
                    ed.dom.toggleClass(ed.selection.getNode(), 'smaller-text');
                    this.active(!this.active()); //toggle the button too
                },
                onPostRender: function () {
                    var _this = this;   // reference to the button itself
                    ed.on('NodeChange', function (e) {
                        //activate the button if this parent has this class
                        var is_active = jQuery(ed.selection.getNode()).hasClass('smaller-text');
                        _this.active(is_active);
                    })
                }
            });
        },

        /**
         * Creates control instances based in the incomming name. This method is normally not
         * needed since the addButton method of the tinymce.Editor class is a more easy way of adding buttons
         * but you sometimes need to create more complex controls like listboxes, split buttons etc then this
         * method can be used to create those.
         *
         * @param {String} n Name of the control to create.
         * @param {tinymce.ControlManager} cm Control manager to use inorder to create new control.
         * @return {tinymce.ui.Control} New control instance or null if no control was created.
         */
        createControl: function (n, cm) {
            return null;
        },

        /**
         * Returns information about the plugin as a name/value array.
         * The current keys are longname, author, authorurl, infourl and version.
         *
         * @return {Object} Name/value array containing information about the plugin.
         */
        getInfo: function () {
            return {
                longname: 'Strawberry Buttons',
                author: 'Mike',
                authorurl: 'http://www.strawberrysoup.co.uk',
                version: "0.1"
            };
        }
    });

    // Register plugin
    tinymce.PluginManager.add('custom_buttons', tinymce.plugins.custom_buttons);
})();