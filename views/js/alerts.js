$(function(){
// jQuery
$(document).ready(function() {
    
    const themeSwitcher = $('#theme-switcher');
    const root = $('html');
    const savedTheme = localStorage.getItem('theme');
  
    if (savedTheme) {
      root.attr('data-bs-theme', savedTheme);
    }
  
    themeSwitcher.on('click', function() {
      if (root.attr('data-bs-theme') === 'light') {
        root.attr('data-bs-theme', 'dark');
        localStorage.setItem('theme', 'dark');
      } else {
        root.attr('data-bs-theme', 'light');
        localStorage.setItem('theme', 'light');
      }

      $(".dark-mode span").text(function(i, v){
        return v === 'dark_mode' ? 'light_mode' : 'dark_mode'
     })

    });


    $(".btn-toggle-menu").click(function() {
      $("body").hasClass("toggled") ? ($("body").removeClass("toggled"), $(".sidebar-wrapper").unbind("hover")) : ($("body").addClass("toggled"), $(".sidebar-wrapper").hover(function() {
        $("body").addClass("sidebar-hovered")
      }, function() {
        $("body").removeClass("sidebar-hovered")
      }))
    })


       // chart 8
    var options = {
      series: [44, , 13, 43, 22],
      chart: {
        foreColor: '#9ba7b2',
        height: 500,
        type: 'pie',
      },
      colors: ["#0d6efd", "#6f42c1", "#d63384", "#fd7e14", "#20c997"],
      labels: ['Spreedshett', 'Document', 'PDFs', 'Presentations', 'Forms'],
      responsive: [{
        breakpoint: 480,
        options: {
          chart: {
            height: 500
          },
          legend: {
            position: 'bottom'
          }
        }
      }]
    };
    var chart = new ApexCharts(document.querySelector("#chart8"), options);
    chart.render(); 

    // chart stat
    var options = {
      series: [44, , 13, 43, 22],
      chart: {
        foreColor: '#9ba7b2',
        height: 500,
        type: 'pie',
      },
      colors: ["#0d6efd", "#6f42c1", "#d63384", "#fd7e14", "#20c997"],
      labels: ['Spreedshett', 'Document', 'PDFs', 'Presentations', 'Forms'],
      responsive: [{
        breakpoint: 480,
        options: {
          chart: {
            height: 500
          },
          legend: {
            position: 'bottom'
          }
        }
      }]
    };
    
    var chart = new ApexCharts(document.querySelector("#chartStat"), options);
    chart.render(); 

    // chart New
    var options = {
      series: [44, , 13, 43, 22],
      chart: {
        foreColor: '#9ba7b2',
        height: 500,
        type: 'pie',
      },
      colors: ["#0d6efd", "#6f42c1", "#d63384", "#fd7e14", "#20c997"],
      labels: ['Spreedshett', 'Document', 'PDFs', 'Presentations', 'Forms'],
      responsive: [{
        breakpoint: 480,
        options: {
          chart: {
            height: 500
          },
          legend: {
            position: 'bottom'
          }
        }
      }]
    };
    var chart = new ApexCharts(document.querySelector("#chartNew"), options);
    chart.render(); 


    // marker map
    var myLatLng = {
      lat: 10.70230,
      lng: 122.97429, 
    };
    var map = new google.maps.Map(document.getElementById('marker-map'), {
      zoom: 17,
      center: myLatLng
    });
    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Our Lady Of Lourdes Parish Church '
    });


  });


  
  // Public Folder content
  $("#public_folder").click(function(){
  
    $("#upper-title").text("Folder > Public Folder");
    $(".folder-preview").empty();

    var html = [];
    html.push("<div><h5 class=\"mb-0\">Folders</h5></div><div class=\"row mt-3\"> \ <div class=\"col-12 col-lg-4\"> \<div class=\"card shadow-none border radius-15\"> \<div class=\"card-body\"> \<div class=\"d-flex align-items-center\"> \<div> \<button type=\"button\" id=\"\" class=\"pinned-button cursor-pointer position-absolute top-0 start-0\" data-bs-toggle=\"dropdown\"><i class=\"bx bx-pin fs-5 \"></i></button> \ <button type=\"button\" id=\"\" class=\"info-mod cursor-pointer position-absolute bottom-0 end-0 text-info\" data-bs-toggle=\"modal\" data-bs-target=\"#1exampleScrollableModal\" id=\"modalTrigger\" disabled><i class='bx bx-info-circle fs-5 m-3'></i></button> \</div> \<div class=\"font-30 text-secondary mt-2\"><i class=\"bx bxs-folder\"></i></div> \</div> \<div class=\"dropdown ms-auto\"> \<button type=\"button\" class=\"btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer position-absolute bottom-0 end-0 mb-3 pb-3\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots fs-4\"></i></button> \<ul class=\"dropdown-menu\"> \<li><a class=\"dropdown-item\" href=\"javascript:;\"><i class='fi bx bx-add-to-queue' ></i>Add note</a></li> \<li><a class=\"dropdown-item\" href=\"javascript:;\"><i class='fi bx bx-edit-alt' ></i>Edit note</a></li> \<li><a class=\"dropdown-item\" href=\"javascript:;\"><i class='fi bx bxs-message-x' ></i>Delete note</a></li> \<li><hr class=\"dropdown-divider\"></li> \<li><a class=\"dropdown-item\" href=\"javascript:;\"><i class='fi bx bx-share' ></i>Share Folder</a></li> \<li><a class=\"dropdown-item\" href=\"javascript:;\"><i class='fi bx bx-edit-alt' ></i>Edit Folder</a></li> \<li><a class=\"dropdown-item\" href=\"javascript:;\"><i class='fi bx bx-folder-minus' ></i>Delete Folder</a></li> \</ul> \</div> \<h6 class=\"mb-0 \">Presentation</h6> \<small>15 files</small> \</div> \</div> \</div> <div class=\"col-12 col-lg-4\"> \<div class=\"card shadow-none border radius-15\"> \<div class=\"card-body\"> \<div class=\"d-flex align-items-center\"> \<div> \<button type=\"button\" id=\"\" class=\"pinned-button cursor-pointer position-absolute top-0 start-0\" data-bs-toggle=\"dropdown\"><i class=\"bx bx-pin fs-5 \"></i></button> \ <button type=\"button\" id=\"\" class=\"info-mod cursor-pointer position-absolute bottom-0 end-0 text-info\" data-bs-toggle=\"modal\" data-bs-target=\"#1exampleScrollableModal\" id=\"modalTrigger\" disabled><i class='bx bx-info-circle fs-5 m-3'></i></button> \</div> \<div class=\"font-30 text-secondary mt-2\"><i class=\"bx bxs-folder\"></i></div> \</div> \<div class=\"dropdown ms-auto\"> \<button type=\"button\" class=\"btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer position-absolute bottom-0 end-0 mb-3 pb-3\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots fs-4\"></i></button> \<ul class=\"dropdown-menu\"> \<li><a class=\"dropdown-item\" href=\"javascript:;\"><i class='fi bx bx-add-to-queue' ></i>Add note</a></li> \<li><a class=\"dropdown-item\" href=\"javascript:;\"><i class='fi bx bx-edit-alt' ></i>Edit note</a></li> \<li><a class=\"dropdown-item\" href=\"javascript:;\"><i class='fi bx bxs-message-x' ></i>Delete note</a></li> \<li><hr class=\"dropdown-divider\"></li> \<li><a class=\"dropdown-item\" href=\"javascript:;\"><i class='fi bx bx-share' ></i>Share Folder</a></li> \<li><a class=\"dropdown-item\" href=\"javascript:;\"><i class='fi bx bx-edit-alt' ></i>Edit Folder</a></li> \<li><a class=\"dropdown-item\" href=\"javascript:;\"><i class='fi bx bx-folder-minus' ></i>Delete Folder</a></li> \</ul> \</div> \<h6 class=\"mb-0 \">Outreach Images</h6> \<small>345 files</small> \</div> \</div> \</div> \</div><div class=\"d-flex align-items-center\"><div><h5 class=\"mb-0\">Files</h5></div></div>  <div class=\"table-responsive mt-3\"><table class=\"table table-striped table-hover table-sm mb-0\"><thead><tr><th>Name<i class=\"bx bx-up-arrow-alt ms-2\"></i></th><th>Uploaded by<i class=\"bx bx-up-arrow-alt ms-2\"></i></th><th>Date uploaded</th><th></th></tr></thead><tbody><tr><td><div class=\"d-flex align-items-center\"><div><i class=\"bx bxs-file-pdf me-2 font-24 text-danger\"></i></div><div class=\"font-weight-bold text-danger\">Sermon Details</div></div></td><td>Cliff</td><td>Sep 3, 2019</td><td><i class=\"bx bx-dots-horizontal-rounded font-24\"></i></td></tr><tr><td><div class=\"d-flex align-items-center\"><div><i class=\"bx bxs-file me-2 font-24 text-primary\"></i></div><div class=\"font-weight-bold text-primary\">Daily Reading</div></div></td><td>Ryan</td><td>Jun 12, 2019</td><td><i class=\"bx bx-dots-horizontal-rounded font-24\"></i></td></tr><tr><td><div class=\"d-flex align-items-center\"><div><i class=\"bx bxs-file-doc me-2 font-24 text-success\"></i></div><div class=\"font-weight-bold text-success\">Note</div></div></td><td>JayCobb</td><td>Sep 8, 2019</td><td><i class=\"bx bx-dots-horizontal-rounded font-24\"></i></td></tr><td><div class=\"d-flex align-items-center\"><div><i class=\"bx bxs-file-pdf me-2 font-24 text-danger\"></i></div><div class=\"font-weight-bold text-danger\">Meeting Report</div></div></td><td>JayCobb</td><td>Aug 28, 2019</td><td><i class=\"bx bx-dots-horizontal-rounded font-24\"></i></td></tr><tr><td><div class=\"d-flex align-items-center\"><div><i class=\"bx bxs-file me-2 font-24 text-primary\"></i></div><div class=\"font-weight-bold text-primary\">Project Documents</div></div></td><td>Ryan</td><td>Aug 17, 2019</td><td><i class=\"bx bx-dots-horizontal-rounded font-24\"></i></td></tr><tr><td><div class=\"d-flex align-items-center\"><div><i class=\"bx bxs-file me-2 font-24 text-primary\"></i></div><div class=\"font-weight-bold text-primary\">How to Create a Case Study</div></div></td><td>Cliff</td><td>Jun 12, 2019</td><td><i class=\"bx bx-dots-horizontal-rounded font-24\"></i></td></tr><tr><td><div class=\"d-flex align-items-center\"><div><i class=\"bx bxs-file me-2 font-24 text-primary\"></i></div><div class=\"font-weight-bold text-primary\">Landing Page Structure</div></div></td><td>Ryan</td><td>Jul 17, 2019</td><td><i class=\"bx bx-dots-horizontal-rounded font-24\"></i></td></tr><tr><td><div class=\"d-flex align-items-center\"><div><i class=\"bx bxs-file-doc me-2 font-24 text-success\"></i></div><div class=\"font-weight-bold text-success\">Review Checklist Template</div></div></td><td>JayCobb</td><td>Sep 8, 2019</td><td><i class=\"bx bx-dots-horizontal-rounded font-24\"></i></td></tr></tbody></table></div>");
  
    // basi lng to sa file storage nga una2
    $(".folder-preview").html(html);


  });
  $("#upper-title").click(function() {
    // Code to go back to the specific ID
    window.location.href = "filestorage";
  });


  $(function() {
    for (var e = window.location, o = $(".sidebar-wrapper .metismenu li a").filter(function() {
        return this.href == e
      }).addClass("").parent().addClass("mm-active"); o.is("li");) o = o.parent("").addClass("mm-show").parent("").addClass("mm-active")
  })
  
  




  


 


})
