</div>
	 	
	 		<!-- Footer -->
	        <div class="footer clearfix k-widget k-state-selected">
		        <div class="pull-left">ΤΕΙ ΑΘΗΝΑΣ </div>
	        	<div class="pull-right icons-group">
	        		<a href="#"><i class="icon-screen2"></i></a>
	        		<a href="#"><i class="icon-balance"></i></a>
	        		<a href="#"><i class="icon-cog3"></i></a>
	        	</div>
	        </div>
	        <!-- /footer -->
	 	
	 	</div>
	 	<!-- /Page content -->
		
 	</div>	
 	<!-- /Page container -->
	

<script type="text/javascript">
var assign_bootstrap_mode = function() {
	
    width = $( window ).width();
    
    var mode = '';
    
    if (width<768) {
        mode = "mode-xs";
    }
    else if (width<992) {
        mode = "mode-sm";
    }
    else if (width<1200) {
        mode = "mode-md";
    }
    else if (width>1200) {
        mode = "mode-lg";
    }
    
    $("body").removeClass("mode-xs").removeClass("mode-sm").removeClass("mode-md").removeClass("mode-lg").addClass(mode);
};
    			

$gWindow = $(window);
$gBody = $('body');
    			
//Minimalize menu when screen is less than 991px
$(window).on("resize", function () {

	assign_bootstrap_mode();
	
    if (!$gBody.hasClass("mode-lg")) {
        $('body').addClass('body-small');
    } else {
        $('body').removeClass('body-small');
    }
    
});


var promoteAsModal= function($ele){ return;

	if ($ele.data("bs.modal") != null) return;

	console.log("promote");
	$ele
		.addClass("modal")
		//.addClass("fade")
		.attr("role", "dialog")
		.modal({'shown':false});

	$ele.on('shown.bs.modal', function (e) {
		//$ele.removeAttr("style");
		
		console.log("--shown");

		//$ele.off('hidden.bs.modal');
	});

	$ele.modal('show');
};

var restoreFromModal = function($ele){

	if ($ele.data("bs.modal") == undefined) return;

	console.log("restore");
	
	$ele
		.modal( 'hide' )
		.data( 'bs.modal', null )
		.removeClass("modal")
		//.removeClass("fade")
		.removeAttr("role")
		.removeData('bs.modal')
		.removeAttr("style");

	//$ele.addClass($ele.data("restore-class"));
};

var toggleModal = function($modalable){return;

	if ($modalable.hasClass("modalable") && $modalable.hasClass("in")){
    	$modalable.modal('hide');      	
    	$modalable.addClass("col-lg-7");	
    	$modalable.addClass("col-lg-5");

    	if ($gWindow.width() >= 992)
		$modalable.removeAttr("style");
    	
    }
    else {
    	$modalable.removeClass("col-lg-7");	
		$modalable.removeClass("col-lg-5");
    	$modalable.modal('show');
    }
};


$(document).ready(function () {

	assign_bootstrap_mode();
	
	if (!$gBody.hasClass("mode-lg")) {
        $('body').addClass('body-small');
    } else {
        $('body').removeClass('body-small');
    }
	
	
    

	 // Minimalize menu
    $('#navbar-minimalize').click(function () {

         $("body").toggleClass("mini-navbar");

        return false;
    });


    $('body').on('click', '.collapse-link', function() {
        var box = $(this).closest('div.mmsch-box');
        var button = $(this).find('i');
        var content = box.find('div.mmsch-box-content:first');
        content.slideToggle(200);
        button.toggleClass('fa-chevron-up').toggleClass('fa-chevron-down');
        box.toggleClass('').toggleClass('border-bottom');
    });

    $('body').on('click', '.modal-link', function() {return;
        var $modalable = $(this).closest('div.modalable');
        var button = $(this).find('i');

        
        toggleModal($modalable);

        button.toggleClass('fa-compress').toggleClass('fa-expand');
    });



    $('body').on('click', 'div.k-list-container.k-popup ul.k-list.k-reset li.k-item', function(e){

		
    	var idListContainer = $(e.target).closest('.k-list-container').attr('id');

    	//idListContainer
    	
		e.stopPropagation();

		//console.log('1');
	});

    $(document).on('click', '.k-icon.k-delete', function(e){

    	console.log($(e.target));
    	    	
    	console.log($(e.target).closest('.popup').attr('id'));
    	
    	e.stopPropagation();

    	//console.log('2');
    });
    
    
	
});

/*
$(document).on('click', '.sidebar-toggle', function (e) {
    e.preventDefault();

    $('body').toggleClass('sidebar-narrow');

    if ($('body').hasClass('sidebar-narrow')) {
	    $('.sidebar-content').hide();
    }
    else {
	    $('.sidebar-content').hide();
    }


   
});

*/



</script>

</body>
</html>

