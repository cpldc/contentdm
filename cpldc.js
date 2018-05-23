	var viewportWidth = $(window).width();
	
	// click on search icon, input field appears
	function expandSearch() {
		var viewportWidth = $(window).width();
		$(".header-search-collapsed").addClass("hide");
		if (viewportWidth > 976) {
			$(".header-search-expanded").removeClass("hide");
			document.getElementById("search-input").focus();
		}
		if (viewportWidth < 976) {
			$(".header-search-dropped").removeClass("hide");
			document.getElementById("search-input2").focus();
		}
	}
	function selectSearch(param) {
		$("#selectSearchTarget").text(param);
		console.log($('#selectSearchTarget').text().indexOf('All'));
	}
	function selectSearch2(param) {
		$("#selectSearchTarget2").text(param);
		console.log($('#selectSearchTarget').text().indexOf('All'));
	}
	// removes input field on search; only occurs when resizing - no "close" button in bibliocommons, so none here
	function hideSearch() {
		$(".header-search-dropped").addClass("hide");
		$(".header-search-collapsed").removeClass("hide");
	}
	// mouseover "Browse" to see menu
	function showDropdown() {
		$(".header-browse-dropdown-wrapper").toggle();
	}
	// pages are broken into fixed and collapsible sidebar layouts; home (always) and smaller window content pages are collapsible; 
	// content pages at larger sizes are fixed.
	// only Home is designated as collapsible, and that happens via css class (see Home.php 31) the rest are based on window size checks
	
	// not sure why this var declaration assigns fixed here; commenting out to see if anything breaks before removing
	// var layout = "fixed";
	var layout;
	
	// this function is called on resize to switch layouts
    function switchLayout() {
        console.log(layout);
        if (layout == "fixed"){
            switchToCollapsibleLayout();
        } else if (layout == "collapsible") {
            switchToFixedLayout();
        }
	}
	// how to swith to collapsible sidebar - detach() all contents of sidebar and dump them at the collapsible sidebar target; 
	// change bootstrap breakpoints, show the button that shows/hides the sidebar
    function switchToCollapsibleLayout() {
        layout = "collapsible";
        var sidebarFull = $(".left-sidebar-toplevel").detach();
        $(".sidebar-target-collapsible").prepend(sidebarFull);
        $(".left-sidebar-toplevel").addClass("left-sidebar-collapsible");
        $(".left-sidebar-toplevel").removeClass("left-sidebar-fixed col-4 col-lg-4 col-xl-3 ");
        $(".left-sidebar-togglebutton").removeClass("hide");
        $(".center-content").removeClass("col-8");
        $(".center-content").addClass("col-12");
	}
	// how to switch to fixed: detach() and dump into fixed sidebar target; change bootstrap breakpoints, hide the show/hide button
    function switchToFixedLayout() {
        layout = "fixed";
        var sidebarFull = $(".left-sidebar-toplevel").detach();
        $(".sidebar-target-fixed").prepend(sidebarFull);
        $(".left-sidebar-toplevel").removeClass("left-sidebar-collapsible");
        $(".left-sidebar-toplevel").addClass("left-sidebar-fixed col-4 col-lg-4 col-xl-3 ");
        $(".left-sidebar-togglebutton").addClass("hide");
        $(".center-content").addClass("col-8");
		$(".main-container-fixed").css("margin-left","auto");
		$(".center-content").removeClass("col-12");
	}
	// shows sidebar; happens when clicking the button or resizing to larger sizes
	function showLeftSidebar(){
		$(".left-sidebar-togglebutton-target").empty();
		$(".left-sidebar-toplevel").show();
		$(".left-sidebar-togglebutton-target").append(togglebuttonLeft);
		var leftSidebarButton = $(".left-sidebar-togglebutton").detach();
		$(".left-sidebar-header").append(leftSidebarButton);
		$(".left-sidebar-togglebutton").css("float","right");
		$(".left-sidebar-togglebutton").css("position","relative");
		if ($(".PAGE_TYPE").hasClass("content") && $(".container").hasClass("main-container-fixed")) {
			$(".main-container-fixed").css("margin-left","235px");
		}
		if ($(".PAGE_TYPE").hasClass("home") || $(".container").hasClass("main-container-collapsible")) {
			$(".main-container-collapsible").css("padding-left","235px");
		}
	}
	// hides sidebar, leaves button behind; happens when clicking the button or resizing to smaller sizes
	function hideLeftSidebar(){
		$(".left-sidebar-togglebutton-target").empty();
		$(".left-sidebar-toplevel").hide();
		$(".left-sidebar-togglebutton-target").append(togglebuttonRight);
		var leftSidebarButton = $(".left-sidebar-togglebutton").detach();
		$("main").prepend(leftSidebarButton);
		$(".left-sidebar-togglebutton").css("float","left");
		$(".left-sidebar-togglebutton").css("position","absolute");
		if ($(".PAGE_TYPE").hasClass("content")) {
			$(".main-container-fixed").css("margin-left","auto");
		}
		if ($(".PAGE_TYPE").hasClass("home")) {
			$(".main-container-collapsible").css("padding-left","0");
		}

	}
	// toggle function for sidebar hiding - this is what the button actually calls
	function toggleLeftSidebar() {
		if ($(".left-sidebar-toplevel").is( ":hidden")) {
			showLeftSidebar();
		} else if ($(".left-sidebar-toplevel").is(":visible")) {
			hideLeftSidebar();
		}
	}
	// breakpoints when user resizes window (*not* when page first loads; ideally these would just be functions that are called identically by resize and first load):
		// changes expanded search to a dropdown thing;
		// shows/hides sidebar 
		// changes fixed/collapsible layout for content pages
	$(window).resize(function () {
		var viewportWidth = $(window).width();
		if (viewportWidth < 976) {
			var sidebarType = "collapsible";
			if (!($(".header-search-expanded").hasClass("hide"))) {
				$(".header-search-expanded").addClass("hide");
				$(".header-search-dropped").removeClass("hide");
			}
			hideLeftSidebar();
			if ($(".PAGE_TYPE").hasClass("content")) {
				switchToCollapsibleLayout();
			}
			if (!$(".footer-social").hasClass("footer-social-horiz")){
				$(".footer-social").addClass("footer-social-horiz");
			}
			if ($(".footer-list").hasClass("footer-floatright")){
				$(".footer-list").removeClass("footer-floatright");
				$(".footer-contactinfo").removeClass("footer-floatright");
			}
		}
		if (viewportWidth > 976) {
			if (!($(".header-search-dropped").hasClass("hide"))) {
				$(".header-search-dropped").addClass("hide");
				$(".header-search-expanded").removeClass("hide");
			}
			showLeftSidebar();
			if ($(".PAGE_TYPE").hasClass("content")) {
				switchToFixedLayout();
			}
			if ($(".footer-social").hasClass("footer-social-horiz")){
				$(".footer-social").removeClass("footer-social-horiz");
			}
			if (!$(".footer-list").hasClass("footer-floatright")){
				$(".footer-list").addClass("footer-floatright");
				$(".footer-contactinfo").addClass("footer-floatright");
			}
		}
		$(".lightbox-main-img").height($(".lightbox-main-img").width() * 0.7383);

		$grid.imagesLoaded().progress( function() {
            $grid.masonry('layout');
        });
	});
	// sends user's input to end of url, which is how contentdm searches
	function searchQuery() {
		var query = document.getElementsByName("search-query")[0].value;
		var selectSearchType = $('#selectSearchTarget').text().indexOf('All');
		if ( pagetype === "collection" && selectSearchType < 0) {
			var searchLink = 'http://digital.chipublib.org/digital/collection/' + pagelink + '/search/searchterm/' + query + '/field/all/mode/all/conn/all/order/nosort/ad/asc';
		} else if ( pagecolls != '' && selectSearchType < 0) {
			var searchLink = 'http://digital.chipublib.org/digital/search/collection/' + pagecolls + '/searchterm/' + query + '/field/all/mode/all/conn/all/order/nosort/ad/asc';
		} else {
			var searchLink = 'http://digital.chipublib.org/digital/search/searchterm/' + query;
		}
		if ( query != "") {
			window.location.href = searchLink;
		}
	}
	// needed a separate function to search from the dropped-down search input or else the page wouldn't pull the input from either
	function searchQuery2() {
		var query = document.getElementsByName("search-query2")[0].value;
		var selectSearchType = $('#selectSearchTarget2').text().indexOf('All');
		if ( pagetype === "collection" && selectSearchType < 0) {
			var searchLink = 'http://digital.chipublib.org/digital/collection/' + pagelink + '/search/searchterm/' + query + '/field/all/mode/all/conn/all/order/nosort/ad/asc';
		} else if ( pagecolls != '' && selectSearchType < 0) {
			var searchLink = 'http://digital.chipublib.org/digital/search/collection/' + pagecolls + '/searchterm/' + query + '/field/all/mode/all/conn/all/order/nosort/ad/asc';
		} else {
			var searchLink = 'http://digital.chipublib.org/digital/search/searchterm/' + query;
		}
		if ( query != "") {
			window.location.href = searchLink;
		}
	}
	// now functional!  attempts to hijack all (lightbox) images onload and check whether they are from MP, and adds rights div if true
	function rightsInsertion(loc) {
		var rightsDiv = '<div class="rights-block">' +
				'<i class="rights-i rights-i-lightbox fa fa-info-circle"></i>' + 
					'<div class="rights-overlay rights-overlay-lightbox">' + 
						'<div class="rights-guts">' + 
							'<span class="rights-statement">' + 
								'Courtesy of U.S. Equities Realty and the men and women who built Millennium Park' + 
							'</span>' + 
						'</div>' + 
						'<div class="rights-close">' + 
							'<i class="rights-close-icon fa fa-times"></i>' + 
						'</div>' + 
					'</div>' + 
				'</div>';
		if (loc.src.indexOf("mpu") >= 0) {

			if ($('.rights-overlay').is(":visible")){
				$('.rights-overlay').hide();
				$('.rights-i').show();
			}

			if ($(loc).children('.rights-i').length < 1) {

				if ($(loc).attr('class') == 'slbImage') {
					$('.slbContentOuter').prepend(rightsDiv);
				} else {
					$(loc).prepend(rightsDiv);
				}
			}

			if ($('.rights-i').is(":hidden") && $('.rights-overlay').is(":hidden")) {
				$(loc).children('.rights-i').show();	
			}

		} else if (loc.src.indexOf("mpu") < 0 ){
			$(".slbContentOuter").children('.rights-block').hide();
		}
		RefreshEventListener();
	}

	function rightsClick(loc) {
		// event.preventDefault();
		if ($(loc).attr('class').indexOf("rights-i") >= 0){
			$(loc).toggle();
			$(loc).siblings(".rights-overlay").toggle();
		} else {
			$(loc).toggle();
			$(loc).siblings(".rights-i").toggle();
		}
		RefreshEventListener();
		return false;
	}

	function RefreshEventListener() {
		// https://stackoverflow.com/questions/1359018/in-jquery-how-to-attach-events-to-dynamic-html-elements
		// turns off the event listeners for the MPU rights "i" and turn them back on again; happens when lightbox loads an image, otherwise the event listener won't notice the new image
		$(".rights-i").off(); 
		$(".rights-close").off(); 
	
		$(".rights-i").click(function () {
			rightsClick(this);
			return false;
		});
		$(".rights-close").click(function() {
			loc = $(this).parent(".rights-overlay");
			rightsClick(loc);
			return false;
		});
	}
	//press escape to hide the browse dropdown
	$( document ).keyup(function(e){
		if ($(".header-browse-dropdown-wrapper").is(":visible")) {
			if (e.keyCode==27) {
				showDropdown();
				}
			}
		});

	$( document ).keyup(function(e) {
		if (e.keyCode == 27) {
			if (!$("nav ul").hasClass("hidden")) {$("nav ul").toggleClass("hidden")}
		}
	});
	// docreadies: 
		// 	checks window size to assign layout; 
		// 	waits for enter key to be pressed after typing in search input (x2 for both search inputs); 
		//  sets main image height to be relative to image width
		// 	calls rights-i event listener refresh

	$( document ).ready(function() {
		// var viewportWidth = $(window).width();
		if (viewportWidth < 976) {
			hideLeftSidebar();
			if ($(".PAGE_TYPE").hasClass("content")) {
				switchToCollapsibleLayout();
			}
			if (!$(".footer-social").hasClass("footer-social-horiz")){
				$(".footer-social").addClass("footer-social-horiz");
			}
			if ($(".footer-list").hasClass("footer-floatright")){
				$(".footer-list").removeClass("footer-floatright");
				$(".footer-contactinfo").removeClass("footer-floatright");
			}
		}
		if (viewportWidth > 976) {
			showLeftSidebar();
			if ($(".PAGE_TYPE").hasClass("content")) {
				switchToFixedLayout();
			}
			
			if ($(".footer-social").hasClass("footer-social-horiz")){
				$(".footer-social").removeClass("footer-social-horiz");
			}
			if (!$(".footer-list").hasClass("footer-floatright")){
				$(".footer-list").addClass("footer-floatright");
				$(".footer-contactinfo").addClass("footer-floatright");
			}
		}
		$('#search-input').keypress(function(e){
			if(e.keyCode==13)
				searchQuery();
		});
		$('#search-input2').keypress(function(e){
			if(e.keyCode==13)
				searchQuery2();
		});
		$('.header-search-collapsed').keypress(function(e){
			if(e.keyCode==13)
				expandSearch();
		});
		$(".lightbox-main-img").outerHeight($(".lightbox-main-img").outerWidth() * 0.7383);
		
		RefreshEventListener();
	});
	
	function fmexFocus(param) {
		event.preventDefault();
		if ($(".fmex-content").is( ":hidden")) {
			$(".fmex-content").show();
		}
		$('#fmex-subtitle').text(fmexJson[param].title);
		$('#fmex-source').text(fmexJson[param].source + ", ");
		$('#fmex-year').text(fmexJson[param].year);
		var imgSrc = "fmex/" + fmexJson[param].year;
		$('#fmex-img').attr("src","fmex/" + fmexJson[param].img);
		$('#fmex-text').empty()
		for (var i = 0; i < fmexJson[param].content.length; i++) {
			$('#fmex-text').append('<p>' + fmexJson[param].content[i] + '</p>');
		}
		$grid.imagesLoaded().progress( function() {
            $grid.masonry('layout');
        });
		
	}