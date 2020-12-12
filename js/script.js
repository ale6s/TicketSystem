//ONLY code to print was taken from https://www.encodedna.com/javascript/print-html-table-with-image-using-javascript.htm
//print the table where all the tickets are done ADMIN ONLY
var myApp = new function () {
    this.printTable = function () {
        var tab = document.getElementById('printableArea');

        var style = "<style>";
            style = style + "table {width: 100%;font: 17px Calibri;}";
            style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
            style = style + "padding: 2px 3px;text-align: center;}";
            style = style + "</style>";

        var win = window.open('', '', 'height=700,width=700');
        win.document.write(style);          //  add the style.
        win.document.write(tab.outerHTML);
        win.document.close();
        win.print();
    }
}

///////////////********end of code */

//***** search  record*/
$(document).ready(function(){
    $("#search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#all-tickets tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });