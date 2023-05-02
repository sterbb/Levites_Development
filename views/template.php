<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levites</title>
    <link rel="icon" href="" type="image/x-icon">


	    <!--plugins-->
		<link href="views/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="views/assets/plugins/fullcalendar/css/main.min.css" rel="stylesheet">
    <link href="views/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">
    <link href="views/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet">
    <link href="assets/plugins/input-tags/css/tagsinput.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    <!-- loader-->
    <link href="views/assets/css/pace.min.css" rel="stylesheet">
    <script src="views/assets/js/pace.min.js"></script>
    <!--Styles-->
    <link href="views/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="views/assets/css/icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="views/assets/css/extra-icons.css" rel="stylesheet">
    <link href="views/assets/css/main.css" rel="stylesheet">
    <link href="views/assets/css/dark-theme.css" rel="stylesheet">
    <link href="views/assets/css/semi-dark-theme.css" rel="stylesheet">
    <link href="views/assets/css/minimal-theme.css" rel="stylesheet">
    <link href="views/assets/css/shadow-theme.css" rel="stylesheet">


    
</head>
<body>

     
    
    <?php
        

        if(isset($_GET["route"])){
            if ($_GET["route"] == 'login' ||
			$_GET["route"] == 'signup' ||
            $_GET["route"] == 'publichomepage' ||
            $_GET["route"] == 'churchpage'||
            $_GET["route"] == 'catdetails'||
            $_GET["route"] == 'adminhomepage'||
            $_GET["route"] == 'reportgen'||
            $_GET["route"] == 'churchcalendar' ||
            $_GET["route"] == 'songlist' || 
			$_GET["route"] == 'filestorage' || 
			$_GET["route"] == 'lyrics'|| 
			$_GET["route"] == 'songlyrics'|| 
			$_GET["route"] == 'playlist'||
			$_GET["route"] == 'profile'||
			$_GET["route"] == 'public'){

            include "modules/".$_GET["route"].".php";

			if($_GET["route"] == 'login' || $_GET["route"] == 'signup'  ||$_GET["route"] == 'public'){
			
			}else{
				include "modules/header.php";
				include "modules/sidebar.php";
				
			}


            }else{
            include "modules/404.php";
            }
        }else{
            include "modules/login.php";
        }

                echo '</div>';
            //     //footer
            //   include "modules/footer.php";
            //  echo '</div>';
        // echo '</div>';  
    
    // }else{
    //         include "modules/login.php";
    // }
        

    
    ?>




    <!--plugins-->
    <script src="views/assets/js/jquery.min.js"></script>
    <script src="views/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="views/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="views/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="views/assets/plugins/fullcalendar/js/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="assets/plugins/input-tags/js/tagsinput.js"></script>

    
    <!--BS Scripts-->
    <script src="views/assets/js/bootstrap.bundle.min.js"></script>
    <script src="views/assets/js/main.js"></script>

    <script>
		document.addEventListener('DOMContentLoaded', function () {
			var calendarEl = document.getElementById('calendar');
			var calendar = new FullCalendar.Calendar(calendarEl, {
				headerToolbar: {
					left: 'prev,next today',
					center: 'title',
					right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
				},
				initialView: 'dayGridMonth',
				initialDate: '2020-09-12',
				navLinks: true, // can click day/week names to navigate views
				selectable: true,
				nowIndicator: true,
				dayMaxEvents: true, // allow "more" link when too many events
				editable: true,
				selectable: true,
				businessHours: true,
				dayMaxEvents: true, // allow "more" link when too many events
				events: [{
					title: 'Event 1',
					start: '2020-09-01',
				}, {
					title: 'Event 2',
					start: '2020-09-07',
					end: '2020-09-10'
				}, {
					groupId: 999,
					title: 'Event Time',
					start: '2020-09-09T16:00:00'
				}, {
					groupId: 999,
					title: 'Event Time',
					start: '2020-09-16T16:00:00'
				}, {
					title: 'Event 2',
					start: '2020-09-11',
					end: '2020-09-13'
				}, {
					title: 'Event Time',
					start: '2020-09-12T10:30:00',
					end: '2020-09-12T12:30:00'
				}, {
					title: 'Lunch',
					start: '2020-09-12T12:00:00'
				}, {
					title: 'Meeting',
					start: '2020-09-12T14:30:00'
				}, {
					title: 'Happy Hour',
					start: '2020-09-12T17:30:00'
				}, {
					title: 'Dinner',
					start: '2020-09-12T20:00:00'
				}, {
					title: 'Event Time',
					start: '2020-09-13T07:00:00'
				}, {
					title: 'Event Link',
					url: 'http://google.com/',
					start: '2020-09-28'
				}]
			});
			calendar.render();
		});
	</script>


    <script>
      $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
          event.preventDefault();
          if ($('#show_hide_password input').attr("type") == "text") {
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass("bi-eye-slash-fill");
            $('#show_hide_password i').removeClass("bi-eye-fill");
          } else if ($('#show_hide_password input').attr("type") == "password") {
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass("bi-eye-slash-fill");
            $('#show_hide_password i').addClass("bi-eye-fill");
          }
        });
      });
    </script>

<script>
		
		$(".datepicker").flatpickr();

		$(".time-picker").flatpickr({
				enableTime: true,
				noCalendar: true,
				dateFormat: "Y-m-d H:i",
			});

		$(".date-time").flatpickr({
				enableTime: true,
				dateFormat: "Y-m-d H:i",
		});

		$(".date-format").flatpickr({
			altInput: true,
			altFormat: "F j, Y",
			dateFormat: "Y-m-d",
		});

		$(".date-range").flatpickr({
			mode: "range",
			altInput: true,
			altFormat: "F j, Y",
			dateFormat: "Y-m-d",
		});

		$(".date-inline").flatpickr({
			inline: true,
			altInput: true,
			altFormat: "F j, Y",
			dateFormat: "Y-m-d",
		});

	</script>


</body>

</html>