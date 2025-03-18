<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Emploi du Temps</title>
    <link rel="stylesheet" href="css/fullcalendar.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/fullcalendar.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                defaultView: 'agendaWeek',
                editable: true,
                eventLimit: true,
                events: 'php/get_events.php',
                selectable: true,
                selectHelper: true,
                select: function(start, end) {
                    var title = prompt('Event Title:');
                    var eventData;
                    if (title) {
                        eventData = {
                            title: title,
                            start: start,
                            end: end
                        };
                        $('#calendar').fullCalendar('renderEvent', eventData, true);
                        $.ajax({
                            url: 'php/save_event.php',
                            data: {
                                title: title,
                                start: start.format(),
                                end: end.format()
                            },
                            type: 'POST',
                            success: function(response) {
                                console.log(response);
                            }
                        });
                    }
                    $('#calendar').fullCalendar('unselect');
                },
                eventDrop: function(event, delta, revertFunc) {
                    $.ajax({
                        url: 'php/save_event.php',
                        data: {
                            id: event.id,
                            title: event.title,
                            start: event.start.format(),
                            end: event.end.format()
                        },
                        type: 'POST',
                        success: function(response) {
                            console.log(response);
                        }
                    });
                }
            });
        });
    </script>
</head>
<body>
    <div id="calendar"></div>
</body>
</html>
