		function showDropdown() {
			document.getElementById("show-dropdown").classList.toggle("show");
		}
		window.onclick = function(e) {
			if (!e.target.matches('.header-browse-button')) {
				var myDropdown = document.getElementById("show-dropdown");
				if (myDropdown.classList.contains('show')) {
						myDropdown.classList.remove('show');
				}
			}
		}
		function searchExpander() {
            if (document.getElementById('search-collapsed')) {

                if (document.getElementById('search-collapsed').style.display == 'none') {
	                    document.getElementById('search-collapsed').style.display = 'block';
	                    document.getElementById('search-expanded').style.display = 'none';
                }
                else {
                    document.getElementById('search-collapsed').style.display = 'none';
                    document.getElementById('search-expanded').style.display = 'block';
                }
            }
		}
		function openNav() {
			document.getElementById("left-sidebar-menu").style.width = "230px";
			document.getElementById("main-content-f").style.marginLeft = "230px";
		}
		function closeNav() {
		    document.getElementById("left-sidebar-menu").style.width = "0";
		    document.getElementById("main-content-f").style.marginLeft= "0";
		}
		// function navmenuHide() {
		//     var x = document.getElementById('left-sidebar-button');
		//     var y = document.getElementById('navmenu-c-toggle-left-image');
		//     var z = document.getElementById('left-sidebar-menu');
		//     if (x.style.display === 'none') {
		//         x.style.display = 'table-cell';
		//     } else {
		//         x.style.display = 'none';
		//     }
		// 	if (y.style.display === 'none') {
		//         y.style.display = 'table-cell';
		//     } else {
		//         y.style.display = 'none';
		//     }
		// 	if (z.style.display === 'none') {
		//         z.style.display = 'table-cell';
		//     } else {
		//         z.style.display = 'none';
		//     }
		// }
		// // Get the modal
		// var modal = document.getElementById('myModal');
		// console.log(modal);

		// // Get the button that opens the modal
		// var btn = document.getElementById("modalMenuButton");
		// console.log(btn);	

		// // Get the <span> element that closes the modal
		// var span = document.getElementsByClassName("close")[0];
		// console.log(span);
		
		// // When the user clicks the button, open the modal 
		// btn.onclick = function() {
		//     modal.style.display = "block";
		// }

		// // When the user clicks on <span> (x), close the modal
		// span.onclick = function() {
		//     modal.style.display = "none";
		// }

		// // When the user clicks anywhere outside of the modal, close it
		// window.onclick = function(event) {
		//     if (event.target == modal) {
		//         modal.style.display = "none";
		//     }
		// }
