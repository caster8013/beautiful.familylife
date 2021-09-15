import * as bootstrap from 'bootstrap';

(function($){

  let dataStore = window.sessionStorage;

  $('#myTab li button[data-bs-toggle="tab"]').on('show.bs.tab', function(e) {
    // localStorage.setItem('activeTab', $(e.target).attr('id'));
    dataStore.setItem( 'activeTab', $(e.target).attr('id') );
  });

  // var activeTab = localStorage.getItem('activeTab');
  let activeTab = dataStore.getItem('activeTab');

  if(activeTab){
    let tabEle = $('#myTab button[id="' + activeTab + '"]')
    let tab = new bootstrap.Tab(tabEle);
    tab.show();
  }


})(jQuery);