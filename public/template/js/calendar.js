(function($) {
  'use strict';
  $(function() {
    if ($('#calendar').length) {
      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,basicWeek,basicDay'
        },
        defaultDate: "2019-01-11",
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: [{
            title: 'Draw Date',
            start: '2019-01-12'
          },
          {
            title: 'Long Event',
            start: '2017-07-01',
            end: '2017-07-07'
          },
          
        ]
      })
    }
  });
})(jQuery);