

// (function($) {

// $(".programs-description-hero").hide();


// var program;
// var programs_array = [];


// $('.see-programs-btn').click(function(e){
//     e.preventDefault;
//     var type = $('.prg-type-select').val().toLowerCase();
//     var city = $('.prg-location-select').val().toLowerCase();

//     sessionStorage.setItem("cityKey", city);
//     sessionStorage.setItem("typeKey", type);


//     if(type === "" && city === "") {
//         alert('Please, select a type of program and a city');
//         return;
//     } else if(city === "") {
//         alert('Please, select a city');
//         return
//     } else if(type === "") {
//         alert('Please, select a type of program');
//         return;
//     }


//     window.location.href = nexus_vars+'/'+type;

        
             
// });





//     // $('.retrieved-programs-container').empty();
//     // var urlProg = nexus_vars.rest_url+'wp/v2/programs/';

//     // $.ajax({

//     //     method: 'GET',
//     //     cache: false,
//     //     url: urlProg+'?_embed',
//     //     dataType: 'json'

//     // })
//     // .success(function(data) {  

       

//     // })       






// })(jQuery);









//  // console.log(data);
            
//             // $(".programs-page-title").html(type+" Programs");
//             // $(".programs-description-hero").slideDown();
//             // $(".xplore-more-container").hide();
//             // $(".hero-title-programs").hide();

//             // $(data).each(function(i){
//             //     var prog_city = data[i]._embedded["wp:term"][1][0].slug;
//             //     var prog_type = data[i]._embedded["wp:term"][2][0].slug;
//             //     var prog_img = data[i]._embedded["wp:featuredmedia"][0].source_url;
//             //     var prog_title = data[i].title.rendered;  
                
                
//             //     if(type === prog_type && city === prog_city) {
                
//             //         program = {
//             //             'city': prog_city,
//             //             'type': prog_type,
//             //             'img': prog_img,
//             //             'title': prog_title
//             //         }                
//             //         programs_array.push(program);
//             //     }
//             // })
//             // console.log(programs_array); 
            
//             // $(".retrived-programs-container").pagination({
//             //     dataSource: programs_array,
//             //     locator: function() {
//             //         return 'programs_array.program'
//             //     }
//             // });