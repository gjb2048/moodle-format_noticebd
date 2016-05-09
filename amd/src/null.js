/* jshint ignore:start */
define(['jquery', 'format_noticebd/nop', 'core/log'], function($, nop, log) {

    "use strict"; // jshint ;_;

    log.debug('Null AMD initialised');
    nop.init();

    return {
        init: function() {
            $(document).ready(function() {
                log.debug('Null AMD init'); 
            });
        }
    };
});
/* jshint ignore:end */
