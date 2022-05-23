var summernote_custom = {
    init: function() {
        $('.summernote').summernote({
            height: 300,
            tabsize: 2
        });
        $('.summernote2').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 400,
            toolbar: [
              ['style', ['style']],
              ['font', ['bold', 'underline', 'clear']],
              ['color', ['color']],
              ['para', ['ul', 'ol', 'paragraph']],
              ['table', ['table']],
              ['insert', ['link', 'picture', 'video']],
              ['view', ['fullscreen', 'codeview', 'help']]
            ]
          });
        $('.inline-editor').summernote({
            airMode: true
        });
        $(".hint2basic").summernote({
            height: 100,
            toolbar: false,
            placeholder: 'type with apple, orange, watermelon, lemon',
            hint: {
                words: ['apple', 'orange', 'watermelon', 'lemon'],
                match: /\b(\w{1,})$/,
                search: function (keyword, callback) {
                    callback($.grep(this.words, function (item) {
                        return item.indexOf(keyword) === 0;
                    }));
                }
            }
        });
    }
};
(function($) {
    "use strict";
    summernote_custom.init();
})(jQuery);

var edit = function() {
    $('.click2edit').summernote({focus: true});
};

var save = function() {
    var markup = $('.click2edit').summernote('code');
    $('.click2edit').summernote('destroy');
};
