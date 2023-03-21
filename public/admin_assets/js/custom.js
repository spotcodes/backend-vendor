$(document).ready(function(){
 
        /* this function will call when onchange event fired */
        $("#fileUpload").on("change",function(){
             
            /* current this object refer to input element */
            var $input = $(this);
 
            /* collect list of files choosen */
            var files = $input[0].files;
 
            var filename = files[0].name;
      
            /* getting file extenstion eg- .jpg,.png, etc */
            var extension = filename.substr(filename.lastIndexOf("."));
 
            /* define allowed file types */
            var allowedExtensionsRegx = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
 
            /* testing extension with regular expression */
            var isAllowed = allowedExtensionsRegx.test(extension);
 
            if(isAllowed){
              //  alert("File type is valid for the upload");
                /* file upload logic goes here... */
            }else{
                alert("Please upload file jpg,png,jpeg,etc.");
                return false;
            }
        }); 


$(document).ready(function(){
    $('#myTable').DataTable({
      order: [[3, 'desc']],
    });

    $('#example').DataTable({
      //order: [[3, 'desc']],
    //   lengthMenu: [
    //     [10, 25, 50, -1],
    //     [10, 25, 50, 'All'],
    // ],
     //pagingType: 'full_numbers',
    // iDisplayLength: 2

    });
    
    var table = $('#root').tableSortable({
      element: '',
      data: [],
      columns: {},
      sorting: true,
      pagination: true,
      paginationContainer: null,
      rowsPerPage: 10,
      formatCell: null,
      formatHeader: null,
      searchField: null, // selector of search field
      responsive: {}, // specify options for different screen sizes
      totalPages: 0,
      sortingIcons: {
          asc: '<span>▼</span>',
          desc: '<span>▲</span>',
      },
      nextText: '<span>Next</span>',
      prevText: '<span>Prev</span>',
      tableWillMount: () => {},
      tableDidMount: () => {},
      tableWillUpdate: () => {},
      tableDidUpdate: () => {},
      tableWillUnmount: () => {},
      tableDidUnmount: () => {},
      onPaginationChange: null,
  })
});


$(".numericOnly").keypress(function (e) {
    if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
});
		
    });
 function ValidateAlpha(evt){
	 
        var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
        return false;
        return true;
        }
		
		
  function exportTasks(_this) {
      let _url = $(_this).data('href');
      window.location.href = _url;
   }


 jQuery('#frmEmailChange').submit(function(e){
  jQuery('#emailChange').html("Please wait...");
 // alert(URL);exit;
  e.preventDefault();
  jQuery.ajax({
    url:URL+'/admin/emailChange',
    data:jQuery('#frmEmailChange').serialize(),
    type:'post',
    success:function(result){
      console.log(result);
      jQuery('#emailChange').html(result.msg);
    }
  });
});

$("body").on("click", "#btnExportPdf", function () {
  html2canvas($('#example')[0], {
      onrendered: function (canvas) {
          var data = canvas.toDataURL();
          var docDefinition = {
              content: [{
                  image: data,
                  width: 500
              }]
          };
          pdfMake.createPdf(docDefinition).download("product-details.pdf");
      }
  });
});

