// Menu Block Open/Close
$('.btn-menu').click(function () {
    $('body').toggleClass('lock');
    $('.nav').toggleClass('active');
});
$('.btn-close-menu').click(function () {
    $('body').toggleClass('lock');
    $('.nav').removeClass('active');
});

$('.menu-link, .menu-sublink').click(function () {
    $('.menu-window, .overlay').removeClass('active');
    $('body').removeClass('lock');
});


// Swipers
var reviews_swiper = new Swiper(".reviews-swiper", {
    navigation: {
      nextEl: ".btn-review.swiper-button-next",
      prevEl: ".btn-review.swiper-button-prev",
    },
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: ".swiper-pagination-1",
        type: "fraction",
    },
    breakpoints: {
        0: {
            slidesPerView: 1.25,
        },
        567: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        },
        1366: {
            slidesPerView: 4,
        },
    },
});

let $lgSwiper = document.getElementById('lg-swipper')
var swiper4 = new Swiper(".gallery-swiper", {
    navigation: {
      nextEl: ".btn-gallery.swiper-button-next",
      prevEl: ".btn-gallery.swiper-button-prev",
    },
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: ".swiper-pagination-4",
        type: "fraction",
    },
    breakpoints: {
        567: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        },
        991: {
            slidesPerView: 4,
        },
    },
    on: {
        init: function () {
            const lg = lightGallery($lgSwiper, {
                plugins: [lgZoom, lgThumbnail],
                closable: true,
                speed: 500,
                controls: true,
                download: false,
                zoom: true,
                actualSize: true,
                thumbnail: false,
            });
            $lgSwiper.addEventListener('lgBeforeClose', () => {
                swiper4.slideTo(lg.index, 0)
            });
        },
    }
});


var currentYear = new Date().getFullYear();
document.getElementById("currentYear").textContent = currentYear;


$('#form').submit(function(e) {
    e.preventDefault();
    var name = $("#name").val();
    var phone = $("#phone").val();

    // TEST TOKEN AND CHAT_ID
    // var token = '';
    // var chat_id = '';

    var message = "Имя: " + name + "%0AТелефон: " + phone;

    if(name.trim() === "" || phone.trim() === "") {
        $.notify("Форманы толық толтырыңыз!", "warn");
        return;
    }

    $.ajax({
        type: "POST",
        url: "https://api.telegram.org/bot" + token + "/sendMessage?chat_id=" + chat_id + "&parse_mode=html&text=" + message,
        data: {
            name: name,
            phone: phone
        },
        success: function() {
            $.notify("Сәтті жіберілді", "success");
            $("#name").val("");
            $("#phone").val("");
        },
        error: function() {
            $.notify("Қателік орын алды! Қайта толтырыңыз", "error");
        }
    });
});

IMask(
    document.getElementById('phone'),
    {
      mask: '+{7}0000000000'
    }
 )


 var dt = new DataTransfer();
 
$('.input-file input[type=file]').on('change', function(){
	let $files_list = $(this).closest('.input-file').next();
	$files_list.empty();
 
	for(var i = 0; i < this.files.length; i++){
		let new_file_input = '<div class="input-file-list-item">' +
			'<span class="input-file-list-name">' + this.files.item(i).name + '</span>' +
			'<a href="#" onclick="removeFilesItem(this); return false;" class="input-file-list-remove">x</a>' +
			'</div>';
		$files_list.append(new_file_input);
		dt.items.add(this.files.item(i));
	};
	this.files = dt.files;
});
 
function removeFilesItem(target){
	let name = $(target).prev().text();
	let input = $(target).closest('.input-file-row').find('input[type=file]');	
	$(target).closest('.input-file-list-item').remove();	
	for(let i = 0; i < dt.items.length; i++){
		if(name === dt.items[i].getAsFile().name){
			dt.items.remove(i);
		}
	}
	input[0].files = dt.files;  
}