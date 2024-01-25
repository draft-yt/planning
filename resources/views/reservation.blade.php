<x-app-layout>
        <head>
            @push('scripts')
                <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>
                <script src="fullcalendar/lang/fr.js"></script>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        var calendarEl = document.getElementById('calendar');
                        var calendar = new FullCalendar.Calendar(calendarEl, {
                            locale:'fr',
                            weekNumbers: true,
                            initialView: 'timeGridWeek',
                            slotMinTime: '8:00:00',
                            slotMaxTime: '17:00:00',
                            allDaySlot: false,
                            expandRows:true,
                            events: @json($events),
                        });
                            calendar.render();
                        });
                </script>
            @endpush
            <style>
                .fc-agendaWeek-view tr, .fc-agendaDay-view tr {height: 40px;}
            </style>
        </head>
    <body>
        <div class="p-8">
            <div id="calendar"></div>
        </div>    
    </body>

</x-app-layout>